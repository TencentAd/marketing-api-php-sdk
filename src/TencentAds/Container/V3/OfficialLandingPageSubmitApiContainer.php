<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\OfficialLandingPageSubmitApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class OfficialLandingPageSubmitApiContainer extends ApiContainer
{
    /** @var OfficialLandingPageSubmitApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OfficialLandingPageSubmitApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OfficialLandingPageSubmitApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OfficialLandingPageSubmitApi officialLandingPageSubmitUpdate function
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
            $response = $this->apiInstance->officialLandingPageSubmitUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OfficialLandingPageSubmitApi officialLandingPageSubmitUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->officialLandingPageSubmitUpdateAsync($data);
            return $response;
        });
    }
}
