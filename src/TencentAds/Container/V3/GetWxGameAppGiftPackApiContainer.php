<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\GetWxGameAppGiftPackApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class GetWxGameAppGiftPackApiContainer extends ApiContainer
{
    /** @var GetWxGameAppGiftPackApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return GetWxGameAppGiftPackApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new GetWxGameAppGiftPackApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle GetWxGameAppGiftPackApi getWxGameAppGiftPackGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->getWxGameAppGiftPackGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle GetWxGameAppGiftPackApi getWxGameAppGiftPackGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->getWxGameAppGiftPackGetAsync($data);
            return $response;
        });
    }
}
