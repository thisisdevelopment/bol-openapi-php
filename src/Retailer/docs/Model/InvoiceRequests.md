# # InvoiceRequests

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipmentId** | **string** | The id of the shipment associated with this invoice request. |
**orderId** | **string** | The id of the order associated with this shipment. | [optional]
**customerAccountNumber** | **string** | The account of the customer within bol.com associated with this shipment. | [optional]
**billingDetails** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\InvoiceRequestsBillingDetails**](InvoiceRequestsBillingDetails.md) |  | [optional]
**products** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\InvoiceRequestsProducts[]**](InvoiceRequestsProducts.md) |  | [optional]
**status** | **string** | The current status of the invoice request. |
**statusTransitions** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\StatusTransitions[]**](StatusTransitions.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
