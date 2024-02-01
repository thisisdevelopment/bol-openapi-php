# ThisIsDevelopment\OpenApi\Bol\Retailer\InsightsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOfferInsights()**](InsightsApi.md#getOfferInsights) | **GET** /retailer/insights/offer | Get offer insights |
| [**getPerformanceIndicators()**](InsightsApi.md#getPerformanceIndicators) | **GET** /retailer/insights/performance/indicator | Get performance indicators |
| [**getSalesForecast()**](InsightsApi.md#getSalesForecast) | **GET** /retailer/insights/sales-forecast | Get sales forecast |
| [**getSearchTerms()**](InsightsApi.md#getSearchTerms) | **GET** /retailer/insights/search-terms | Get search terms |


## `getOfferInsights()`

```php
getOfferInsights($offerId, $period, $numberOfPeriods, $name): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\OfferInsights
```

Get offer insights

Get the product visits and the buy box percentage for an offer during a given period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerId = 'offerId_example'; // string | Unique identifier for an offer.
$period = 'period_example'; // string | The time unit in which the offer insights are grouped.
$numberOfPeriods = 56; // int | The number of periods for which the offer insights are requested back in time. The maximum available periods are 24 for MONTH, 104 for WEEK, and 730 for DAY.
$name = 'name_example'; // string | The name of the requested offer insight.

try {
    $result = $apiInstance->getOfferInsights($offerId, $period, $numberOfPeriods, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getOfferInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerId** | **string**| Unique identifier for an offer. | |
| **period** | **string**| The time unit in which the offer insights are grouped. | |
| **numberOfPeriods** | **int**| The number of periods for which the offer insights are requested back in time. The maximum available periods are 24 for MONTH, 104 for WEEK, and 730 for DAY. | |
| **name** | **string**| The name of the requested offer insight. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\OfferInsights**](../Model/OfferInsights.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerformanceIndicators()`

```php
getPerformanceIndicators($name, $year, $week): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PerformanceIndicators
```

Get performance indicators

Gets the measurements for your performance indicators per week.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The type of the performance indicator
$year = 'year_example'; // string | Year number in the ISO-8601 standard.
$week = 'week_example'; // string | Week number in the ISO-8601 standard. If you would like to get the relative scores from the current week, please provide the current week number here. Be advised that measurements can change heavily over the course of the week.

try {
    $result = $apiInstance->getPerformanceIndicators($name, $year, $week);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getPerformanceIndicators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The type of the performance indicator | |
| **year** | **string**| Year number in the ISO-8601 standard. | |
| **week** | **string**| Week number in the ISO-8601 standard. If you would like to get the relative scores from the current week, please provide the current week number here. Be advised that measurements can change heavily over the course of the week. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PerformanceIndicators**](../Model/PerformanceIndicators.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesForecast()`

```php
getSalesForecast($offerId, $weeksAhead): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SalesForecastResponse
```

Get sales forecast

Get sales forecast to estimate the sales expectations on the total bol.com platform for the requested number of weeks ahead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerId = 'offerId_example'; // string | Unique identifier for an offer.
$weeksAhead = 56; // int | The number of weeks into the future, starting from today.

try {
    $result = $apiInstance->getSalesForecast($offerId, $weeksAhead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getSalesForecast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerId** | **string**| Unique identifier for an offer. | |
| **weeksAhead** | **int**| The number of weeks into the future, starting from today. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SalesForecastResponse**](../Model/SalesForecastResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchTerms()`

```php
getSearchTerms($searchTerm, $period, $numberOfPeriods, $relatedSearchTerms): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SearchTerms
```

Get search terms

Retrieves the search volume for a specified search term and period. The search volume allows you to see what bol.com customers are searching for. Based on the search volume per search term you can optimize your product content, or spot opportunities to extend your assortment, or analyzing trends for inventory management.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\InsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchTerm = 'searchTerm_example'; // string | The search term for which you want to request the search volume.
$period = 'period_example'; // string | The time unit in which the offer insights are grouped.
$numberOfPeriods = 56; // int | The number of periods for which the offer insights are requested back in time.
$relatedSearchTerms = false; // bool | Indicates whether or not you want to retrieve the related search terms.

try {
    $result = $apiInstance->getSearchTerms($searchTerm, $period, $numberOfPeriods, $relatedSearchTerms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightsApi->getSearchTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **searchTerm** | **string**| The search term for which you want to request the search volume. | |
| **period** | **string**| The time unit in which the offer insights are grouped. | |
| **numberOfPeriods** | **int**| The number of periods for which the offer insights are requested back in time. | |
| **relatedSearchTerms** | **bool**| Indicates whether or not you want to retrieve the related search terms. | [optional] [default to false] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\SearchTerms**](../Model/SearchTerms.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v8+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
