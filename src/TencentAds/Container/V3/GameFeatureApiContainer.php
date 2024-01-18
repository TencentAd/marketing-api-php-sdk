<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\GameFeatureApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

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
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingTargetDetailId = isset($params['marketing_target_detail_id']) ? $params['marketing_target_detail_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->gameFeatureGet($accountId, $marketingTargetType, $marketingTargetDetailId, $fields);
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
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingTargetDetailId = isset($params['marketing_target_detail_id']) ? $params['marketing_target_detail_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->gameFeatureGetAsync($accountId, $marketingTargetType, $marketingTargetDetailId, $fields);
            return $response;
        });
    }
}
