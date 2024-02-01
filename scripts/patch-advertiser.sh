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

echo -n "Removing duplicate tags if present... "
TMP=$(mktemp)
cat $WORKING_FILE | jq ".tags = ([.tags[]] | unique_by(.name))" > $TMP
if [ $? != 0 ]; then
    echo "NOK"
    exit 1
fi
echo "OK"
mv $TMP $WORKING_FILE


# All done, put file back in place
mv $WORKING_FILE $FILE


echo "Done"
exit 0;
