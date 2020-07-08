<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AsyncTasksApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AsyncTasksApiContainer extends ApiContainer
{
    /** @var AsyncTasksApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AsyncTasksApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AsyncTasksApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AsyncTasksApi asyncTasksAdd function
     * @param array params
     * @return \TencentAds\Model\AsyncTasksAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->asyncTasksAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AsyncTasksApi asyncTasksAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->asyncTasksAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle AsyncTasksApi asyncTasksGet function
     * @param array params
     * @return \TencentAds\Model\AsyncTasksGetResponseData
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
            $response = $this->apiInstance->asyncTasksGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AsyncTasksApi asyncTasksGetAsync function
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
            $response = $this->apiInstance->asyncTasksGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
