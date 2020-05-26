<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\FeatureDataFilesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class FeatureDataFilesApiContainer extends ApiContainer
{
    /** @var FeatureDataFilesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return FeatureDataFilesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new FeatureDataFilesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle FeatureDataFilesApi featureDataFilesAdd function
     * @param array params
     * @return \TencentAds\Model\FeatureDataFilesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userIdType = isset($params['user_id_type']) ? $params['user_id_type'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $openAppId = isset($params['open_app_id']) ? $params['open_app_id'] : null;
            $response = $this->apiInstance->featureDataFilesAdd($accountId, $userIdType, $file, $openAppId);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle FeatureDataFilesApi featureDataFilesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userIdType = isset($params['user_id_type']) ? $params['user_id_type'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $openAppId = isset($params['open_app_id']) ? $params['open_app_id'] : null;
            $response = $this->apiInstance->featureDataFilesAddAsync($accountId, $userIdType, $file, $openAppId);
            return $response;
        });
    }


    /**
     * Handle FeatureDataFilesApi featureDataFilesGet function
     * @param array params
     * @return \TencentAds\Model\FeatureDataFilesListData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->featureDataFilesGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle FeatureDataFilesApi featureDataFilesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->featureDataFilesGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
