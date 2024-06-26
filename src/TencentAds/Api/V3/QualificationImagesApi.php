<?php
/**
 * QualificationImagesApi
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
 * QualificationImagesApi Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QualificationImagesApi
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
     * Operation qualificationImagesAdd
     *
     * @param  int|mixed $accountId accountId (required)
     * @param  string|mixed $signature signature (required)
     * @param  \SplFileObject|mixed $file file (required)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentAds\Model\V3\QualificationImagesAddResponse|mixed
     */
    public function qualificationImagesAdd($accountId, $signature, $file)
    {
        list($response) = $this->qualificationImagesAddWithHttpInfo($accountId, $signature, $file);
        return $response;
    }

    /**
     * Operation qualificationImagesAddWithHttpInfo
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $signature (required)
     * @param  \SplFileObject|mixed $file (required)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentAds\Model\V3\QualificationImagesAddResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function qualificationImagesAddWithHttpInfo($accountId, $signature, $file)
    {
        $returnType = '\TencentAds\Model\V3\QualificationImagesAddResponse';
        $request = $this->qualificationImagesAddRequest($accountId, $signature, $file);

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
                        '\TencentAds\Model\V3\QualificationImagesAddResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation qualificationImagesAddAsync
     *
     * 
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $signature (required)
     * @param  \SplFileObject|mixed $file (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function qualificationImagesAddAsync($accountId, $signature, $file)
    {
        return $this->qualificationImagesAddAsyncWithHttpInfo($accountId, $signature, $file)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation qualificationImagesAddAsyncWithHttpInfo
     *
     * 
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $signature (required)
     * @param  \SplFileObject|mixed $file (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function qualificationImagesAddAsyncWithHttpInfo($accountId, $signature, $file)
    {
        $returnType = '\TencentAds\Model\V3\QualificationImagesAddResponse';
        $request = $this->qualificationImagesAddRequest($accountId, $signature, $file);

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
     * Create request for operation 'qualificationImagesAdd'
     *
     * @param  int|mixed $accountId (required)
     * @param  string|mixed $signature (required)
     * @param  \SplFileObject|mixed $file (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function qualificationImagesAddRequest($accountId, $signature, $file)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling qualificationImagesAdd'
            );
        }
        // verify the required parameter 'signature' is set
        if ($signature === null || (is_array($signature) && count($signature) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $signature when calling qualificationImagesAdd'
            );
        }
        // verify the required parameter 'file' is set
        if ($file === null || (is_array($file) && count($file) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling qualificationImagesAdd'
            );
        }

        $resourcePath = '/qualification_images/add';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($accountId !== null) {
            $formParams['account_id'] = ObjectSerializer::toFormValue($accountId);
        }
        // form params
        if ($signature !== null) {
            $formParams['signature'] = ObjectSerializer::toFormValue($signature);
        }
        // form params
        if ($file !== null) {
            $multipart = true;
            if (class_exists('\GuzzleHttp\Psr7\Utils')) {
                $formParams['file'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            } else {
                $formParams['file'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($file), 'rb');
            }
        }
        // body params
        $_tempBody = null;

        if (in_array('multipart/form-data', ['multipart/form-data'])) {
            $multipart = true;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation qualificationImagesGet
     *
     * @param  int|mixed $accountId accountId (required)
     * @param  string[]|mixed $imageIds imageIds (required)
     * @param  int|mixed $page page (required)
     * @param  int|mixed $pageSize pageSize (required)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentAds\Model\V3\QualificationImagesGetResponse|mixed
     */
    public function qualificationImagesGet($accountId, $imageIds, $page, $pageSize, $fields = null)
    {
        list($response) = $this->qualificationImagesGetWithHttpInfo($accountId, $imageIds, $page, $pageSize, $fields);
        return $response;
    }

    /**
     * Operation qualificationImagesGetWithHttpInfo
     *
     * @param  int|mixed $accountId (required)
     * @param  string[]|mixed $imageIds (required)
     * @param  int|mixed $page (required)
     * @param  int|mixed $pageSize (required)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentAds\Model\V3\QualificationImagesGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function qualificationImagesGetWithHttpInfo($accountId, $imageIds, $page, $pageSize, $fields = null)
    {
        $returnType = '\TencentAds\Model\V3\QualificationImagesGetResponse';
        $request = $this->qualificationImagesGetRequest($accountId, $imageIds, $page, $pageSize, $fields);

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
                        '\TencentAds\Model\V3\QualificationImagesGetResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation qualificationImagesGetAsync
     *
     * 
     *
     * @param  int|mixed $accountId (required)
     * @param  string[]|mixed $imageIds (required)
     * @param  int|mixed $page (required)
     * @param  int|mixed $pageSize (required)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function qualificationImagesGetAsync($accountId, $imageIds, $page, $pageSize, $fields = null)
    {
        return $this->qualificationImagesGetAsyncWithHttpInfo($accountId, $imageIds, $page, $pageSize, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation qualificationImagesGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  int|mixed $accountId (required)
     * @param  string[]|mixed $imageIds (required)
     * @param  int|mixed $page (required)
     * @param  int|mixed $pageSize (required)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function qualificationImagesGetAsyncWithHttpInfo($accountId, $imageIds, $page, $pageSize, $fields = null)
    {
        $returnType = '\TencentAds\Model\V3\QualificationImagesGetResponse';
        $request = $this->qualificationImagesGetRequest($accountId, $imageIds, $page, $pageSize, $fields);

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
     * Create request for operation 'qualificationImagesGet'
     *
     * @param  int|mixed $accountId (required)
     * @param  string[]|mixed $imageIds (required)
     * @param  int|mixed $page (required)
     * @param  int|mixed $pageSize (required)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function qualificationImagesGetRequest($accountId, $imageIds, $page, $pageSize, $fields = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling qualificationImagesGet'
            );
        }
        // verify the required parameter 'imageIds' is set
        if ($imageIds === null || (is_array($imageIds) && count($imageIds) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $imageIds when calling qualificationImagesGet'
            );
        }
        // verify the required parameter 'page' is set
        if ($page === null || (is_array($page) && count($page) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $page when calling qualificationImagesGet'
            );
        }
        // verify the required parameter 'pageSize' is set
        if ($pageSize === null || (is_array($pageSize) && count($pageSize) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pageSize when calling qualificationImagesGet'
            );
        }

        $resourcePath = '/qualification_images/get';
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
        if (is_array($imageIds)) {
           $queryParams['image_ids'] = json_encode($imageIds);
        } else
        if ($imageIds !== null) {
            $queryParams['image_ids'] = ObjectSerializer::toQueryValue($imageIds);
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
