# ThisIsDevelopment\OpenApi\Bol\Retailer\ReplenishmentsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDeliveryDates()**](ReplenishmentsApi.md#getDeliveryDates) | **GET** /retailer/replenishments/delivery-dates | Get delivery dates |
| [**getLoadCarrierLabels()**](ReplenishmentsApi.md#getLoadCarrierLabels) | **GET** /retailer/replenishments/{replenishment-id}/load-carrier-labels | Get load carrier labels |
| [**getPickList()**](ReplenishmentsApi.md#getPickList) | **GET** /retailer/replenishments/{replenishment-id}/pick-list | Get pick list |
| [**getProductDestinations()**](ReplenishmentsApi.md#getProductDestinations) | **GET** /retailer/replenishments/product-destinations/{product-destinations-id} | Get product destinations by product destinations id |
| [**getReplenishment()**](ReplenishmentsApi.md#getReplenishment) | **GET** /retailer/replenishments/{replenishment-id} | Get a replenishment by replenishment id |
| [**getReplenishments()**](ReplenishmentsApi.md#getReplenishments) | **GET** /retailer/replenishments | Get replenishments |
| [**postPickupTimeSlots()**](ReplenishmentsApi.md#postPickupTimeSlots) | **POST** /retailer/replenishments/pickup-time-slots | Post pickup time slots |
| [**postProductLabels()**](ReplenishmentsApi.md#postProductLabels) | **POST** /retailer/replenishments/product-labels | Post product labels |
| [**postReplenishment()**](ReplenishmentsApi.md#postReplenishment) | **POST** /retailer/replenishments | Create a replenishment |
| [**postRequestProductDestinations()**](ReplenishmentsApi.md#postRequestProductDestinations) | **POST** /retailer/replenishments/product-destinations | Request product destinations |
| [**putReplenishment()**](ReplenishmentsApi.md#putReplenishment) | **PUT** /retailer/replenishments/{replenishment-id} | Update a replenishment by replenishment id |


## `getDeliveryDates()`

```php
getDeliveryDates(): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\DeliveryDatesResponse
```

Get delivery dates

Retrieve a list of available delivery dates for a replenishment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDeliveryDates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getDeliveryDates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\DeliveryDatesResponse**](../Model/DeliveryDatesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoadCarrierLabels()`

```php
getLoadCarrierLabels($replenishmentId, $labelType): string
```

Get load carrier labels

Retrieve the load carrier labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishmentId = 2312078154; // string | The unique identifier of the replenishment.
$labelType = WAREHOUSE; // string | The type of label which you want to print.

try {
    $result = $apiInstance->getLoadCarrierLabels($replenishmentId, $labelType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getLoadCarrierLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **replenishmentId** | **string**| The unique identifier of the replenishment. | |
| **labelType** | **string**| The type of label which you want to print. | [optional] |

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPickList()`

```php
getPickList($replenishmentId): string
```

Get pick list

Retrieve the pick list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishmentId = 2312078154; // string | The unique identifier of the replenishment.

try {
    $result = $apiInstance->getPickList($replenishmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getPickList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **replenishmentId** | **string**| The unique identifier of the replenishment. | |

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductDestinations()`

```php
getProductDestinations($productDestinationsId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductDestinationsResponse
```

Get product destinations by product destinations id

Gets the product destinations for one or more products by product destinations id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productDestinationsId = 9483fc7e-faf3-4814-864e-dee412044c27; // string | The identifier of the product destinations requested.

try {
    $result = $apiInstance->getProductDestinations($productDestinationsId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getProductDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productDestinationsId** | **string**| The identifier of the product destinations requested. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductDestinationsResponse**](../Model/ProductDestinationsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReplenishment()`

```php
getReplenishment($replenishmentId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReplenishmentResponse
```

Get a replenishment by replenishment id

Gets a replenishment by replenishment id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishmentId = 2312078154; // string | The unique identifier of the replenishment.

try {
    $result = $apiInstance->getReplenishment($replenishmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getReplenishment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **replenishmentId** | **string**| The unique identifier of the replenishment. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReplenishmentResponse**](../Model/ReplenishmentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReplenishments()`

```php
getReplenishments($reference, $ean, $startDate, $endDate, $state, $page): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReplenishmentsResponse
```

Get replenishments

Gets a list of replenishments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = REFERENCE1; // string | Custom user defined reference to identify the replenishment.
$ean = 0000007740404; // string | The EAN number associated with this product.
$startDate = 2021-01-01; // string | The creation start date to find the replenishment. In ISO 8601 format.
$endDate = 2021-01-02; // string | The end date of the range to find the replenishment. In ISO 8601 format.
$state = ANNOUNCED; // string[] | The current state(s) of the replenishment.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getReplenishments($reference, $ean, $startDate, $endDate, $state, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->getReplenishments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| Custom user defined reference to identify the replenishment. | [optional] |
| **ean** | **string**| The EAN number associated with this product. | [optional] |
| **startDate** | **string**| The creation start date to find the replenishment. In ISO 8601 format. | [optional] |
| **endDate** | **string**| The end date of the range to find the replenishment. In ISO 8601 format. | [optional] |
| **state** | [**string[]**](../Model/string.md)| The current state(s) of the replenishment. | [optional] |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReplenishmentsResponse**](../Model/ReplenishmentsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPickupTimeSlots()`

```php
postPickupTimeSlots($pickupTimeSlotsRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PickupTimeSlotsResponse
```

Post pickup time slots

Retrieve pickup time slots.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pickupTimeSlotsRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PickupTimeSlotsRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PickupTimeSlotsRequest

try {
    $result = $apiInstance->postPickupTimeSlots($pickupTimeSlotsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postPickupTimeSlots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pickupTimeSlotsRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PickupTimeSlotsRequest**](../Model/PickupTimeSlotsRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PickupTimeSlotsResponse**](../Model/PickupTimeSlotsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v9+json`
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductLabels()`

```php
postProductLabels($productLabelsRequest): string
```

Post product labels

Retrieve product labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productLabelsRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductLabelsRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductLabelsRequest

try {
    $result = $apiInstance->postProductLabels($productLabelsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postProductLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productLabelsRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductLabelsRequest**](../Model/ProductLabelsRequest.md)|  | |

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v9+json`
- **Accept**: `application/vnd.retailer.v9+pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReplenishment()`

```php
postReplenishment($createReplenishmentRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Create a replenishment

Creates a replenishment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createReplenishmentRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateReplenishmentRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateReplenishmentRequest

try {
    $result = $apiInstance->postReplenishment($createReplenishmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postReplenishment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createReplenishmentRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateReplenishmentRequest**](../Model/CreateReplenishmentRequest.md)|  | |

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

## `postRequestProductDestinations()`

```php
postRequestProductDestinations($requestProductDestinationsRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Request product destinations

Requests a list of product destinations by EANs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestProductDestinationsRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\RequestProductDestinationsRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\RequestProductDestinationsRequest

try {
    $result = $apiInstance->postRequestProductDestinations($requestProductDestinationsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->postRequestProductDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestProductDestinationsRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\RequestProductDestinationsRequest**](../Model/RequestProductDestinationsRequest.md)|  | |

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

## `putReplenishment()`

```php
putReplenishment($replenishmentId, $updateReplenishmentRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Update a replenishment by replenishment id

Updates a replenishment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReplenishmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$replenishmentId = 2312078154; // string | The unique identifier of the replenishment.
$updateReplenishmentRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateReplenishmentRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateReplenishmentRequest

try {
    $result = $apiInstance->putReplenishment($replenishmentId, $updateReplenishmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplenishmentsApi->putReplenishment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **replenishmentId** | **string**| The unique identifier of the replenishment. | |
| **updateReplenishmentRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateReplenishmentRequest**](../Model/UpdateReplenishmentRequest.md)|  | |

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
