<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MuseDeriveSwitchSettingsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MuseDeriveSwitchSettingsApiContainer extends ApiContainer
{
    /** @var MuseDeriveSwitchSettingsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MuseDeriveSwitchSettingsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MuseDeriveSwitchSettingsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MuseDeriveSwitchSettingsApi museDeriveSwitchSettingsGet function
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
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingCarrierType = isset($params['marketing_carrier_type']) ? $params['marketing_carrier_type'] : null;
            $automaticSiteEnabled = isset($params['automatic_site_enabled']) ? $params['automatic_site_enabled'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->museDeriveSwitchSettingsGet($accountId, $marketingTargetType, $marketingCarrierType, $automaticSiteEnabled, $siteSet, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MuseDeriveSwitchSettingsApi museDeriveSwitchSettingsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingCarrierType = isset($params['marketing_carrier_type']) ? $params['marketing_carrier_type'] : null;
            $automaticSiteEnabled = isset($params['automatic_site_enabled']) ? $params['automatic_site_enabled'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->museDeriveSwitchSettingsGetAsync($accountId, $marketingTargetType, $marketingCarrierType, $automaticSiteEnabled, $siteSet, $fields);
            return $response;
        });
    }
}
