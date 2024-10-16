<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\CategoriesApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class CategoriesApiContainer extends ApiContainer
{
    /** @var CategoriesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CategoriesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CategoriesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CategoriesApi categoriesGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $verticalId = isset($params['vertical_id']) ? $params['vertical_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $level = isset($params['level']) ? $params['level'] : null;
            $categoryId = isset($params['category_id']) ? $params['category_id'] : null;
            $categoryName = isset($params['category_name']) ? $params['category_name'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->categoriesGet($verticalId, $page, $pageSize, $level, $categoryId, $categoryName, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CategoriesApi categoriesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $verticalId = isset($params['vertical_id']) ? $params['vertical_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $level = isset($params['level']) ? $params['level'] : null;
            $categoryId = isset($params['category_id']) ? $params['category_id'] : null;
            $categoryName = isset($params['category_name']) ? $params['category_name'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->categoriesGetAsync($verticalId, $page, $pageSize, $level, $categoryId, $categoryName, $fields);
            return $response;
        });
    }
}
