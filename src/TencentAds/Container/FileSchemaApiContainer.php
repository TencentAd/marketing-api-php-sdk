<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\FileSchemaApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class FileSchemaApiContainer extends ApiContainer
{
    /** @var FileSchemaApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return FileSchemaApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new FileSchemaApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle FileSchemaApi fileSchemaGet function
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
            $scenes = isset($params['scenes']) ? $params['scenes'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->fileSchemaGet($accountId, $scenes, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle FileSchemaApi fileSchemaGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $scenes = isset($params['scenes']) ? $params['scenes'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->fileSchemaGetAsync($accountId, $scenes, $fields);
            return $response;
        });
    }
}
