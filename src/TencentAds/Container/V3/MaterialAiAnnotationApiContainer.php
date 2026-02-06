<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MaterialAiAnnotationApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MaterialAiAnnotationApiContainer extends ApiContainer
{
    /** @var MaterialAiAnnotationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MaterialAiAnnotationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MaterialAiAnnotationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MaterialAiAnnotationApi materialAiAnnotationAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialAiAnnotationAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MaterialAiAnnotationApi materialAiAnnotationAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialAiAnnotationAddAsync($data);
            return $response;
        });
    }
}
