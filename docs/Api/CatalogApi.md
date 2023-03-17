# Ced\CatalogApi

All URIs are relative to https://miraklconnect.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**upsertProducts()**](CatalogApi.md#upsertProducts) | **POST** /products | Create or update products in bulk in your Mirakl Connect catalog. |


## `upsertProducts()`

```php
upsertProducts($upsert_products_request)
```

Create or update products in bulk in your Mirakl Connect catalog.

Create or update products in your Mirakl Connect catalog. Products are created if they do not already exist. The missing fields in the request remain unchanged on the Mirakl Connect catalog (behaves like a PATCH).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = Ced\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ced\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'upsert_products_request' => new \Ced\Model\UpsertProductsRequest(), // \Ced\Model\UpsertProductsRequest
];

try {
    $apiInstance->upsertProducts($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->upsertProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upsert_products_request** | [**\Ced\Model\UpsertProductsRequest**](../Model/UpsertProductsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
