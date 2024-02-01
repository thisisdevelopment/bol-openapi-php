# ThisIsDevelopment\OpenApi\Bol\Retailer\PromotionsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProducts()**](PromotionsApi.md#getProducts) | **GET** /retailer/promotions/{promotion-id}/products | Get a list of products |
| [**getPromotion()**](PromotionsApi.md#getPromotion) | **GET** /retailer/promotions/{promotion-id} | Get a promotion by promotion id |
| [**getPromotions()**](PromotionsApi.md#getPromotions) | **GET** /retailer/promotions | Get a list of promotions |


## `getProducts()`

```php
getProducts($promotionId, $page): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Products
```

Get a list of products

Gets a paginated list of all products that are present within a promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | The identifier of the promotion.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getProducts($promotionId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionId** | **string**| The identifier of the promotion. | |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Products**](../Model/Products.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotion()`

```php
getPromotion($promotionId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Promotion
```

Get a promotion by promotion id

Gets the details of a promotion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 'promotionId_example'; // string | The identifier of the promotion.

try {
    $result = $apiInstance->getPromotion($promotionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getPromotion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionId** | **string**| The identifier of the promotion. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Promotion**](../Model/Promotion.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotions()`

```php
getPromotions($promotionType, $page): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Promotions
```

Get a list of promotions

Gets a paginated list of all promotions for a retailer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionType = 'promotionType_example'; // string | The type(s) of promotion to be retrieved.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getPromotions($promotionType, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getPromotions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionType** | **string**| The type(s) of promotion to be retrieved. | |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Promotions**](../Model/Promotions.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
