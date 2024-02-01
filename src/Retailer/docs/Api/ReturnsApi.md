# ThisIsDevelopment\OpenApi\Bol\Retailer\ReturnsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReturn()**](ReturnsApi.md#createReturn) | **POST** /retailer/returns | Create a return |
| [**getReturn()**](ReturnsApi.md#getReturn) | **GET** /retailer/returns/{return-id} | Get a return by return id |
| [**getReturns()**](ReturnsApi.md#getReturns) | **GET** /retailer/returns | Get returns |
| [**handleReturn()**](ReturnsApi.md#handleReturn) | **PUT** /retailer/returns/{rma-id} | Handle a return by rma id |


## `createReturn()`

```php
createReturn($createReturnRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Create a return

Create a return, and automatically handle it with the provided handling result. When successfully created, the resulting return id is provided in the process status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createReturnRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateReturnRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateReturnRequest

try {
    $result = $apiInstance->createReturn($createReturnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->createReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createReturnRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateReturnRequest**](../Model/CreateReturnRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturn()`

```php
getReturn($returnId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ModelReturn
```

Get a return by return id

Retrieve a return based on the return id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$returnId = 'returnId_example'; // string | Unique identifier for a return.

try {
    $result = $apiInstance->getReturn($returnId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **returnId** | **string**| Unique identifier for a return. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ModelReturn**](../Model/ModelReturn.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturns()`

```php
getReturns($page, $handled, $fulfilmentMethod): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnsResponse
```

Get returns

Get a paginated list of multi-item returns. Handled returns are sorted by date in descending order, while unhandled returns are sorted by date in ascending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page to get with a page size of 50.
$handled = True; // bool | The status of the returns you wish to see, shows either handled or unhandled returns.
$fulfilmentMethod = 'fulfilmentMethod_example'; // string | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).

try {
    $result = $apiInstance->getReturns($page, $handled, $fulfilmentMethod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page to get with a page size of 50. | [optional] [default to 1] |
| **handled** | **bool**| The status of the returns you wish to see, shows either handled or unhandled returns. | [optional] |
| **fulfilmentMethod** | **string**| The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnsResponse**](../Model/ReturnsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleReturn()`

```php
handleReturn($rmaId, $returnRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Handle a return by rma id

Allows the user to handle a return. This can be to either handle an open return, or change the handlingResult of an already handled return. Please refer to the Returns documentation for further details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rmaId = 56; // int | The RMA (Return Merchandise Authorization) identifier of the return.
$returnRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnRequest

try {
    $result = $apiInstance->handleReturn($rmaId, $returnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->handleReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rmaId** | **int**| The RMA (Return Merchandise Authorization) identifier of the return. | |
| **returnRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnRequest**](../Model/ReturnRequest.md)|  | |

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
