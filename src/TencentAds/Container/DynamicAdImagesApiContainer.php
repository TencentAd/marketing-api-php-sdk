<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DynamicAdImagesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DynamicAdImagesApiContainer extends ApiContainer
{
    /** @var DynamicAdImagesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DynamicAdImagesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DynamicAdImagesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DynamicAdImagesApi dynamicAdImagesAdd function
     * @param array params
     * @return \TencentAds\Model\DynamicAdImagesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dynamicAdImagesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicAdImagesApi dynamicAdImagesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dynamicAdImagesAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle DynamicAdImagesApi dynamicAdImagesGet function
     * @param array params
     * @return \TencentAds\Model\DynamicAdImagesGetResponseData
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
            $response = $this->apiInstance->dynamicAdImagesGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicAdImagesApi dynamicAdImagesGetAsync function
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
            $response = $this->apiInstance->dynamicAdImagesGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
