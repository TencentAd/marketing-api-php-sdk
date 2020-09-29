<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\UserActionSetsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class UserActionSetsApiContainer extends ApiContainer
{
    /** @var UserActionSetsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return UserActionSetsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new UserActionSetsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle UserActionSetsApi userActionSetsAdd function
     * @param array params
     * @return \TencentAds\Model\UserActionSetsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->userActionSetsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UserActionSetsApi userActionSetsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->userActionSetsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle UserActionSetsApi userActionSetsGet function
     * @param array params
     * @return \TencentAds\Model\UserActionSetsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userActionSetId = isset($params['user_action_set_id']) ? $params['user_action_set_id'] : null;
            $type = isset($params['type']) ? $params['type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->userActionSetsGet($accountId, $userActionSetId, $type, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UserActionSetsApi userActionSetsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userActionSetId = isset($params['user_action_set_id']) ? $params['user_action_set_id'] : null;
            $type = isset($params['type']) ? $params['type'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->userActionSetsGetAsync($accountId, $userActionSetId, $type, $fields);
            return $response;
        });
    }
}
