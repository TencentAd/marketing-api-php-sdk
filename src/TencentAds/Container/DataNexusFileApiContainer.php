<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DataNexusFileApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DataNexusFileApiContainer extends ApiContainer
{
    /** @var DataNexusFileApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DataNexusFileApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DataNexusFileApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DataNexusFileApi dataNexusFileAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fileName = isset($params['file_name']) ? $params['file_name'] : null;
            $fileDesc = isset($params['file_desc']) ? $params['file_desc'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $schemaDefine = isset($params['schema_define']) ? $params['schema_define'] : null;
            $scenes = isset($params['scenes']) ? $params['scenes'] : null;
            $extraInfo = isset($params['extra_info']) ? $params['extra_info'] : null;
            $response = $this->apiInstance->dataNexusFileAdd($accountId, $fileName, $fileDesc, $file, $schemaDefine, $scenes, $extraInfo);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DataNexusFileApi dataNexusFileAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fileName = isset($params['file_name']) ? $params['file_name'] : null;
            $fileDesc = isset($params['file_desc']) ? $params['file_desc'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $schemaDefine = isset($params['schema_define']) ? $params['schema_define'] : null;
            $scenes = isset($params['scenes']) ? $params['scenes'] : null;
            $extraInfo = isset($params['extra_info']) ? $params['extra_info'] : null;
            $response = $this->apiInstance->dataNexusFileAddAsync($accountId, $fileName, $fileDesc, $file, $schemaDefine, $scenes, $extraInfo);
            return $response;
        });
    }


    /**
     * Handle DataNexusFileApi dataNexusFileGet function
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
            $fileId = isset($params['file_id']) ? $params['file_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dataNexusFileGet($accountId, $fileId, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DataNexusFileApi dataNexusFileGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fileId = isset($params['file_id']) ? $params['file_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dataNexusFileGetAsync($accountId, $fileId, $page, $pageSize, $fields);
            return $response;
        });
    }
}
