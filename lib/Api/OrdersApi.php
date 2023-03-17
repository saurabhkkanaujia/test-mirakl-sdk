<?php
/**
 * OrdersApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Ced
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mirakl Connect APIs
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: afcae4e6-28a6-4477-a8ed-d78442ed50d5
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ced\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ced\ApiException;
use Ced\Configuration;
use Ced\HeaderSelector;
use Ced\ObjectSerializer;

/**
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  Ced
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrdersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'acceptOrderLines' => [
            'application/json',
        ],
        'listOrders' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation acceptOrderLines
     *
     * Accept or refuse order lines
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $order_id Order identifier in Mirakl Connect (required)
     * @param  \Ced\Model\AcceptOrderLinesRequest $accept_order_lines_request accept_order_lines_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['acceptOrderLines'] to see the possible values for this operation
     *
     * @throws \Ced\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function acceptOrderLines($associative_array)
    {
        $this->acceptOrderLinesWithHttpInfo($associative_array);
    }

    /**
     * Operation acceptOrderLinesWithHttpInfo
     *
     * Accept or refuse order lines
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $order_id Order identifier in Mirakl Connect (required)
     * @param  \Ced\Model\AcceptOrderLinesRequest $accept_order_lines_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['acceptOrderLines'] to see the possible values for this operation
     *
     * @throws \Ced\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function acceptOrderLinesWithHttpInfo($associative_array)
    {
        $request = $this->acceptOrderLinesRequest($associative_array);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation acceptOrderLinesAsync
     *
     * Accept or refuse order lines
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $order_id Order identifier in Mirakl Connect (required)
     * @param  \Ced\Model\AcceptOrderLinesRequest $accept_order_lines_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['acceptOrderLines'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function acceptOrderLinesAsync($associative_array)
    {
        return $this->acceptOrderLinesAsyncWithHttpInfo($associative_array)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation acceptOrderLinesAsyncWithHttpInfo
     *
     * Accept or refuse order lines
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $order_id Order identifier in Mirakl Connect (required)
     * @param  \Ced\Model\AcceptOrderLinesRequest $accept_order_lines_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['acceptOrderLines'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function acceptOrderLinesAsyncWithHttpInfo($associative_array)
    {
        $returnType = '';
        $request = $this->acceptOrderLinesRequest($associative_array);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'acceptOrderLines'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $order_id Order identifier in Mirakl Connect (required)
     * @param  \Ced\Model\AcceptOrderLinesRequest $accept_order_lines_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['acceptOrderLines'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function acceptOrderLinesRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $order_id = array_key_exists('order_id', $associative_array) ? $associative_array['order_id'] : null;
        $accept_order_lines_request = array_key_exists('accept_order_lines_request', $associative_array) ? $associative_array['accept_order_lines_request'] : null;
        $contentType = $associative_array['contentType'] ?? self::contentTypes['acceptOrderLines'][0];
        
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling acceptOrderLines'
            );
        }

        // verify the required parameter 'accept_order_lines_request' is set
        if ($accept_order_lines_request === null || (is_array($accept_order_lines_request) && count($accept_order_lines_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept_order_lines_request when calling acceptOrderLines'
            );
        }


        $resourcePath = '/orders/{order_id}/accept';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'order_id' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($accept_order_lines_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($accept_order_lines_request));
            } else {
                $httpBody = $accept_order_lines_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listOrders
     *
     * List Mirakl Connect orders
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string[] $order_ids Filter by Connect order identifiers (optional)
     * @param  string[] $statuses Filter by order statuses (optional)
     * @param  \DateTime $updated_from Select orders that were last updated in Mirakl Connect from the specified date time. (optional)
     * @param  string $fulfillment_type Filter by fulfillment channel (optional)
     * @param  string $page_token Token to access the next or previous page (optional)
     * @param  int $limit Maximum number of listed orders (optional, default to 10)
     * @param  string $sort How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listOrders'] to see the possible values for this operation
     *
     * @throws \Ced\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ced\Model\OrdersPageResponse
     */
    public function listOrders($associative_array)
    {
        list($response) = $this->listOrdersWithHttpInfo($associative_array);
        return $response;
    }

    /**
     * Operation listOrdersWithHttpInfo
     *
     * List Mirakl Connect orders
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string[] $order_ids Filter by Connect order identifiers (optional)
     * @param  string[] $statuses Filter by order statuses (optional)
     * @param  \DateTime $updated_from Select orders that were last updated in Mirakl Connect from the specified date time. (optional)
     * @param  string $fulfillment_type Filter by fulfillment channel (optional)
     * @param  string $page_token Token to access the next or previous page (optional)
     * @param  int $limit Maximum number of listed orders (optional, default to 10)
     * @param  string $sort How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listOrders'] to see the possible values for this operation
     *
     * @throws \Ced\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ced\Model\OrdersPageResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listOrdersWithHttpInfo($associative_array)
    {
        $request = $this->listOrdersRequest($associative_array);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Ced\Model\OrdersPageResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Ced\Model\OrdersPageResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ced\Model\OrdersPageResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ced\Model\OrdersPageResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ced\Model\OrdersPageResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listOrdersAsync
     *
     * List Mirakl Connect orders
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string[] $order_ids Filter by Connect order identifiers (optional)
     * @param  string[] $statuses Filter by order statuses (optional)
     * @param  \DateTime $updated_from Select orders that were last updated in Mirakl Connect from the specified date time. (optional)
     * @param  string $fulfillment_type Filter by fulfillment channel (optional)
     * @param  string $page_token Token to access the next or previous page (optional)
     * @param  int $limit Maximum number of listed orders (optional, default to 10)
     * @param  string $sort How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listOrders'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listOrdersAsync($associative_array)
    {
        return $this->listOrdersAsyncWithHttpInfo($associative_array)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listOrdersAsyncWithHttpInfo
     *
     * List Mirakl Connect orders
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string[] $order_ids Filter by Connect order identifiers (optional)
     * @param  string[] $statuses Filter by order statuses (optional)
     * @param  \DateTime $updated_from Select orders that were last updated in Mirakl Connect from the specified date time. (optional)
     * @param  string $fulfillment_type Filter by fulfillment channel (optional)
     * @param  string $page_token Token to access the next or previous page (optional)
     * @param  int $limit Maximum number of listed orders (optional, default to 10)
     * @param  string $sort How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listOrders'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listOrdersAsyncWithHttpInfo($associative_array)
    {
        $returnType = '\Ced\Model\OrdersPageResponse';
        $request = $this->listOrdersRequest($associative_array);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listOrders'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string[] $order_ids Filter by Connect order identifiers (optional)
     * @param  string[] $statuses Filter by order statuses (optional)
     * @param  \DateTime $updated_from Select orders that were last updated in Mirakl Connect from the specified date time. (optional)
     * @param  string $fulfillment_type Filter by fulfillment channel (optional)
     * @param  string $page_token Token to access the next or previous page (optional)
     * @param  int $limit Maximum number of listed orders (optional, default to 10)
     * @param  string $sort How the results should be sorted. Must follow \&quot;sort&#x3D;criterion,direction\&quot; format as described in Mirakl API Documentation (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listOrders'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listOrdersRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $order_ids = array_key_exists('order_ids', $associative_array) ? $associative_array['order_ids'] : null;
        $statuses = array_key_exists('statuses', $associative_array) ? $associative_array['statuses'] : null;
        $updated_from = array_key_exists('updated_from', $associative_array) ? $associative_array['updated_from'] : null;
        $fulfillment_type = array_key_exists('fulfillment_type', $associative_array) ? $associative_array['fulfillment_type'] : null;
        $page_token = array_key_exists('page_token', $associative_array) ? $associative_array['page_token'] : null;
        $limit = array_key_exists('limit', $associative_array) ? $associative_array['limit'] : 10;
        $sort = array_key_exists('sort', $associative_array) ? $associative_array['sort'] : null;
        $contentType = $associative_array['contentType'] ?? self::contentTypes['listOrders'][0];
        





        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling OrdersApi.listOrders, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling OrdersApi.listOrders, must be bigger than or equal to 1.');
        }
        


        $resourcePath = '/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_ids,
            'order_ids', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $statuses,
            'statuses', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updated_from,
            'updated_from', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $fulfillment_type,
            'fulfillment_type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_token,
            'page_token', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}