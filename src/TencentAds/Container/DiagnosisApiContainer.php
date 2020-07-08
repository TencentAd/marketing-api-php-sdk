<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DiagnosisApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DiagnosisApiContainer extends ApiContainer
{
    /** @var DiagnosisApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DiagnosisApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DiagnosisApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DiagnosisApi diagnosisGet function
     * @param array params
     * @return \TencentAds\Model\DiagnosisGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $adgroupIdList = isset($params['adgroup_id_list']) ? $params['adgroup_id_list'] : null;
            $timeRange = isset($params['time_range']) ? $params['time_range'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->diagnosisGet($accountId, $adgroupIdList, $timeRange, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DiagnosisApi diagnosisGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $adgroupIdList = isset($params['adgroup_id_list']) ? $params['adgroup_id_list'] : null;
            $timeRange = isset($params['time_range']) ? $params['time_range'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->diagnosisGetAsync($accountId, $adgroupIdList, $timeRange, $fields);
            return $response;
        });
    }
}
