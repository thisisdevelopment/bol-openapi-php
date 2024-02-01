# # Commission

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ean** | **string** | The EAN number associated with this product. |
**condition** | **string** | The condition of the offer. |
**unitPrice** | **float** | The intended selling price per single unit up to 2 decimals precision, including VAT. |
**fixedAmount** | **float** | A fixed commission fee, including VAT. |
**percentage** | **float** | A percentage of commission, based on the intended selling price per unit, including VAT. |
**totalCost** | **float** | The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers. |
**totalCostWithoutReduction** | **float** | The total commission for selling this product at bol.com without reductions including VAT. | [optional]
**reductions** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Reduction[]**](Reduction.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
