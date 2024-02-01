# ThisIsDevelopment\OpenApi\Bol\Retailer\ProductsApi

All URIs are relative to https://api.bol.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCompetingOffers()**](ProductsApi.md#getCompetingOffers) | **GET** /retailer/products/{ean}/offers | Get a list of competing offers by EAN |
| [**getProductAssets()**](ProductsApi.md#getProductAssets) | **GET** /retailer/products/{ean}/assets | Get product assets |
| [**getProductIds()**](ProductsApi.md#getProductIds) | **GET** /retailer/products/{ean}/product-ids | Get product ids by EAN |
| [**getProductList()**](ProductsApi.md#getProductList) | **POST** /retailer/products/list | Get product list |
| [**getProductListFilters()**](ProductsApi.md#getProductListFilters) | **GET** /retailer/products/list-filters | Get product list filters |
| [**getProductPlacement()**](ProductsApi.md#getProductPlacement) | **GET** /retailer/products/{ean}/placement | Get product placement |
| [**getProductRatings()**](ProductsApi.md#getProductRatings) | **GET** /retailer/products/{ean}/ratings | Get product ratings |


## `getCompetingOffers()`

```php
getCompetingOffers($ean, $page, $countryCode, $bestOfferOnly, $condition): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CompetingOffersResponse
```

Get a list of competing offers by EAN

Use this endpoint to get a list of offers available in the webshop. The list includes offers for all retailers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 0000007740404; // string | The EAN number associated with this product.
$page = 1; // int | The requested page number with a page size of 50 items.
$countryCode = NL; // string | Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
$bestOfferOnly = true; // bool | Indicator to request the best offer within the country for the requested EAN.
$condition = NEW; // string | The condition of the offered product.

try {
    $result = $apiInstance->getCompetingOffers($ean, $page, $countryCode, $bestOfferOnly, $condition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getCompetingOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| The EAN number associated with this product. | |
| **page** | **int**| The requested page number with a page size of 50 items. | [optional] [default to 1] |
| **countryCode** | **string**| Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format. | [optional] |
| **bestOfferOnly** | **bool**| Indicator to request the best offer within the country for the requested EAN. | [optional] [default to false] |
| **condition** | **string**| The condition of the offered product. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CompetingOffersResponse**](../Model/CompetingOffersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductAssets()`

```php
getProductAssets($ean, $usage): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductAssetsResponse
```

Get product assets

Gets the list of asset available for the product by EAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 0000007740404; // string | The EAN number associated with this product.
$usage = ADDITIONAL; // string | Type of the asset being used for.

try {
    $result = $apiInstance->getProductAssets($ean, $usage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| The EAN number associated with this product. | |
| **usage** | **string**| Type of the asset being used for. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductAssetsResponse**](../Model/ProductAssetsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductIds()`

```php
getProductIds($ean): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductIdsResponse
```

Get product ids by EAN

Get the bol.com specific product identifier and the related EANs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 0000007740404; // string | The EAN number associated with this product.

try {
    $result = $apiInstance->getProductIds($ean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| The EAN number associated with this product. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductIdsResponse**](../Model/ProductIdsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductList()`

```php
getProductList($productListRequest, $acceptLanguage): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductListResponse
```

Get product list

Gets the list of products based on category, search term or filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productListRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductListRequest(); // \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductListRequest
$acceptLanguage = nl; // string | The language in which the product list will be retrieved.

try {
    $result = $apiInstance->getProductList($productListRequest, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productListRequest** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductListRequest**](../Model/ProductListRequest.md)|  | |
| **acceptLanguage** | **string**| The language in which the product list will be retrieved. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductListResponse**](../Model/ProductListResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductListFilters()`

```php
getProductListFilters($productListFiltersRequest, $countryCode, $searchTerm, $categoryId, $acceptLanguage): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductListFiltersResponse
```

Get product list filters

Gets the list of possible filters for products based on category or search term.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productListFiltersRequest = new \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductListFiltersRequest(); // ProductListFiltersRequest
$countryCode = NL; // string | The country for which the filters will be retrieved.
$searchTerm = pen; // string | The search-term to get the associated categories and filters for.
$categoryId = 10505; // string | The category to get the associated filters for.
$acceptLanguage = nl; // string | The language in which the product list filters will be retrieved.

try {
    $result = $apiInstance->getProductListFilters($productListFiltersRequest, $countryCode, $searchTerm, $categoryId, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductListFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productListFiltersRequest** | [**ProductListFiltersRequest**](../Model/.md)|  | |
| **countryCode** | **string**| The country for which the filters will be retrieved. | [optional] |
| **searchTerm** | **string**| The search-term to get the associated categories and filters for. | [optional] |
| **categoryId** | **string**| The category to get the associated filters for. | [optional] |
| **acceptLanguage** | **string**| The language in which the product list filters will be retrieved. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductListFiltersResponse**](../Model/ProductListFiltersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductPlacement()`

```php
getProductPlacement($ean, $countryCode, $acceptLanguage): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductPlacementResponse
```

Get product placement

Gets the list of categories and the URL where the product is placed in the webshop.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 0000007740404; // string | The EAN number associated with this product.
$countryCode = NL; // string | The country of the product placed on the webshop.
$acceptLanguage = nl; // string | The language in which the product categories and URL will be retrieved.

try {
    $result = $apiInstance->getProductPlacement($ean, $countryCode, $acceptLanguage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductPlacement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| The EAN number associated with this product. | |
| **countryCode** | **string**| The country of the product placed on the webshop. | [optional] |
| **acceptLanguage** | **string**| The language in which the product categories and URL will be retrieved. | [optional] |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductPlacementResponse**](../Model/ProductPlacementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductRatings()`

```php
getProductRatings($ean): \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductRatingsResponse
```

Get product ratings

Gets a list of ratings for the products associated with the provided EAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: OAuth2
$config = ThisIsDevelopment\OpenApi\Bol\Retailer\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ThisIsDevelopment\OpenApi\Bol\Retailer\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 0000007740404; // string | The EAN number associated with this rating.

try {
    $result = $apiInstance->getProductRatings($ean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductRatings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| The EAN number associated with this rating. | |

### Return type

[**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductRatingsResponse**](../Model/ProductRatingsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.retailer.v9+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
