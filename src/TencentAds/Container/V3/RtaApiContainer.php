<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\RtaApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class RtaApiContainer extends ApiContainer
{
    /** @var RtaApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return RtaApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new RtaApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle RtaApi rtaInfo function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function info(array $params = [])
    {
        return $this->handleMiddleware('info', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->rtaInfo($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle RtaApi rtaInfoAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function infoAsync(array $params = [])
    {
        return $this->handleMiddleware('info', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->rtaInfoAsync($data);
            return $response;
        });
    }
}
