<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\WechatPagesCsgroupUserApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class WechatPagesCsgroupUserApiContainer extends ApiContainer
{
    /** @var WechatPagesCsgroupUserApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatPagesCsgroupUserApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatPagesCsgroupUserApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatPagesCsgroupUserApi wechatPagesCsgroupUserGet function
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
            $corpId = isset($params['corp_id']) ? $params['corp_id'] : null;
            $departmentId = isset($params['department_id']) ? $params['department_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatPagesCsgroupUserGet($accountId, $corpId, $departmentId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatPagesCsgroupUserApi wechatPagesCsgroupUserGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $corpId = isset($params['corp_id']) ? $params['corp_id'] : null;
            $departmentId = isset($params['department_id']) ? $params['department_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatPagesCsgroupUserGetAsync($accountId, $corpId, $departmentId, $fields);
            return $response;
        });
    }
}
