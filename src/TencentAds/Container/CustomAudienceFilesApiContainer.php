<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CustomAudienceFilesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CustomAudienceFilesApiContainer extends ApiContainer
{
    /** @var CustomAudienceFilesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CustomAudienceFilesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CustomAudienceFilesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CustomAudienceFilesApi customAudienceFilesAdd function
     * @param array params
     * @return \TencentAds\Model\CustomAudienceFilesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $audienceId = isset($params['audience_id']) ? $params['audience_id'] : null;
            $userIdType = isset($params['user_id_type']) ? $params['user_id_type'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $operationType = isset($params['operation_type']) ? $params['operation_type'] : null;
            $openAppId = isset($params['open_app_id']) ? $params['open_app_id'] : null;
            $saltId = isset($params['salt_id']) ? $params['salt_id'] : null;
            $response = $this->apiInstance->customAudienceFilesAdd($accountId, $audienceId, $userIdType, $file, $operationType, $openAppId, $saltId);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomAudienceFilesApi customAudienceFilesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $audienceId = isset($params['audience_id']) ? $params['audience_id'] : null;
            $userIdType = isset($params['user_id_type']) ? $params['user_id_type'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $operationType = isset($params['operation_type']) ? $params['operation_type'] : null;
            $openAppId = isset($params['open_app_id']) ? $params['open_app_id'] : null;
            $saltId = isset($params['salt_id']) ? $params['salt_id'] : null;
            $response = $this->apiInstance->customAudienceFilesAddAsync($accountId, $audienceId, $userIdType, $file, $operationType, $openAppId, $saltId);
            return $response;
        });
    }


    /**
     * Handle CustomAudienceFilesApi customAudienceFilesGet function
     * @param array params
     * @return \TencentAds\Model\CustomAudienceFilesGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $audienceId = isset($params['audience_id']) ? $params['audience_id'] : null;
            $customAudienceFileId = isset($params['custom_audience_file_id']) ? $params['custom_audience_file_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->customAudienceFilesGet($accountId, $audienceId, $customAudienceFileId, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CustomAudienceFilesApi customAudienceFilesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $audienceId = isset($params['audience_id']) ? $params['audience_id'] : null;
            $customAudienceFileId = isset($params['custom_audience_file_id']) ? $params['custom_audience_file_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->customAudienceFilesGetAsync($accountId, $audienceId, $customAudienceFileId, $page, $pageSize, $fields);
            return $response;
        });
    }
}
