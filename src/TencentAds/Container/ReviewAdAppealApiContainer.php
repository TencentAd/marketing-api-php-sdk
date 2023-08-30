<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\ReviewAdAppealApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class ReviewAdAppealApiContainer extends ApiContainer
{
    /** @var ReviewAdAppealApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ReviewAdAppealApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ReviewAdAppealApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ReviewAdAppealApi reviewAdAppealAdd function
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
            $response = $this->apiInstance->reviewAdAppealAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReviewAdAppealApi reviewAdAppealAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reviewAdAppealAddAsync($data);
            return $response;
        });
    }


    /**
     * Handle ReviewAdAppealApi reviewAdAppealGet function
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
            $response = $this->apiInstance->reviewAdAppealGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReviewAdAppealApi reviewAdAppealGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reviewAdAppealGetAsync($data);
            return $response;
        });
    }
}
