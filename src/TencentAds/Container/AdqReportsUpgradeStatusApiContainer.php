<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdqReportsUpgradeStatusApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdqReportsUpgradeStatusApiContainer extends ApiContainer
{
    /** @var AdqReportsUpgradeStatusApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdqReportsUpgradeStatusApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdqReportsUpgradeStatusApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdqReportsUpgradeStatusApi adqReportsUpgradeStatusGet function
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
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adqReportsUpgradeStatusGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdqReportsUpgradeStatusApi adqReportsUpgradeStatusGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adqReportsUpgradeStatusGetAsync($accountId, $fields);
            return $response;
        });
    }
}
