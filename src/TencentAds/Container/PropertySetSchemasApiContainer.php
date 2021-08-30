<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\PropertySetSchemasApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class PropertySetSchemasApiContainer extends ApiContainer
{
    /** @var PropertySetSchemasApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return PropertySetSchemasApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new PropertySetSchemasApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle PropertySetSchemasApi propertySetSchemasAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->propertySetSchemasAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PropertySetSchemasApi propertySetSchemasAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->propertySetSchemasAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle PropertySetSchemasApi propertySetSchemasGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $propertySetId = isset($params['property_set_id']) ? $params['property_set_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->propertySetSchemasGet($accountId, $propertySetId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PropertySetSchemasApi propertySetSchemasGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $propertySetId = isset($params['property_set_id']) ? $params['property_set_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->propertySetSchemasGetAsync($accountId, $propertySetId, $fields);
            return $response;
        });
    }


    /**
     * Handle PropertySetSchemasApi propertySetSchemasUpdate function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->propertySetSchemasUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PropertySetSchemasApi propertySetSchemasUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->propertySetSchemasUpdateAsync($data);
            return $response;
        });
    }
}
