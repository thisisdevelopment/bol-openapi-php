# ThisIsDevelopment\OpenApi\Bol\Retailer\OffersApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOffer()**](OffersApi.md#deleteOffer) | **DELETE** /retailer/offers/{offer-id} | Delete offer by id |
| [**getOffer()**](OffersApi.md#getOffer) | **GET** /retailer/offers/{offer-id} | Retrieve an offer by its offer id |
| [**getOfferExport()**](OffersApi.md#getOfferExport) | **GET** /retailer/offers/export/{report-id} | Retrieve an offer export file by report id |
| [**getUnpublishedOfferReport()**](OffersApi.md#getUnpublishedOfferReport) | **GET** /retailer/offers/unpublished/{report-id} | Retrieve an unpublished offer report by report id |
| [**postOffer()**](OffersApi.md#postOffer) | **POST** /retailer/offers | Create a new offer |
| [**postOfferExport()**](OffersApi.md#postOfferExport) | **POST** /retailer/offers/export | Request an offer export file |
| [**postUnpublishedOfferReport()**](OffersApi.md#postUnpublishedOfferReport) | **POST** /retailer/offers/unpublished | Request an unpublished offer report |
| [**putOffer()**](OffersApi.md#putOffer) | **PUT** /retailer/offers/{offer-id} | Update an offer |
| [**updateOfferPrice()**](OffersApi.md#updateOfferPrice) | **PUT** /retailer/offers/{offer-id}/price | Update price(s) for offer by id |
| [**updateOfferStock()**](OffersApi.md#updateOfferStock) | **PUT** /retailer/offers/{offer-id}/stock | Update stock for offer by id |


## `deleteOffer()`

```php
deleteOffer($offerId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Delete offer by id

Delete an offer by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerId = 'offerId_example'; // string | Unique identifier for an offer.

try {
    $result = $apiInstance->deleteOffer($offerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->deleteOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerId** | **string**| Unique identifier for an offer. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffer()`

```php
getOffer($offerId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\RetailerOffer
```

Retrieve an offer by its offer id

Retrieve an offer by using the offer id provided to you when creating or listing your offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerId = 'offerId_example'; // string | Unique identifier for an offer.

try {
    $result = $apiInstance->getOffer($offerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerId** | **string**| Unique identifier for an offer. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\RetailerOffer**](../Model/RetailerOffer.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferExport()`

```php
getOfferExport($reportId): \SplFileObject
```

Retrieve an offer export file by report id

Retrieve an offer export file containing all offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportId = 'reportId_example'; // string | Unique identifier for an offer export file.

try {
    $result = $apiInstance->getOfferExport($reportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOfferExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportId** | **string**| Unique identifier for an offer export file. | |

### Return type

**\SplFileObject**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.retailer.v9+csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnpublishedOfferReport()`

```php
getUnpublishedOfferReport($reportId): \SplFileObject
```

Retrieve an unpublished offer report by report id

Retrieve an unpublished offer report containing all unpublished offers and reasons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportId = 'reportId_example'; // string | Unique identifier for unpublished offer report.

try {
    $result = $apiInstance->getUnpublishedOfferReport($reportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getUnpublishedOfferReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportId** | **string**| Unique identifier for unpublished offer report. | |

### Return type

**\SplFileObject**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/vnd.retailer.v9+csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOffer()`

```php
postOffer($createOfferRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Create a new offer

Creates a new offer, and adds it to the catalog. After creation, status information can be retrieved to review if the offer is valid and published to the shop.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createOfferRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateOfferRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateOfferRequest

try {
    $result = $apiInstance->postOffer($createOfferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->postOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createOfferRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateOfferRequest**](../Model/CreateOfferRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v9+json`
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOfferExport()`

```php
postOfferExport($createOfferExportRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Request an offer export file

Request an offer export file containing all offers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createOfferExportRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateOfferExportRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateOfferExportRequest

try {
    $result = $apiInstance->postOfferExport($createOfferExportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->postOfferExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createOfferExportRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateOfferExportRequest**](../Model/CreateOfferExportRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v9+json`
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUnpublishedOfferReport()`

```php
postUnpublishedOfferReport($createUnpublishedOfferReportRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Request an unpublished offer report

Request an unpublished offer report containing all unpublished offers and reasons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createUnpublishedOfferReportRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateUnpublishedOfferReportRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateUnpublishedOfferReportRequest

try {
    $result = $apiInstance->postUnpublishedOfferReport($createUnpublishedOfferReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->postUnpublishedOfferReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createUnpublishedOfferReportRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateUnpublishedOfferReportRequest**](../Model/CreateUnpublishedOfferReportRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v9+json`
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putOffer()`

```php
putOffer($offerId, $updateOfferRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Update an offer

Use this endpoint to send an offer update. This endpoint returns a process status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerId = 'offerId_example'; // string | Unique identifier for an offer.
$updateOfferRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateOfferRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateOfferRequest

try {
    $result = $apiInstance->putOffer($offerId, $updateOfferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->putOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerId** | **string**| Unique identifier for an offer. | |
| **updateOfferRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateOfferRequest**](../Model/UpdateOfferRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v9+json`
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferPrice()`

```php
updateOfferPrice($offerId, $updateOfferPriceRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Update price(s) for offer by id

Update price(s) for offer by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerId = 'offerId_example'; // string | Unique identifier for an offer.
$updateOfferPriceRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateOfferPriceRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateOfferPriceRequest

try {
    $result = $apiInstance->updateOfferPrice($offerId, $updateOfferPriceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->updateOfferPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerId** | **string**| Unique identifier for an offer. | |
| **updateOfferPriceRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateOfferPriceRequest**](../Model/UpdateOfferPriceRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v9+json`
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferStock()`

```php
updateOfferStock($offerId, $updateOfferStockRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Update stock for offer by id

Update stock for offer by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerId = 'offerId_example'; // string | Unique identifier for an offer.
$updateOfferStockRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateOfferStockRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateOfferStockRequest

try {
    $result = $apiInstance->updateOfferStock($offerId, $updateOfferStockRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->updateOfferStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerId** | **string**| Unique identifier for an offer. | |
| **updateOfferStockRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateOfferStockRequest**](../Model/UpdateOfferStockRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v9+json`
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
