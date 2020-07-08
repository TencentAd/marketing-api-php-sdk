<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CustomTagFilesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CustomTagFilesApiContainer extends ApiContainer
{
    /** @var CustomTagFilesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CustomTagFilesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CustomTagFilesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CustomTagFilesApi customTagFilesAdd function
     * @param array params
     * @return \TencentAds\Model\CustomTagFilesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userIdType = isset($params['user_id_type']) ? $params['user_id_type'] : null;
            $tagId = isset($params['tag_id']) ? $params['tag_id'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $operationType = isset($params['operation_type']) ? $params['operation_type'] : null;
            $openAppId = isset($params['open_app_id']) ? $params['open_app_id'] : null;
            $response = $this->apiInstance->customTagFilesAdd($accountId, $userIdType, $tagId, $file, $operationType, $openAppId);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomTagFilesApi customTagFilesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userIdType = isset($params['user_id_type']) ? $params['user_id_type'] : null;
            $tagId = isset($params['tag_id']) ? $params['tag_id'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $operationType = isset($params['operation_type']) ? $params['operation_type'] : null;
            $openAppId = isset($params['open_app_id']) ? $params['open_app_id'] : null;
            $response = $this->apiInstance->customTagFilesAddAsync($accountId, $userIdType, $tagId, $file, $operationType, $openAppId);
            return $response;
        });
    }


    /**
     * Handle CustomTagFilesApi customTagFilesGet function
     * @param array params
     * @return \TencentAds\Model\CustomTagFilesGetResponseData
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
            $response = $this->apiInstance->customTagFilesGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomTagFilesApi customTagFilesGetAsync function
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
            $response = $this->apiInstance->customTagFilesGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
