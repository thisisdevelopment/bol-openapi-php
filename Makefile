.PHONY: clean build install

version ?= $(shell cat VERSION)
build_path ?= build/libs

$(shell mkdir -p $(build_path)/$(version))

all: clean build install

build: build-advertiser build-retailer build-shared

install: install-advertiser install-retailer install-shared

build-advertiser:
	./build.sh advertiser $(version)

build-retailer:
	./build.sh retailer $(version)

build-shared:
	./build.sh shared $(version)

install-advertiser: $(build_path)/$(version)/openapi-bol-advertiser
	cp -r $(build_path)/$(version)/openapi-bol-advertiser/lib src/Advertiser
	cp -r $(build_path)/$(version)/openapi-bol-advertiser/docs src/Advertiser
	cp $(build_path)/$(version)/openapi-bol-advertiser/README.md src/Advertiser/

install-retailer: $(build_path)/$(version)/openapi-bol-retailer
	cp -r $(build_path)/$(version)/openapi-bol-retailer/lib src/Retailer
	cp -r $(build_path)/$(version)/openapi-bol-retailer/docs src/Retailer
	cp $(build_path)/$(version)/openapi-bol-retailer/README.md src/Retailer/

install-shared: $(build_path)/$(version)/openapi-bol-shared
	cp -r $(build_path)/$(version)/openapi-bol-shared/lib src/Shared
	cp -r $(build_path)/$(version)/openapi-bol-shared/docs src/Shared
	cp $(build_path)/$(version)/openapi-bol-shared/README.md src/Shared/

clean:
	rm -rf build
