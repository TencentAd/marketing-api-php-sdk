<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\OrganizationAccountRelationApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class OrganizationAccountRelationApiContainer extends ApiContainer
{
    /** @var OrganizationAccountRelationApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OrganizationAccountRelationApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OrganizationAccountRelationApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OrganizationAccountRelationApi organizationAccountRelationGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $paginationMode = isset($params['pagination_mode']) ? $params['pagination_mode'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $advertiserType = isset($params['advertiser_type']) ? $params['advertiser_type'] : null;
            $cursor = isset($params['cursor']) ? $params['cursor'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->organizationAccountRelationGet($paginationMode, $accountId, $advertiserType, $cursor, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OrganizationAccountRelationApi organizationAccountRelationGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $paginationMode = isset($params['pagination_mode']) ? $params['pagination_mode'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $advertiserType = isset($params['advertiser_type']) ? $params['advertiser_type'] : null;
            $cursor = isset($params['cursor']) ? $params['cursor'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->organizationAccountRelationGetAsync($paginationMode, $accountId, $advertiserType, $cursor, $page, $pageSize, $fields);
            return $response;
        });
    }
}
