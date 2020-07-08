<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\PromotedObjectsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class PromotedObjectsApiContainer extends ApiContainer
{
    /** @var PromotedObjectsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return PromotedObjectsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new PromotedObjectsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle PromotedObjectsApi promotedObjectsAdd function
     * @param array params
     * @return \TencentAds\Model\PromotedObjectsAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->promotedObjectsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PromotedObjectsApi promotedObjectsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->promotedObjectsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle PromotedObjectsApi promotedObjectsGet function
     * @param array params
     * @return \TencentAds\Model\PromotedObjectsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->promotedObjectsGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PromotedObjectsApi promotedObjectsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->promotedObjectsGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle PromotedObjectsApi promotedObjectsUpdate function
     * @param array params
     * @return \TencentAds\Model\PromotedObjectsUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->promotedObjectsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PromotedObjectsApi promotedObjectsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->promotedObjectsUpdateAsync($data);
            return $response;
        });
    }
}
