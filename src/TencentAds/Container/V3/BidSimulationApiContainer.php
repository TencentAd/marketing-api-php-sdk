<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\BidSimulationApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class BidSimulationApiContainer extends ApiContainer
{
    /** @var BidSimulationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BidSimulationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BidSimulationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BidSimulationApi bidSimulationGet function
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
            $reqType = isset($params['req_type']) ? $params['req_type'] : null;
            $optimizationGoalLevel = isset($params['optimization_goal_level']) ? $params['optimization_goal_level'] : null;
            $adgroupId = isset($params['adgroup_id']) ? $params['adgroup_id'] : null;
            $bidList = isset($params['bid_list']) ? $params['bid_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->bidSimulationGet($accountId, $reqType, $optimizationGoalLevel, $adgroupId, $bidList, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BidSimulationApi bidSimulationGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $reqType = isset($params['req_type']) ? $params['req_type'] : null;
            $optimizationGoalLevel = isset($params['optimization_goal_level']) ? $params['optimization_goal_level'] : null;
            $adgroupId = isset($params['adgroup_id']) ? $params['adgroup_id'] : null;
            $bidList = isset($params['bid_list']) ? $params['bid_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->bidSimulationGetAsync($accountId, $reqType, $optimizationGoalLevel, $adgroupId, $bidList, $fields);
            return $response;
        });
    }
}
