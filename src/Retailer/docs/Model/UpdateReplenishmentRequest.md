# # UpdateReplenishmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | Update the state of the replenishment to cancel the replenishment. | [optional]
**deliveryInfo** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateDeliveryInfo**](UpdateDeliveryInfo.md) |  | [optional]
**numberOfLoadCarriers** | **int** | The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20. | [optional]
**loadCarriers** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UpdateLoadCarrier[]**](UpdateLoadCarrier.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
