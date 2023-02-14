<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\PromotedObjectAuthorizationApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class PromotedObjectAuthorizationApiContainer extends ApiContainer
{
    /** @var PromotedObjectAuthorizationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return PromotedObjectAuthorizationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new PromotedObjectAuthorizationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle PromotedObjectAuthorizationApi promotedObjectAuthorizationAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->promotedObjectAuthorizationAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PromotedObjectAuthorizationApi promotedObjectAuthorizationAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->promotedObjectAuthorizationAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle PromotedObjectAuthorizationApi promotedObjectAuthorizationGet function
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
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $promotedObjectName = isset($params['promoted_object_name']) ? $params['promoted_object_name'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->promotedObjectAuthorizationGet($accountId, $promotedObjectType, $promotedObjectName, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PromotedObjectAuthorizationApi promotedObjectAuthorizationGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $promotedObjectName = isset($params['promoted_object_name']) ? $params['promoted_object_name'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->promotedObjectAuthorizationGetAsync($accountId, $promotedObjectType, $promotedObjectName, $page, $pageSize, $fields);
            return $response;
        });
    }
}
