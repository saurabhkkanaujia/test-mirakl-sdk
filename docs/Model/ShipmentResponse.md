# # ShipmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique shipment identifier used by Connect. This identifier can be used as a primary key, but it must not be shared with final users. | [optional]
**channel_shipment_id** | **string** | Shipment identifier on the sales channel. This identifier is unique for a sales channel, but multiple channels can use the same identifier. | [optional]
**created_at** | **\DateTime** | Shipment creation date | [optional]
**updated_at** | **\DateTime** | Date of last shipment modification | [optional]
**items** | [**\Ced\Model\ShipmentItemResponse[]**](ShipmentItemResponse.md) | Items to ship | [optional]
**carrier** | **string** | Carrier company name | [optional]
**tracking_number** | **string** | Carrier tracking number | [optional]
**tracking_url** | **string** | Carrier tracking URL | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
