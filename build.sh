#! /usr/bin/bash

TARGET=`echo $1 | tr [:upper:] [:lower:]`
VERSION=$2

if [ -z "$VERSION" ]; then
    echo "empty version, aborting"
    exit 1;
fi

mkdir -p "build/resources/${VERSION}"
mkdir -p "build/libs/${VERSION}"

JSON_PATH="build/resources/${VERSION}/${TARGET}.json"

wget "https://api.bol.com/retailer/public/apispec/${TARGET^} API - ${VERSION}" -O $JSON_PATH


if [ -e "scripts/patch-${TARGET}.sh" ]; then
    echo "Patching json"
    scripts/patch-${TARGET}.sh ${JSON_PATH}

    if [ $? != 0 ]; then
        echo "Patch failed, bailing out"
        exit 1
    fi
fi

docker run \
       --rm \
       -v "$PWD:/local" \
       -u "1000:1000" \
       openapitools/openapi-generator-cli generate -i "/local/$JSON_PATH" \
       --additional-properties=invokerPackage=ThisIsDevelopment\\OpenApi\\Bol\\${TARGET^},packageName=${TARGET^},apiPackage=Api,modelPackage=Models,variableNamingConvention=camelCase \
       -g php \
       -o "/local/build/libs/${VERSION}/openapi-bol-${TARGET}"
