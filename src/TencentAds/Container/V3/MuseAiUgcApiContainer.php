<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MuseAiUgcApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MuseAiUgcApiContainer extends ApiContainer
{
    /** @var MuseAiUgcApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MuseAiUgcApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MuseAiUgcApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MuseAiUgcApi museAiUgcAdd function
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
            $response = $this->apiInstance->museAiUgcAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MuseAiUgcApi museAiUgcAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->museAiUgcAddAsync($data);
            return $response;
        });
    }
}
