<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\UserPropertiesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class UserPropertiesApiContainer extends ApiContainer
{
    /** @var UserPropertiesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return UserPropertiesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new UserPropertiesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle UserPropertiesApi userPropertiesAdd function
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
            $response = $this->apiInstance->userPropertiesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UserPropertiesApi userPropertiesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->userPropertiesAddAsync($data);
            return $response;
        });
    }
}
