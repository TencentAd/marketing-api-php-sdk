<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\CategoriesAttributeApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class CategoriesAttributeApiContainer extends ApiContainer
{
    /** @var CategoriesAttributeApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CategoriesAttributeApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CategoriesAttributeApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CategoriesAttributeApi categoriesAttributeGet function
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
            $lastCategoryIdList = isset($params['last_category_id_list']) ? $params['last_category_id_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->categoriesAttributeGet($verticalId, $page, $pageSize, $lastCategoryIdList, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CategoriesAttributeApi categoriesAttributeGetAsync function
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
            $lastCategoryIdList = isset($params['last_category_id_list']) ? $params['last_category_id_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->categoriesAttributeGetAsync($verticalId, $page, $pageSize, $lastCategoryIdList, $fields);
            return $response;
        });
    }
}
