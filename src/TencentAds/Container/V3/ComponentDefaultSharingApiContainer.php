<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ComponentDefaultSharingApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ComponentDefaultSharingApiContainer extends ApiContainer
{
    /** @var ComponentDefaultSharingApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ComponentDefaultSharingApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ComponentDefaultSharingApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ComponentDefaultSharingApi componentDefaultSharingGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->componentDefaultSharingGet($organizationId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ComponentDefaultSharingApi componentDefaultSharingGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->componentDefaultSharingGetAsync($organizationId, $fields);
            return $response;
        });
    }


    /**
     * Handle ComponentDefaultSharingApi componentDefaultSharingUpdate function
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
            $response = $this->apiInstance->componentDefaultSharingUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ComponentDefaultSharingApi componentDefaultSharingUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->componentDefaultSharingUpdateAsync($data);
            return $response;
        });
    }
}
