<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\WxPackageAccountApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class WxPackageAccountApiContainer extends ApiContainer
{
    /** @var WxPackageAccountApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WxPackageAccountApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WxPackageAccountApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WxPackageAccountApi wxPackageAccountGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $pageIndex = isset($params['page_index']) ? $params['page_index'] : null;
            $beginTime = isset($params['begin_time']) ? $params['begin_time'] : null;
            $endTime = isset($params['end_time']) ? $params['end_time'] : null;
            $keyword = isset($params['keyword']) ? $params['keyword'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wxPackageAccountGet($accountId, $pageSize, $pageIndex, $beginTime, $endTime, $keyword, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WxPackageAccountApi wxPackageAccountGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $pageIndex = isset($params['page_index']) ? $params['page_index'] : null;
            $beginTime = isset($params['begin_time']) ? $params['begin_time'] : null;
            $endTime = isset($params['end_time']) ? $params['end_time'] : null;
            $keyword = isset($params['keyword']) ? $params['keyword'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wxPackageAccountGetAsync($accountId, $pageSize, $pageIndex, $beginTime, $endTime, $keyword, $fields);
            return $response;
        });
    }


    /**
     * Handle WxPackageAccountApi wxPackageAccountUpdate function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatId = isset($params['wechat_id']) ? $params['wechat_id'] : null;
            $nickName = isset($params['nick_name']) ? $params['nick_name'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $enableFlag = isset($params['enable_flag']) ? $params['enable_flag'] : null;
            $response = $this->apiInstance->wxPackageAccountUpdate($accountId, $wechatId, $nickName, $file, $enableFlag);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WxPackageAccountApi wxPackageAccountUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatId = isset($params['wechat_id']) ? $params['wechat_id'] : null;
            $nickName = isset($params['nick_name']) ? $params['nick_name'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $enableFlag = isset($params['enable_flag']) ? $params['enable_flag'] : null;
            $response = $this->apiInstance->wxPackageAccountUpdateAsync($accountId, $wechatId, $nickName, $file, $enableFlag);
            return $response;
        });
    }
}
