# # OrderFulfilment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). |
**distributionParty** | **string** | The party that manages the distribution, either bol.com or the retailer itself. | [optional]
**latestDeliveryDate** | **\DateTime** | The ultimate delivery date at which this order must be delivered at the customer&#39;s shipping address. This field is empty in case the exactDeliveryDate is filled. | [optional]
**exactDeliveryDate** | **\DateTime** | The exact delivery date at which this order must be delivered at the customer&#39;s shipping address. This field is only filled when the customer chose an exact date for delivery. This field is empty in case the latestDeliveryDate is filled. | [optional]
**expiryDate** | **\DateTime** | The date this order item will automatically expire and thereby cancelling this order item from the order. | [optional]
**timeFrameType** | **string** | Delivery option selected by the customer. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
