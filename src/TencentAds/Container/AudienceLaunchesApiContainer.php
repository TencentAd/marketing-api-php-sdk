<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AudienceLaunchesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AudienceLaunchesApiContainer extends ApiContainer
{
    /** @var AudienceLaunchesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AudienceLaunchesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AudienceLaunchesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AudienceLaunchesApi audienceLaunchesAdd function
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
            $response = $this->apiInstance->audienceLaunchesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AudienceLaunchesApi audienceLaunchesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->audienceLaunchesAddAsync($data);
            return $response;
        });
    }
}
