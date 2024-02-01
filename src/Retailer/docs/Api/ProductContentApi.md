# ThisIsDevelopment\OpenApi\Bol\Retailer\ProductContentApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCatalogProduct()**](ProductContentApi.md#getCatalogProduct) | **GET** /retailer/content/catalog-products/{ean} | Get catalog product details by EAN |
| [**getChunkRecommendations()**](ProductContentApi.md#getChunkRecommendations) | **POST** /retailer/content/chunk-recommendations | Get chunk recommendations |
| [**getUploadReport()**](ProductContentApi.md#getUploadReport) | **GET** /retailer/content/upload-report/{upload-id} | Get an upload report by upload id |
| [**postProductContent()**](ProductContentApi.md#postProductContent) | **POST** /retailer/content/products | Create content for a product |


## `getCatalogProduct()`

```php
getCatalogProduct($ean, $acceptLanguage): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CatalogProduct
```

Get catalog product details by EAN

Gets the details of a catalog product by means of its EAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 0000007740404; // string | The EAN number associated with this product.
$acceptLanguage = nl; // string | The language in which the catalog product details will be retrieved.

try {
    $result = $apiInstance->getCatalogProduct($ean, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->getCatalogProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| The EAN number associated with this product. | |
| **acceptLanguage** | **string**| The language in which the catalog product details will be retrieved. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CatalogProduct**](../Model/CatalogProduct.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChunkRecommendations()`

```php
getChunkRecommendations($chunkRecommendationsRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ChunkRecommendationsResponse
```

Get chunk recommendations

Gets a selected number of recommendations for a product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chunkRecommendationsRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ChunkRecommendationsRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ChunkRecommendationsRequest

try {
    $result = $apiInstance->getChunkRecommendations($chunkRecommendationsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->getChunkRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chunkRecommendationsRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ChunkRecommendationsRequest**](../Model/ChunkRecommendationsRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ChunkRecommendationsResponse**](../Model/ChunkRecommendationsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v8+json`
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUploadReport()`

```php
getUploadReport($uploadId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UploadReportResponse
```

Get an upload report by upload id

Gets the upload report of the product content submitted by upload id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uploadId = 'uploadId_example'; // string | The identifier of the upload report.

try {
    $result = $apiInstance->getUploadReport($uploadId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->getUploadReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uploadId** | **string**| The identifier of the upload report. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UploadReportResponse**](../Model/UploadReportResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductContent()`

```php
postProductContent($createProductContentSingleRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Create content for a product

Create content for an existing product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createProductContentSingleRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateProductContentSingleRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateProductContentSingleRequest

try {
    $result = $apiInstance->postProductContent($createProductContentSingleRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductContentApi->postProductContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createProductContentSingleRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateProductContentSingleRequest**](../Model/CreateProductContentSingleRequest.md)|  | |

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
