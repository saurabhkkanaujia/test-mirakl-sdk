# # OrderLineResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique order line identifier used by Mirakl Connect. This identifier can be used as a primary key, but it must not be shared with final users. | [optional]
**channel_order_line_id** | **string** | Order line identifier on the sales channel. This identifier is not guaranteed to be unique as different channels can use the same identifier. | [optional]
**product** | [**\Ced\Model\OrderProduct**](OrderProduct.md) |  | [optional]
**quantity** | **int** | Quantity of the ordered product after cancellations. Refunds and rejects do not change this field. | [optional]
**price** | [**\Ced\Model\Money**](Money.md) |  | [optional]
**taxes** | [**\Ced\Model\Tax[]**](Tax.md) | Taxes applied to product prices | [optional]
**total_shipping_price** | [**\Ced\Model\Money**](Money.md) |  | [optional]
**shipping_taxes** | [**\Ced\Model\Tax[]**](Tax.md) | Taxes applied to shipping prices | [optional]
**status** | **string** | Order line status | [optional]
**status_reason** | **string** | Additional reason about the order line status. Availability depends on the order line status. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
