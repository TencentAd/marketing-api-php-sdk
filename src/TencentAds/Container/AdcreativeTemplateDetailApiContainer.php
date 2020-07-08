<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdcreativeTemplateDetailApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdcreativeTemplateDetailApiContainer extends ApiContainer
{
    /** @var AdcreativeTemplateDetailApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdcreativeTemplateDetailApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdcreativeTemplateDetailApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdcreativeTemplateDetailApi adcreativeTemplateDetailGet function
     * @param array params
     * @return \TencentAds\Model\AdcreativeTemplateDetailGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $automaticSiteEnabled = isset($params['automatic_site_enabled']) ? $params['automatic_site_enabled'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $isDynamicCreativeAd = isset($params['is_dynamic_creative_ad']) ? $params['is_dynamic_creative_ad'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adcreativeTemplateDetailGet($adcreativeTemplateId, $promotedObjectType, $accountId, $automaticSiteEnabled, $siteSet, $isDynamicCreativeAd, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdcreativeTemplateDetailApi adcreativeTemplateDetailGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $automaticSiteEnabled = isset($params['automatic_site_enabled']) ? $params['automatic_site_enabled'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $isDynamicCreativeAd = isset($params['is_dynamic_creative_ad']) ? $params['is_dynamic_creative_ad'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adcreativeTemplateDetailGetAsync($adcreativeTemplateId, $promotedObjectType, $accountId, $automaticSiteEnabled, $siteSet, $isDynamicCreativeAd, $fields);
            return $response;
        });
    }
}
