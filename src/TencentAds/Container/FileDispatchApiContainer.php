<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\FileDispatchApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class FileDispatchApiContainer extends ApiContainer
{
    /** @var FileDispatchApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return FileDispatchApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new FileDispatchApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle FileDispatchApi fileDispatchUpdate function
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
            $response = $this->apiInstance->fileDispatchUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle FileDispatchApi fileDispatchUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->fileDispatchUpdateAsync($data);
            return $response;
        });
    }
}
