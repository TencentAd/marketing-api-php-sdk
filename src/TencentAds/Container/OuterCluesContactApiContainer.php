<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\OuterCluesContactApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class OuterCluesContactApiContainer extends ApiContainer
{
    /** @var OuterCluesContactApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OuterCluesContactApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OuterCluesContactApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OuterCluesContactApi outerCluesContactUpdate function
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
            $response = $this->apiInstance->outerCluesContactUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OuterCluesContactApi outerCluesContactUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->outerCluesContactUpdateAsync($data);
            return $response;
        });
    }
}
