<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\AsyncReportFilesApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

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
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $fileId = isset($params['file_id']) ? $params['file_id'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->asyncReportFilesGet($taskId, $fileId, $accountId, $organizationId, $fields);
            return $response;
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
            $taskId = isset($params['task_id']) ? $params['task_id'] : null;
            $fileId = isset($params['file_id']) ? $params['file_id'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->asyncReportFilesGetAsync($taskId, $fileId, $accountId, $organizationId, $fields);
            return $response;
        });
    }
}
