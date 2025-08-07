<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\UserOrganizationAuthenticationApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class UserOrganizationAuthenticationApiContainer extends ApiContainer
{
    /** @var UserOrganizationAuthenticationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return UserOrganizationAuthenticationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new UserOrganizationAuthenticationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle UserOrganizationAuthenticationApi userOrganizationAuthenticationGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $userToken = isset($params['user_token']) ? $params['user_token'] : null;
            $accountIdList = isset($params['account_id_list']) ? $params['account_id_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->userOrganizationAuthenticationGet($userToken, $accountIdList, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UserOrganizationAuthenticationApi userOrganizationAuthenticationGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $userToken = isset($params['user_token']) ? $params['user_token'] : null;
            $accountIdList = isset($params['account_id_list']) ? $params['account_id_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->userOrganizationAuthenticationGetAsync($userToken, $accountIdList, $fields);
            return $response;
        });
    }
}
