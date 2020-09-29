<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\WechatQualificationsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class WechatQualificationsApiContainer extends ApiContainer
{
    /** @var WechatQualificationsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatQualificationsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatQualificationsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatQualificationsApi wechatQualificationsAdd function
     * @param array params
     * @return \TencentAds\Model\WechatQualificationsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatQualificationType = isset($params['wechat_qualification_type']) ? $params['wechat_qualification_type'] : null;
            $wechatQualificationFile = isset($params['wechat_qualification_file']) ? $params['wechat_qualification_file'] : null;
            $wechatQualificationFileSignature = isset($params['wechat_qualification_file_signature']) ? $params['wechat_qualification_file_signature'] : null;
            $response = $this->apiInstance->wechatQualificationsAdd($accountId, $wechatQualificationType, $wechatQualificationFile, $wechatQualificationFileSignature);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatQualificationsApi wechatQualificationsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatQualificationType = isset($params['wechat_qualification_type']) ? $params['wechat_qualification_type'] : null;
            $wechatQualificationFile = isset($params['wechat_qualification_file']) ? $params['wechat_qualification_file'] : null;
            $wechatQualificationFileSignature = isset($params['wechat_qualification_file_signature']) ? $params['wechat_qualification_file_signature'] : null;
            $response = $this->apiInstance->wechatQualificationsAddAsync($accountId, $wechatQualificationType, $wechatQualificationFile, $wechatQualificationFileSignature);
            return $response;
        });
    }


    /**
     * Handle WechatQualificationsApi wechatQualificationsDelete function
     * @param array params
     * @return \TencentAds\Model\WechatQualificationsDeleteResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wechatQualificationsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatQualificationsApi wechatQualificationsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wechatQualificationsDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle WechatQualificationsApi wechatQualificationsGet function
     * @param array params
     * @return \TencentAds\Model\WechatQualificationsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatQualificationsGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatQualificationsApi wechatQualificationsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatQualificationsGetAsync($accountId, $fields);
            return $response;
        });
    }
}
