#!/bin/bash

FILE=$1
WORKING_FILE=$(mktemp)
mv $FILE $WORKING_FILE

echo "Patching $FILE!"

echo -n "Check version is 3.0.1... "
VERSION=$(cat $WORKING_FILE | jq '.openapi == "3.0.1"')

if [ $? == 0 ] && [ "$VERSION" != "true" ]; then
    echo "NOK ($VERSION)"
    exit 1
fi
echo "OK"

RESPONSES=(
    '.paths."/retailer/offers/export/{report-id}".get.responses."200"'
    '.paths."/retailer/offers/unpublished/{report-id}".get.responses."200"'
)

for path in "${RESPONSES[@]}"
do
    echo "Processing '$path'"
    echo -n "Check 200-response available... "
    RESPONSE=$(cat $WORKING_FILE | jq "$path")
    if [ $? == 0 ] && [ "$RESPONSE" == "null" ]; then
        echo "NOK"
        exit 1
    fi
    echo "OK"

    echo -n "Check missing schema... "
    SCHEMA=$(cat $WORKING_FILE | jq "${path}.content")
    if [ $? == 0 ] && [ "$SCHEMA" != "null" ]; then
        echo "NOK"
        exit 1
    fi
    echo "OK"

    echo -n "Patching... "
    TMP=$(mktemp)

    cat $WORKING_FILE | jq "${path}.content.\"application/json\".schema = {\"type\": \"file\" }" > $TMP
    if [ $? != 0 ]; then
        echo "NOK"
        exit 1
    fi
    echo "OK"
    mv $TMP $WORKING_FILE
done

mv $WORKING_FILE $FILE

echo "Done"
exit 0;

