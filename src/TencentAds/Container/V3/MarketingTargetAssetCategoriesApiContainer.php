<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MarketingTargetAssetCategoriesApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MarketingTargetAssetCategoriesApiContainer extends ApiContainer
{
    /** @var MarketingTargetAssetCategoriesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MarketingTargetAssetCategoriesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MarketingTargetAssetCategoriesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MarketingTargetAssetCategoriesApi marketingTargetAssetCategoriesGet function
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
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->marketingTargetAssetCategoriesGet($organizationId, $marketingTargetType, $marketingAssetType, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MarketingTargetAssetCategoriesApi marketingTargetAssetCategoriesGetAsync function
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
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->marketingTargetAssetCategoriesGetAsync($organizationId, $marketingTargetType, $marketingAssetType, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
