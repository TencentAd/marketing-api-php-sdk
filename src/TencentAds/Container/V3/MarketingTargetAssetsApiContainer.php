<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MarketingTargetAssetsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MarketingTargetAssetsApiContainer extends ApiContainer
{
    /** @var MarketingTargetAssetsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MarketingTargetAssetsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MarketingTargetAssetsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MarketingTargetAssetsApi marketingTargetAssetsAdd function
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
            $response = $this->apiInstance->marketingTargetAssetsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MarketingTargetAssetsApi marketingTargetAssetsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->marketingTargetAssetsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle MarketingTargetAssetsApi marketingTargetAssetsDelete function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->marketingTargetAssetsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MarketingTargetAssetsApi marketingTargetAssetsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->marketingTargetAssetsDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle MarketingTargetAssetsApi marketingTargetAssetsGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->marketingTargetAssetsGet($marketingTargetType, $accountId, $filtering, $page, $pageSize, $organizationId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MarketingTargetAssetsApi marketingTargetAssetsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->marketingTargetAssetsGetAsync($marketingTargetType, $accountId, $filtering, $page, $pageSize, $organizationId, $fields);
            return $response;
        });
    }


    /**
     * Handle MarketingTargetAssetsApi marketingTargetAssetsUpdate function
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
            $response = $this->apiInstance->marketingTargetAssetsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MarketingTargetAssetsApi marketingTargetAssetsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->marketingTargetAssetsUpdateAsync($data);
            return $response;
        });
    }
}
