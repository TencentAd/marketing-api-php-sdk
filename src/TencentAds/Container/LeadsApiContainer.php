<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\LeadsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class LeadsApiContainer extends ApiContainer
{
    /** @var LeadsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LeadsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LeadsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LeadsApi leadsGet function
     * @param array params
     * @return \TencentAds\Model\LeadsListData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $timeRange = isset($params['time_range']) ? $params['time_range'] : null;
            $positionType = isset($params['position_type']) ? $params['position_type'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->leadsGet($accountId, $timeRange, $positionType, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LeadsApi leadsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $timeRange = isset($params['time_range']) ? $params['time_range'] : null;
            $positionType = isset($params['position_type']) ? $params['position_type'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->leadsGetAsync($accountId, $timeRange, $positionType, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
