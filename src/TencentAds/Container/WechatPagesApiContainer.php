<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\WechatPagesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class WechatPagesApiContainer extends ApiContainer
{
    /** @var WechatPagesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatPagesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatPagesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatPagesApi wechatPagesAdd function
     * @param array params
     * @return \TencentAds\Model\WechatPagesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wechatPagesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatPagesApi wechatPagesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wechatPagesAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle WechatPagesApi wechatPagesDelete function
     * @param array params
     * @return \TencentAds\Model\WechatPagesDeleteResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wechatPagesDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatPagesApi wechatPagesDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wechatPagesDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle WechatPagesApi wechatPagesGet function
     * @param array params
     * @return \TencentAds\Model\WechatPagesGetResponseData
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
            $response = $this->apiInstance->wechatPagesGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatPagesApi wechatPagesGetAsync function
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
            $response = $this->apiInstance->wechatPagesGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
