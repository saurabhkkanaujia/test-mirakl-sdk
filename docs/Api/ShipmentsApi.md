# Ced\ShipmentsApi

All URIs are relative to https://miraklconnect.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShipment()**](ShipmentsApi.md#createShipment) | **POST** /orders/{order_id}/shipments | Ship items of a Connect order |


## `createShipment()`

```php
createShipment($order_id, $create_shipment_request): \Ced\Model\ShipmentResponse
```

Ship items of a Connect order

Use this API to ship one or more items from the same order within the same package (using the same tracking information). We recommend integrating this API in synchronous mode, directly in your shipment creation process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = Ced\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ced\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'order_id' => 1328ab88-0412-40f9-bc8f-deb4e338fb84, // string | Connect order identifier
    'create_shipment_request' => new \Ced\Model\CreateShipmentRequest(), // \Ced\Model\CreateShipmentRequest | Shipment object and its items' details
];

try {
    $result = $apiInstance->createShipment($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Connect order identifier | |
| **create_shipment_request** | [**\Ced\Model\CreateShipmentRequest**](../Model/CreateShipmentRequest.md)| Shipment object and its items&#39; details | |

### Return type

[**\Ced\Model\ShipmentResponse**](../Model/ShipmentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
