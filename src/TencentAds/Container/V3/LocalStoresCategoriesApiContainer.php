<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\LocalStoresCategoriesApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class LocalStoresCategoriesApiContainer extends ApiContainer
{
    /** @var LocalStoresCategoriesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LocalStoresCategoriesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LocalStoresCategoriesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LocalStoresCategoriesApi localStoresCategoriesGet function
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
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->localStoresCategoriesGet($verticalId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LocalStoresCategoriesApi localStoresCategoriesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $verticalId = isset($params['vertical_id']) ? $params['vertical_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->localStoresCategoriesGetAsync($verticalId, $fields);
            return $response;
        });
    }
}
