<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\CreativetoolsTextApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class CreativetoolsTextApiContainer extends ApiContainer
{
    /** @var CreativetoolsTextApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CreativetoolsTextApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CreativetoolsTextApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CreativetoolsTextApi creativetoolsTextGet function
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
            $maxTextLength = isset($params['max_text_length']) ? $params['max_text_length'] : null;
            $adgroupId = isset($params['adgroup_id']) ? $params['adgroup_id'] : null;
            $keyword = isset($params['keyword']) ? $params['keyword'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $number = isset($params['number']) ? $params['number'] : null;
            $categoryFirstLevel = isset($params['category_first_level']) ? $params['category_first_level'] : null;
            $categorySecondLevel = isset($params['category_second_level']) ? $params['category_second_level'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $productOuterIds = isset($params['product_outer_ids']) ? $params['product_outer_ids'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->creativetoolsTextGet($accountId, $maxTextLength, $adgroupId, $keyword, $filtering, $number, $categoryFirstLevel, $categorySecondLevel, $productCatalogId, $productOuterIds, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CreativetoolsTextApi creativetoolsTextGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $maxTextLength = isset($params['max_text_length']) ? $params['max_text_length'] : null;
            $adgroupId = isset($params['adgroup_id']) ? $params['adgroup_id'] : null;
            $keyword = isset($params['keyword']) ? $params['keyword'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $number = isset($params['number']) ? $params['number'] : null;
            $categoryFirstLevel = isset($params['category_first_level']) ? $params['category_first_level'] : null;
            $categorySecondLevel = isset($params['category_second_level']) ? $params['category_second_level'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $productOuterIds = isset($params['product_outer_ids']) ? $params['product_outer_ids'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->creativetoolsTextGetAsync($accountId, $maxTextLength, $adgroupId, $keyword, $filtering, $number, $categoryFirstLevel, $categorySecondLevel, $productCatalogId, $productOuterIds, $fields);
            return $response;
        });
    }
}
