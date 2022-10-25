<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\QuerywordRptApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class QuerywordRptApiContainer extends ApiContainer
{
    /** @var QuerywordRptApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return QuerywordRptApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new QuerywordRptApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle QuerywordRptApi querywordRptGet function
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
            $response = $this->apiInstance->querywordRptGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle QuerywordRptApi querywordRptGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->querywordRptGetAsync($data);
            return $response;
        });
    }
}
