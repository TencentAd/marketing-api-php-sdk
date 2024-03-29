<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MarketingTargetAssetPropertyValuesApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MarketingTargetAssetPropertyValuesApiContainer extends ApiContainer
{
    /** @var MarketingTargetAssetPropertyValuesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MarketingTargetAssetPropertyValuesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MarketingTargetAssetPropertyValuesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MarketingTargetAssetPropertyValuesApi marketingTargetAssetPropertyValuesGet function
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
            $propertyName = isset($params['property_name']) ? $params['property_name'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->marketingTargetAssetPropertyValuesGet($organizationId, $marketingTargetType, $marketingAssetType, $marketingAssetCategory, $propertyName, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MarketingTargetAssetPropertyValuesApi marketingTargetAssetPropertyValuesGetAsync function
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
            $propertyName = isset($params['property_name']) ? $params['property_name'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->marketingTargetAssetPropertyValuesGetAsync($organizationId, $marketingTargetType, $marketingAssetType, $marketingAssetCategory, $propertyName, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
