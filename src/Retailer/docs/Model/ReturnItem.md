# # ReturnItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rmaId** | **string** | The RMA (Return Merchandise Authorization) identifier of the return. |
**orderId** | **string** | The id of the customer order this return item is in. |
**ean** | **string** | The EAN number associated with this product. |
**title** | **string** | The product title. |
**expectedQuantity** | **int** | The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order. |
**returnReason** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnReason**](ReturnReason.md) |  |
**trackAndTrace** | **string** | The track and trace code that is associated with this transport. | [optional]
**transporterName** | **string** | The name of the transporter. | [optional]
**handled** | **bool** | Indicates if this return item has been handled (by the retailer). |
**processingResults** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnProcessingResult[]**](ReturnProcessingResult.md) |  |
**customerDetails** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CustomerDetails**](CustomerDetails.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
