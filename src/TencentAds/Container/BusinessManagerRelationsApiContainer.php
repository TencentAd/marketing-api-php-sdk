<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\BusinessManagerRelationsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class BusinessManagerRelationsApiContainer extends ApiContainer
{
    /** @var BusinessManagerRelationsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BusinessManagerRelationsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BusinessManagerRelationsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BusinessManagerRelationsApi businessManagerRelationsGet function
     * @param array params
     * @return \TencentAds\Model\BusinessManagerRelationsGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->businessManagerRelationsGet($page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BusinessManagerRelationsApi businessManagerRelationsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->businessManagerRelationsGetAsync($page, $pageSize, $fields);
            return $response;
        });
    }
}
