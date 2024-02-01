# ThisIsDevelopment\OpenApi\Bol\Advertiser\KeywordsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createKeyword()**](KeywordsApi.md#createKeyword) | **POST** /advertiser/sponsored-products/keywords | Create a keyword |
| [**deleteKeyword()**](KeywordsApi.md#deleteKeyword) | **DELETE** /advertiser/sponsored-products/keywords/{keyword-id} | Delete a keyword by keyword id |
| [**getKeyword()**](KeywordsApi.md#getKeyword) | **GET** /advertiser/sponsored-products/keywords/{keyword-id} | Get a keyword by keyword id |
| [**getKeywords()**](KeywordsApi.md#getKeywords) | **GET** /advertiser/sponsored-products/keywords | Get a list of keywords |
| [**putKeyword()**](KeywordsApi.md#putKeyword) | **PUT** /advertiser/sponsored-products/keywords/{keyword-id} | Update a keyword by keyword id |


## `createKeyword()`

```php
createKeyword($createKeywordRequest): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Create a keyword

Creates a keyword and adds it to an ad group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\KeywordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createKeywordRequest = new \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateKeywordRequest(); // \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateKeywordRequest

try {
    $result = $apiInstance->createKeyword($createKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordsApi->createKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createKeywordRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateKeywordRequest**](../Model/CreateKeywordRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.advertiser.v8+json`
- **Accept**: `application/vnd.advertiser.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteKeyword()`

```php
deleteKeyword($keywordId): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Delete a keyword by keyword id

Deletes a single keyword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\KeywordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywordId = 123456; // string | The identifier of the keyword.

try {
    $result = $apiInstance->deleteKeyword($keywordId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordsApi->deleteKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keywordId** | **string**| The identifier of the keyword. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKeyword()`

```php
getKeyword($keywordId): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\Keyword
```

Get a keyword by keyword id

Gets the details of a keyword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\KeywordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywordId = 123456; // string | The identifier of the keyword.

try {
    $result = $apiInstance->getKeyword($keywordId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordsApi->getKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keywordId** | **string**| The identifier of the keyword. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\Keyword**](../Model/Keyword.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKeywords()`

```php
getKeywords($adGroupId, $page): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\KeywordsResponse
```

Get a list of keywords

Gets a paginated list of all keywords that are present within an ad group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\KeywordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 456799; // string | The identifier of the parent ad group.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getKeywords($adGroupId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordsApi->getKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| The identifier of the parent ad group. | |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\KeywordsResponse**](../Model/KeywordsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putKeyword()`

```php
putKeyword($keywordId, $updateKeywordRequest): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Update a keyword by keyword id

Updates a keyword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\KeywordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywordId = 123456; // string | The identifier of the keyword.
$updateKeywordRequest = new \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateKeywordRequest(); // \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateKeywordRequest

try {
    $result = $apiInstance->putKeyword($keywordId, $updateKeywordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordsApi->putKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keywordId** | **string**| The identifier of the keyword. | |
| **updateKeywordRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateKeywordRequest**](../Model/UpdateKeywordRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.advertiser.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
