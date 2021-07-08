<?php
/**
 * DestinationType
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
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;
use \TencentAds\ObjectSerializer;

/**
 * DestinationType Class Doc Comment
 *
 * @category Class
 * @description 落地页类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinationType
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'PAGE_TYPE_DEFAULT';
    const TSA_APP = 'PAGE_TYPE_TSA_APP';
    const TSA_WEB_NONE_ECOMMERCE = 'PAGE_TYPE_TSA_WEB_NONE_ECOMMERCE';
    const CANVAS_WECHAT = 'PAGE_TYPE_CANVAS_WECHAT';
    const MINI_PROGRAM_WECHAT = 'PAGE_TYPE_MINI_PROGRAM_WECHAT';
    const FENGYE_ECOMMERCE = 'PAGE_TYPE_FENGYE_ECOMMERCE';
    const MINI_GAME_WECHAT = 'PAGE_TYPE_MINI_GAME_WECHAT';
    const FENGYE_EC_WECHAT_MINIPROGRAM = 'PAGE_TYPE_FENGYE_EC_WECHAT_MINIPROGRAM';
    const IOS_APP = 'PAGE_TYPE_IOS_APP';
    const MINI_PROGRAM_QQ = 'PAGE_TYPE_MINI_PROGRAM_QQ';
    const MINI_PROGRAM_CANVAS_WECHAT = 'PAGE_TYPE_MINI_PROGRAM_CANVAS_WECHAT';
    const MINI_GAME_QQ = 'PAGE_TYPE_MINI_GAME_QQ';
    const ARTICAL_WECHAT = 'PAGE_TYPE_ARTICAL_WECHAT';
    const MOMENTS_SIMPLE_NATIVE_WECHAT = 'PAGE_TYPE_MOMENTS_SIMPLE_NATIVE_WECHAT';
    const FULL_SCREEN_WECHAT = 'PAGE_TYPE_FULL_SCREEN_WECHAT';
    const YUEBAO_QUICKAPP = 'PAGE_TYPE_YUEBAO_QUICKAPP';
    const YUEBAO_OFFICIAL_ACCOUNT_ARTICLE = 'PAGE_TYPE_YUEBAO_OFFICIAL_ACCOUNT_ARTICLE';
    const XIJING_QUICK = 'PAGE_TYPE_XIJING_QUICK';
    const WECHAT_CHANNELS = 'PAGE_TYPE_WECHAT_CHANNELS';
    const CHANNELS_WATCH_LIVE = 'PAGE_TYPE_CHANNELS_WATCH_LIVE';
    const CHANNELS_RESERVE_LIVE = 'PAGE_TYPE_CHANNELS_RESERVE_LIVE';
    const YOUZAN_SINGLE = 'PAGE_TYPE_YOUZAN_SINGLE';
    const YOUZAN_TOGETHER = 'PAGE_TYPE_YOUZAN_TOGETHER';
    const YOUZAN_WECHAT_MINIPROGRAM = 'PAGE_TYPE_YOUZAN_WECHAT_MINIPROGRAM';
    const YIYE_FORM = 'PAGE_TYPE_YIYE_FORM';
    const WEIMOB_PRODUCTSET = 'PAGE_TYPE_WEIMOB_PRODUCTSET';
    const WEIMOB_PROMOTION = 'PAGE_TYPE_WEIMOB_PROMOTION';
    const WEIMOB_PRODUCT = 'PAGE_TYPE_WEIMOB_PRODUCT';
    const WEIMOB_H5 = 'PAGE_TYPE_WEIMOB_H5';
    const TSA_OTT = 'PAGE_TYPE_TSA_OTT';
    const WECHAT_OFFICIAL_ACCOUNT_DETAIL = 'PAGE_TYPE_WECHAT_OFFICIAL_ACCOUNT_DETAIL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::TSA_APP,
            self::TSA_WEB_NONE_ECOMMERCE,
            self::CANVAS_WECHAT,
            self::MINI_PROGRAM_WECHAT,
            self::FENGYE_ECOMMERCE,
            self::MINI_GAME_WECHAT,
            self::FENGYE_EC_WECHAT_MINIPROGRAM,
            self::IOS_APP,
            self::MINI_PROGRAM_QQ,
            self::MINI_PROGRAM_CANVAS_WECHAT,
            self::MINI_GAME_QQ,
            self::ARTICAL_WECHAT,
            self::MOMENTS_SIMPLE_NATIVE_WECHAT,
            self::FULL_SCREEN_WECHAT,
            self::YUEBAO_QUICKAPP,
            self::YUEBAO_OFFICIAL_ACCOUNT_ARTICLE,
            self::XIJING_QUICK,
            self::WECHAT_CHANNELS,
            self::CHANNELS_WATCH_LIVE,
            self::CHANNELS_RESERVE_LIVE,
            self::YOUZAN_SINGLE,
            self::YOUZAN_TOGETHER,
            self::YOUZAN_WECHAT_MINIPROGRAM,
            self::YIYE_FORM,
            self::WEIMOB_PRODUCTSET,
            self::WEIMOB_PROMOTION,
            self::WEIMOB_PRODUCT,
            self::WEIMOB_H5,
            self::TSA_OTT,
            self::WECHAT_OFFICIAL_ACCOUNT_DETAIL,
        ];
    }
}


