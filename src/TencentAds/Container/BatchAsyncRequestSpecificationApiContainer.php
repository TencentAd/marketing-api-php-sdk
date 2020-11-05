<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BatchAsyncRequestSpecificationApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BatchAsyncRequestSpecificationApiContainer extends ApiContainer
{
    /** @var BatchAsyncRequestSpecificationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BatchAsyncRequestSpecificationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BatchAsyncRequestSpecificationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BatchAsyncRequestSpecificationApi batchAsyncRequestSpecificationGet function
     * @param array params
     * @return \TencentAds\Model\BatchAsyncRequestSpecificationGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->batchAsyncRequestSpecificationGet($accountId, $taskId, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BatchAsyncRequestSpecificationApi batchAsyncRequestSpecificationGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->batchAsyncRequestSpecificationGetAsync($accountId, $taskId, $page, $pageSize, $fields);
            return $response;
        });
    }
}
