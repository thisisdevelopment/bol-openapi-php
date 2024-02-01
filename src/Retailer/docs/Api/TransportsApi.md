# ThisIsDevelopment\OpenApi\Bol\Retailer\TransportsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTransportInformationByTransportId()**](TransportsApi.md#addTransportInformationByTransportId) | **PUT** /retailer/transports/{transport-id} | Add transport information by transport id |


## `addTransportInformationByTransportId()`

```php
addTransportInformationByTransportId($transportId, $changeTransportRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Add transport information by transport id

Add information to an existing transport. The transport id is part of the shipment. You can retrieve the transport id through the GET shipment list request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\TransportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transportId = 'transportId_example'; // string | The transport id.
$changeTransportRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ChangeTransportRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ChangeTransportRequest

try {
    $result = $apiInstance->addTransportInformationByTransportId($transportId, $changeTransportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportsApi->addTransportInformationByTransportId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transportId** | **string**| The transport id. | |
| **changeTransportRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ChangeTransportRequest**](../Model/ChangeTransportRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v9+json`
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
