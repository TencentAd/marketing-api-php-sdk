<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AuthorizationApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AuthorizationApiContainer extends ApiContainer
{
    /** @var AuthorizationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AuthorizationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AuthorizationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AuthorizationApi authorizationWechatBind function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function wechatBind(array $params = [])
    {
        return $this->handleMiddleware('wechatBind', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accessToken = isset($params['access_token']) ? $params['access_token'] : null;
            $redirectUri = isset($params['redirect_uri']) ? $params['redirect_uri'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatAccountId = isset($params['wechat_account_id']) ? $params['wechat_account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->authorizationWechatBind($accessToken, $redirectUri, $accountId, $wechatAccountId, $fields);
            return $response;
        });
    }


    /**
     * Handle AuthorizationApi authorizationWechatBindAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function wechatBindAsync(array $params = [])
    {
        return $this->handleMiddleware('wechatBind', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accessToken = isset($params['access_token']) ? $params['access_token'] : null;
            $redirectUri = isset($params['redirect_uri']) ? $params['redirect_uri'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $wechatAccountId = isset($params['wechat_account_id']) ? $params['wechat_account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->authorizationWechatBindAsync($accessToken, $redirectUri, $accountId, $wechatAccountId, $fields);
            return $response;
        });
    }
}
