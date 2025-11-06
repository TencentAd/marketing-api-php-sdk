<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\NegativewordsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class NegativewordsApiContainer extends ApiContainer
{
    /** @var NegativewordsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return NegativewordsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new NegativewordsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle NegativewordsApi negativewordsAdd function
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
            $response = $this->apiInstance->negativewordsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle NegativewordsApi negativewordsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->negativewordsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle NegativewordsApi negativewordsGet function
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
            $adgroupIds = isset($params['adgroup_ids']) ? $params['adgroup_ids'] : null;
            $dynamicCreativeIds = isset($params['dynamic_creative_ids']) ? $params['dynamic_creative_ids'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->negativewordsGet($accountId, $adgroupIds, $dynamicCreativeIds, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle NegativewordsApi negativewordsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $adgroupIds = isset($params['adgroup_ids']) ? $params['adgroup_ids'] : null;
            $dynamicCreativeIds = isset($params['dynamic_creative_ids']) ? $params['dynamic_creative_ids'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->negativewordsGetAsync($accountId, $adgroupIds, $dynamicCreativeIds, $fields);
            return $response;
        });
    }


    /**
     * Handle NegativewordsApi negativewordsUpdate function
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
            $response = $this->apiInstance->negativewordsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle NegativewordsApi negativewordsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->negativewordsUpdateAsync($data);
            return $response;
        });
    }
}
