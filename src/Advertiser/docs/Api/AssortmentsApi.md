# ThisIsDevelopment\OpenApi\Bol\Advertiser\AssortmentsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAssortments()**](AssortmentsApi.md#getAssortments) | **GET** /advertiser/assortments | Get a list of products available for advertising |


## `getAssortments()`

```php
getAssortments($page): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\Assortments
```

Get a list of products available for advertising

Gets a list of all products that the advertiser is selling on the bol.com platform and that are available for advertising.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\AssortmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getAssortments($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentsApi->getAssortments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\Assortments**](../Model/Assortments.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
