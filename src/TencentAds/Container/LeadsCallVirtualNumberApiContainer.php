<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\LeadsCallVirtualNumberApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class LeadsCallVirtualNumberApiContainer extends ApiContainer
{
    /** @var LeadsCallVirtualNumberApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LeadsCallVirtualNumberApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LeadsCallVirtualNumberApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LeadsCallVirtualNumberApi leadsCallVirtualNumberGet function
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
            $response = $this->apiInstance->leadsCallVirtualNumberGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LeadsCallVirtualNumberApi leadsCallVirtualNumberGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->leadsCallVirtualNumberGetAsync($data);
            return $response;
        });
    }
}
