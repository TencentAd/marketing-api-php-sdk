<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\UserPropertySetsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class UserPropertySetsApiContainer extends ApiContainer
{
    /** @var UserPropertySetsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return UserPropertySetsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new UserPropertySetsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle UserPropertySetsApi userPropertySetsAdd function
     * @param array params
     * @return \TencentAds\Model\UserPropertySetsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->userPropertySetsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UserPropertySetsApi userPropertySetsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->userPropertySetsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle UserPropertySetsApi userPropertySetsGet function
     * @param array params
     * @return \TencentAds\Model\UserPropertySetsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userPropertySetId = isset($params['user_property_set_id']) ? $params['user_property_set_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->userPropertySetsGet($accountId, $userPropertySetId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UserPropertySetsApi userPropertySetsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $userPropertySetId = isset($params['user_property_set_id']) ? $params['user_property_set_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->userPropertySetsGetAsync($accountId, $userPropertySetId, $fields);
            return $response;
        });
    }


    /**
     * Handle UserPropertySetsApi userPropertySetsUpdate function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->userPropertySetsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle UserPropertySetsApi userPropertySetsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->userPropertySetsUpdateAsync($data);
            return $response;
        });
    }
}
