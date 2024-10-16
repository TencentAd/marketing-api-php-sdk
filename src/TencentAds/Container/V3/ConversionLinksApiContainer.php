<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ConversionLinksApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ConversionLinksApiContainer extends ApiContainer
{
    /** @var ConversionLinksApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ConversionLinksApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ConversionLinksApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ConversionLinksApi conversionLinksGet function
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
            $secondCategoryType = isset($params['second_category_type']) ? $params['second_category_type'] : null;
            $optimizationGoalStruct = isset($params['optimization_goal_struct']) ? $params['optimization_goal_struct'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->conversionLinksGet($accountId, $secondCategoryType, $optimizationGoalStruct, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ConversionLinksApi conversionLinksGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $secondCategoryType = isset($params['second_category_type']) ? $params['second_category_type'] : null;
            $optimizationGoalStruct = isset($params['optimization_goal_struct']) ? $params['optimization_goal_struct'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->conversionLinksGetAsync($accountId, $secondCategoryType, $optimizationGoalStruct, $fields);
            return $response;
        });
    }
}
