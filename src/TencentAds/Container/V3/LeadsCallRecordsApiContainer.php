<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\LeadsCallRecordsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class LeadsCallRecordsApiContainer extends ApiContainer
{
    /** @var LeadsCallRecordsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LeadsCallRecordsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LeadsCallRecordsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LeadsCallRecordsApi leadsCallRecordsGet function
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
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $startDate = isset($params['start_date']) ? $params['start_date'] : null;
            $endDate = isset($params['end_date']) ? $params['end_date'] : null;
            $searchAfter = isset($params['search_after']) ? $params['search_after'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->leadsCallRecordsGet($accountId, $pageSize, $page, $startDate, $endDate, $searchAfter, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LeadsCallRecordsApi leadsCallRecordsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $startDate = isset($params['start_date']) ? $params['start_date'] : null;
            $endDate = isset($params['end_date']) ? $params['end_date'] : null;
            $searchAfter = isset($params['search_after']) ? $params['search_after'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->leadsCallRecordsGetAsync($accountId, $pageSize, $page, $startDate, $endDate, $searchAfter, $fields);
            return $response;
        });
    }
}
