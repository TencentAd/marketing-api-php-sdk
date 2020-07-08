<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\SystemStatusApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class SystemStatusApiContainer extends ApiContainer
{
    /** @var SystemStatusApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return SystemStatusApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new SystemStatusApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle SystemStatusApi systemStatusGet function
     * @param array params
     * @return \TencentAds\Model\SystemStatusGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $statusType = isset($params['status_type']) ? $params['status_type'] : null;
            $statusSpec = isset($params['status_spec']) ? $params['status_spec'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->systemStatusGet($accountId, $statusType, $statusSpec, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle SystemStatusApi systemStatusGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $statusType = isset($params['status_type']) ? $params['status_type'] : null;
            $statusSpec = isset($params['status_spec']) ? $params['status_spec'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->systemStatusGetAsync($accountId, $statusType, $statusSpec, $fields);
            return $response;
        });
    }
}
