<?php
namespace TencentAds\Container;

use GuzzleHttp\Client;
use TencentAds\Api\WechatAdvertiserLocalBusinessApi;
use TencentAds\Kernel\ApiContainer;
use TencentAds\Kernel\HeaderHandler;
use TencentAds\Middleware\Model\MiddlewareRequest;
use TencentAds\TencentAds;

class WechatAdvertiserLocalBusinessApiContainer extends ApiContainer
{
    /** @var WechatAdvertiserLocalBusinessApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatAdvertiserLocalBusinessApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatAdvertiserLocalBusinessApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatAdvertiserLocalBusinessApi wechatAdvertiserLocalBusinessAdd function
     * @param array params
     * @return \TencentAds\Model\WechatAdvertiserLocalBusinessAddResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $headImage = isset($params['head_image']) ? $params['head_image'] : null;
            $name = isset($params['name']) ? $params['name'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $contactPerson = isset($params['contact_person']) ? $params['contact_person'] : null;
            $contactPersonMobile = isset($params['contact_person_mobile']) ? $params['contact_person_mobile'] : null;
            $contactPersonCardId = isset($params['contact_person_card_id']) ? $params['contact_person_card_id'] : null;
            $corporation = isset($params['corporation']) ? $params['corporation'] : null;
            $corporationLicence = isset($params['corporation_licence']) ? $params['corporation_licence'] : null;
            $industryId = isset($params['industry_id']) ? $params['industry_id'] : null;
            $businessId = isset($params['business_id']) ? $params['business_id'] : null;
            $contactPersonTele = isset($params['contact_person_tele']) ? $params['contact_person_tele'] : null;
            $businessContent = isset($params['business_content']) ? $params['business_content'] : null;
            $response = $this->apiInstance->wechatAdvertiserLocalBusinessAdd($headImage, $name, $description, $contactPerson, $contactPersonMobile, $contactPersonCardId, $corporation, $corporationLicence, $industryId, $businessId, $contactPersonTele, $businessContent);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatAdvertiserLocalBusinessApi wechatAdvertiserLocalBusinessAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $headImage = isset($params['head_image']) ? $params['head_image'] : null;
            $name = isset($params['name']) ? $params['name'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $contactPerson = isset($params['contact_person']) ? $params['contact_person'] : null;
            $contactPersonMobile = isset($params['contact_person_mobile']) ? $params['contact_person_mobile'] : null;
            $contactPersonCardId = isset($params['contact_person_card_id']) ? $params['contact_person_card_id'] : null;
            $corporation = isset($params['corporation']) ? $params['corporation'] : null;
            $corporationLicence = isset($params['corporation_licence']) ? $params['corporation_licence'] : null;
            $industryId = isset($params['industry_id']) ? $params['industry_id'] : null;
            $businessId = isset($params['business_id']) ? $params['business_id'] : null;
            $contactPersonTele = isset($params['contact_person_tele']) ? $params['contact_person_tele'] : null;
            $businessContent = isset($params['business_content']) ? $params['business_content'] : null;
            $response = $this->apiInstance->wechatAdvertiserLocalBusinessAddAsync($headImage, $name, $description, $contactPerson, $contactPersonMobile, $contactPersonCardId, $corporation, $corporationLicence, $industryId, $businessId, $contactPersonTele, $businessContent);
            return $response;
        });
    }


    /**
     * Handle WechatAdvertiserLocalBusinessApi wechatAdvertiserLocalBusinessGet function
     * @param array params
     * @return \TencentAds\Model\WechatAdvertiserLocalBusinessGetResponseData
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatAdvertiserLocalBusinessGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatAdvertiserLocalBusinessApi wechatAdvertiserLocalBusinessGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatAdvertiserLocalBusinessGetAsync($accountId, $fields);
            return $response;
        });
    }


    /**
     * Handle WechatAdvertiserLocalBusinessApi wechatAdvertiserLocalBusinessUpdate function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function update(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $headImage = isset($params['head_image']) ? $params['head_image'] : null;
            $name = isset($params['name']) ? $params['name'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $contactPerson = isset($params['contact_person']) ? $params['contact_person'] : null;
            $contactPersonMobile = isset($params['contact_person_mobile']) ? $params['contact_person_mobile'] : null;
            $contactPersonCardId = isset($params['contact_person_card_id']) ? $params['contact_person_card_id'] : null;
            $corporation = isset($params['corporation']) ? $params['corporation'] : null;
            $corporationLicence = isset($params['corporation_licence']) ? $params['corporation_licence'] : null;
            $industryId = isset($params['industry_id']) ? $params['industry_id'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $contactPersonTele = isset($params['contact_person_tele']) ? $params['contact_person_tele'] : null;
            $businessContent = isset($params['business_content']) ? $params['business_content'] : null;
            $response = $this->apiInstance->wechatAdvertiserLocalBusinessUpdate($headImage, $name, $description, $contactPerson, $contactPersonMobile, $contactPersonCardId, $corporation, $corporationLicence, $industryId, $accountId, $contactPersonTele, $businessContent);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatAdvertiserLocalBusinessApi wechatAdvertiserLocalBusinessUpdateAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAsync(array $params = [])
    {
        return $this->handleMiddleware('update', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $headImage = isset($params['head_image']) ? $params['head_image'] : null;
            $name = isset($params['name']) ? $params['name'] : null;
            $description = isset($params['description']) ? $params['description'] : null;
            $contactPerson = isset($params['contact_person']) ? $params['contact_person'] : null;
            $contactPersonMobile = isset($params['contact_person_mobile']) ? $params['contact_person_mobile'] : null;
            $contactPersonCardId = isset($params['contact_person_card_id']) ? $params['contact_person_card_id'] : null;
            $corporation = isset($params['corporation']) ? $params['corporation'] : null;
            $corporationLicence = isset($params['corporation_licence']) ? $params['corporation_licence'] : null;
            $industryId = isset($params['industry_id']) ? $params['industry_id'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $contactPersonTele = isset($params['contact_person_tele']) ? $params['contact_person_tele'] : null;
            $businessContent = isset($params['business_content']) ? $params['business_content'] : null;
            $response = $this->apiInstance->wechatAdvertiserLocalBusinessUpdateAsync($headImage, $name, $description, $contactPerson, $contactPersonMobile, $contactPersonCardId, $corporation, $corporationLicence, $industryId, $accountId, $contactPersonTele, $businessContent);
            return $response;
        });
    }
}
