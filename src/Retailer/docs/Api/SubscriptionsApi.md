# ThisIsDevelopment\OpenApi\Bol\Retailer\SubscriptionsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePushNotificationSubscription()**](SubscriptionsApi.md#deletePushNotificationSubscription) | **DELETE** /retailer/subscriptions/{subscription-id} | Remove Event Notification Subscription |
| [**getPushNotificationSubscription()**](SubscriptionsApi.md#getPushNotificationSubscription) | **GET** /retailer/subscriptions/{subscription-id} | Retrieve Specific Event Notification Subscription (BETA) |
| [**getPushNotificationSubscriptions()**](SubscriptionsApi.md#getPushNotificationSubscriptions) | **GET** /retailer/subscriptions | Retrieve Event Notification Subscriptions (BETA) |
| [**getSubscriptionKeys()**](SubscriptionsApi.md#getSubscriptionKeys) | **GET** /retailer/subscriptions/signature-keys | Retrieve public keys for push notification signature validation. |
| [**postPushNotificationSubscription()**](SubscriptionsApi.md#postPushNotificationSubscription) | **POST** /retailer/subscriptions | Create Event Notification Subscription (BETA) |
| [**postTestPushNotification()**](SubscriptionsApi.md#postTestPushNotification) | **POST** /retailer/subscriptions/test/{subscription-id} | Send test push notification for subscriptions |
| [**putPushNotificationSubscription()**](SubscriptionsApi.md#putPushNotificationSubscription) | **PUT** /retailer/subscriptions/{subscription-id} | Update Event Notification Subscription (BETA) |


## `deletePushNotificationSubscription()`

```php
deletePushNotificationSubscription($subscriptionId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Remove Event Notification Subscription

Deletes a specific event notification subscription associated with a retailer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = 1234; // string | The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription.

try {
    $result = $apiInstance->deletePushNotificationSubscription($subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deletePushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriptionId** | **string**| The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushNotificationSubscription()`

```php
getPushNotificationSubscription($subscriptionId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SubscriptionResponse
```

Retrieve Specific Event Notification Subscription (BETA)

Fetches the details of a specific event notification subscription for a retailer. The details include the types of events and the destination, which can either be a URL (for WEBHOOK) or a topic name (for GCP_PUBSUB).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = 1234; // string | The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription.

try {
    $result = $apiInstance->getPushNotificationSubscription($subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriptionId** | **string**| The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushNotificationSubscriptions()`

```php
getPushNotificationSubscriptions(): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SubscriptionsResponse
```

Retrieve Event Notification Subscriptions (BETA)

Retrieves all event notification subscriptions for a given retailer. Each subscription may have different types of events and a destination, which could either be a URL (for WEBHOOK) or a topic name (for GCP_PUBSUB).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPushNotificationSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getPushNotificationSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionKeys()`

```php
getSubscriptionKeys(): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\KeySetResponse
```

Retrieve public keys for push notification signature validation.

Retrieve a list of public keys that should be used to validate the signature header for push notifications received from bol.com.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSubscriptionKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\KeySetResponse**](../Model/KeySetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPushNotificationSubscription()`

```php
postPushNotificationSubscription($subscriptionRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Create Event Notification Subscription (BETA)

Creates a new event notification subscription for a retailer. The subscription can be set up for one or more types of events and the destination can either be a URL (for WEBHOOK) or a topic name (for GCP_PUBSUB).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SubscriptionRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SubscriptionRequest

try {
    $result = $apiInstance->postPushNotificationSubscription($subscriptionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriptionRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SubscriptionRequest**](../Model/SubscriptionRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v10+json`
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTestPushNotification()`

```php
postTestPushNotification($subscriptionId): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Send test push notification for subscriptions

Send a test push notification to all subscriptions for the provided event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = 1234; // string | The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription.

try {
    $result = $apiInstance->postTestPushNotification($subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postTestPushNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriptionId** | **string**| The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPushNotificationSubscription()`

```php
putPushNotificationSubscription($subscriptionId, $subscriptionRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus
```

Update Event Notification Subscription (BETA)

Updates the details of a specific event notification subscription for a retailer. The updates can be made to the types of events and/or the destination, which can either be a URL (for WEBHOOK) or a topic name (for GCP_PUBSUB).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = 1234; // string | The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription.
$subscriptionRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SubscriptionRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SubscriptionRequest

try {
    $result = $apiInstance->putPushNotificationSubscription($subscriptionId, $subscriptionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->putPushNotificationSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriptionId** | **string**| The unique identifier assigned to each event notification subscription. This ID is used for tracking and managing each subscription. | |
| **subscriptionRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SubscriptionRequest**](../Model/SubscriptionRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProcessStatus**](../Model/ProcessStatus.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v10+json`
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
