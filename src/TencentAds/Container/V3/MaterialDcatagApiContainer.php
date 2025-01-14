<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MaterialDcatagApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MaterialDcatagApiContainer extends ApiContainer
{
    /** @var MaterialDcatagApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MaterialDcatagApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MaterialDcatagApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MaterialDcatagApi materialDcatagAdd function
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
            $response = $this->apiInstance->materialDcatagAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MaterialDcatagApi materialDcatagAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->materialDcatagAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle MaterialDcatagApi materialDcatagGet function
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
            $imageIdList = isset($params['image_id_list']) ? $params['image_id_list'] : null;
            $mediaIdList = isset($params['media_id_list']) ? $params['media_id_list'] : null;
            $marketingAssetId = isset($params['marketing_asset_id']) ? $params['marketing_asset_id'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingAssetOuterSpec = isset($params['marketing_asset_outer_spec']) ? $params['marketing_asset_outer_spec'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->materialDcatagGet($accountId, $imageIdList, $mediaIdList, $marketingAssetId, $marketingTargetType, $marketingAssetOuterSpec, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MaterialDcatagApi materialDcatagGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $imageIdList = isset($params['image_id_list']) ? $params['image_id_list'] : null;
            $mediaIdList = isset($params['media_id_list']) ? $params['media_id_list'] : null;
            $marketingAssetId = isset($params['marketing_asset_id']) ? $params['marketing_asset_id'] : null;
            $marketingTargetType = isset($params['marketing_target_type']) ? $params['marketing_target_type'] : null;
            $marketingAssetOuterSpec = isset($params['marketing_asset_outer_spec']) ? $params['marketing_asset_outer_spec'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->materialDcatagGetAsync($accountId, $imageIdList, $mediaIdList, $marketingAssetId, $marketingTargetType, $marketingAssetOuterSpec, $page, $pageSize, $fields);
            return $response;
        });
    }
}
