# ThisIsDevelopment\OpenApi\Bol\Retailer\CommissionsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCommission()**](CommissionsApi.md#getCommission) | **GET** /retailer/commission/{ean} | Get all commissions and reductions by EAN per single EAN |
| [**getCommissionRates()**](CommissionsApi.md#getCommissionRates) | **POST** /retailer/commissions | Get a list of commissions by EAN (BETA) |
| [**getCommissions()**](CommissionsApi.md#getCommissions) | **POST** /retailer/commission | Get all commissions and reductions by EAN in bulk |


## `getCommission()`

```php
getCommission($ean, $unitPrice, $condition): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Commission
```

Get all commissions and reductions by EAN per single EAN

Commissions can be filtered by condition, which defaults to NEW. We will calculate the commission amount from the EAN and price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\CommissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 0000007740404; // string | The EAN number associated with this product.
$unitPrice = 59; // float | The price of the product with a period as a decimal separator. The price should always have two decimals precision.
$condition = 'condition_example'; // string | The condition of the offer.

try {
    $result = $apiInstance->getCommission($ean, $unitPrice, $condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionsApi->getCommission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| The EAN number associated with this product. | |
| **unitPrice** | **float**| The price of the product with a period as a decimal separator. The price should always have two decimals precision. | |
| **condition** | **string**| The condition of the offer. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Commission**](../Model/Commission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommissionRates()`

```php
getCommissionRates($commissionProducts): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BulkCommissionRatesMultiStatusResponse
```

Get a list of commissions by EAN (BETA)

Gets a list of all commissions using EAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\CommissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commissionProducts = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CommissionProducts(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CommissionProducts

try {
    $result = $apiInstance->getCommissionRates($commissionProducts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionsApi->getCommissionRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **commissionProducts** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CommissionProducts**](../Model/CommissionProducts.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BulkCommissionRatesMultiStatusResponse**](../Model/BulkCommissionRatesMultiStatusResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v10+json`
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommissions()`

```php
getCommissions($bulkCommissionRequest): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BulkCommissionResponse
```

Get all commissions and reductions by EAN in bulk

Gets all commissions and possible reductions by EAN, price, and optionally condition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\CommissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulkCommissionRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BulkCommissionRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BulkCommissionRequest

try {
    $result = $apiInstance->getCommissions($bulkCommissionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommissionsApi->getCommissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulkCommissionRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BulkCommissionRequest**](../Model/BulkCommissionRequest.md)|  | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BulkCommissionResponse**](../Model/BulkCommissionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/vnd.retailer.v10+json`
- **Accept**: `application/vnd.retailer.v10+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
