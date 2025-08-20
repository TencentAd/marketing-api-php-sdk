<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\PunishmentConfigApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class PunishmentConfigApiContainer extends ApiContainer
{
    /** @var PunishmentConfigApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return PunishmentConfigApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new PunishmentConfigApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle PunishmentConfigApi punishmentConfigGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->punishmentConfigGet($fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle PunishmentConfigApi punishmentConfigGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->punishmentConfigGetAsync($fields);
            return $response;
        });
    }
}
