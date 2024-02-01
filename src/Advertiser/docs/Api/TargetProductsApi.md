# ThisIsDevelopment\OpenApi\Bol\Advertiser\TargetProductsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTargetProduct()**](TargetProductsApi.md#getTargetProduct) | **GET** /advertiser/sponsored-products/target-products/{target-product-id} | Get a target product by target product id |
| [**getTargetProducts()**](TargetProductsApi.md#getTargetProducts) | **GET** /advertiser/sponsored-products/target-products | Get a list of target products |
| [**postTargetProducts()**](TargetProductsApi.md#postTargetProducts) | **POST** /advertiser/sponsored-products/target-products | Create a target product |
| [**updateTargetProduct()**](TargetProductsApi.md#updateTargetProduct) | **PUT** /advertiser/sponsored-products/target-products/{target-product-id} | Update a target product by target product id |


## `getTargetProduct()`

```php
getTargetProduct($targetProductId): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\TargetProduct
```

Get a target product by target product id

Gets the details of a target product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\TargetProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$targetProductId = 'targetProductId_example'; // string | The identifier of the target product.

try {
    $result = $apiInstance->getTargetProduct($targetProductId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetProductsApi->getTargetProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **targetProductId** | **string**| The identifier of the target product. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\TargetProduct**](../Model/TargetProduct.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTargetProducts()`

```php
getTargetProducts($adGroupId, $page): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\TargetProductsResponse
```

Get a list of target products

Gets a paginated list of all target products that are present within an ad group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\TargetProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 'adGroupId_example'; // string | The identifier of the parent ad group.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getTargetProducts($adGroupId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetProductsApi->getTargetProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| The identifier of the parent ad group. | |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\TargetProductsResponse**](../Model/TargetProductsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTargetProducts()`

```php
postTargetProducts($createTargetProductRequest): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Create a target product

Creates a target product and adds it to an ad group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\TargetProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createTargetProductRequest = new \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateTargetProductRequest(); // \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateTargetProductRequest

try {
    $result = $apiInstance->postTargetProducts($createTargetProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetProductsApi->postTargetProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createTargetProductRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateTargetProductRequest**](../Model/CreateTargetProductRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.advertiser.v9+json`
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTargetProduct()`

```php
updateTargetProduct($targetProductId, $updateTargetProductRequest): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Update a target product by target product id

Updates a target product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\TargetProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$targetProductId = 'targetProductId_example'; // string | The identifier of the target product.
$updateTargetProductRequest = new \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateTargetProductRequest(); // \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateTargetProductRequest

try {
    $result = $apiInstance->updateTargetProduct($targetProductId, $updateTargetProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetProductsApi->updateTargetProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **targetProductId** | **string**| The identifier of the target product. | |
| **updateTargetProductRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateTargetProductRequest**](../Model/UpdateTargetProductRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
