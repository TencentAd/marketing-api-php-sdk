<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdsApiContainer extends ApiContainer
{
    /** @var AdsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdsApi adsAdd function
     * @param array params
     * @return \TencentAds\Model\AdsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdsApi adsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdsApi adsDelete function
     * @param array params
     * @return \TencentAds\Model\AdsDeleteResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdsApi adsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adsDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdsApi adsGet function
     * @param array params
     * @return \TencentAds\Model\AdsGetResponseData
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
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adsGet($accountId, $filtering, $page, $pageSize, $isDeleted, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdsApi adsGetAsync function
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
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adsGetAsync($accountId, $filtering, $page, $pageSize, $isDeleted, $fields);
            return $response;
        });
    }


    /**
     * Handle AdsApi adsUpdate function
     * @param array params
     * @return \TencentAds\Model\AdsUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdsApi adsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adsUpdateAsync($data);
            return $response;
        });
    }


    /**
     * Handle AdsApi adsUpdateConfiguredStatus function
     * @param array params
     * @return \TencentAds\Model\AdsUpdateConfiguredStatusResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function updateConfiguredStatus(array $params = [])
    {
        return $this->handleMiddleware('updateConfiguredStatus', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adsUpdateConfiguredStatus($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdsApi adsUpdateConfiguredStatusAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateConfiguredStatusAsync(array $params = [])
    {
        return $this->handleMiddleware('updateConfiguredStatus', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adsUpdateConfiguredStatusAsync($data);
            return $response;
        });
    }
}
