<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WechatChannelsAdAccountValidationApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WechatChannelsAdAccountValidationApiContainer extends ApiContainer
{
    /** @var WechatChannelsAdAccountValidationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatChannelsAdAccountValidationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatChannelsAdAccountValidationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatChannelsAdAccountValidationApi wechatChannelsAdAccountValidationGet function
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
            $nickname = isset($params['nickname']) ? $params['nickname'] : null;
            $headImageId = isset($params['head_image_id']) ? $params['head_image_id'] : null;
            $wechatChannelsAccountId = isset($params['wechat_channels_account_id']) ? $params['wechat_channels_account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatChannelsAdAccountValidationGet($accountId, $nickname, $headImageId, $wechatChannelsAccountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatChannelsAdAccountValidationApi wechatChannelsAdAccountValidationGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $nickname = isset($params['nickname']) ? $params['nickname'] : null;
            $headImageId = isset($params['head_image_id']) ? $params['head_image_id'] : null;
            $wechatChannelsAccountId = isset($params['wechat_channels_account_id']) ? $params['wechat_channels_account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatChannelsAdAccountValidationGetAsync($accountId, $nickname, $headImageId, $wechatChannelsAccountId, $fields);
            return $response;
        });
    }
}
