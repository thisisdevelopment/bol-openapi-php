# ThisIsDevelopment\OpenApi\Bol\Advertiser\ReportingApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShareOfVoiceCategoryReport()**](ReportingApi.md#createShareOfVoiceCategoryReport) | **POST** /advertiser/sponsored-products/share-of-voice/reports/category | Request a share of voice report for categories (BETA) |
| [**createShareOfVoiceSearchTermReport()**](ReportingApi.md#createShareOfVoiceSearchTermReport) | **POST** /advertiser/sponsored-products/share-of-voice/reports/search-term | Request a share of voice report for search terms (BETA) |
| [**getCampaignPerformanceReport()**](ReportingApi.md#getCampaignPerformanceReport) | **GET** /advertiser/sponsored-products/campaign-performance/reports/{report-id} | Retrieve a campaign performance report by report id (BETA) |
| [**getShareOfVoiceReport()**](ReportingApi.md#getShareOfVoiceReport) | **GET** /advertiser/sponsored-products/share-of-voice/reports/{report-id} | Retrieve a share of voice report by report id (BETA) |
| [**postCampaignPerformanceReport()**](ReportingApi.md#postCampaignPerformanceReport) | **POST** /advertiser/sponsored-products/campaign-performance/reports | Request a campaign performance report (BETA) |


## `createShareOfVoiceCategoryReport()`

```php
createShareOfVoiceCategoryReport(): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Request a share of voice report for categories (BETA)

Request a share of voice report on a category level for the last 14 days.

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

try {
    $result = $apiInstance->createShareOfVoiceCategoryReport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->createShareOfVoiceCategoryReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShareOfVoiceSearchTermReport()`

```php
createShareOfVoiceSearchTermReport(): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Request a share of voice report for search terms (BETA)

Request a share of voice report on a search term level for the last 14 days.

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

try {
    $result = $apiInstance->createShareOfVoiceSearchTermReport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->createShareOfVoiceSearchTermReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignPerformanceReport()`

```php
getCampaignPerformanceReport($reportId): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\GetCampaignPerformanceReportResponse
```

Retrieve a campaign performance report by report id (BETA)

Retrieve a campaign performance report by using the report id provided to you when requesting a campaign performance report

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
$reportId = 5ab88bc0-2d7f-4f56-98cf-b1de09d79f04; // string | Unique identifier for a campaign performance report

try {
    $result = $apiInstance->getCampaignPerformanceReport($reportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->getCampaignPerformanceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportId** | **string**| Unique identifier for a campaign performance report | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\GetCampaignPerformanceReportResponse**](../Model/GetCampaignPerformanceReportResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShareOfVoiceReport()`

```php
getShareOfVoiceReport($reportId): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\GetShareOfVoiceReportResponse
```

Retrieve a share of voice report by report id (BETA)

Retrieve a share of voice report by using the report id provided to you when requesting a share of voice report.

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
$reportId = 5ab88bc0-2d7f-4f56-98cf-b1de09d79f04; // string | Unique identifier for a share of voice report

try {
    $result = $apiInstance->getShareOfVoiceReport($reportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->getShareOfVoiceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportId** | **string**| Unique identifier for a share of voice report | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\GetShareOfVoiceReportResponse**](../Model/GetShareOfVoiceReportResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCampaignPerformanceReport()`

```php
postCampaignPerformanceReport($startDate, $endDate): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Request a campaign performance report (BETA)

Request a campaign performance report for the period requested.

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
$startDate = 2021-01-31; // string | The start date for the reporting period. Period start date in ISO 8601 standard.
$endDate = 2021-02-02; // string | The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard.

try {
    $result = $apiInstance->postCampaignPerformanceReport($startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->postCampaignPerformanceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startDate** | **string**| The start date for the reporting period. Period start date in ISO 8601 standard. | [optional] |
| **endDate** | **string**| The end date for the reporting period. This will be one day after the last full day that is included in the reporting. Period end date in ISO 8601 standard. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
