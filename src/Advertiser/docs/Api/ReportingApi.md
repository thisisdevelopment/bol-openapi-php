# ThisIsDevelopment\OpenApi\Bol\Advertiser\ReportingApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdGroupPerformance()**](ReportingApi.md#getAdGroupPerformance) | **GET** /advertiser/sponsored-products/ad-group-performance/{ad-group-id} | Get ad group performance results |
| [**getAdvertiserPerformance()**](ReportingApi.md#getAdvertiserPerformance) | **GET** /advertiser/sponsored-products/advertiser-performance | Get advertiser performance results |
| [**getCampaignPerformance()**](ReportingApi.md#getCampaignPerformance) | **GET** /advertiser/sponsored-products/campaign-performance/{campaign-id} | Get campaign performance results |
| [**getKeywordPerformance()**](ReportingApi.md#getKeywordPerformance) | **GET** /advertiser/sponsored-products/keyword-performance/{ad-group-id} | Get keyword performance results |
| [**getProductPerformance()**](ReportingApi.md#getProductPerformance) | **GET** /advertiser/sponsored-products/product-performance/{ad-group-id} | Get product performance results |
| [**getSearchTermPerformance()**](ReportingApi.md#getSearchTermPerformance) | **GET** /advertiser/sponsored-products/search-term-performance/{ad-group-id} | Get search term performance results |


## `getAdGroupPerformance()`

```php
getAdGroupPerformance($adGroupId, $startDate, $endDate): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\AdGroupPerformanceResponse
```

Get ad group performance results

Gets the performance results of an ad group for the period requested. The results are aggregated per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 'adGroupId_example'; // string | The identifier of the ad group.
$startDate = 2021-01-31; // string | The start date for the reporting period. Period start date in ISO 8601 standard.
$endDate = 2021-02-02; // string | The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard.

try {
    $result = $apiInstance->getAdGroupPerformance($adGroupId, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->getAdGroupPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| The identifier of the ad group. | |
| **startDate** | **string**| The start date for the reporting period. Period start date in ISO 8601 standard. | |
| **endDate** | **string**| The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\AdGroupPerformanceResponse**](../Model/AdGroupPerformanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvertiserPerformance()`

```php
getAdvertiserPerformance($startDate, $endDate): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\AdvertiserPerformanceResponse
```

Get advertiser performance results

Gets the advertiser performance results for the period requested. The results are aggregated per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = 2021-01-01; // string | The start date for the reporting period. Period start date in ISO 8601 standard.
$endDate = 2021-01-07; // string | The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard.

try {
    $result = $apiInstance->getAdvertiserPerformance($startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->getAdvertiserPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **string**| The start date for the reporting period. Period start date in ISO 8601 standard. | |
| **endDate** | **string**| The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\AdvertiserPerformanceResponse**](../Model/AdvertiserPerformanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignPerformance()`

```php
getCampaignPerformance($campaignId, $startDate, $endDate): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CampaignPerformanceResponse
```

Get campaign performance results

Gets the performance results of a campaign for the period requested. The results are aggregated per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | Unique identifier for the campaign.
$startDate = 2021-01-31; // string | The start date for the reporting period. Period start date in ISO 8601 standard.
$endDate = 2021-02-02; // string | The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard.

try {
    $result = $apiInstance->getCampaignPerformance($campaignId, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->getCampaignPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique identifier for the campaign. | |
| **startDate** | **string**| The start date for the reporting period. Period start date in ISO 8601 standard. | |
| **endDate** | **string**| The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CampaignPerformanceResponse**](../Model/CampaignPerformanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKeywordPerformance()`

```php
getKeywordPerformance($adGroupId, $startDate, $endDate): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\KeywordPerformanceResponse
```

Get keyword performance results

Gets the performance results of all keywords within an ad group for the period requested. The results are returned per keyword and are aggregated to the period requested.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 'adGroupId_example'; // string | The identifier of the ad group.
$startDate = 2021-01-31; // string | The start date for the reporting period. Period start date in ISO 8601 standard.
$endDate = 2021-02-02; // string | The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard.

try {
    $result = $apiInstance->getKeywordPerformance($adGroupId, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->getKeywordPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| The identifier of the ad group. | |
| **startDate** | **string**| The start date for the reporting period. Period start date in ISO 8601 standard. | |
| **endDate** | **string**| The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\KeywordPerformanceResponse**](../Model/KeywordPerformanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductPerformance()`

```php
getProductPerformance($adGroupId, $startDate, $endDate): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProductPerformanceResponse
```

Get product performance results

Gets the performance results of all target products within an ad group for the period requested. The results are returned per target product and are aggregated to the period requested.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 'adGroupId_example'; // string | The identifier of the ad group.
$startDate = 2021-01-31; // string | The start date for the reporting period. Period start date in ISO 8601 standard.
$endDate = 2021-02-02; // string | The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard.

try {
    $result = $apiInstance->getProductPerformance($adGroupId, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->getProductPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| The identifier of the ad group. | |
| **startDate** | **string**| The start date for the reporting period. Period start date in ISO 8601 standard. | |
| **endDate** | **string**| The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProductPerformanceResponse**](../Model/ProductPerformanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchTermPerformance()`

```php
getSearchTermPerformance($adGroupId, $startDate, $endDate): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\SearchTermPerformanceResponse
```

Get search term performance results

Gets the performance results of all search terms within an ad group for the period requested. The results are returned per search term and are aggregated to the period requested.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 'adGroupId_example'; // string | The identifier of the ad group.
$startDate = 2021-01-31; // string | The start date for the reporting period. Period start date in ISO 8601 standard.
$endDate = 2021-02-02; // string | The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard.

try {
    $result = $apiInstance->getSearchTermPerformance($adGroupId, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->getSearchTermPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| The identifier of the ad group. | |
| **startDate** | **string**| The start date for the reporting period. Period start date in ISO 8601 standard. | |
| **endDate** | **string**| The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\SearchTermPerformanceResponse**](../Model/SearchTermPerformanceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
