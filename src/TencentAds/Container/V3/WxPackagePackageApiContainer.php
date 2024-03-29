<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\WxPackagePackageApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class WxPackagePackageApiContainer extends ApiContainer
{
    /** @var WxPackagePackageApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WxPackagePackageApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WxPackagePackageApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WxPackagePackageApi wxPackagePackageAdd function
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
            $response = $this->apiInstance->wxPackagePackageAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WxPackagePackageApi wxPackagePackageAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wxPackagePackageAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle WxPackagePackageApi wxPackagePackageGet function
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
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $pageIndex = isset($params['page_index']) ? $params['page_index'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wxPackagePackageGet($accountId, $pageSize, $pageIndex, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WxPackagePackageApi wxPackagePackageGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $pageIndex = isset($params['page_index']) ? $params['page_index'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wxPackagePackageGetAsync($accountId, $pageSize, $pageIndex, $fields);
            return $response;
        });
    }


    /**
     * Handle WxPackagePackageApi wxPackagePackageUpdate function
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
            $response = $this->apiInstance->wxPackagePackageUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WxPackagePackageApi wxPackagePackageUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->wxPackagePackageUpdateAsync($data);
            return $response;
        });
    }
}
