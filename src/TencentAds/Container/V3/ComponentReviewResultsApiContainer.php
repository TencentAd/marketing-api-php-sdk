<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ComponentReviewResultsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ComponentReviewResultsApiContainer extends ApiContainer
{
    /** @var ComponentReviewResultsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ComponentReviewResultsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ComponentReviewResultsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ComponentReviewResultsApi componentReviewResultsGet function
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
            $componentIdList = isset($params['component_id_list']) ? $params['component_id_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->componentReviewResultsGet($accountId, $componentIdList, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ComponentReviewResultsApi componentReviewResultsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $componentIdList = isset($params['component_id_list']) ? $params['component_id_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->componentReviewResultsGetAsync($accountId, $componentIdList, $fields);
            return $response;
        });
    }
}
