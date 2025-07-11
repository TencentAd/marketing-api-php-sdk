<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ComponentSharingApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ComponentSharingApiContainer extends ApiContainer
{
    /** @var ComponentSharingApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ComponentSharingApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ComponentSharingApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ComponentSharingApi componentSharingGet function
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
            $componentId = isset($params['component_id']) ? $params['component_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $isDeleted = isset($params['is_deleted']) ? $params['is_deleted'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->componentSharingGet($organizationId, $componentId, $page, $pageSize, $isDeleted, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ComponentSharingApi componentSharingGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $organizationId = isset($params['organization_id']) ? $params['organization_id'] : null;
            $componentId = isset($params['component_id']) ? $params['component_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $isDeleted = isset($params['is_deleted']) ? $params['is_deleted'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->componentSharingGetAsync($organizationId, $componentId, $page, $pageSize, $isDeleted, $fields);
            return $response;
        });
    }


    /**
     * Handle ComponentSharingApi componentSharingUpdate function
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
            $response = $this->apiInstance->componentSharingUpdate($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ComponentSharingApi componentSharingUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->componentSharingUpdateAsync($data);
            return $response;
        });
    }
}
