<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdcreativeTemplateApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdcreativeTemplateApiContainer extends ApiContainer
{
    /** @var AdcreativeTemplateApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdcreativeTemplateApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdcreativeTemplateApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdcreativeTemplateApi adcreativeTemplateGet function
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
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $automaticSiteEnabled = isset($params['automatic_site_enabled']) ? $params['automatic_site_enabled'] : null;
            $isDynamicCreative = isset($params['is_dynamic_creative']) ? $params['is_dynamic_creative'] : null;
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $dynamicCreativeType = isset($params['dynamic_creative_type']) ? $params['dynamic_creative_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adcreativeTemplateGet($accountId, $promotedObjectType, $siteSet, $automaticSiteEnabled, $isDynamicCreative, $adcreativeTemplateId, $dynamicCreativeType, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdcreativeTemplateApi adcreativeTemplateGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $automaticSiteEnabled = isset($params['automatic_site_enabled']) ? $params['automatic_site_enabled'] : null;
            $isDynamicCreative = isset($params['is_dynamic_creative']) ? $params['is_dynamic_creative'] : null;
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $dynamicCreativeType = isset($params['dynamic_creative_type']) ? $params['dynamic_creative_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adcreativeTemplateGetAsync($accountId, $promotedObjectType, $siteSet, $automaticSiteEnabled, $isDynamicCreative, $adcreativeTemplateId, $dynamicCreativeType, $fields);
            return $response;
        });
    }
}
