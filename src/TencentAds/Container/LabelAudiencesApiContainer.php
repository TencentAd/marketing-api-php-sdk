<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\LabelAudiencesApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class LabelAudiencesApiContainer extends ApiContainer
{
    /** @var LabelAudiencesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LabelAudiencesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LabelAudiencesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LabelAudiencesApi labelAudiencesAdd function
     * @param array params
     * @return \TencentAds\Model\LabelAudiencesAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->labelAudiencesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LabelAudiencesApi labelAudiencesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->labelAudiencesAddAsync($data);
            return $response;
        });
    }
}
