# ThisIsDevelopment\OpenApi\Bol\Advertiser\CampaignsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCampaign()**](CampaignsApi.md#getCampaign) | **GET** /advertiser/sponsored-products/campaigns/{campaign-id} | Get a campaign by campaign id |
| [**getCampaigns()**](CampaignsApi.md#getCampaigns) | **GET** /advertiser/sponsored-products/campaigns | Get a list of campaigns |
| [**postCampaign()**](CampaignsApi.md#postCampaign) | **POST** /advertiser/sponsored-products/campaigns | Create a campaign |
| [**putCampaign()**](CampaignsApi.md#putCampaign) | **PUT** /advertiser/sponsored-products/campaigns/{campaign-id} | Update a campaign by campaign id |


## `getCampaign()`

```php
getCampaign($campaignId): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\SingleCampaignResponse
```

Get a campaign by campaign id

Gets the details of a campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | Unique identifier for the campaign.

try {
    $result = $apiInstance->getCampaign($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique identifier for the campaign. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\SingleCampaignResponse**](../Model/SingleCampaignResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaigns()`

```php
getCampaigns($page): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CampaignsResponse
```

Get a list of campaigns

Gets a paginated list of all campaigns for an advertiser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getCampaigns($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CampaignsResponse**](../Model/CampaignsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.advertiser.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCampaign()`

```php
postCampaign($createCampaignRequest): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Create a campaign

Creates a campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createCampaignRequest = new \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateCampaignRequest(); // \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateCampaignRequest

try {
    $result = $apiInstance->postCampaign($createCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->postCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createCampaignRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateCampaignRequest**](../Model/CreateCampaignRequest.md)|  | |

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

## `putCampaign()`

```php
putCampaign($campaignId, $updateCampaignRequest): \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\ProcessStatus
```

Update a campaign by campaign id

Updates a campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Advertiser\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Advertiser\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 123456; // string | Unique identifier for the campaign.
$updateCampaignRequest = new \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateCampaignRequest(); // \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateCampaignRequest

try {
    $result = $apiInstance->putCampaign($campaignId, $updateCampaignRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->putCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique identifier for the campaign. | |
| **updateCampaignRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateCampaignRequest**](../Model/UpdateCampaignRequest.md)|  | |

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
