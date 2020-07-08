<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdcreativeTemplatePreviewApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdcreativeTemplatePreviewApiContainer extends ApiContainer
{
    /** @var AdcreativeTemplatePreviewApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdcreativeTemplatePreviewApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdcreativeTemplatePreviewApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdcreativeTemplatePreviewApi adcreativeTemplatePreviewGet function
     * @param array params
     * @return \TencentAds\Model\AdcreativeTemplatePreviewGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adcreativeTemplatePreviewGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdcreativeTemplatePreviewApi adcreativeTemplatePreviewGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adcreativeTemplatePreviewGetAsync($data);
            return $response;
        });
    }
}
