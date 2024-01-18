<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\KeywordRecommendApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class KeywordRecommendApiContainer extends ApiContainer
{
    /** @var KeywordRecommendApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return KeywordRecommendApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new KeywordRecommendApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle KeywordRecommendApi keywordRecommendGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $siteSets = isset($params['site_sets']) ? $params['site_sets'] : null;
            $recommendCategory = isset($params['recommend_category']) ? $params['recommend_category'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $systemIndustryId = isset($params['system_industry_id']) ? $params['system_industry_id'] : null;
            $queryWord = isset($params['query_word']) ? $params['query_word'] : null;
            $businessPointId = isset($params['business_point_id']) ? $params['business_point_id'] : null;
            $adgroupId = isset($params['adgroup_id']) ? $params['adgroup_id'] : null;
            $campaignId = isset($params['campaign_id']) ? $params['campaign_id'] : null;
            $includeWord = isset($params['include_word']) ? $params['include_word'] : null;
            $excludeWord = isset($params['exclude_word']) ? $params['exclude_word'] : null;
            $filterAdWord = isset($params['filter_ad_word']) ? $params['filter_ad_word'] : null;
            $filterAccountWord = isset($params['filter_account_word']) ? $params['filter_account_word'] : null;
            $recommendReasons = isset($params['recommend_reasons']) ? $params['recommend_reasons'] : null;
            $province = isset($params['province']) ? $params['province'] : null;
            $city = isset($params['city']) ? $params['city'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->keywordRecommendGet($siteSets, $recommendCategory, $accountId, $systemIndustryId, $queryWord, $businessPointId, $adgroupId, $campaignId, $includeWord, $excludeWord, $filterAdWord, $filterAccountWord, $recommendReasons, $province, $city, $orderBy, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle KeywordRecommendApi keywordRecommendGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $siteSets = isset($params['site_sets']) ? $params['site_sets'] : null;
            $recommendCategory = isset($params['recommend_category']) ? $params['recommend_category'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $systemIndustryId = isset($params['system_industry_id']) ? $params['system_industry_id'] : null;
            $queryWord = isset($params['query_word']) ? $params['query_word'] : null;
            $businessPointId = isset($params['business_point_id']) ? $params['business_point_id'] : null;
            $adgroupId = isset($params['adgroup_id']) ? $params['adgroup_id'] : null;
            $campaignId = isset($params['campaign_id']) ? $params['campaign_id'] : null;
            $includeWord = isset($params['include_word']) ? $params['include_word'] : null;
            $excludeWord = isset($params['exclude_word']) ? $params['exclude_word'] : null;
            $filterAdWord = isset($params['filter_ad_word']) ? $params['filter_ad_word'] : null;
            $filterAccountWord = isset($params['filter_account_word']) ? $params['filter_account_word'] : null;
            $recommendReasons = isset($params['recommend_reasons']) ? $params['recommend_reasons'] : null;
            $province = isset($params['province']) ? $params['province'] : null;
            $city = isset($params['city']) ? $params['city'] : null;
            $orderBy = isset($params['order_by']) ? $params['order_by'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->keywordRecommendGetAsync($siteSets, $recommendCategory, $accountId, $systemIndustryId, $queryWord, $businessPointId, $adgroupId, $campaignId, $includeWord, $excludeWord, $filterAdWord, $filterAccountWord, $recommendReasons, $province, $city, $orderBy, $fields);
            return $response;
        });
    }
}
