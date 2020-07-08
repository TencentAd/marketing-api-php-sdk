<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdcreativesRelatedCapabilityApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdcreativesRelatedCapabilityApiContainer extends ApiContainer
{
    /** @var AdcreativesRelatedCapabilityApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdcreativesRelatedCapabilityApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdcreativesRelatedCapabilityApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdcreativesRelatedCapabilityApi adcreativesRelatedCapabilityGet function
     * @param array params
     * @return \TencentAds\Model\AdcreativesRelatedCapabilityGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $adId = isset($params['ad_id']) ? $params['ad_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adcreativesRelatedCapabilityGet($accountId, $adId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdcreativesRelatedCapabilityApi adcreativesRelatedCapabilityGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $adId = isset($params['ad_id']) ? $params['ad_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adcreativesRelatedCapabilityGetAsync($accountId, $adId, $fields);
            return $response;
        });
    }
}
