<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\XijingPageByComponentsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class XijingPageByComponentsApiContainer extends ApiContainer
{
    /** @var XijingPageByComponentsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return XijingPageByComponentsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new XijingPageByComponentsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle XijingPageByComponentsApi xijingPageByComponentsAdd function
     * @param array params
     * @return \TencentAds\Model\XijingPageByComponentsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->xijingPageByComponentsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle XijingPageByComponentsApi xijingPageByComponentsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->xijingPageByComponentsAddAsync($data);
            return $response;
        });
    }
}
