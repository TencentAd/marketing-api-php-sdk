<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\LeadCluesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class LeadCluesApiContainer extends ApiContainer
{
    /** @var LeadCluesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LeadCluesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LeadCluesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LeadCluesApi leadCluesGet function
     * @param array params
     * @return \TencentAds\Model\LeadCluesGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->leadCluesGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LeadCluesApi leadCluesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->leadCluesGetAsync($data);
            return $response;
        });
    }


    /**
     * Handle LeadCluesApi leadCluesUpdate function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->leadCluesUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LeadCluesApi leadCluesUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->leadCluesUpdateAsync($data);
            return $response;
        });
    }
}
