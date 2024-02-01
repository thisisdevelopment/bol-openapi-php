# # ProcessStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**processStatusId** | **string** | The process status id. | [optional]
**entityId** | **string** | The id of the object being processed. For example, in case of a shipment process id, you will receive the id of the order item being processed. | [optional]
**eventType** | **string** | Name of the requested action that is being processed. |
**description** | **string** | Describes the action that is being processed. |
**status** | **string** | Status of the action being processed. |
**errorMessage** | **string** | Shows error message if applicable. | [optional]
**createTimestamp** | **\DateTime** | Time of creation of the response. |
**links** | [**\ThisIsDevelopment\OpenApi\Bol\Shared\Models\Link[]**](Link.md) | Lists available actions applicable to this endpoint. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
