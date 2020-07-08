<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\SplitTestsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class SplitTestsApiContainer extends ApiContainer
{
    /** @var SplitTestsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return SplitTestsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new SplitTestsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle SplitTestsApi splitTestsAdd function
     * @param array params
     * @return \TencentAds\Model\SplitTestsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->splitTestsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SplitTestsApi splitTestsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->splitTestsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle SplitTestsApi splitTestsDelete function
     * @param array params
     * @return \TencentAds\Model\SplitTestsDeleteResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->splitTestsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SplitTestsApi splitTestsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->splitTestsDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle SplitTestsApi splitTestsGet function
     * @param array params
     * @return \TencentAds\Model\SplitTestsGetResponseData
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
            $response = $this->apiInstance->splitTestsGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SplitTestsApi splitTestsGetAsync function
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
            $response = $this->apiInstance->splitTestsGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle SplitTestsApi splitTestsUpdate function
     * @param array params
     * @return \TencentAds\Model\SplitTestsUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->splitTestsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SplitTestsApi splitTestsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->splitTestsUpdateAsync($data);
            return $response;
        });
    }
}
