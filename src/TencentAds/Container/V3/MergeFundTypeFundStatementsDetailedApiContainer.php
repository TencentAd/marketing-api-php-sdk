<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\MergeFundTypeFundStatementsDetailedApi;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class MergeFundTypeFundStatementsDetailedApiContainer extends ApiContainer
{
    /** @var MergeFundTypeFundStatementsDetailedApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return MergeFundTypeFundStatementsDetailedApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new MergeFundTypeFundStatementsDetailedApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle MergeFundTypeFundStatementsDetailedApi mergeFundTypeFundStatementsDetailedGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $advertiserId = isset($params['advertiser_id']) ? $params['advertiser_id'] : null;
            $fundType = isset($params['fund_type']) ? $params['fund_type'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->mergeFundTypeFundStatementsDetailedGet($advertiserId, $fundType, $dateRange, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle MergeFundTypeFundStatementsDetailedApi mergeFundTypeFundStatementsDetailedGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $advertiserId = isset($params['advertiser_id']) ? $params['advertiser_id'] : null;
            $fundType = isset($params['fund_type']) ? $params['fund_type'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->mergeFundTypeFundStatementsDetailedGetAsync($advertiserId, $fundType, $dateRange, $page, $pageSize, $fields);
            return $response;
        });
    }
}
