<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AssetPrePermissionsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AssetPrePermissionsApiContainer extends ApiContainer
{
    /** @var AssetPrePermissionsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AssetPrePermissionsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AssetPrePermissionsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AssetPrePermissionsApi assetPrePermissionsGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $assetType = isset($params['asset_type']) ? $params['asset_type'] : null;
            $assetId = isset($params['asset_id']) ? $params['asset_id'] : null;
            $assetName = isset($params['asset_name']) ? $params['asset_name'] : null;
            $pathType = isset($params['path_type']) ? $params['path_type'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->assetPrePermissionsGet($accountId, $assetType, $assetId, $assetName, $pathType, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AssetPrePermissionsApi assetPrePermissionsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $assetType = isset($params['asset_type']) ? $params['asset_type'] : null;
            $assetId = isset($params['asset_id']) ? $params['asset_id'] : null;
            $assetName = isset($params['asset_name']) ? $params['asset_name'] : null;
            $pathType = isset($params['path_type']) ? $params['path_type'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->assetPrePermissionsGetAsync($accountId, $assetType, $assetId, $assetName, $pathType, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle AssetPrePermissionsApi assetPrePermissionsUpdate function
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
            $response = $this->apiInstance->assetPrePermissionsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AssetPrePermissionsApi assetPrePermissionsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->assetPrePermissionsUpdateAsync($data);
            return $response;
        });
    }
}
