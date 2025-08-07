<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\OptimizationGoalPermissionsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class OptimizationGoalPermissionsApiContainer extends ApiContainer
{
    /** @var OptimizationGoalPermissionsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OptimizationGoalPermissionsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OptimizationGoalPermissionsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OptimizationGoalPermissionsApi optimizationGoalPermissionsGet function
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
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $marketingGoal = isset($params['marketing_goal']) ? $params['marketing_goal'] : null;
            $marketingSubGoal = isset($params['marketing_sub_goal']) ? $params['marketing_sub_goal'] : null;
            $marketingCarrierType = isset($params['marketing_carrier_type']) ? $params['marketing_carrier_type'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $bidMode = isset($params['bid_mode']) ? $params['bid_mode'] : null;
            $marketingCarrierDetail = isset($params['marketing_carrier_detail']) ? $params['marketing_carrier_detail'] : null;
            $deliveryScene = isset($params['delivery_scene']) ? $params['delivery_scene'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->optimizationGoalPermissionsGet($accountId, $siteSet, $marketingGoal, $marketingSubGoal, $marketingCarrierType, $marketingTargetType, $bidMode, $marketingCarrierDetail, $deliveryScene, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OptimizationGoalPermissionsApi optimizationGoalPermissionsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $marketingGoal = isset($params['marketing_goal']) ? $params['marketing_goal'] : null;
            $marketingSubGoal = isset($params['marketing_sub_goal']) ? $params['marketing_sub_goal'] : null;
            $marketingCarrierType = isset($params['marketing_carrier_type']) ? $params['marketing_carrier_type'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $bidMode = isset($params['bid_mode']) ? $params['bid_mode'] : null;
            $marketingCarrierDetail = isset($params['marketing_carrier_detail']) ? $params['marketing_carrier_detail'] : null;
            $deliveryScene = isset($params['delivery_scene']) ? $params['delivery_scene'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->optimizationGoalPermissionsGetAsync($accountId, $siteSet, $marketingGoal, $marketingSubGoal, $marketingCarrierType, $marketingTargetType, $bidMode, $marketingCarrierDetail, $deliveryScene, $fields);
            return $response;
        });
    }
}
