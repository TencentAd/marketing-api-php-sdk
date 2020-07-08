<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CustomAudienceInsightsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CustomAudienceInsightsApiContainer extends ApiContainer
{
    /** @var CustomAudienceInsightsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CustomAudienceInsightsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CustomAudienceInsightsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CustomAudienceInsightsApi customAudienceInsightsGet function
     * @param array params
     * @return \TencentAds\Model\CustomAudienceInsightsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $audienceId = isset($params['audience_id']) ? $params['audience_id'] : null;
            $dimensionType = isset($params['dimension_type']) ? $params['dimension_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->customAudienceInsightsGet($accountId, $audienceId, $dimensionType, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomAudienceInsightsApi customAudienceInsightsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $audienceId = isset($params['audience_id']) ? $params['audience_id'] : null;
            $dimensionType = isset($params['dimension_type']) ? $params['dimension_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->customAudienceInsightsGetAsync($accountId, $audienceId, $dimensionType, $fields);
            return $response;
        });
    }
}
