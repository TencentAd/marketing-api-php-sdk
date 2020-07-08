<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\EcommerceOrderApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class EcommerceOrderApiContainer extends ApiContainer
{
    /** @var EcommerceOrderApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return EcommerceOrderApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new EcommerceOrderApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle EcommerceOrderApi ecommerceOrderGet function
     * @param array params
     * @return \TencentAds\Model\EcommerceOrderGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->ecommerceOrderGet($accountId, $dateRange, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle EcommerceOrderApi ecommerceOrderGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->ecommerceOrderGetAsync($accountId, $dateRange, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle EcommerceOrderApi ecommerceOrderUpdate function
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
            $response = $this->apiInstance->ecommerceOrderUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle EcommerceOrderApi ecommerceOrderUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->ecommerceOrderUpdateAsync($data);
            return $response;
        });
    }
}
