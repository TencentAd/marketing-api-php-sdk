<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\DataSetApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class DataSetApiContainer extends ApiContainer
{
    /** @var DataSetApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DataSetApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DataSetApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DataSetApi dataSetAdd function
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
            $response = $this->apiInstance->dataSetAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DataSetApi dataSetAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->dataSetAddAsync($data);
            return $response;
        });
    }
}
