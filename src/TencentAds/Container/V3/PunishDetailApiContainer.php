<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\PunishDetailApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class PunishDetailApiContainer extends ApiContainer
{
    /** @var PunishDetailApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return PunishDetailApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new PunishDetailApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle PunishDetailApi punishDetailGet function
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
            $response = $this->apiInstance->punishDetailGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PunishDetailApi punishDetailGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->punishDetailGetAsync($data);
            return $response;
        });
    }
}
