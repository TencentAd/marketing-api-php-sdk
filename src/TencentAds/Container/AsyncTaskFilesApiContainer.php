<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AsyncTaskFilesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AsyncTaskFilesApiContainer extends ApiContainer
{
    /** @var AsyncTaskFilesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AsyncTaskFilesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AsyncTaskFilesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AsyncTaskFilesApi asyncTaskFilesGet function
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
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $fileId = isset($params['file_id']) ? $params['file_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->asyncTaskFilesGet($accountId, $taskId, $fileId, $fields);
            return $response;
        });
    }


    /**
     * Handle AsyncTaskFilesApi asyncTaskFilesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $fileId = isset($params['file_id']) ? $params['file_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->asyncTaskFilesGetAsync($accountId, $taskId, $fileId, $fields);
            return $response;
        });
    }
}
