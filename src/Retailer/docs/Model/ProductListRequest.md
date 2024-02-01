# # ProductListRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**countryCode** | **string** | The country for which the products will be retrieved. | [optional] [default to 'NL']
**searchTerm** | **string** | The search term to get the associated products for. | [optional]
**categoryId** | **string** | The category to get the associated products for. | [optional]
**filterRanges** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductListFilterRange[]**](ProductListFilterRange.md) | The list of range filters to get associated products for. | [optional]
**filterValues** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ProductListFilterValue[]**](ProductListFilterValue.md) | The list of filter values in this filter. | [optional]
**sort** | **string** | Determines the order of the products. | [optional]
**page** | **int** | The requested page number with a page size of 50 items. | [default to 1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
