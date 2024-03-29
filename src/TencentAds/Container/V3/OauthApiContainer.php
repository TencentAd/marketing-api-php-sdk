<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\OauthApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class OauthApiContainer extends ApiContainer
{
    /** @var OauthApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OauthApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OauthApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OauthApi oauthAuthorize function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function authorize(array $params = [])
    {
        return $this->handleMiddleware('authorize', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $clientId = isset($params['client_id']) ? $params['client_id'] : null;
            $redirectUri = isset($params['redirect_uri']) ? $params['redirect_uri'] : null;
            $state = isset($params['state']) ? $params['state'] : null;
            $scope = isset($params['scope']) ? $params['scope'] : null;
            $accountType = isset($params['account_type']) ? $params['account_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->oauthAuthorize($clientId, $redirectUri, $state, $scope, $accountType, $fields);
            return $response;
        });
    }


    /**
     * Handle OauthApi oauthAuthorizeAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authorizeAsync(array $params = [])
    {
        return $this->handleMiddleware('authorize', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $clientId = isset($params['client_id']) ? $params['client_id'] : null;
            $redirectUri = isset($params['redirect_uri']) ? $params['redirect_uri'] : null;
            $state = isset($params['state']) ? $params['state'] : null;
            $scope = isset($params['scope']) ? $params['scope'] : null;
            $accountType = isset($params['account_type']) ? $params['account_type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->oauthAuthorizeAsync($clientId, $redirectUri, $state, $scope, $accountType, $fields);
            return $response;
        });
    }


    /**
     * Handle OauthApi oauthToken function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function token(array $params = [])
    {
        return $this->handleMiddleware('token', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $clientId = isset($params['client_id']) ? $params['client_id'] : null;
            $clientSecret = isset($params['client_secret']) ? $params['client_secret'] : null;
            $grantType = isset($params['grant_type']) ? $params['grant_type'] : null;
            $authorizationCode = isset($params['authorization_code']) ? $params['authorization_code'] : null;
            $refreshToken = isset($params['refresh_token']) ? $params['refresh_token'] : null;
            $redirectUri = isset($params['redirect_uri']) ? $params['redirect_uri'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->oauthToken($clientId, $clientSecret, $grantType, $authorizationCode, $refreshToken, $redirectUri, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OauthApi oauthTokenAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function tokenAsync(array $params = [])
    {
        return $this->handleMiddleware('token', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $clientId = isset($params['client_id']) ? $params['client_id'] : null;
            $clientSecret = isset($params['client_secret']) ? $params['client_secret'] : null;
            $grantType = isset($params['grant_type']) ? $params['grant_type'] : null;
            $authorizationCode = isset($params['authorization_code']) ? $params['authorization_code'] : null;
            $refreshToken = isset($params['refresh_token']) ? $params['refresh_token'] : null;
            $redirectUri = isset($params['redirect_uri']) ? $params['redirect_uri'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->oauthTokenAsync($clientId, $clientSecret, $grantType, $authorizationCode, $refreshToken, $redirectUri, $fields);
            return $response;
        });
    }
}
