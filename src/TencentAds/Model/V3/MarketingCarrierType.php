<?php
/**
 * MarketingCarrierType
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
 * MarketingCarrierType Class Doc Comment
 *
 * @category Class
 * @description 营销载体类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketingCarrierType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'MARKETING_CARRIER_TYPE_UNKNOWN';
    const APP_ANDROID = 'MARKETING_CARRIER_TYPE_APP_ANDROID';
    const APP_IOS = 'MARKETING_CARRIER_TYPE_APP_IOS';
    const WECHAT_OFFICIAL_ACCOUNT = 'MARKETING_CARRIER_TYPE_WECHAT_OFFICIAL_ACCOUNT';
    const JUMP_PAGE = 'MARKETING_CARRIER_TYPE_JUMP_PAGE';
    const WECHAT_MINI_GAME = 'MARKETING_CARRIER_TYPE_WECHAT_MINI_GAME';
    const WECHAT_CHANNELS_LIVE = 'MARKETING_CARRIER_TYPE_WECHAT_CHANNELS_LIVE';
    const WECHAT_CHANNELS = 'MARKETING_CARRIER_TYPE_WECHAT_CHANNELS';
    const WECHAT_CHANNELS_LIVE_RESERVATION = 'MARKETING_CARRIER_TYPE_WECHAT_CHANNELS_LIVE_RESERVATION';
    const MINI_PROGRAM_WECHAT = 'MARKETING_CARRIER_TYPE_MINI_PROGRAM_WECHAT';
    const APP_QUICK_APP = 'MARKETING_CARRIER_TYPE_APP_QUICK_APP';
    const JUMP_PAGE2 = 'MARKETING_CARRIER_TYPE_JUMP_PAGE2';
    const MINI_PROGRAM_WECHAT2 = 'MARKETING_CARRIER_TYPE_MINI_PROGRAM_WECHAT2';
    const PC_GAME = 'MARKETING_CARRIER_TYPE_PC_GAME';
    const QQ_MINI_GAME = 'MARKETING_CARRIER_TYPE_QQ_MINI_GAME';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::APP_ANDROID,
            self::APP_IOS,
            self::WECHAT_OFFICIAL_ACCOUNT,
            self::JUMP_PAGE,
            self::WECHAT_MINI_GAME,
            self::WECHAT_CHANNELS_LIVE,
            self::WECHAT_CHANNELS,
            self::WECHAT_CHANNELS_LIVE_RESERVATION,
            self::MINI_PROGRAM_WECHAT,
            self::APP_QUICK_APP,
            self::JUMP_PAGE2,
            self::MINI_PROGRAM_WECHAT2,
            self::PC_GAME,
            self::QQ_MINI_GAME,
        ];
    }
}


