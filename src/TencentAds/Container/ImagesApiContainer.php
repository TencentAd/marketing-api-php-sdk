<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ImagesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ImagesApiContainer extends ApiContainer
{
    /** @var ImagesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ImagesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ImagesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ImagesApi imagesAdd function
     * @param array params
     * @return \TencentAds\Model\ImagesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $uploadType = isset($params['upload_type']) ? $params['upload_type'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $bytes = isset($params['bytes']) ? $params['bytes'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $response = $this->apiInstance->imagesAdd($accountId, $uploadType, $signature, $file, $bytes, $description);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ImagesApi imagesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $uploadType = isset($params['upload_type']) ? $params['upload_type'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $bytes = isset($params['bytes']) ? $params['bytes'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $response = $this->apiInstance->imagesAddAsync($accountId, $uploadType, $signature, $file, $bytes, $description);
            return $response;
        });
    }


    /**
     * Handle ImagesApi imagesGet function
     * @param array params
     * @return \TencentAds\Model\ImagesGetResponseData
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
            $response = $this->apiInstance->imagesGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ImagesApi imagesGetAsync function
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
            $response = $this->apiInstance->imagesGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle ImagesApi imagesUpdate function
     * @param array params
     * @return \TencentAds\Model\ImagesUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->imagesUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ImagesApi imagesUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->imagesUpdateAsync($data);
            return $response;
        });
    }
}
