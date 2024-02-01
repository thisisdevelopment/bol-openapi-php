# # CreateOfferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ean** | **string** | The EAN number associated with this product. Note: in case an ISBN is provided, the ISBN will be replaced with the actual EAN belonging to this ISBN. |
**condition** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Condition**](Condition.md) |  |
**reference** | **string** | A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 20 characters. | [optional]
**onHoldByRetailer** | **bool** | This field specifies whether the retailer has temporarily suspended the listing of this offer on the bol.com website. When set to true, the offer becomes invisible to customers and is not available for purchase. The default setting, false, indicates that the offer is active and visible on the website. This feature is useful for managing inventory or making updates to the offer without permanently removing it from the site. | [optional] [default to false]
**unknownProductTitle** | **string** | In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored. | [optional]
**pricing** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Pricing**](Pricing.md) |  |
**stock** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\StockCreate**](StockCreate.md) |  |
**fulfilment** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Fulfilment**](Fulfilment.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
