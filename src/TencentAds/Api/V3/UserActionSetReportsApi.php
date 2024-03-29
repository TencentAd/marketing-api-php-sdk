<?php
/**
 * UserActionSetReportsApi
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
 * UserActionSetReportsApi Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserActionSetReportsApi
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
     * Operation userActionSetReportsGet
     *
     * 获取用户行为数据源报表
     *
     * @param  int|mixed $accountId accountId (required)
     * @param  int|mixed $userActionSetId userActionSetId (required)
     * @param  \TencentAds\Model\V3\DateRangeDn|mixed $dateRange dateRange (required)
     * @param  string|mixed $timeGranularity timeGranularity (required)
     * @param  string|mixed $aggregation aggregation (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentAds\Model\V3\UserActionSetReportsGetResponse|mixed
     */
    public function userActionSetReportsGet($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation = null, $fields = null)
    {
        list($response) = $this->userActionSetReportsGetWithHttpInfo($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation, $fields);
        return $response;
    }

    /**
     * Operation userActionSetReportsGetWithHttpInfo
     *
     * 获取用户行为数据源报表
     *
     * @param  int|mixed $accountId (required)
     * @param  int|mixed $userActionSetId (required)
     * @param  \TencentAds\Model\V3\DateRangeDn|mixed $dateRange (required)
     * @param  string|mixed $timeGranularity (required)
     * @param  string|mixed $aggregation (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentAds\Model\V3\UserActionSetReportsGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function userActionSetReportsGetWithHttpInfo($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation = null, $fields = null)
    {
        $returnType = '\TencentAds\Model\V3\UserActionSetReportsGetResponse';
        $request = $this->userActionSetReportsGetRequest($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation, $fields);

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
                        '\TencentAds\Model\V3\UserActionSetReportsGetResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation userActionSetReportsGetAsync
     *
     * 获取用户行为数据源报表
     *
     * @param  int|mixed $accountId (required)
     * @param  int|mixed $userActionSetId (required)
     * @param  \TencentAds\Model\V3\DateRangeDn|mixed $dateRange (required)
     * @param  string|mixed $timeGranularity (required)
     * @param  string|mixed $aggregation (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userActionSetReportsGetAsync($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation = null, $fields = null)
    {
        return $this->userActionSetReportsGetAsyncWithHttpInfo($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation userActionSetReportsGetAsyncWithHttpInfo
     *
     * 获取用户行为数据源报表
     *
     * @param  int|mixed $accountId (required)
     * @param  int|mixed $userActionSetId (required)
     * @param  \TencentAds\Model\V3\DateRangeDn|mixed $dateRange (required)
     * @param  string|mixed $timeGranularity (required)
     * @param  string|mixed $aggregation (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userActionSetReportsGetAsyncWithHttpInfo($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation = null, $fields = null)
    {
        $returnType = '\TencentAds\Model\V3\UserActionSetReportsGetResponse';
        $request = $this->userActionSetReportsGetRequest($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation, $fields);

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
     * Create request for operation 'userActionSetReportsGet'
     *
     * @param  int|mixed $accountId (required)
     * @param  int|mixed $userActionSetId (required)
     * @param  \TencentAds\Model\V3\DateRangeDn|mixed $dateRange (required)
     * @param  string|mixed $timeGranularity (required)
     * @param  string|mixed $aggregation (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function userActionSetReportsGetRequest($accountId, $userActionSetId, $dateRange, $timeGranularity, $aggregation = null, $fields = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling userActionSetReportsGet'
            );
        }
        // verify the required parameter 'userActionSetId' is set
        if ($userActionSetId === null || (is_array($userActionSetId) && count($userActionSetId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $userActionSetId when calling userActionSetReportsGet'
            );
        }
        // verify the required parameter 'dateRange' is set
        if ($dateRange === null || (is_array($dateRange) && count($dateRange) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dateRange when calling userActionSetReportsGet'
            );
        }
        // verify the required parameter 'timeGranularity' is set
        if ($timeGranularity === null || (is_array($timeGranularity) && count($timeGranularity) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $timeGranularity when calling userActionSetReportsGet'
            );
        }

        $resourcePath = '/user_action_set_reports/get';
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
        if ($userActionSetId !== null) {
            $queryParams['user_action_set_id'] = ObjectSerializer::toQueryValue($userActionSetId);
        }
        // query params
        if ($dateRange !== null) {
            $queryParams['date_range'] = ObjectSerializer::toQueryValue($dateRange);
        }
        // query params
        if ($timeGranularity !== null) {
            $queryParams['time_granularity'] = ObjectSerializer::toQueryValue($timeGranularity);
        }
        // query params
        if ($aggregation !== null) {
            $queryParams['aggregation'] = ObjectSerializer::toQueryValue($aggregation);
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
