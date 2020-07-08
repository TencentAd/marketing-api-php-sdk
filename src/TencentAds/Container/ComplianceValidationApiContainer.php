<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ComplianceValidationApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ComplianceValidationApiContainer extends ApiContainer
{
    /** @var ComplianceValidationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ComplianceValidationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ComplianceValidationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ComplianceValidationApi complianceValidationGet function
     * @param array params
     * @return \TencentAds\Model\ComplianceValidationGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->complianceValidationGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ComplianceValidationApi complianceValidationGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->complianceValidationGetAsync($data);
            return $response;
        });
    }
}
