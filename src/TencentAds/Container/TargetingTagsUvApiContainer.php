<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\TargetingTagsUvApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class TargetingTagsUvApiContainer extends ApiContainer
{
    /** @var TargetingTagsUvApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return TargetingTagsUvApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new TargetingTagsUvApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle TargetingTagsUvApi targetingTagsUvGet function
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
            $categoryType = isset($params['category_type']) ? $params['category_type'] : null;
            $categoryList = isset($params['category_list']) ? $params['category_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->targetingTagsUvGet($accountId, $categoryType, $categoryList, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle TargetingTagsUvApi targetingTagsUvGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $categoryType = isset($params['category_type']) ? $params['category_type'] : null;
            $categoryList = isset($params['category_list']) ? $params['category_list'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->targetingTagsUvGetAsync($accountId, $categoryType, $categoryList, $fields);
            return $response;
        });
    }
}
