# # Product

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product identifiers in the catalog you want to import | [optional]
**gtins** | [**\Ced\Model\Gtin[]**](Gtin.md) | All Global Trade Item Numbers are accepted: EAN, GENCOD, UPC, ISBN… GTINs are used to map your products with those of the marketplace catalog. | [optional]
**standard_prices** | [**\Ced\Model\StandardPrice[]**](StandardPrice.md) | Standard prices of products only (no discount prices). | [optional]
**discount_prices** | [**\Ced\Model\DiscountPrice[]**](DiscountPrice.md) | Discount prices of products. Set this field to null to remove all discount prices. | [optional]
**quantities** | [**\Ced\Model\Quantity[]**](Quantity.md) | Product quantities | [optional]
**images** | [**\Ced\Model\Image[]**](Image.md) | Images associated with products.  The image URL is required for http or https protocoles. Only one image per product is allowed. An example of a correct image URL is : http://my_image.png or https://my_image.png | [optional]
**titles** | [**\Ced\Model\Title[]**](Title.md) | Title with its associated locale that is displayed in the catalog. Set this field to null to remove the title. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
