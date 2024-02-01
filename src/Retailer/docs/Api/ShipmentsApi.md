# ThisIsDevelopment\OpenApi\Bol\Retailer\ShipmentsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getShipment()**](ShipmentsApi.md#getShipment) | **GET** /retailer/shipments/{shipment-id} | Get a shipment by shipment id |
| [**getShipments()**](ShipmentsApi.md#getShipments) | **GET** /retailer/shipments | Get shipment list |


## `getShipment()`

```php
getShipment($shipmentId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Shipment
```

Get a shipment by shipment id

Retrieve a single shipment by its corresponding id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentId = 'shipmentId_example'; // string | The id of the shipment.

try {
    $result = $apiInstance->getShipment($shipmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipmentId** | **string**| The id of the shipment. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Shipment**](../Model/Shipment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipments()`

```php
getShipments($page, $fulfilmentMethod, $orderId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentsResponse
```

Get shipment list

A paginated list to retrieve all your shipments up to 3 months old. The shipments will be sorted by date in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page to get with a page size of 50.
$fulfilmentMethod = 'fulfilmentMethod_example'; // string | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
$orderId = 'orderId_example'; // string | The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored.

try {
    $result = $apiInstance->getShipments($page, $fulfilmentMethod, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page to get with a page size of 50. | [optional] [default to 1] |
| **fulfilmentMethod** | **string**| The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | [optional] |
| **orderId** | **string**| The id of the order. Only valid without fulfilment-method. The default fulfilment-method is ignored. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentsResponse**](../Model/ShipmentsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
