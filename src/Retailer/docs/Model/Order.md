# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **string** | The identifier of the order. |
**pickupPoint** | **bool** | Indicates whether this order is shipped to a Pick Up Point. |
**orderPlacedDateTime** | **\DateTime** | The date and time in ISO 8601 format when the order was placed. | [optional]
**shipmentDetails** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentDetails**](ShipmentDetails.md) |  |
**billingDetails** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BillingDetails**](BillingDetails.md) |  | [optional]
**orderItems** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\OrderOrderItem[]**](OrderOrderItem.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
