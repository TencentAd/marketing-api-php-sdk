<?php
/**
 * DynamicAdImageTemplatesApi
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
 * DynamicAdImageTemplatesApi Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicAdImageTemplatesApi
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
     * Operation dynamicAdImageTemplatesGet
     *
     * 获取动态商品图片模板
     *
     * @param  int|mixed $accountId accountId (required)
     * @param  int|mixed $productCatalogId productCatalogId (required)
     * @param  string|mixed $productMode productMode (required)
     * @param  int|mixed $dynamicAdTemplateWidth dynamicAdTemplateWidth (required)
     * @param  int|mixed $dynamicAdTemplateHeight dynamicAdTemplateHeight (required)
     * @param  string|mixed $dynamicAdTemplateOwnershipType dynamicAdTemplateOwnershipType (optional)
     * @param  \TencentAds\Model\V3\FilteringStruct[]|mixed $filtering filtering (optional)
     * @param  int|mixed $page page (optional)
     * @param  int|mixed $pageSize pageSize (optional)
     * @param  int[]|mixed $templateIdList templateIdList (optional)
     * @param  string|mixed $templateName templateName (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TencentAds\Model\V3\DynamicAdImageTemplatesGetResponse|mixed
     */
    public function dynamicAdImageTemplatesGet($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType = null, $filtering = null, $page = null, $pageSize = null, $templateIdList = null, $templateName = null, $fields = null)
    {
        list($response) = $this->dynamicAdImageTemplatesGetWithHttpInfo($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType, $filtering, $page, $pageSize, $templateIdList, $templateName, $fields);
        return $response;
    }

    /**
     * Operation dynamicAdImageTemplatesGetWithHttpInfo
     *
     * 获取动态商品图片模板
     *
     * @param  int|mixed $accountId (required)
     * @param  int|mixed $productCatalogId (required)
     * @param  string|mixed $productMode (required)
     * @param  int|mixed $dynamicAdTemplateWidth (required)
     * @param  int|mixed $dynamicAdTemplateHeight (required)
     * @param  string|mixed $dynamicAdTemplateOwnershipType (optional)
     * @param  \TencentAds\Model\V3\FilteringStruct[]|mixed $filtering (optional)
     * @param  int|mixed $page (optional)
     * @param  int|mixed $pageSize (optional)
     * @param  int[]|mixed $templateIdList (optional)
     * @param  string|mixed $templateName (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \TencentAds\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TencentAds\Model\V3\DynamicAdImageTemplatesGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function dynamicAdImageTemplatesGetWithHttpInfo($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType = null, $filtering = null, $page = null, $pageSize = null, $templateIdList = null, $templateName = null, $fields = null)
    {
        $returnType = '\TencentAds\Model\V3\DynamicAdImageTemplatesGetResponse';
        $request = $this->dynamicAdImageTemplatesGetRequest($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType, $filtering, $page, $pageSize, $templateIdList, $templateName, $fields);

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
                        '\TencentAds\Model\V3\DynamicAdImageTemplatesGetResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation dynamicAdImageTemplatesGetAsync
     *
     * 获取动态商品图片模板
     *
     * @param  int|mixed $accountId (required)
     * @param  int|mixed $productCatalogId (required)
     * @param  string|mixed $productMode (required)
     * @param  int|mixed $dynamicAdTemplateWidth (required)
     * @param  int|mixed $dynamicAdTemplateHeight (required)
     * @param  string|mixed $dynamicAdTemplateOwnershipType (optional)
     * @param  \TencentAds\Model\V3\FilteringStruct[]|mixed $filtering (optional)
     * @param  int|mixed $page (optional)
     * @param  int|mixed $pageSize (optional)
     * @param  int[]|mixed $templateIdList (optional)
     * @param  string|mixed $templateName (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dynamicAdImageTemplatesGetAsync($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType = null, $filtering = null, $page = null, $pageSize = null, $templateIdList = null, $templateName = null, $fields = null)
    {
        return $this->dynamicAdImageTemplatesGetAsyncWithHttpInfo($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType, $filtering, $page, $pageSize, $templateIdList, $templateName, $fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dynamicAdImageTemplatesGetAsyncWithHttpInfo
     *
     * 获取动态商品图片模板
     *
     * @param  int|mixed $accountId (required)
     * @param  int|mixed $productCatalogId (required)
     * @param  string|mixed $productMode (required)
     * @param  int|mixed $dynamicAdTemplateWidth (required)
     * @param  int|mixed $dynamicAdTemplateHeight (required)
     * @param  string|mixed $dynamicAdTemplateOwnershipType (optional)
     * @param  \TencentAds\Model\V3\FilteringStruct[]|mixed $filtering (optional)
     * @param  int|mixed $page (optional)
     * @param  int|mixed $pageSize (optional)
     * @param  int[]|mixed $templateIdList (optional)
     * @param  string|mixed $templateName (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dynamicAdImageTemplatesGetAsyncWithHttpInfo($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType = null, $filtering = null, $page = null, $pageSize = null, $templateIdList = null, $templateName = null, $fields = null)
    {
        $returnType = '\TencentAds\Model\V3\DynamicAdImageTemplatesGetResponse';
        $request = $this->dynamicAdImageTemplatesGetRequest($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType, $filtering, $page, $pageSize, $templateIdList, $templateName, $fields);

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
     * Create request for operation 'dynamicAdImageTemplatesGet'
     *
     * @param  int|mixed $accountId (required)
     * @param  int|mixed $productCatalogId (required)
     * @param  string|mixed $productMode (required)
     * @param  int|mixed $dynamicAdTemplateWidth (required)
     * @param  int|mixed $dynamicAdTemplateHeight (required)
     * @param  string|mixed $dynamicAdTemplateOwnershipType (optional)
     * @param  \TencentAds\Model\V3\FilteringStruct[]|mixed $filtering (optional)
     * @param  int|mixed $page (optional)
     * @param  int|mixed $pageSize (optional)
     * @param  int[]|mixed $templateIdList (optional)
     * @param  string|mixed $templateName (optional)
     * @param  string[]|mixed $fields 返回参数的字段列表 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dynamicAdImageTemplatesGetRequest($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType = null, $filtering = null, $page = null, $pageSize = null, $templateIdList = null, $templateName = null, $fields = null)
    {
        // verify the required parameter 'accountId' is set
        if ($accountId === null || (is_array($accountId) && count($accountId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accountId when calling dynamicAdImageTemplatesGet'
            );
        }
        // verify the required parameter 'productCatalogId' is set
        if ($productCatalogId === null || (is_array($productCatalogId) && count($productCatalogId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $productCatalogId when calling dynamicAdImageTemplatesGet'
            );
        }
        // verify the required parameter 'productMode' is set
        if ($productMode === null || (is_array($productMode) && count($productMode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $productMode when calling dynamicAdImageTemplatesGet'
            );
        }
        // verify the required parameter 'dynamicAdTemplateWidth' is set
        if ($dynamicAdTemplateWidth === null || (is_array($dynamicAdTemplateWidth) && count($dynamicAdTemplateWidth) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dynamicAdTemplateWidth when calling dynamicAdImageTemplatesGet'
            );
        }
        // verify the required parameter 'dynamicAdTemplateHeight' is set
        if ($dynamicAdTemplateHeight === null || (is_array($dynamicAdTemplateHeight) && count($dynamicAdTemplateHeight) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dynamicAdTemplateHeight when calling dynamicAdImageTemplatesGet'
            );
        }

        $resourcePath = '/dynamic_ad_image_templates/get';
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
        if ($productCatalogId !== null) {
            $queryParams['product_catalog_id'] = ObjectSerializer::toQueryValue($productCatalogId);
        }
        // query params
        if ($productMode !== null) {
            $queryParams['product_mode'] = ObjectSerializer::toQueryValue($productMode);
        }
        // query params
        if ($dynamicAdTemplateOwnershipType !== null) {
            $queryParams['dynamic_ad_template_ownership_type'] = ObjectSerializer::toQueryValue($dynamicAdTemplateOwnershipType);
        }
        // query params
        if ($dynamicAdTemplateWidth !== null) {
            $queryParams['dynamic_ad_template_width'] = ObjectSerializer::toQueryValue($dynamicAdTemplateWidth);
        }
        // query params
        if ($dynamicAdTemplateHeight !== null) {
            $queryParams['dynamic_ad_template_height'] = ObjectSerializer::toQueryValue($dynamicAdTemplateHeight);
        }
        // query params
        if (is_array($filtering)) {
            $queryParams['filtering'] = $filtering;
        } else
        if ($filtering !== null) {
            $queryParams['filtering'] = ObjectSerializer::toQueryValue($filtering);
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
        if (is_array($templateIdList)) {
            $queryParams['template_id_list'] = $templateIdList;
        } else
        if ($templateIdList !== null) {
            $queryParams['template_id_list'] = ObjectSerializer::toQueryValue($templateIdList);
        }
        // query params
        if ($templateName !== null) {
            $queryParams['template_name'] = ObjectSerializer::toQueryValue($templateName);
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
