<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ProgrammedCommponentResultApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ProgrammedCommponentResultApiContainer extends ApiContainer
{
    /** @var ProgrammedCommponentResultApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProgrammedCommponentResultApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProgrammedCommponentResultApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProgrammedCommponentResultApi programmedCommponentResultGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $materialDeriveId = isset($params['material_derive_id']) ? $params['material_derive_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->programmedCommponentResultGet($accountId, $materialDeriveId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProgrammedCommponentResultApi programmedCommponentResultGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $materialDeriveId = isset($params['material_derive_id']) ? $params['material_derive_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->programmedCommponentResultGetAsync($accountId, $materialDeriveId, $fields);
            return $response;
        });
    }
}
