<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BatchAsyncRequestsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BatchAsyncRequestsApiContainer extends ApiContainer
{
    /** @var BatchAsyncRequestsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BatchAsyncRequestsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BatchAsyncRequestsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BatchAsyncRequestsApi batchAsyncRequestsAdd function
     * @param array params
     * @return \TencentAds\Model\BatchAsyncRequestsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->batchAsyncRequestsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BatchAsyncRequestsApi batchAsyncRequestsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->batchAsyncRequestsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle BatchAsyncRequestsApi batchAsyncRequestsGet function
     * @param array params
     * @return \TencentAds\Model\BatchAsyncRequestsGetResponseData
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
            $response = $this->apiInstance->batchAsyncRequestsGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BatchAsyncRequestsApi batchAsyncRequestsGetAsync function
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
            $response = $this->apiInstance->batchAsyncRequestsGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
