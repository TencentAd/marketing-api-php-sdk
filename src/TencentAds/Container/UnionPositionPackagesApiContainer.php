<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\UnionPositionPackagesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class UnionPositionPackagesApiContainer extends ApiContainer
{
    /** @var UnionPositionPackagesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return UnionPositionPackagesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new UnionPositionPackagesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle UnionPositionPackagesApi unionPositionPackagesAdd function
     * @param array params
     * @return \TencentAds\Model\UnionPositionPackagesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->unionPositionPackagesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UnionPositionPackagesApi unionPositionPackagesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->unionPositionPackagesAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle UnionPositionPackagesApi unionPositionPackagesDelete function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->unionPositionPackagesDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UnionPositionPackagesApi unionPositionPackagesDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->unionPositionPackagesDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle UnionPositionPackagesApi unionPositionPackagesGet function
     * @param array params
     * @return \TencentAds\Model\UnionPositionPackagesGetResponseData
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
            $response = $this->apiInstance->unionPositionPackagesGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UnionPositionPackagesApi unionPositionPackagesGetAsync function
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
            $response = $this->apiInstance->unionPositionPackagesGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
