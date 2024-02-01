# ThisIsDevelopment\OpenApi\Bol\Shared\ProcessStatusApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProcessStatus()**](ProcessStatusApi.md#getProcessStatus) | **GET** /shared/process-status/{process-status-id} | Get the status of an asynchronous process by process status id |
| [**getProcessStatusBulk()**](ProcessStatusApi.md#getProcessStatusBulk) | **POST** /shared/process-status | Get the status of multiple asynchronous processes by an array of process status ids for a retailer |
| [**getProcessStatusEntityId()**](ProcessStatusApi.md#getProcessStatusEntityId) | **GET** /shared/process-status | Get the status of an asynchronous process by entity id and event type for a retailer |


## `getProcessStatus()`

```php
getProcessStatus($processStatusId): \ThisIsDevelopment\OpenApi\Bol\Shared\Models\ProcessStatus
```

Get the status of an asynchronous process by process status id

Retrieve a specific process status, which shows information regarding a previously executed PUT/POST/DELETE request. All PUT/POST/DELETE requests on the other endpoints will supply a process status id in the related response. You can use this id to retrieve a status by using the endpoint below. Please note: process status instances are only retained for a limited period of time after completion. Outside of this period, a 404 will be returned for missing process statuses. Please handle this accordingly, by stopping any active polling for these statuses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Shared\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Shared\Api\ProcessStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processStatusId = 'processStatusId_example'; // string | The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints.

try {
    $result = $apiInstance->getProcessStatus($processStatusId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessStatusApi->getProcessStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processStatusId** | **string**| The id of the process status being requested. This id is supplied in every response to a PUT/POST/DELETE request on the other endpoints. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Shared\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v10+json`, `application/vnd.advertiser.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessStatusBulk()`

```php
getProcessStatusBulk($bulkProcessStatusRequest): \ThisIsDevelopment\OpenApi\Bol\Shared\Models\ProcessStatusResponse
```

Get the status of multiple asynchronous processes by an array of process status ids for a retailer

Retrieve a list of process statuses, which shows information regarding previously executed PUT/POST/DELETE requests. No more than 1000 process status id's can be sent in a single request. Please note: process status instances are only retained for a limited period of time after completion. Outside of this period, deleted process statuses will no longer be returned. Please handle this accordingly, by stopping any active polling for these statuses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Shared\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Shared\Api\ProcessStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulkProcessStatusRequest = new \ThisIsDevelopment\OpenApi\Bol\Shared\Models\BulkProcessStatusRequest(); // \ThisIsDevelopment\OpenApi\Bol\Shared\Models\BulkProcessStatusRequest

try {
    $result = $apiInstance->getProcessStatusBulk($bulkProcessStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessStatusApi->getProcessStatusBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulkProcessStatusRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Shared\Models\BulkProcessStatusRequest**](../Model/BulkProcessStatusRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Shared\Models\ProcessStatusResponse**](../Model/ProcessStatusResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v10+json`, `application/vnd.advertiser.v10+json`
- **Accept**: `application/vnd.retailer.v10+json`, `application/vnd.advertiser.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessStatusEntityId()`

```php
getProcessStatusEntityId($entityId, $eventType, $page): \ThisIsDevelopment\OpenApi\Bol\Shared\Models\ProcessStatusResponse
```

Get the status of an asynchronous process by entity id and event type for a retailer

Retrieve a list of process statuses, which shows information regarding previously executed PUT/POST/DELETE requests in descending order. You need to supply an entity id and event type. Please note: process status instances are only retained for a limited period of time after completion. Outside of this period, deleted process statuses will no longer be returned. Please handle this accordingly, by stopping any active polling for these statuses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Shared\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Shared\Api\ProcessStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityId = 987654321; // string | The entity id is not unique, so you will need to provide an event type. For example, an entity id can be an order item id, transport id, return number, replenishment id, campaign id, and keyword id.
$eventType = CONFIRM_SHIPMENT; // string | The event type can only be used in combination with the entity id.
$page = 1; // int | The requested page number with a page size of 50 items.

try {
    $result = $apiInstance->getProcessStatusEntityId($entityId, $eventType, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessStatusApi->getProcessStatusEntityId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entityId** | **string**| The entity id is not unique, so you will need to provide an event type. For example, an entity id can be an order item id, transport id, return number, replenishment id, campaign id, and keyword id. | |
| **eventType** | **string**| The event type can only be used in combination with the entity id. | |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Shared\Models\ProcessStatusResponse**](../Model/ProcessStatusResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v10+json`, `application/vnd.advertiser.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
