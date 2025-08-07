<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\CreativeTemplateListApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class CreativeTemplateListApiContainer extends ApiContainer
{
    /** @var CreativeTemplateListApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CreativeTemplateListApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CreativeTemplateListApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CreativeTemplateListApi creativeTemplateListGet function
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
            $marketingSubGoal = isset($params['marketing_sub_goal']) ? $params['marketing_sub_goal'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingCarrierType = isset($params['marketing_carrier_type']) ? $params['marketing_carrier_type'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $dynamicAbilityType = isset($params['dynamic_ability_type']) ? $params['dynamic_ability_type'] : null;
            $wechatSceneSpecPosition = isset($params['wechat_scene_spec_position']) ? $params['wechat_scene_spec_position'] : null;
            $creativeTemplateId = isset($params['creative_template_id']) ? $params['creative_template_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $dynamicAdType = isset($params['dynamic_ad_type']) ? $params['dynamic_ad_type'] : null;
            $dynamicCreativeType = isset($params['dynamic_creative_type']) ? $params['dynamic_creative_type'] : null;
            $supportSiteSet = isset($params['support_site_set']) ? $params['support_site_set'] : null;
            $bidMode = isset($params['bid_mode']) ? $params['bid_mode'] : null;
            $wechatChannelsScene = isset($params['wechat_channels_scene']) ? $params['wechat_channels_scene'] : null;
            $displayScene = isset($params['display_scene']) ? $params['display_scene'] : null;
            $pcScene = isset($params['pc_scene']) ? $params['pc_scene'] : null;
            $adgroupId = isset($params['adgroup_id']) ? $params['adgroup_id'] : null;
            $adgroupType = isset($params['adgroup_type']) ? $params['adgroup_type'] : null;
            $mpaSpec = isset($params['mpa_spec']) ? $params['mpa_spec'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->creativeTemplateListGet($accountId, $marketingGoal, $marketingSubGoal, $marketingTargetType, $marketingCarrierType, $siteSet, $dynamicAbilityType, $wechatSceneSpecPosition, $creativeTemplateId, $page, $pageSize, $dynamicAdType, $dynamicCreativeType, $supportSiteSet, $bidMode, $wechatChannelsScene, $displayScene, $pcScene, $adgroupId, $adgroupType, $mpaSpec, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CreativeTemplateListApi creativeTemplateListGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $marketingGoal = isset($params['marketing_goal']) ? $params['marketing_goal'] : null;
            $marketingSubGoal = isset($params['marketing_sub_goal']) ? $params['marketing_sub_goal'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingCarrierType = isset($params['marketing_carrier_type']) ? $params['marketing_carrier_type'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $dynamicAbilityType = isset($params['dynamic_ability_type']) ? $params['dynamic_ability_type'] : null;
            $wechatSceneSpecPosition = isset($params['wechat_scene_spec_position']) ? $params['wechat_scene_spec_position'] : null;
            $creativeTemplateId = isset($params['creative_template_id']) ? $params['creative_template_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $dynamicAdType = isset($params['dynamic_ad_type']) ? $params['dynamic_ad_type'] : null;
            $dynamicCreativeType = isset($params['dynamic_creative_type']) ? $params['dynamic_creative_type'] : null;
            $supportSiteSet = isset($params['support_site_set']) ? $params['support_site_set'] : null;
            $bidMode = isset($params['bid_mode']) ? $params['bid_mode'] : null;
            $wechatChannelsScene = isset($params['wechat_channels_scene']) ? $params['wechat_channels_scene'] : null;
            $displayScene = isset($params['display_scene']) ? $params['display_scene'] : null;
            $pcScene = isset($params['pc_scene']) ? $params['pc_scene'] : null;
            $adgroupId = isset($params['adgroup_id']) ? $params['adgroup_id'] : null;
            $adgroupType = isset($params['adgroup_type']) ? $params['adgroup_type'] : null;
            $mpaSpec = isset($params['mpa_spec']) ? $params['mpa_spec'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->creativeTemplateListGetAsync($accountId, $marketingGoal, $marketingSubGoal, $marketingTargetType, $marketingCarrierType, $siteSet, $dynamicAbilityType, $wechatSceneSpecPosition, $creativeTemplateId, $page, $pageSize, $dynamicAdType, $dynamicCreativeType, $supportSiteSet, $bidMode, $wechatChannelsScene, $displayScene, $pcScene, $adgroupId, $adgroupType, $mpaSpec, $fields);
            return $response;
        });
    }
}
