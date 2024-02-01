# ThisIsDevelopment\OpenApi\Bol\Retailer\OrdersApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOrderItem()**](OrdersApi.md#cancelOrderItem) | **PUT** /retailer/orders/cancellation | Cancel an order item by an order item id |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /retailer/orders/{order-id} | Get an order by order id |
| [**getOrders()**](OrdersApi.md#getOrders) | **GET** /retailer/orders | Get a list of orders |
| [**shipOrderItem()**](OrdersApi.md#shipOrderItem) | **PUT** /retailer/orders/shipment | Ship order item |


## `cancelOrderItem()`

```php
cancelOrderItem($cancellationRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Cancel an order item by an order item id

This endpoint can be used to either confirm a cancellation request by the customer or to cancel an order item you yourself are unable to fulfil.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancellationRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CancellationRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CancellationRequest

try {
    $result = $apiInstance->cancelOrderItem($cancellationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancellationRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CancellationRequest**](../Model/CancellationRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v8+json`
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($orderId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Order
```

Get an order by order id

Gets an order by order id. The order can be partially shipped or cancelled, and the message contains the quantity shipped or cancelled items. The unitPrice takes account of volume discounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 'orderId_example'; // string | The id of the order to get.

try {
    $result = $apiInstance->getOrder($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| The id of the order to get. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Order**](../Model/Order.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($page, $fulfilmentMethod, $status, $changeIntervalMinute, $latestChangeDate): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReducedOrders
```

Get a list of orders

Gets a paginated list of all orders for a retailer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The requested page number with a page size of 50 items.
$fulfilmentMethod = 'fulfilmentMethod_example'; // string | Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). In order to retrieve both FBR and FBB orders, ALL can be used as a parameter.
$status = 'status_example'; // string | To filter on order status. You can filter on either all orders independent from their status, open orders (excluding shipped and cancelled orders), and shipped orders.
$changeIntervalMinute = 56; // int | To filter on the period in minutes during which the latest change was performed on an order item.
$latestChangeDate = 'latestChangeDate_example'; // string | To filter on the date on which the latest change was performed on an order item. Up to 3 months of history is supported.

try {
    $result = $apiInstance->getOrders($page, $fulfilmentMethod, $status, $changeIntervalMinute, $latestChangeDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |
| **fulfilmentMethod** | **string**| Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). In order to retrieve both FBR and FBB orders, ALL can be used as a parameter. | [optional] |
| **status** | **string**| To filter on order status. You can filter on either all orders independent from their status, open orders (excluding shipped and cancelled orders), and shipped orders. | [optional] |
| **changeIntervalMinute** | **int**| To filter on the period in minutes during which the latest change was performed on an order item. | [optional] |
| **latestChangeDate** | **string**| To filter on the date on which the latest change was performed on an order item. Up to 3 months of history is supported. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReducedOrders**](../Model/ReducedOrders.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipOrderItem()`

```php
shipOrderItem($shipmentRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Ship order item

Ship a single order item within a customer order by providing shipping information. If you purchased a shipping label you should add the shippingLabelId to this message and leave the transport element empty. If you will ship the item using your own transporter method you must omit the shippingLabelId entirely and fill in the transport element with the fields from GET shipping labels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentRequest

try {
    $result = $apiInstance->shipOrderItem($shipmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->shipOrderItem: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/vnd.retailer.v8+json`
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
