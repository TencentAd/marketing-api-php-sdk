<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\LeadsCallRecordApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class LeadsCallRecordApiContainer extends ApiContainer
{
    /** @var LeadsCallRecordApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LeadsCallRecordApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LeadsCallRecordApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LeadsCallRecordApi leadsCallRecordGet function
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
            $response = $this->apiInstance->leadsCallRecordGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LeadsCallRecordApi leadsCallRecordGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->leadsCallRecordGetAsync($data);
            return $response;
        });
    }
}
