# # OrderOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderItemId** | **string** | The id for the order item. One order can have multiple order items, but the list can only take one item. |
**cancellationRequest** | **bool** | Indicates whether the order was cancelled on request of the customer before the retailer has shipped it. |
**fulfilment** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\OrderFulfilment**](OrderFulfilment.md) |  | [optional]
**offer** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\OrderOffer**](OrderOffer.md) |  | [optional]
**product** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\OrderProduct**](OrderProduct.md) |  | [optional]
**quantity** | **int** | Amount of ordered products for this order item id. |
**quantityShipped** | **int** | Amount of shipped products for this order item id. |
**quantityCancelled** | **int** | Amount of cancelled products for this order item id. |
**unitPrice** | **float** | The selling price to the customer of a single unit including VAT. |
**commission** | **float** | The commission for all quantities of this order item. |
**additionalServices** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\AdditionalService[]**](AdditionalService.md) |  | [optional]
**latestChangedDateTime** | **\DateTime** | The date and time in ISO 8601 format when the orderItem was last changed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
