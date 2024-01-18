<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\AdDiagnosisApi;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class AdDiagnosisApiContainer extends ApiContainer
{
    /** @var AdDiagnosisApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdDiagnosisApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdDiagnosisApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdDiagnosisApi adDiagnosisGet function
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
            $adgroupIdList = isset($params['adgroup_id_list']) ? $params['adgroup_id_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adDiagnosisGet($accountId, $adgroupIdList, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdDiagnosisApi adDiagnosisGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $adgroupIdList = isset($params['adgroup_id_list']) ? $params['adgroup_id_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adDiagnosisGetAsync($accountId, $adgroupIdList, $fields);
            return $response;
        });
    }
}
