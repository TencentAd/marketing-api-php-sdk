<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\BidwordFlowApi;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class BidwordFlowApiContainer extends ApiContainer
{
    /** @var BidwordFlowApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BidwordFlowApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BidwordFlowApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BidwordFlowApi bidwordFlowGet function
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
            $bidwordList = isset($params['bidword_list']) ? $params['bidword_list'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->bidwordFlowGet($accountId, $bidwordList, $orderBy, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BidwordFlowApi bidwordFlowGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $bidwordList = isset($params['bidword_list']) ? $params['bidword_list'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->bidwordFlowGetAsync($accountId, $bidwordList, $orderBy, $fields);
            return $response;
        });
    }
}
