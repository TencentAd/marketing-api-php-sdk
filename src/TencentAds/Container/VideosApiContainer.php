<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\VideosApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class VideosApiContainer extends ApiContainer
{
    /** @var VideosApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return VideosApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new VideosApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle VideosApi videosAdd function
     * @param array params
     * @return \TencentAds\Model\VideosAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $response = $this->apiInstance->videosAdd($accountId, $videoFile, $signature, $description, $adcreativeTemplateId);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideosApi videosAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $response = $this->apiInstance->videosAddAsync($accountId, $videoFile, $signature, $description, $adcreativeTemplateId);
            return $response;
        });
    }


    /**
     * Handle VideosApi videosGet function
     * @param array params
     * @return \TencentAds\Model\VideosGetResponseData
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
            $response = $this->apiInstance->videosGet($accountId, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideosApi videosGetAsync function
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
            $response = $this->apiInstance->videosGetAsync($accountId, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }


    /**
     * Handle VideosApi videosUpdate function
     * @param array params
     * @return \TencentAds\Model\VideosUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->videosUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideosApi videosUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->videosUpdateAsync($data);
            return $response;
        });
    }
}
