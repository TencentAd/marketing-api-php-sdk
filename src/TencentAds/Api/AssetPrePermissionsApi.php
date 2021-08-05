<?php
/**
 * AssetPrePermissionsApi
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use TencentAds\ApiException;
use TencentAds\Configuration;
use TencentAds\HeaderSelector;
use TencentAds\ObjectSerializer;

/**
 * AssetPrePermissionsApi Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetPrePermissionsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation assetPrePermissionsGet
     *
     * 获取待确认接收授权列表接口
     *
     * @param  int|mixed $accountId accountId (required)
     * @param  string|mixed $assetType assetType (required)
     * @param  int|mixed $assetId assetId (optional)
     * @param  string|mixed $assetName assetName (optional)
     * @param  string|mixed $pathType pathType (optional)
     * @param  int|mixed $page page (optional)
     * @param  int|mixed $pageSize pageSize (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentAds\Model\AssetPrePermissionsGetResponse|mixed
     */
    public function assetPrePermissionsGet($accountId, $assetType, $assetId = null, $assetName = null, $pathType = null, $page = null, $pageSize = null, $fields = null)
    {
        list($response) = $this->assetPrePermissionsGetWithHttpInfo($accountId, $assetType, $assetId, $assetName, $pathType, $page, $pageSize, $fields);
        return $response;
    }

    /**
     * Operation assetPrePermissionsGetWithHttpInfo
     *
     * 获取待确认接收授权列表接口
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $assetType (required)
     * @param  int|mixed $assetId (optional)
     * @param  string|mixed $assetName (optional)
     * @param  string|mixed $pathType (optional)
     * @param  int|mixed $page (optional)
     * @param  int|mixed $pageSize (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentAds\Model\AssetPrePermissionsGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function assetPrePermissionsGetWithHttpInfo($accountId, $assetType, $assetId = null, $assetName = null, $pathType = null, $page = null, $pageSize = null, $fields = null)
    {
        $returnType = '\TencentAds\Model\AssetPrePermissionsGetResponse';
        $request = $this->assetPrePermissionsGetRequest($accountId, $assetType, $assetId, $assetName, $pathType, $page, $pageSize, $fields);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\TencentAds\Model\AssetPrePermissionsGetResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation assetPrePermissionsGetAsync
     *
     * 获取待确认接收授权列表接口
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $assetType (required)
     * @param  int|mixed $assetId (optional)
     * @param  string|mixed $assetName (optional)
     * @param  string|mixed $pathType (optional)
     * @param  int|mixed $page (optional)
     * @param  int|mixed $pageSize (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assetPrePermissionsGetAsync($accountId, $assetType, $assetId = null, $assetName = null, $pathType = null, $page = null, $pageSize = null, $fields = null)
    {
        return $this->assetPrePermissionsGetAsyncWithHttpInfo($accountId, $assetType, $assetId, $assetName, $pathType, $page, $pageSize, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation assetPrePermissionsGetAsyncWithHttpInfo
     *
     * 获取待确认接收授权列表接口
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $assetType (required)
     * @param  int|mixed $assetId (optional)
     * @param  string|mixed $assetName (optional)
     * @param  string|mixed $pathType (optional)
     * @param  int|mixed $page (optional)
     * @param  int|mixed $pageSize (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assetPrePermissionsGetAsyncWithHttpInfo($accountId, $assetType, $assetId = null, $assetName = null, $pathType = null, $page = null, $pageSize = null, $fields = null)
    {
        $returnType = '\TencentAds\Model\AssetPrePermissionsGetResponse';
        $request = $this->assetPrePermissionsGetRequest($accountId, $assetType, $assetId, $assetName, $pathType, $page, $pageSize, $fields);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'assetPrePermissionsGet'
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $assetType (required)
     * @param  int|mixed $assetId (optional)
     * @param  string|mixed $assetName (optional)
     * @param  string|mixed $pathType (optional)
     * @param  int|mixed $page (optional)
     * @param  int|mixed $pageSize (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function assetPrePermissionsGetRequest($accountId, $assetType, $assetId = null, $assetName = null, $pathType = null, $page = null, $pageSize = null, $fields = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling assetPrePermissionsGet'
            );
        }
        // verify the required parameter 'assetType' is set
        if ($assetType === null || (is_array($assetType) && count($assetType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $assetType when calling assetPrePermissionsGet'
            );
        }

        $resourcePath = '/asset_pre_permissions/get';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($accountId !== null) {
            $queryParams['account_id'] = ObjectSerializer::toQueryValue($accountId);
        }
        // query params
        if ($assetType !== null) {
            $queryParams['asset_type'] = ObjectSerializer::toQueryValue($assetType);
        }
        // query params
        if ($assetId !== null) {
            $queryParams['asset_id'] = ObjectSerializer::toQueryValue($assetId);
        }
        // query params
        if ($assetName !== null) {
            $queryParams['asset_name'] = ObjectSerializer::toQueryValue($assetName);
        }
        // query params
        if ($pathType !== null) {
            $queryParams['path_type'] = ObjectSerializer::toQueryValue($pathType);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($pageSize !== null) {
            $queryParams['page_size'] = ObjectSerializer::toQueryValue($pageSize);
        }
        // query params
        if (is_array($fields)) {
            $queryParams['fields'] = $fields;
        } else
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }


        // body params
        $_tempBody = null;

        if (in_array('multipart/form-data', ['text/plain'])) {
            $multipart = true;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['text/plain']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('nonce');
        if ($apiKey !== null) {
            $queryParams['nonce'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('timestamp');
        if ($apiKey !== null) {
            $queryParams['timestamp'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation assetPrePermissionsUpdate
     *
     * 资产预授权确认
     *
     * @param  \TencentAds\Model\AssetPrePermissionsUpdateRequest|mixed $data data (required)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentAds\Model\AssetPrePermissionsUpdateResponse|mixed
     */
    public function assetPrePermissionsUpdate($data)
    {
        list($response) = $this->assetPrePermissionsUpdateWithHttpInfo($data);
        return $response;
    }

    /**
     * Operation assetPrePermissionsUpdateWithHttpInfo
     *
     * 资产预授权确认
     *
     * @param  \TencentAds\Model\AssetPrePermissionsUpdateRequest|mixed $data (required)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentAds\Model\AssetPrePermissionsUpdateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function assetPrePermissionsUpdateWithHttpInfo($data)
    {
        $returnType = '\TencentAds\Model\AssetPrePermissionsUpdateResponse';
        $request = $this->assetPrePermissionsUpdateRequest($data);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\TencentAds\Model\AssetPrePermissionsUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation assetPrePermissionsUpdateAsync
     *
     * 资产预授权确认
     *
     * @param  \TencentAds\Model\AssetPrePermissionsUpdateRequest|mixed $data (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assetPrePermissionsUpdateAsync($data)
    {
        return $this->assetPrePermissionsUpdateAsyncWithHttpInfo($data)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation assetPrePermissionsUpdateAsyncWithHttpInfo
     *
     * 资产预授权确认
     *
     * @param  \TencentAds\Model\AssetPrePermissionsUpdateRequest|mixed $data (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function assetPrePermissionsUpdateAsyncWithHttpInfo($data)
    {
        $returnType = '\TencentAds\Model\AssetPrePermissionsUpdateResponse';
        $request = $this->assetPrePermissionsUpdateRequest($data);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'assetPrePermissionsUpdate'
     *
     * @param  \TencentAds\Model\AssetPrePermissionsUpdateRequest|mixed $data (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function assetPrePermissionsUpdateRequest($data)
    {
        // verify the required parameter 'data' is set
        if ($data === null || (is_array($data) && count($data) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $data when calling assetPrePermissionsUpdate'
            );
        }

        $resourcePath = '/asset_pre_permissions/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($data)) {
            $_tempBody = $data;
        }

        if (in_array('multipart/form-data', ['application/json', 'application/xml'])) {
            $multipart = true;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json', 'application/xml']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('nonce');
        if ($apiKey !== null) {
            $queryParams['nonce'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('timestamp');
        if ($apiKey !== null) {
            $queryParams['timestamp'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
