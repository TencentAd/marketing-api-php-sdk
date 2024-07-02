<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\QualificationImagesApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class QualificationImagesApiContainer extends ApiContainer
{
    /** @var QualificationImagesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return QualificationImagesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new QualificationImagesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle QualificationImagesApi qualificationImagesAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $response = $this->apiInstance->qualificationImagesAdd($accountId, $signature, $file);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle QualificationImagesApi qualificationImagesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $file = isset($params['file']) ? $params['file'] : null;
            $response = $this->apiInstance->qualificationImagesAddAsync($accountId, $signature, $file);
            return $response;
        });
    }


    /**
     * Handle QualificationImagesApi qualificationImagesGet function
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
            $imageIds = isset($params['image_ids']) ? $params['image_ids'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->qualificationImagesGet($accountId, $imageIds, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle QualificationImagesApi qualificationImagesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $imageIds = isset($params['image_ids']) ? $params['image_ids'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->qualificationImagesGetAsync($accountId, $imageIds, $page, $pageSize, $fields);
            return $response;
        });
    }
}
