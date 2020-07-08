<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AssetPermissionsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AssetPermissionsApiContainer extends ApiContainer
{
    /** @var AssetPermissionsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AssetPermissionsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AssetPermissionsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AssetPermissionsApi assetPermissionsAdd function
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
            $response = $this->apiInstance->assetPermissionsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AssetPermissionsApi assetPermissionsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->assetPermissionsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle AssetPermissionsApi assetPermissionsDelete function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->assetPermissionsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AssetPermissionsApi assetPermissionsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->assetPermissionsDeleteAsync($data);
            return $response;
        });
    }
}
