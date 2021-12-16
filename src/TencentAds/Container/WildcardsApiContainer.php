<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\WildcardsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class WildcardsApiContainer extends ApiContainer
{
    /** @var WildcardsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WildcardsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WildcardsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WildcardsApi wildcardsGet function
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
            $response = $this->apiInstance->wildcardsGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WildcardsApi wildcardsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wildcardsGetAsync($data);
            return $response;
        });
    }
}
