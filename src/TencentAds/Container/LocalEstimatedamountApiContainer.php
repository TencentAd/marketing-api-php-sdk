<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\LocalEstimatedamountApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class LocalEstimatedamountApiContainer extends ApiContainer
{
    /** @var LocalEstimatedamountApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LocalEstimatedamountApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LocalEstimatedamountApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LocalEstimatedamountApi localEstimatedamountGet function
     * @param array params
     * @return \TencentAds\Model\LocalEstimatedamountGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->localEstimatedamountGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LocalEstimatedamountApi localEstimatedamountGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->localEstimatedamountGetAsync($data);
            return $response;
        });
    }
}
