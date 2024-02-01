# ThisIsDevelopment\OpenApi\Bol\Advertiser\NegativeKeywordsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteNegativeKeyword()**](NegativeKeywordsApi.md#deleteNegativeKeyword) | **DELETE** /advertiser/sponsored-products/negative-keywords/{keyword-id} | Delete a negative keyword by keyword id |
| [**getNegativeKeyword()**](NegativeKeywordsApi.md#getNegativeKeyword) | **GET** /advertiser/sponsored-products/negative-keywords/{keyword-id} | Get a negative keyword by keyword id |
| [**getNegativeKeywords()**](NegativeKeywordsApi.md#getNegativeKeywords) | **GET** /advertiser/sponsored-products/negative-keywords | Get a list of negative keywords |
| [**postNegativeKeyword()**](NegativeKeywordsApi.md#postNegativeKeyword) | **POST** /advertiser/sponsored-products/negative-keywords | Create a negative keyword |


## `deleteNegativeKeyword()`

```php
deleteNegativeKeyword($keywordId): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Delete a negative keyword by keyword id

Deletes a negative keyword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\NegativeKeywordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywordId = 123432; // string | The identifier of the negative keyword.

try {
    $result = $apiInstance->deleteNegativeKeyword($keywordId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordsApi->deleteNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keywordId** | **string**| The identifier of the negative keyword. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNegativeKeyword()`

```php
getNegativeKeyword($keywordId): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\NegativeKeyword
```

Get a negative keyword by keyword id

Gets the details of a negative keywords.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\NegativeKeywordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywordId = 123432; // string | The identifier of the negative keyword.

try {
    $result = $apiInstance->getNegativeKeyword($keywordId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordsApi->getNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keywordId** | **string**| The identifier of the negative keyword. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\NegativeKeyword**](../Model/NegativeKeyword.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNegativeKeywords()`

```php
getNegativeKeywords($adGroupId, $page): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\NegativeKeywordsResponse
```

Get a list of negative keywords

Gets a paginated list of all negative keywords that are present within an ad group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\NegativeKeywordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 456799; // string | The identifier of the parent ad group.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getNegativeKeywords($adGroupId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordsApi->getNegativeKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| The identifier of the parent ad group. | |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\NegativeKeywordsResponse**](../Model/NegativeKeywordsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postNegativeKeyword()`

```php
postNegativeKeyword($createNegativeKeywordRequest): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Create a negative keyword

Creates a negative keyword and adds it to an ad group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\NegativeKeywordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createNegativeKeywordRequest = new \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateNegativeKeywordRequest(); // \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateNegativeKeywordRequest

try {
    $result = $apiInstance->postNegativeKeyword($createNegativeKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegativeKeywordsApi->postNegativeKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createNegativeKeywordRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateNegativeKeywordRequest**](../Model/CreateNegativeKeywordRequest.md)|  | |

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
