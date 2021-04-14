<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\OuterCluesClaiminfoApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class OuterCluesClaiminfoApiContainer extends ApiContainer
{
    /** @var OuterCluesClaiminfoApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OuterCluesClaiminfoApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OuterCluesClaiminfoApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OuterCluesClaiminfoApi outerCluesClaiminfoUpdate function
     * @param array params
     * @return \TencentAds\Model\OuterCluesClaiminfoUpdateResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->outerCluesClaiminfoUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OuterCluesClaiminfoApi outerCluesClaiminfoUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->outerCluesClaiminfoUpdateAsync($data);
            return $response;
        });
    }
}
