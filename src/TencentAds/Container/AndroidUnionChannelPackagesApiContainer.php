<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AndroidUnionChannelPackagesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AndroidUnionChannelPackagesApiContainer extends ApiContainer
{
    /** @var AndroidUnionChannelPackagesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AndroidUnionChannelPackagesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AndroidUnionChannelPackagesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AndroidUnionChannelPackagesApi androidUnionChannelPackagesAdd function
     * @param array params
     * @return \TencentAds\Model\AndroidUnionChannelPackagesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->androidUnionChannelPackagesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AndroidUnionChannelPackagesApi androidUnionChannelPackagesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->androidUnionChannelPackagesAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle AndroidUnionChannelPackagesApi androidUnionChannelPackagesGet function
     * @param array params
     * @return \TencentAds\Model\AndroidUnionChannelPackagesGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $androidUnionAppId = isset($params['android_union_app_id']) ? $params['android_union_app_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->androidUnionChannelPackagesGet($accountId, $androidUnionAppId, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AndroidUnionChannelPackagesApi androidUnionChannelPackagesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $androidUnionAppId = isset($params['android_union_app_id']) ? $params['android_union_app_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->androidUnionChannelPackagesGetAsync($accountId, $androidUnionAppId, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle AndroidUnionChannelPackagesApi androidUnionChannelPackagesUpdate function
     * @param array params
     * @return \TencentAds\Model\AndroidUnionChannelPackagesUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->androidUnionChannelPackagesUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AndroidUnionChannelPackagesApi androidUnionChannelPackagesUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->androidUnionChannelPackagesUpdateAsync($data);
            return $response;
        });
    }
}
