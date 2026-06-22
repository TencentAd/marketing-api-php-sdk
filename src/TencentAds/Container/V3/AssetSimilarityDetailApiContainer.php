<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\AssetSimilarityDetailApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class AssetSimilarityDetailApiContainer extends ApiContainer
{
    /** @var AssetSimilarityDetailApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AssetSimilarityDetailApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AssetSimilarityDetailApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AssetSimilarityDetailApi assetSimilarityDetailGet function
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
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $creativeAssetId = isset($params['creative_asset_id']) ? $params['creative_asset_id'] : null;
            $creativeAssetType = isset($params['creative_asset_type']) ? $params['creative_asset_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->assetSimilarityDetailGet($accountId, $organizationId, $creativeAssetId, $creativeAssetType, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AssetSimilarityDetailApi assetSimilarityDetailGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $creativeAssetId = isset($params['creative_asset_id']) ? $params['creative_asset_id'] : null;
            $creativeAssetType = isset($params['creative_asset_type']) ? $params['creative_asset_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->assetSimilarityDetailGetAsync($accountId, $organizationId, $creativeAssetId, $creativeAssetType, $fields);
            return $response;
        });
    }


    /**
     * Handle AssetSimilarityDetailApi assetSimilarityDetailUpdate function
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
            $response = $this->apiInstance->assetSimilarityDetailUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AssetSimilarityDetailApi assetSimilarityDetailUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->assetSimilarityDetailUpdateAsync($data);
            return $response;
        });
    }
}
