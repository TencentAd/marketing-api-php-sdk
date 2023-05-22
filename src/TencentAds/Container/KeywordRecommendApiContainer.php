<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\KeywordRecommendApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

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
            $data = $params;
            $response = $this->apiInstance->keywordRecommendGet($data);
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
            $data = $params;
            $response = $this->apiInstance->keywordRecommendGetAsync($data);
            return $response;
        });
    }
}
