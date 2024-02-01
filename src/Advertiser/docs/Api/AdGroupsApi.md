# ThisIsDevelopment\OpenApi\Bol\Advertiser\AdGroupsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdGroupById()**](AdGroupsApi.md#getAdGroupById) | **GET** /advertiser/sponsored-products/ad-groups/{ad-group-id} | Get an ad group by ad group id |
| [**getAdGroups()**](AdGroupsApi.md#getAdGroups) | **GET** /advertiser/sponsored-products/ad-groups | Get a list of ad groups |
| [**postAdGroup()**](AdGroupsApi.md#postAdGroup) | **POST** /advertiser/sponsored-products/ad-groups | Create an ad group |
| [**putAdGroups()**](AdGroupsApi.md#putAdGroups) | **PUT** /advertiser/sponsored-products/ad-groups/{ad-group-id} | Update an ad group by ad group id |


## `getAdGroupById()`

```php
getAdGroupById($adGroupId): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\AdGroupResponse
```

Get an ad group by ad group id

Gets the details of an ad group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\AdGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 456799; // string | The identifier of the ad group.

try {
    $result = $apiInstance->getAdGroupById($adGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupsApi->getAdGroupById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| The identifier of the ad group. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\AdGroupResponse**](../Model/AdGroupResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdGroups()`

```php
getAdGroups($campaignId, $page): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\AdGroupsResponse
```

Get a list of ad groups

Gets a paginated list of all ad groups that are present within a campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\AdGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = Unique identifier for the campaign.; // string | Unique identifier for the campaign.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getAdGroups($campaignId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupsApi->getAdGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique identifier for the campaign. | |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\AdGroupsResponse**](../Model/AdGroupsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAdGroup()`

```php
postAdGroup($createAdGroupRequest): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Create an ad group

Creates an ad group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\AdGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createAdGroupRequest = new \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateAdGroupRequest(); // \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateAdGroupRequest

try {
    $result = $apiInstance->postAdGroup($createAdGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupsApi->postAdGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createAdGroupRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateAdGroupRequest**](../Model/CreateAdGroupRequest.md)|  | |

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

## `putAdGroups()`

```php
putAdGroups($adGroupId, $updateAdGroupRequest): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Update an ad group by ad group id

Updates an ad group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\AdGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adGroupId = 456799; // string | The identifier of the ad group.
$updateAdGroupRequest = new \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateAdGroupRequest(); // \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateAdGroupRequest

try {
    $result = $apiInstance->putAdGroups($adGroupId, $updateAdGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupsApi->putAdGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adGroupId** | **string**| The identifier of the ad group. | |
| **updateAdGroupRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateAdGroupRequest**](../Model/UpdateAdGroupRequest.md)|  | |

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
