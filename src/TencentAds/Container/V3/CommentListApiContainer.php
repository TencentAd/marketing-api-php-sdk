<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\CommentListApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class CommentListApiContainer extends ApiContainer
{
    /** @var CommentListApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CommentListApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CommentListApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CommentListApi commentListGet function
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
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $count = isset($params['count']) ? $params['count'] : null;
            $lastBuffer = isset($params['last_buffer']) ? $params['last_buffer'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->commentListGet($accountId, $filtering, $count, $lastBuffer, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CommentListApi commentListGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $count = isset($params['count']) ? $params['count'] : null;
            $lastBuffer = isset($params['last_buffer']) ? $params['last_buffer'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->commentListGetAsync($accountId, $filtering, $count, $lastBuffer, $fields);
            return $response;
        });
    }
}
