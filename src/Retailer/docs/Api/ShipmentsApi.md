# ThisIsDevelopment\OpenApi\Bol\Retailer\ShipmentsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShipment()**](ShipmentsApi.md#createShipment) | **POST** /retailer/shipments | Create a shipment |
| [**getInvoiceRequests()**](ShipmentsApi.md#getInvoiceRequests) | **GET** /retailer/shipments/invoices/requests | Get a list of invoice requests |
| [**getShipment()**](ShipmentsApi.md#getShipment) | **GET** /retailer/shipments/{shipment-id} | Get a shipment by shipment id |
| [**getShipments()**](ShipmentsApi.md#getShipments) | **GET** /retailer/shipments | Get shipment list |
| [**uploadInvoice()**](ShipmentsApi.md#uploadInvoice) | **POST** /retailer/shipments/invoices/{shipment-id} | Upload an invoice for shipment id |


## `createShipment()`

```php
createShipment($shipmentRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Create a shipment

Ship multiple single order items within a customer order by providing shipping information. If you purchased a shipping label you should add the shippingLabelId to this message and leave the transport element empty. If you will ship the item using your own transporter method you must omit the shippingLabelId entirely and fill in the transport element with the fields from GET shipping labels.

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
$shipmentRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentRequest

try {
    $result = $apiInstance->createShipment($shipmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipmentRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentRequest**](../Model/ShipmentRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v10+json`
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceRequests()`

```php
getInvoiceRequests($shipmentId, $page, $state): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\InvoiceRequestsResponse
```

Get a list of invoice requests

Gets a list of paginated invoice requests initiated by customers.

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
$shipmentId = 541757635; // string | The id of the shipment.
$page = 1; // int | The requested page number with a page size of 50 items.
$state = OPEN; // string | To filter on invoice request state. You can filter on all invoice requests regardless their statuses, open invoice requests requiring your action and invoice requests uploaded with possible errors.

try {
    $result = $apiInstance->getInvoiceRequests($shipmentId, $page, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getInvoiceRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipmentId** | **string**| The id of the shipment. | [optional] |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |
| **state** | **string**| To filter on invoice request state. You can filter on all invoice requests regardless their statuses, open invoice requests requiring your action and invoice requests uploaded with possible errors. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\InvoiceRequestsResponse**](../Model/InvoiceRequestsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
- **Accept**: `application/vnd.retailer.v10+json`

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
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadInvoice()`

```php
uploadInvoice($shipmentId, $uploadInvoiceRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Upload an invoice for shipment id

Uploads an invoice associated with shipment id.

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
$shipmentId = 541757635; // string | The id of the shipment associated with the invoice.
$uploadInvoiceRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UploadInvoiceRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UploadInvoiceRequest

try {
    $result = $apiInstance->uploadInvoice($shipmentId, $uploadInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->uploadInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipmentId** | **string**| The id of the shipment associated with the invoice. | |
| **uploadInvoiceRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UploadInvoiceRequest**](../Model/UploadInvoiceRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
