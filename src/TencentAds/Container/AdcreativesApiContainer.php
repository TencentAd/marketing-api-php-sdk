<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdcreativesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdcreativesApiContainer extends ApiContainer
{
    /** @var AdcreativesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdcreativesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdcreativesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdcreativesApi adcreativesAdd function
     * @param array params
     * @return \TencentAds\Model\AdcreativesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adcreativesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdcreativesApi adcreativesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adcreativesAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdcreativesApi adcreativesDelete function
     * @param array params
     * @return \TencentAds\Model\AdcreativesDeleteResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adcreativesDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdcreativesApi adcreativesDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adcreativesDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdcreativesApi adcreativesGet function
     * @param array params
     * @return \TencentAds\Model\AdcreativesGetResponseData
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
            $isDeleted = isset($params['is_deleted']) ? $params['is_deleted'] : null;
            $linkPageTypeCompatible = isset($params['link_page_type_compatible']) ? $params['link_page_type_compatible'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adcreativesGet($accountId, $filtering, $page, $pageSize, $isDeleted, $linkPageTypeCompatible, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdcreativesApi adcreativesGetAsync function
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
            $isDeleted = isset($params['is_deleted']) ? $params['is_deleted'] : null;
            $linkPageTypeCompatible = isset($params['link_page_type_compatible']) ? $params['link_page_type_compatible'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adcreativesGetAsync($accountId, $filtering, $page, $pageSize, $isDeleted, $linkPageTypeCompatible, $fields);
            return $response;
        });
    }


    /**
     * Handle AdcreativesApi adcreativesUpdate function
     * @param array params
     * @return \TencentAds\Model\AdcreativesUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adcreativesUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdcreativesApi adcreativesUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adcreativesUpdateAsync($data);
            return $response;
        });
    }
}
