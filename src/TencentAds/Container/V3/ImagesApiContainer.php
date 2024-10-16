<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ImagesApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

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
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $uploadType = isset($params['upload_type']) ? $params['upload_type'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $bytes = isset($params['bytes']) ? $params['bytes'] : null;
            $imageUsage = isset($params['image_usage']) ? $params['image_usage'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $resizeWidth = isset($params['resize_width']) ? $params['resize_width'] : null;
            $resizeHeight = isset($params['resize_height']) ? $params['resize_height'] : null;
            $resizeFileSize = isset($params['resize_file_size']) ? $params['resize_file_size'] : null;
            $response = $this->apiInstance->imagesAdd($uploadType, $signature, $accountId, $organizationId, $file, $bytes, $imageUsage, $description, $resizeWidth, $resizeHeight, $resizeFileSize);
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
            $uploadType = isset($params['upload_type']) ? $params['upload_type'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $bytes = isset($params['bytes']) ? $params['bytes'] : null;
            $imageUsage = isset($params['image_usage']) ? $params['image_usage'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $resizeWidth = isset($params['resize_width']) ? $params['resize_width'] : null;
            $resizeHeight = isset($params['resize_height']) ? $params['resize_height'] : null;
            $resizeFileSize = isset($params['resize_file_size']) ? $params['resize_file_size'] : null;
            $response = $this->apiInstance->imagesAddAsync($uploadType, $signature, $accountId, $organizationId, $file, $bytes, $imageUsage, $description, $resizeWidth, $resizeHeight, $resizeFileSize);
            return $response;
        });
    }


    /**
     * Handle ImagesApi imagesDelete function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->imagesDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ImagesApi imagesDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->imagesDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle ImagesApi imagesGet function
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
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $labelId = isset($params['label_id']) ? $params['label_id'] : null;
            $businessScenario = isset($params['business_scenario']) ? $params['business_scenario'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->imagesGet($accountId, $organizationId, $filtering, $page, $pageSize, $labelId, $businessScenario, $fields);
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
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $labelId = isset($params['label_id']) ? $params['label_id'] : null;
            $businessScenario = isset($params['business_scenario']) ? $params['business_scenario'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->imagesGetAsync($accountId, $organizationId, $filtering, $page, $pageSize, $labelId, $businessScenario, $fields);
            return $response;
        });
    }


    /**
     * Handle ImagesApi imagesUpdate function
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
