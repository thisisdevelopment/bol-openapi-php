# # UpdateCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the campaign. | [optional]
**startDate** | **string** | The start date of the campaign. Must be a current or future date and will always be one full day. | [optional]
**endDate** | **string** | The end date of the campaign. Must be a future date that is at least one day after the start date of the campaign, and will always be one full day. | [optional]
**state** | **string** | The state of the campaign. | [optional]
**dailyBudget** | **float** | The maximum amount that can be spend in one day for this campaign. The amount should always have two decimals precision. | [optional]
**totalBudget** | **float** | The total budget that can be spend for this campaign. The amount should always have two decimals precision. | [optional]
**bidding** | [**\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\UpdateBiddingModel**](UpdateBiddingModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
