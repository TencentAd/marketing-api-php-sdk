<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\OfficialLandingPageApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class OfficialLandingPageApiContainer extends ApiContainer
{
    /** @var OfficialLandingPageApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OfficialLandingPageApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OfficialLandingPageApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OfficialLandingPageApi officialLandingPageDelete function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->officialLandingPageDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OfficialLandingPageApi officialLandingPageDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->officialLandingPageDeleteAsync($data);
            return $response;
        });
    }
}
