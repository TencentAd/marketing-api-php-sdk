<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\XijingPageListApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class XijingPageListApiContainer extends ApiContainer
{
    /** @var XijingPageListApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return XijingPageListApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new XijingPageListApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle XijingPageListApi xijingPageListGet function
     * @param array params
     * @return \TencentAds\Model\XijingPageListGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $pageId = isset($params['page_id']) ? $params['page_id'] : null;
            $pageServiceId = isset($params['page_service_id']) ? $params['page_service_id'] : null;
            $pageName = isset($params['page_name']) ? $params['page_name'] : null;
            $pageType = isset($params['page_type']) ? $params['page_type'] : null;
            $pageLastModifyStartTime = isset($params['page_last_modify_start_time']) ? $params['page_last_modify_start_time'] : null;
            $pageLastModifyEndTime = isset($params['page_last_modify_end_time']) ? $params['page_last_modify_end_time'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $pageIndex = isset($params['page_index']) ? $params['page_index'] : null;
            $pagePublishStatus = isset($params['page_publish_status']) ? $params['page_publish_status'] : null;
            $pageStatus = isset($params['page_status']) ? $params['page_status'] : null;
            $pageSource = isset($params['page_source']) ? $params['page_source'] : null;
            $pageOwnerId = isset($params['page_owner_id']) ? $params['page_owner_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->xijingPageListGet($accountId, $pageId, $pageServiceId, $pageName, $pageType, $pageLastModifyStartTime, $pageLastModifyEndTime, $pageSize, $pageIndex, $pagePublishStatus, $pageStatus, $pageSource, $pageOwnerId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle XijingPageListApi xijingPageListGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $pageId = isset($params['page_id']) ? $params['page_id'] : null;
            $pageServiceId = isset($params['page_service_id']) ? $params['page_service_id'] : null;
            $pageName = isset($params['page_name']) ? $params['page_name'] : null;
            $pageType = isset($params['page_type']) ? $params['page_type'] : null;
            $pageLastModifyStartTime = isset($params['page_last_modify_start_time']) ? $params['page_last_modify_start_time'] : null;
            $pageLastModifyEndTime = isset($params['page_last_modify_end_time']) ? $params['page_last_modify_end_time'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $pageIndex = isset($params['page_index']) ? $params['page_index'] : null;
            $pagePublishStatus = isset($params['page_publish_status']) ? $params['page_publish_status'] : null;
            $pageStatus = isset($params['page_status']) ? $params['page_status'] : null;
            $pageSource = isset($params['page_source']) ? $params['page_source'] : null;
            $pageOwnerId = isset($params['page_owner_id']) ? $params['page_owner_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->xijingPageListGetAsync($accountId, $pageId, $pageServiceId, $pageName, $pageType, $pageLastModifyStartTime, $pageLastModifyEndTime, $pageSize, $pageIndex, $pagePublishStatus, $pageStatus, $pageSource, $pageOwnerId, $fields);
            return $response;
        });
    }
}
