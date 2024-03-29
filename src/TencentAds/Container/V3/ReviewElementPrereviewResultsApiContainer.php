<?php
namespace TencentAds\Container\V3;

use GuzzleHttp\Client;
use TencentAds\Api\V3\ReviewElementPrereviewResultsApi;
use TencentAds\Kernel\V3\ApiContainer;
use TencentAds\Kernel\V3\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\V3\TencentAds;

class ReviewElementPrereviewResultsApiContainer extends ApiContainer
{
    /** @var ReviewElementPrereviewResultsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ReviewElementPrereviewResultsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ReviewElementPrereviewResultsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ReviewElementPrereviewResultsApi reviewElementPrereviewResultsGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reviewElementPrereviewResultsGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReviewElementPrereviewResultsApi reviewElementPrereviewResultsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reviewElementPrereviewResultsGetAsync($data);
            return $response;
        });
    }
}
