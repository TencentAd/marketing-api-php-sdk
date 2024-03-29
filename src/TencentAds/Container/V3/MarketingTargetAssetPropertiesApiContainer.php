<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MarketingTargetAssetPropertiesApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MarketingTargetAssetPropertiesApiContainer extends ApiContainer
{
    /** @var MarketingTargetAssetPropertiesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MarketingTargetAssetPropertiesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MarketingTargetAssetPropertiesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MarketingTargetAssetPropertiesApi marketingTargetAssetPropertiesGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingAssetType = isset($params['marketing_asset_type']) ? $params['marketing_asset_type'] : null;
            $marketingAssetCategory = isset($params['marketing_asset_category']) ? $params['marketing_asset_category'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->marketingTargetAssetPropertiesGet($organizationId, $marketingTargetType, $marketingAssetType, $marketingAssetCategory, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MarketingTargetAssetPropertiesApi marketingTargetAssetPropertiesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingAssetType = isset($params['marketing_asset_type']) ? $params['marketing_asset_type'] : null;
            $marketingAssetCategory = isset($params['marketing_asset_category']) ? $params['marketing_asset_category'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->marketingTargetAssetPropertiesGetAsync($organizationId, $marketingTargetType, $marketingAssetType, $marketingAssetCategory, $fields);
            return $response;
        });
    }
}
