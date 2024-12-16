<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ProgrammedCommponentPreviewTemplateApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ProgrammedCommponentPreviewTemplateApiContainer extends ApiContainer
{
    /** @var ProgrammedCommponentPreviewTemplateApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProgrammedCommponentPreviewTemplateApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProgrammedCommponentPreviewTemplateApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProgrammedCommponentPreviewTemplateApi programmedCommponentPreviewTemplateUpdate function
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
            $response = $this->apiInstance->programmedCommponentPreviewTemplateUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProgrammedCommponentPreviewTemplateApi programmedCommponentPreviewTemplateUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->programmedCommponentPreviewTemplateUpdateAsync($data);
            return $response;
        });
    }
}
