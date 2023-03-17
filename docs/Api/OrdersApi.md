# Ced\OrdersApi

All URIs are relative to https://miraklconnect.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptOrderLines()**](OrdersApi.md#acceptOrderLines) | **PUT** /orders/{order_id}/accept | Accept or refuse order lines |
| [**listOrders()**](OrdersApi.md#listOrders) | **GET** /orders | List Mirakl Connect orders |


## `acceptOrderLines()`

```php
acceptOrderLines($order_id, $accept_order_lines_request)
```

Accept or refuse order lines

Use this API to accept or refuse order lines that are in the <code>AWAITING_ACCEPTANCE</code> status, from Mirakl Connect. The API also synchronizes the order line status on the Mirakl platform. We recommend integrating this API in synchronous mode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = Ced\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ced\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'order_id' => 0024_COMMERCIAL_ID-A, // string | Order identifier in Mirakl Connect
    'accept_order_lines_request' => new \Ced\Model\AcceptOrderLinesRequest(), // \Ced\Model\AcceptOrderLinesRequest
];

try {
    $apiInstance->acceptOrderLines($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->acceptOrderLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order identifier in Mirakl Connect | |
| **accept_order_lines_request** | [**\Ced\Model\AcceptOrderLinesRequest**](../Model/AcceptOrderLinesRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders($order_ids, $statuses, $updated_from, $fulfillment_type, $page_token, $limit, $sort): \Ced\Model\OrdersPageResponse
```

List Mirakl Connect orders

Use this API to synchronize Mirakl Connect orders with your system. We recommend integrating this API in asynchronous mode. You can retrieve all orders updated since the last call, and update your referential accordingly. To do so, schedule a task that calls this API using the <code>updated_from</code> parameter valued with the last execution time of the task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = Ced\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ced\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$associative_array = [
    'order_ids' => array('order_ids_example'), // string[] | Filter by Connect order identifiers
    'statuses' => array('statuses_example'), // string[] | Filter by order statuses
    'updated_from' => 2021-01-01T08:30Z, // \DateTime | Select orders that were last updated in Mirakl Connect from the specified date time.
    'fulfillment_type' => 'fulfillment_type_example', // string | Filter by fulfillment channel
    'page_token' => 'page_token_example', // string | Token to access the next or previous page
    'limit' => 10, // int | Maximum number of listed orders
    'sort' => 'sort_example', // string | How the results should be sorted. Must follow \"sort=criterion,direction\" format as described in Mirakl API Documentation
];

try {
    $result = $apiInstance->listOrders($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter names below.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_ids** | [**string[]**](../Model/string.md)| Filter by Connect order identifiers | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| Filter by order statuses | [optional] |
| **updated_from** | **\DateTime**| Select orders that were last updated in Mirakl Connect from the specified date time. | [optional] |
| **fulfillment_type** | **string**| Filter by fulfillment channel | [optional] |
| **page_token** | **string**| Token to access the next or previous page | [optional] |
| **limit** | **int**| Maximum number of listed orders | [optional] [default to 10] |
| **sort** | **string**| How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation | [optional] |

### Return type

[**\Ced\Model\OrdersPageResponse**](../Model/OrdersPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
