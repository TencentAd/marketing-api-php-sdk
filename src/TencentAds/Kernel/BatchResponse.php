<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-03-12
 * Time: 21:34
 */

namespace TencentAds\Kernel;

use TencentAds\ApiException;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\TencentAds;

/**
 * Class BatchResponse
 * @package TencentAds\Kernel
 *
 */
class BatchResponse
{
    /**
     * @var ApiException
     */
    protected $e;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * Init a batch request
     * @param $request
     * @param $response
     * @return BatchResponse
     */
    public static function init($request, $response)
    {
        list($uri, $params) = $request;
        $self = new self();
        if (isset($response['http_code']) && $response['http_code'] < 200 || $response['http_code'] > 299) {
            $self->e = new ApiException(
                sprintf('[%d] Error connecting to the API (%s)', $response['http_code'], $uri),
                $response['http_code'],
                empty($response['headers']) ? [] : $response['headers'],
                empty($response['body']) ? '' : $response['body']
            );;
        } elseif (isset($response['body'])) {
            $data = json_decode($response['body'], true);
            if (!isset($data['code'])) {
                $self->e = new TencentAdsResponseException(sprintf('API (%s) response has not code field.', $uri));
            }
            if ($data['code'] != 0) {
                $self->e = new TencentAdsResponseException(
                    $response['message'], $response['code'], [], null, $response['message_cn']
                );
            }
            if (isset($data['data'])) {
                $configGlobal = TencentAds::getInstance()->getGlobalConfig();
                if (!empty($configGlobal['serializer']) && $configGlobal['serializer'] == SerializerHandler::SERIALIZER_TYPE_ARRAY) {
                    $self->data = $data['data'];
                } else if (empty($configGlobal['interface_map'][$uri]['response_class'])) {
                    $self->data = $data['data'];
                } else {
                    $data = json_decode($response['body']);
                    $self->data = SerializerHandler::deserialize($data->data, $configGlobal['interface_map'][$uri]['response_class']);
                }
            }
        }
        return $self;
    }

    /**
     *
     * @return bool
     */
    public function isError()
    {
        return !empty($this->e);
    }

    /**
     * Get exception
     * @return ApiException
     */
    public function getThrownException()
    {
        return $this->e;
    }

    /**
     * Get data
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}
