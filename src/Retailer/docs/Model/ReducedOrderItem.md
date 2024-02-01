# # ReducedOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderItemId** | **string** | The id for the order item. One order can have multiple order items, but the list can only take one item. |
**ean** | **string** | The EAN number associated with this product. |
**fulfilmentMethod** | **string** | The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). |
**fulfilmentStatus** | **string** | To filter on order status. You can filter on either all orders independent from their status, open orders (excluding shipped and cancelled orders), and shipped orders. |
**quantity** | **int** | Amount of ordered products for this order item id. |
**quantityShipped** | **int** | Amount of shipped products for this order item id. |
**quantityCancelled** | **int** | Amount of cancelled products for this order item id. |
**cancellationRequest** | **bool** | Indicates whether the order was cancelled on request of the customer before the retailer has shipped it. |
**latestChangedDateTime** | **\DateTime** | The date and time in ISO 8601 format when the orderItem was last changed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
