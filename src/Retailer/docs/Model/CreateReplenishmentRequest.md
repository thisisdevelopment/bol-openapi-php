# # CreateReplenishmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Custom user reference for this replenishment. Must contain at least 1 digit and only upper case characters allowed. |
**deliveryInfo** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateDeliveryInfo**](CreateDeliveryInfo.md) |  | [optional]
**labelingByBol** | **bool** | Indicates whether the replenishment will be labeled by bol.com. |
**numberOfLoadCarriers** | **int** | The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20. |
**pickupAppointment** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreatePickupAppointment**](CreatePickupAppointment.md) |  | [optional]
**lines** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\CreateReplenishmentLine[]**](CreateReplenishmentLine.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
