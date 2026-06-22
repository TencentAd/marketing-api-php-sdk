<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\DcComponentSummaryInfoApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class DcComponentSummaryInfoApiContainer extends ApiContainer
{
    /** @var DcComponentSummaryInfoApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DcComponentSummaryInfoApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DcComponentSummaryInfoApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DcComponentSummaryInfoApi dcComponentSummaryInfoGet function
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
            $componentSummaryInsightTypeList = isset($params['component_summary_insight_type_list']) ? $params['component_summary_insight_type_list'] : null;
            $dynamicCreativeId = isset($params['dynamic_creative_id']) ? $params['dynamic_creative_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dcComponentSummaryInfoGet($accountId, $componentSummaryInsightTypeList, $dynamicCreativeId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DcComponentSummaryInfoApi dcComponentSummaryInfoGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $componentSummaryInsightTypeList = isset($params['component_summary_insight_type_list']) ? $params['component_summary_insight_type_list'] : null;
            $dynamicCreativeId = isset($params['dynamic_creative_id']) ? $params['dynamic_creative_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dcComponentSummaryInfoGetAsync($accountId, $componentSummaryInsightTypeList, $dynamicCreativeId, $fields);
            return $response;
        });
    }
}
