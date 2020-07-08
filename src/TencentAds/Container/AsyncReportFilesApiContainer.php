<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AsyncReportFilesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AsyncReportFilesApiContainer extends ApiContainer
{
    /** @var AsyncReportFilesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AsyncReportFilesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AsyncReportFilesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AsyncReportFilesApi asyncReportFilesGet function
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
            $response = $this->apiInstance->asyncReportFilesGet($accountId, $taskId, $fileId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AsyncReportFilesApi asyncReportFilesGetAsync function
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
            $response = $this->apiInstance->asyncReportFilesGetAsync($accountId, $taskId, $fileId, $fields);
            return $response;
        });
    }
}
