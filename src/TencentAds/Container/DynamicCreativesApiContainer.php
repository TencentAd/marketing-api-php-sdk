<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DynamicCreativesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DynamicCreativesApiContainer extends ApiContainer
{
    /** @var DynamicCreativesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DynamicCreativesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DynamicCreativesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DynamicCreativesApi dynamicCreativesAdd function
     * @param array params
     * @return \TencentAds\Model\DynamicCreativesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dynamicCreativesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicCreativesApi dynamicCreativesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dynamicCreativesAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle DynamicCreativesApi dynamicCreativesGet function
     * @param array params
     * @return \TencentAds\Model\DynamicCreativesGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicCreativesGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicCreativesApi dynamicCreativesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicCreativesGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle DynamicCreativesApi dynamicCreativesUpdate function
     * @param array params
     * @return \TencentAds\Model\DynamicCreativesUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dynamicCreativesUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicCreativesApi dynamicCreativesUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dynamicCreativesUpdateAsync($data);
            return $response;
        });
    }
}
