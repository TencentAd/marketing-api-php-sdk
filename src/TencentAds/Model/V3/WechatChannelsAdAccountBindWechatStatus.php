<?php
/**
 * WechatChannelsAdAccountBindWechatStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model\V3;
use \TencentAds\ObjectSerializer;

/**
 * WechatChannelsAdAccountBindWechatStatus Class Doc Comment
 *
 * @category Class
 * @description 视频号一键开户微信绑定流程扫码状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatChannelsAdAccountBindWechatStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const UNBOUND = 'UNBOUND';
    const BOUND = 'BOUND';
    const EXPIRED = 'EXPIRED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::UNBOUND,
            self::BOUND,
            self::EXPIRED,
        ];
    }
}


