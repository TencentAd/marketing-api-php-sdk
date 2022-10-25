<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\CampaignNegativewordsApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class CampaignNegativewordsApiContainer extends ApiContainer
{
    /** @var CampaignNegativewordsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CampaignNegativewordsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CampaignNegativewordsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CampaignNegativewordsApi campaignNegativewordsAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignNegativewordsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CampaignNegativewordsApi campaignNegativewordsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignNegativewordsAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle CampaignNegativewordsApi campaignNegativewordsGet function
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
            $response = $this->apiInstance->campaignNegativewordsGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CampaignNegativewordsApi campaignNegativewordsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignNegativewordsGetAsync($data);
            return $response;
        });
    }


    /**
     * Handle CampaignNegativewordsApi campaignNegativewordsUpdate function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignNegativewordsUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CampaignNegativewordsApi campaignNegativewordsUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->campaignNegativewordsUpdateAsync($data);
            return $response;
        });
    }
}
