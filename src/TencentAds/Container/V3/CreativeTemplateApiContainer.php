<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\CreativeTemplateApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class CreativeTemplateApiContainer extends ApiContainer
{
    /** @var CreativeTemplateApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CreativeTemplateApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CreativeTemplateApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CreativeTemplateApi creativeTemplateGet function
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
            $marketingCarrierType = isset($params['marketing_carrier_type']) ? $params['marketing_carrier_type'] : null;
            $deliveryMode = isset($params['delivery_mode']) ? $params['delivery_mode'] : null;
            $marketingSubGoal = isset($params['marketing_sub_goal']) ? $params['marketing_sub_goal'] : null;
            $automaticSiteEnabled = isset($params['automatic_site_enabled']) ? $params['automatic_site_enabled'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $dynamicCreativeType = isset($params['dynamic_creative_type']) ? $params['dynamic_creative_type'] : null;
            $creativeTemplateId = isset($params['creative_template_id']) ? $params['creative_template_id'] : null;
            $conversionLinkAssetId = isset($params['conversion_link_asset_id']) ? $params['conversion_link_asset_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->creativeTemplateGet($accountId, $marketingGoal, $marketingTargetType, $marketingCarrierType, $deliveryMode, $marketingSubGoal, $automaticSiteEnabled, $siteSet, $dynamicCreativeType, $creativeTemplateId, $conversionLinkAssetId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CreativeTemplateApi creativeTemplateGetAsync function
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
            $marketingCarrierType = isset($params['marketing_carrier_type']) ? $params['marketing_carrier_type'] : null;
            $deliveryMode = isset($params['delivery_mode']) ? $params['delivery_mode'] : null;
            $marketingSubGoal = isset($params['marketing_sub_goal']) ? $params['marketing_sub_goal'] : null;
            $automaticSiteEnabled = isset($params['automatic_site_enabled']) ? $params['automatic_site_enabled'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $dynamicCreativeType = isset($params['dynamic_creative_type']) ? $params['dynamic_creative_type'] : null;
            $creativeTemplateId = isset($params['creative_template_id']) ? $params['creative_template_id'] : null;
            $conversionLinkAssetId = isset($params['conversion_link_asset_id']) ? $params['conversion_link_asset_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->creativeTemplateGetAsync($accountId, $marketingGoal, $marketingTargetType, $marketingCarrierType, $deliveryMode, $marketingSubGoal, $automaticSiteEnabled, $siteSet, $dynamicCreativeType, $creativeTemplateId, $conversionLinkAssetId, $fields);
            return $response;
        });
    }
}
