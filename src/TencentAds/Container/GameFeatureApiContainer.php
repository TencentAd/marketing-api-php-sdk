<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\GameFeatureApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class GameFeatureApiContainer extends ApiContainer
{
    /** @var GameFeatureApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return GameFeatureApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new GameFeatureApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle GameFeatureApi gameFeatureAdd function
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
            $response = $this->apiInstance->gameFeatureAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle GameFeatureApi gameFeatureAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->gameFeatureAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle GameFeatureApi gameFeatureGet function
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
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $promotedObjectId = isset($params['promoted_object_id']) ? $params['promoted_object_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->gameFeatureGet($accountId, $promotedObjectType, $promotedObjectId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle GameFeatureApi gameFeatureGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $promotedObjectId = isset($params['promoted_object_id']) ? $params['promoted_object_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->gameFeatureGetAsync($accountId, $promotedObjectType, $promotedObjectId, $fields);
            return $response;
        });
    }


    /**
     * Handle GameFeatureApi gameFeatureUpdate function
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
            $response = $this->apiInstance->gameFeatureUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle GameFeatureApi gameFeatureUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->gameFeatureUpdateAsync($data);
            return $response;
        });
    }
}
