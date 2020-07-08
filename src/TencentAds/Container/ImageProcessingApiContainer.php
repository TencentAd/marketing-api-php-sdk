<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ImageProcessingApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ImageProcessingApiContainer extends ApiContainer
{
    /** @var ImageProcessingApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ImageProcessingApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ImageProcessingApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ImageProcessingApi imageProcessingAdd function
     * @param array params
     * @return \TencentAds\Model\ImageProcessingAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->imageProcessingAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ImageProcessingApi imageProcessingAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->imageProcessingAddAsync($data);
            return $response;
        });
    }
}
