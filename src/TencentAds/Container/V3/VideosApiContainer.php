<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\VideosApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

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
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $response = $this->apiInstance->videosAdd($videoFile, $signature, $accountId, $organizationId, $description, $adcreativeTemplateId);
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
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $response = $this->apiInstance->videosAddAsync($videoFile, $signature, $accountId, $organizationId, $description, $adcreativeTemplateId);
            return $response;
        });
    }


    /**
     * Handle VideosApi videosDelete function
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
            $response = $this->apiInstance->videosDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideosApi videosDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->videosDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle VideosApi videosGet function
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
            $response = $this->apiInstance->videosGet($accountId, $organizationId, $filtering, $page, $pageSize, $labelId, $businessScenario, $fields);
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
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $labelId = isset($params['label_id']) ? $params['label_id'] : null;
            $businessScenario = isset($params['business_scenario']) ? $params['business_scenario'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->videosGetAsync($accountId, $organizationId, $filtering, $page, $pageSize, $labelId, $businessScenario, $fields);
            return $response;
        });
    }


    /**
     * Handle VideosApi videosUpdate function
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
