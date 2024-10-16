<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ConversionLinkAssetAvailableApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ConversionLinkAssetAvailableApiContainer extends ApiContainer
{
    /** @var ConversionLinkAssetAvailableApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ConversionLinkAssetAvailableApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ConversionLinkAssetAvailableApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ConversionLinkAssetAvailableApi conversionLinkAssetAvailableGet function
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
            $marketingGoal = isset($params['marketing_goal']) ? $params['marketing_goal'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingAssetOuterId = isset($params['marketing_asset_outer_id']) ? $params['marketing_asset_outer_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->conversionLinkAssetAvailableGet($accountId, $marketingGoal, $marketingTargetType, $marketingAssetOuterId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ConversionLinkAssetAvailableApi conversionLinkAssetAvailableGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $marketingGoal = isset($params['marketing_goal']) ? $params['marketing_goal'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingAssetOuterId = isset($params['marketing_asset_outer_id']) ? $params['marketing_asset_outer_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->conversionLinkAssetAvailableGetAsync($accountId, $marketingGoal, $marketingTargetType, $marketingAssetOuterId, $fields);
            return $response;
        });
    }
}
