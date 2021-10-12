<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\PropertyFileSessionsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class PropertyFileSessionsApiContainer extends ApiContainer
{
    /** @var PropertyFileSessionsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return PropertyFileSessionsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new PropertyFileSessionsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle PropertyFileSessionsApi propertyFileSessionsAdd function
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
            $response = $this->apiInstance->propertyFileSessionsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PropertyFileSessionsApi propertyFileSessionsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->propertyFileSessionsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle PropertyFileSessionsApi propertyFileSessionsUpdate function
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
            $response = $this->apiInstance->propertyFileSessionsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PropertyFileSessionsApi propertyFileSessionsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->propertyFileSessionsUpdateAsync($data);
            return $response;
        });
    }
}
