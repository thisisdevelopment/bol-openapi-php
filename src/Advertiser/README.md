# Advertiser

The bol.com API for advertisers.

# Authentication
Our API requires authentication via OAuth2. The detailed steps to authenticate are explained [here](https://api.bol.com/retailer/public/Retailer-API/authentication.html) 

# Demo scenarios
Our API specification includes examples of the responses you can expect. For more information as well as more examples, we refer you to the following resources:  
- [Demo environment](https://api.bol.com/retailer/public/Retailer-API/demo/demo.html)
- [Demo scenarios](https://api.bol.com/retailer/public/Retailer-API/demo/v9-index.html)


For more information, please visit [https://developers.bol.com](https://developers.bol.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Advertiser/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\AdGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 456799; // string | The identifier of the ad group.

try {
    $result = $apiInstance->getAdGroupById($adGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupsApi->getAdGroupById: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.bol.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdGroupsApi* | [**getAdGroupById**](docs/Api/AdGroupsApi.md#getadgroupbyid) | **GET** /advertiser/sponsored-products/ad-groups/{ad-group-id} | Get an ad group by ad group id
*AdGroupsApi* | [**getAdGroups**](docs/Api/AdGroupsApi.md#getadgroups) | **GET** /advertiser/sponsored-products/ad-groups | Get a list of ad groups
*AdGroupsApi* | [**postAdGroup**](docs/Api/AdGroupsApi.md#postadgroup) | **POST** /advertiser/sponsored-products/ad-groups | Create an ad group
*AdGroupsApi* | [**putAdGroups**](docs/Api/AdGroupsApi.md#putadgroups) | **PUT** /advertiser/sponsored-products/ad-groups/{ad-group-id} | Update an ad group by ad group id
*AssortmentsApi* | [**getAssortments**](docs/Api/AssortmentsApi.md#getassortments) | **GET** /advertiser/assortments | Get a list of products available for advertising
*CampaignsApi* | [**getCampaign**](docs/Api/CampaignsApi.md#getcampaign) | **GET** /advertiser/sponsored-products/campaigns/{campaign-id} | Get a campaign by campaign id
*CampaignsApi* | [**getCampaigns**](docs/Api/CampaignsApi.md#getcampaigns) | **GET** /advertiser/sponsored-products/campaigns | Get a list of campaigns
*CampaignsApi* | [**postCampaign**](docs/Api/CampaignsApi.md#postcampaign) | **POST** /advertiser/sponsored-products/campaigns | Create a campaign
*CampaignsApi* | [**putCampaign**](docs/Api/CampaignsApi.md#putcampaign) | **PUT** /advertiser/sponsored-products/campaigns/{campaign-id} | Update a campaign by campaign id
*KeywordsApi* | [**createKeyword**](docs/Api/KeywordsApi.md#createkeyword) | **POST** /advertiser/sponsored-products/keywords | Create a keyword
*KeywordsApi* | [**deleteKeyword**](docs/Api/KeywordsApi.md#deletekeyword) | **DELETE** /advertiser/sponsored-products/keywords/{keyword-id} | Delete a keyword by keyword id
*KeywordsApi* | [**getKeyword**](docs/Api/KeywordsApi.md#getkeyword) | **GET** /advertiser/sponsored-products/keywords/{keyword-id} | Get a keyword by keyword id
*KeywordsApi* | [**getKeywords**](docs/Api/KeywordsApi.md#getkeywords) | **GET** /advertiser/sponsored-products/keywords | Get a list of keywords
*KeywordsApi* | [**putKeyword**](docs/Api/KeywordsApi.md#putkeyword) | **PUT** /advertiser/sponsored-products/keywords/{keyword-id} | Update a keyword by keyword id
*NegativeKeywordsApi* | [**deleteNegativeKeyword**](docs/Api/NegativeKeywordsApi.md#deletenegativekeyword) | **DELETE** /advertiser/sponsored-products/negative-keywords/{keyword-id} | Delete a negative keyword by keyword id
*NegativeKeywordsApi* | [**getNegativeKeyword**](docs/Api/NegativeKeywordsApi.md#getnegativekeyword) | **GET** /advertiser/sponsored-products/negative-keywords/{keyword-id} | Get a negative keyword by keyword id
*NegativeKeywordsApi* | [**getNegativeKeywords**](docs/Api/NegativeKeywordsApi.md#getnegativekeywords) | **GET** /advertiser/sponsored-products/negative-keywords | Get a list of negative keywords
*NegativeKeywordsApi* | [**postNegativeKeyword**](docs/Api/NegativeKeywordsApi.md#postnegativekeyword) | **POST** /advertiser/sponsored-products/negative-keywords | Create a negative keyword
*ReportingApi* | [**getAdGroupPerformance**](docs/Api/ReportingApi.md#getadgroupperformance) | **GET** /advertiser/sponsored-products/ad-group-performance/{ad-group-id} | Get ad group performance results
*ReportingApi* | [**getAdvertiserPerformance**](docs/Api/ReportingApi.md#getadvertiserperformance) | **GET** /advertiser/sponsored-products/advertiser-performance | Get advertiser performance results
*ReportingApi* | [**getCampaignPerformance**](docs/Api/ReportingApi.md#getcampaignperformance) | **GET** /advertiser/sponsored-products/campaign-performance/{campaign-id} | Get campaign performance results
*ReportingApi* | [**getKeywordPerformance**](docs/Api/ReportingApi.md#getkeywordperformance) | **GET** /advertiser/sponsored-products/keyword-performance/{ad-group-id} | Get keyword performance results
*ReportingApi* | [**getProductPerformance**](docs/Api/ReportingApi.md#getproductperformance) | **GET** /advertiser/sponsored-products/product-performance/{ad-group-id} | Get product performance results
*ReportingApi* | [**getSearchTermPerformance**](docs/Api/ReportingApi.md#getsearchtermperformance) | **GET** /advertiser/sponsored-products/search-term-performance/{ad-group-id} | Get search term performance results
*TargetProductsApi* | [**getTargetProduct**](docs/Api/TargetProductsApi.md#gettargetproduct) | **GET** /advertiser/sponsored-products/target-products/{target-product-id} | Get a target product by target product id
*TargetProductsApi* | [**getTargetProducts**](docs/Api/TargetProductsApi.md#gettargetproducts) | **GET** /advertiser/sponsored-products/target-products | Get a list of target products
*TargetProductsApi* | [**postTargetProducts**](docs/Api/TargetProductsApi.md#posttargetproducts) | **POST** /advertiser/sponsored-products/target-products | Create a target product
*TargetProductsApi* | [**updateTargetProduct**](docs/Api/TargetProductsApi.md#updatetargetproduct) | **PUT** /advertiser/sponsored-products/target-products/{target-product-id} | Update a target product by target product id

## Models

- [AdGroup](docs/Model/AdGroup.md)
- [AdGroupPerformance](docs/Model/AdGroupPerformance.md)
- [AdGroupPerformanceResponse](docs/Model/AdGroupPerformanceResponse.md)
- [AdGroupResponse](docs/Model/AdGroupResponse.md)
- [AdGroupsResponse](docs/Model/AdGroupsResponse.md)
- [AdvertiserPerformance](docs/Model/AdvertiserPerformance.md)
- [AdvertiserPerformanceResponse](docs/Model/AdvertiserPerformanceResponse.md)
- [Assortment](docs/Model/Assortment.md)
- [Assortments](docs/Model/Assortments.md)
- [BiddingModel](docs/Model/BiddingModel.md)
- [CampaignCountry](docs/Model/CampaignCountry.md)
- [CampaignPerformance](docs/Model/CampaignPerformance.md)
- [CampaignPerformanceResponse](docs/Model/CampaignPerformanceResponse.md)
- [CampaignsResponse](docs/Model/CampaignsResponse.md)
- [CreateAdGroupRequest](docs/Model/CreateAdGroupRequest.md)
- [CreateBiddingModel](docs/Model/CreateBiddingModel.md)
- [CreateCampaignRequest](docs/Model/CreateCampaignRequest.md)
- [CreateKeywordRequest](docs/Model/CreateKeywordRequest.md)
- [CreateNegativeKeywordRequest](docs/Model/CreateNegativeKeywordRequest.md)
- [CreateTargetProductRequest](docs/Model/CreateTargetProductRequest.md)
- [Keyword](docs/Model/Keyword.md)
- [KeywordPerformance](docs/Model/KeywordPerformance.md)
- [KeywordPerformanceResponse](docs/Model/KeywordPerformanceResponse.md)
- [KeywordsResponse](docs/Model/KeywordsResponse.md)
- [Link](docs/Model/Link.md)
- [NegativeKeyword](docs/Model/NegativeKeyword.md)
- [NegativeKeywordsResponse](docs/Model/NegativeKeywordsResponse.md)
- [Problem](docs/Model/Problem.md)
- [ProcessStatus](docs/Model/ProcessStatus.md)
- [ProductPerformance](docs/Model/ProductPerformance.md)
- [ProductPerformanceResponse](docs/Model/ProductPerformanceResponse.md)
- [SearchTermPerformance](docs/Model/SearchTermPerformance.md)
- [SearchTermPerformanceResponse](docs/Model/SearchTermPerformanceResponse.md)
- [SingleCampaignResponse](docs/Model/SingleCampaignResponse.md)
- [TargetProduct](docs/Model/TargetProduct.md)
- [TargetProductsResponse](docs/Model/TargetProductsResponse.md)
- [UpdateAdGroupRequest](docs/Model/UpdateAdGroupRequest.md)
- [UpdateBiddingModel](docs/Model/UpdateBiddingModel.md)
- [UpdateCampaignRequest](docs/Model/UpdateCampaignRequest.md)
- [UpdateKeywordRequest](docs/Model/UpdateKeywordRequest.md)
- [UpdateTargetProductRequest](docs/Model/UpdateTargetProductRequest.md)
- [Violation](docs/Model/Violation.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `9.x`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
