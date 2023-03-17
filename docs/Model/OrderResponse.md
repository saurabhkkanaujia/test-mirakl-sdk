# # OrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique order identifier used by Mirakl Connect. This identifier can be used as a primary key, but it must not be shared with final users. | [optional]
**channel_order_id** | **string** | Order identifier on the sales channel. This identifier is not guaranteed to be unique as multiple channels can use the same identifier. | [optional]
**origin** | [**\Ced\Model\Origin**](Origin.md) |  | [optional]
**created_at** | **\DateTime** | Date time the order was created on the sales channel. | [optional]
**channel_updated_at** | **\DateTime** | Date time the order was last updated on the sales channel (can differ from the modification date time in Connect). | [optional]
**updated_at** | **\DateTime** | Date time the order was last updated in Mirakl Connect. | [optional]
**status** | **string** | Current order status | [optional]
**status_reason** | **string** | Additional reason about the order status. Availability depends on the order status. | [optional]
**order_lines** | [**\Ced\Model\OrderLineResponse[]**](OrderLineResponse.md) | Information about ordered products | [optional]
**billing_info** | [**\Ced\Model\BillingInfo**](BillingInfo.md) |  | [optional]
**shipping_info** | [**\Ced\Model\ShippingInfo**](ShippingInfo.md) |  | [optional]
**fulfillment** | [**\Ced\Model\Fulfillment**](Fulfillment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
