# # InvalidReplenishmentLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of invalid replenishment line, in case the BSKU and/or EAN cannot be determined for this replenishment line. |
**quantityAnnounced** | **int** | The amount of announced quantity for this replenishment line. |
**quantityReceived** | **int** | The amount of received quantity for this replenishment line. |
**quantityInProgress** | **int** | The amount of quantity that is still in progress at the warehouse for this replenishment line. |
**quantityWithGradedState** | **int** | The quantity within this shipment line that has a graded (unsalable) state. |
**quantityWithRegularState** | **int** | The quantity within this shipment line that has a regular (salable) state. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
