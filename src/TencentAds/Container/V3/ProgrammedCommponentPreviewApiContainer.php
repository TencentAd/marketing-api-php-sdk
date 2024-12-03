<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ProgrammedCommponentPreviewApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ProgrammedCommponentPreviewApiContainer extends ApiContainer
{
    /** @var ProgrammedCommponentPreviewApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ProgrammedCommponentPreviewApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ProgrammedCommponentPreviewApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ProgrammedCommponentPreviewApi programmedCommponentPreviewAdd function
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
            $response = $this->apiInstance->programmedCommponentPreviewAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProgrammedCommponentPreviewApi programmedCommponentPreviewAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->programmedCommponentPreviewAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle ProgrammedCommponentPreviewApi programmedCommponentPreviewDelete function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function delete(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->programmedCommponentPreviewDelete($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProgrammedCommponentPreviewApi programmedCommponentPreviewDeleteAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAsync(array $params = [])
    {
        return $this->handleMiddleware('delete', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->programmedCommponentPreviewDeleteAsync($data);
            return $response;
        });
    }


    /**
     * Handle ProgrammedCommponentPreviewApi programmedCommponentPreviewGet function
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
            $response = $this->apiInstance->programmedCommponentPreviewGet($accountId, $materialDeriveId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProgrammedCommponentPreviewApi programmedCommponentPreviewGetAsync function
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
            $response = $this->apiInstance->programmedCommponentPreviewGetAsync($accountId, $materialDeriveId, $fields);
            return $response;
        });
    }


    /**
     * Handle ProgrammedCommponentPreviewApi programmedCommponentPreviewUpdate function
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
            $response = $this->apiInstance->programmedCommponentPreviewUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ProgrammedCommponentPreviewApi programmedCommponentPreviewUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->programmedCommponentPreviewUpdateAsync($data);
            return $response;
        });
    }
}
