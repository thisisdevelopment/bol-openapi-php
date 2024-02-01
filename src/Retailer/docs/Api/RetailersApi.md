# ThisIsDevelopment\OpenApi\Bol\Retailer\RetailersApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRetailerInformation()**](RetailersApi.md#getRetailerInformation) | **GET** /retailer/retailers/{retailer-id} | Get retailer information by retailer id |


## `getRetailerInformation()`

```php
getRetailerInformation($retailerId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\RetailerInformationResponse
```

Get retailer information by retailer id

Gets retailer information of a single retailer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\RetailersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retailerId = 1055479; // string | The Id of the retailer which information belongs to.

try {
    $result = $apiInstance->getRetailerInformation($retailerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetailersApi->getRetailerInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retailerId** | **string**| The Id of the retailer which information belongs to. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\RetailerInformationResponse**](../Model/RetailerInformationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
