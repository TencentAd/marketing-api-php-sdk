<?php
/**
 * GameFeatureTagsApi
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
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Api\V3;

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
 * GameFeatureTagsApi Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GameFeatureTagsApi
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
     * Operation gameFeatureTagsGet
     *
     * 获取游戏特征标签
     *
     * @param  int|mixed $accountId accountId (required)
     * @param  string|mixed $type type (required)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentAds\Model\V3\GameFeatureTagsGetResponse|mixed
     */
    public function gameFeatureTagsGet($accountId, $type, $fields = null)
    {
        list($response) = $this->gameFeatureTagsGetWithHttpInfo($accountId, $type, $fields);
        return $response;
    }

    /**
     * Operation gameFeatureTagsGetWithHttpInfo
     *
     * 获取游戏特征标签
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $type (required)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentAds\Model\V3\GameFeatureTagsGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function gameFeatureTagsGetWithHttpInfo($accountId, $type, $fields = null)
    {
        $returnType = '\TencentAds\Model\V3\GameFeatureTagsGetResponse';
        $request = $this->gameFeatureTagsGetRequest($accountId, $type, $fields);

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
                        '\TencentAds\Model\V3\GameFeatureTagsGetResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation gameFeatureTagsGetAsync
     *
     * 获取游戏特征标签
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $type (required)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gameFeatureTagsGetAsync($accountId, $type, $fields = null)
    {
        return $this->gameFeatureTagsGetAsyncWithHttpInfo($accountId, $type, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation gameFeatureTagsGetAsyncWithHttpInfo
     *
     * 获取游戏特征标签
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $type (required)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gameFeatureTagsGetAsyncWithHttpInfo($accountId, $type, $fields = null)
    {
        $returnType = '\TencentAds\Model\V3\GameFeatureTagsGetResponse';
        $request = $this->gameFeatureTagsGetRequest($accountId, $type, $fields);

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
     * Create request for operation 'gameFeatureTagsGet'
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $type (required)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function gameFeatureTagsGetRequest($accountId, $type, $fields = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling gameFeatureTagsGet'
            );
        }
        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling gameFeatureTagsGet'
            );
        }

        $resourcePath = '/game_feature_tags/get';
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
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type);
        }
        // query params
        if (is_array($fields)) {
           $queryParams['fields'] = json_encode($fields);
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
                if (class_exists('\GuzzleHttp\Psr7\Query')) {
                    $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
                } else {
                    $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
                }
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

        if (class_exists('\GuzzleHttp\Psr7\Query')) {
            $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        } else {
            $query = \GuzzleHttp\Psr7\build_query($queryParams);
        }
        return new Request(
            'GET',
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
