<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\AdParamApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class AdParamApiContainer extends ApiContainer
{
    /** @var AdParamApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdParamApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdParamApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdParamApi adParamGet function
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
            $creativeTemplateId = isset($params['creative_template_id']) ? $params['creative_template_id'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $marketingSubGoal = isset($params['marketing_sub_goal']) ? $params['marketing_sub_goal'] : null;
            $marketingCarrierType = isset($params['marketing_carrier_type']) ? $params['marketing_carrier_type'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $marketingAssetOuterSpec = isset($params['marketing_asset_outer_spec']) ? $params['marketing_asset_outer_spec'] : null;
            $mpaSpec = isset($params['mpa_spec']) ? $params['mpa_spec'] : null;
            $dynamicAdType = isset($params['dynamic_ad_type']) ? $params['dynamic_ad_type'] : null;
            $adgroupType = isset($params['adgroup_type']) ? $params['adgroup_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adParamGet($accountId, $marketingGoal, $creativeTemplateId, $siteSet, $marketingSubGoal, $marketingCarrierType, $marketingTargetType, $productCatalogId, $marketingAssetOuterSpec, $mpaSpec, $dynamicAdType, $adgroupType, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdParamApi adParamGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $marketingGoal = isset($params['marketing_goal']) ? $params['marketing_goal'] : null;
            $creativeTemplateId = isset($params['creative_template_id']) ? $params['creative_template_id'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $marketingSubGoal = isset($params['marketing_sub_goal']) ? $params['marketing_sub_goal'] : null;
            $marketingCarrierType = isset($params['marketing_carrier_type']) ? $params['marketing_carrier_type'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $marketingAssetOuterSpec = isset($params['marketing_asset_outer_spec']) ? $params['marketing_asset_outer_spec'] : null;
            $mpaSpec = isset($params['mpa_spec']) ? $params['mpa_spec'] : null;
            $dynamicAdType = isset($params['dynamic_ad_type']) ? $params['dynamic_ad_type'] : null;
            $adgroupType = isset($params['adgroup_type']) ? $params['adgroup_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adParamGetAsync($accountId, $marketingGoal, $creativeTemplateId, $siteSet, $marketingSubGoal, $marketingCarrierType, $marketingTargetType, $productCatalogId, $marketingAssetOuterSpec, $mpaSpec, $dynamicAdType, $adgroupType, $fields);
            return $response;
        });
    }
}
