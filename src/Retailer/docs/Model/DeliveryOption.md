# # DeliveryOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shippingLabelOfferId** | **string** | Unique identifier for the shipping label offer. |
**recommended** | **bool** | Indicates whether this delivery option is recommended to be the best option to ship your order item(s) with. |
**validUntilDate** | **\DateTime** | The date until the delivery option (incl total price) is valid. | [optional]
**transporterCode** | **string** | A code representing the transporter which is being used for transportation. |
**labelType** | **string** | The type of the label, representing the way an item is being transported. MAILBOX is a mailbox package with delivery scan. MAILBOX_LIGHT is a mailbox package without delivery scan. PARCEL is a normal package. |
**labelDisplayName** | **string** | The display name of the shipping label. |
**labelPrice** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\LabelPrice**](LabelPrice.md) |  |
**packageRestrictions** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PackageRestrictions**](PackageRestrictions.md) |  |
**handoverDetails** | [**\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\HandoverDetails**](HandoverDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
