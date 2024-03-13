<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\LiveRoomComponentsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class LiveRoomComponentsApiContainer extends ApiContainer
{
    /** @var LiveRoomComponentsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LiveRoomComponentsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LiveRoomComponentsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LiveRoomComponentsApi liveRoomComponentsAdd function
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
            $response = $this->apiInstance->liveRoomComponentsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LiveRoomComponentsApi liveRoomComponentsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->liveRoomComponentsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle LiveRoomComponentsApi liveRoomComponentsDelete function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->liveRoomComponentsDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LiveRoomComponentsApi liveRoomComponentsDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->liveRoomComponentsDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle LiveRoomComponentsApi liveRoomComponentsGet function
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
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->liveRoomComponentsGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LiveRoomComponentsApi liveRoomComponentsGetAsync function
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
            $response = $this->apiInstance->liveRoomComponentsGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle LiveRoomComponentsApi liveRoomComponentsUpdate function
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
            $response = $this->apiInstance->liveRoomComponentsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LiveRoomComponentsApi liveRoomComponentsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->liveRoomComponentsUpdateAsync($data);
            return $response;
        });
    }
}
