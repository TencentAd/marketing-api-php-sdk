<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\OfficialLandingPageComponentApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class OfficialLandingPageComponentApiContainer extends ApiContainer
{
    /** @var OfficialLandingPageComponentApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OfficialLandingPageComponentApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OfficialLandingPageComponentApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OfficialLandingPageComponentApi officialLandingPageComponentAdd function
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
            $response = $this->apiInstance->officialLandingPageComponentAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OfficialLandingPageComponentApi officialLandingPageComponentAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->officialLandingPageComponentAddAsync($data);
            return $response;
        });
    }
}
