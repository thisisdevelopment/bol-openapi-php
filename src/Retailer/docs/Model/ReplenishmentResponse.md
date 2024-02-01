# # ReplenishmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**replenishmentId** | **string** | The unique identifier of the replenishment. |
**creationDateTime** | **\DateTime** | The date and time when this replenishment was created. In ISO 8601 format. |
**reference** | **string** | Custom user defined reference to identify the replenishment. |
**labelingByBol** | **bool** | Indicates whether the replenishment will be labeled by bol.com or not. |
**state** | **string** | Indicates the state of this replenishment order. |
**deliveryInformation** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\DeliveryInformation**](DeliveryInformation.md) |  |
**pickupAppointment** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PickupAppointment**](PickupAppointment.md) |  | [optional]
**numberOfLoadCarriers** | **int** | The number of load carriers in this shipment. | [optional]
**loadCarriers** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\LoadCarrier[]**](LoadCarrier.md) |  |
**lines** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReplenishmentLine[]**](ReplenishmentLine.md) |  |
**invalidLines** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\InvalidReplenishmentLine[]**](InvalidReplenishmentLine.md) |  |
**stateTransitions** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\StateTransition[]**](StateTransition.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
