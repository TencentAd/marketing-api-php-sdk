<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AssetPermissionsScenesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AssetPermissionsScenesApiContainer extends ApiContainer
{
    /** @var AssetPermissionsScenesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AssetPermissionsScenesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AssetPermissionsScenesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AssetPermissionsScenesApi assetPermissionsScenesUpdate function
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
            $response = $this->apiInstance->assetPermissionsScenesUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AssetPermissionsScenesApi assetPermissionsScenesUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->assetPermissionsScenesUpdateAsync($data);
            return $response;
        });
    }
}
