# # PickupAppointment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commentToTransporter** | **string** | A comment to the transporter regarding the pickup appointment. | [optional]
**address** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Address**](Address.md) |  |
**pickupTimeSlot** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReplenishmentPickupTimeSlot**](ReplenishmentPickupTimeSlot.md) |  |
**pickupDateTime** | **\DateTime** | The date and time in ISO 8601 format when this replenishment was picked up by the transporter. | [optional]
**cancellationReason** | **string** | In case of a pickup cancellation this field indicates the reason for cancelling this pickup. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
