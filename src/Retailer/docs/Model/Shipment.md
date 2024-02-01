# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipmentId** | **string** | A unique identifier for this shipment. |
**shipmentDateTime** | **\DateTime** | The date and time in ISO 8601 format when the order item was shipped. | [optional]
**shipmentReference** | **string** | Reference supplied by the user when this item was shipped. |
**pickupPoint** | **bool** | Indicates whether this order is shipped to a Pick Up Point. | [optional]
**order** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentOrder**](ShipmentOrder.md) |  |
**shipmentDetails** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentDetails**](ShipmentDetails.md) |  | [optional]
**billingDetails** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BillingDetails**](BillingDetails.md) |  | [optional]
**shipmentItems** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentItem[]**](ShipmentItem.md) |  |
**transport** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentTransport**](ShipmentTransport.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
