# # SubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resources** | **string[]** | Array of event types for which the subscription is set. Note that some event types are only available for certain subscription types. |
**url** | **string** | The destination for event notifications. For WEBHOOK subscription types, this is the URL where messages are posted to. For GCP_PUBSUB, this is the topic name. |
**subscriptionType** | **string** | The type of subscription. It indicates the platform where the events will be subscribed to. Be aware that certain event types are only available for specific types. |
**enabled** | **bool** | Whether the subscription is enabled and will receive notifications or not. Defaults to true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
