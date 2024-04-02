<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ProductSeriesApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ProductSeriesApiContainer extends ApiContainer
{
    /** @var ProductSeriesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProductSeriesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProductSeriesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProductSeriesApi productSeriesAdd function
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
            $response = $this->apiInstance->productSeriesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProductSeriesApi productSeriesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->productSeriesAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle ProductSeriesApi productSeriesGet function
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
            $catalogId = isset($params['catalog_id']) ? $params['catalog_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productSeriesGet($accountId, $catalogId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProductSeriesApi productSeriesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $catalogId = isset($params['catalog_id']) ? $params['catalog_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->productSeriesGetAsync($accountId, $catalogId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
