<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ReviewUrgeCreativesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ReviewUrgeCreativesApiContainer extends ApiContainer
{
    /** @var ReviewUrgeCreativesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ReviewUrgeCreativesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ReviewUrgeCreativesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ReviewUrgeCreativesApi reviewUrgeCreativesAdd function
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
            $response = $this->apiInstance->reviewUrgeCreativesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReviewUrgeCreativesApi reviewUrgeCreativesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reviewUrgeCreativesAddAsync($data);
            return $response;
        });
    }
}
