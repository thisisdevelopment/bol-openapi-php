# # ShipmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderItems** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\OrderItem[]**](OrderItem.md) | Single element list with the order item to ship. |
**shipmentReference** | **string** | A user-defined reference that you can provide to add to the shipment. Can be used for own administration purposes. Only &#39;null&#39; or non-empty strings accepted. | [optional]
**shippingLabelId** | **string** | The identifier of the purchased shipping label. | [optional]
**transport** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\TransportInstruction**](TransportInstruction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
