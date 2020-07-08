<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\AdDiagnosisApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class AdDiagnosisApiContainer extends ApiContainer
{
    /** @var AdDiagnosisApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdDiagnosisApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdDiagnosisApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdDiagnosisApi adDiagnosisGet function
     * @param array params
     * @return \TencentAds\Model\AdDiagnosisGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adDiagnosisGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdDiagnosisApi adDiagnosisGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->adDiagnosisGetAsync($data);
            return $response;
        });
    }
}
