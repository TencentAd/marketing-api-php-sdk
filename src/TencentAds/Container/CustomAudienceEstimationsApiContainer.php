<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CustomAudienceEstimationsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CustomAudienceEstimationsApiContainer extends ApiContainer
{
    /** @var CustomAudienceEstimationsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CustomAudienceEstimationsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CustomAudienceEstimationsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CustomAudienceEstimationsApi customAudienceEstimationsGet function
     * @param array params
     * @return \TencentAds\Model\CustomAudienceEstimationsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customAudienceEstimationsGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomAudienceEstimationsApi customAudienceEstimationsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->customAudienceEstimationsGetAsync($data);
            return $response;
        });
    }
}
