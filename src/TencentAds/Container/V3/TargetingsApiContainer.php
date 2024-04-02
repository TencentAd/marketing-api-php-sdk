<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\TargetingsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class TargetingsApiContainer extends ApiContainer
{
    /** @var TargetingsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return TargetingsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new TargetingsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle TargetingsApi targetingsGet function
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
            $response = $this->apiInstance->targetingsGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle TargetingsApi targetingsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->targetingsGetAsync($data);
            return $response;
        });
    }
}
