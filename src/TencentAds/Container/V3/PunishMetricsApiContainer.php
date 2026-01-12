<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\PunishMetricsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class PunishMetricsApiContainer extends ApiContainer
{
    /** @var PunishMetricsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return PunishMetricsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new PunishMetricsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle PunishMetricsApi punishMetricsGet function
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
            $response = $this->apiInstance->punishMetricsGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PunishMetricsApi punishMetricsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->punishMetricsGetAsync($data);
            return $response;
        });
    }
}
