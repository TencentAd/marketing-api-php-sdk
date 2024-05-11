<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\QualificationStructureApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class QualificationStructureApiContainer extends ApiContainer
{
    /** @var QualificationStructureApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return QualificationStructureApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new QualificationStructureApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle QualificationStructureApi qualificationStructureGet function
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
            $qualificationCode = isset($params['qualification_code']) ? $params['qualification_code'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->qualificationStructureGet($accountId, $qualificationCode, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle QualificationStructureApi qualificationStructureGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $qualificationCode = isset($params['qualification_code']) ? $params['qualification_code'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->qualificationStructureGetAsync($accountId, $qualificationCode, $fields);
            return $response;
        });
    }
}
