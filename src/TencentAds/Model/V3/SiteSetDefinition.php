<?php
/**
 * SiteSetDefinition
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
 * SiteSetDefinition Class Doc Comment
 *
 * @category Class
 * @description 投放版位
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SiteSetDefinition
{
    /**
     * Possible values of this enum
     */
    const QZONE = 'SITE_SET_QZONE';
    const QQCLIENT = 'SITE_SET_QQCLIENT';
    const MUSIC = 'SITE_SET_MUSIC';
    const MOBILE_UNION = 'SITE_SET_MOBILE_UNION';
    const KUAISHOU = 'SITE_SET_KUAISHOU';
    const QQCOM = 'SITE_SET_QQCOM';
    const WECHAT = 'SITE_SET_WECHAT';
    const MOBILE_MYAPP = 'SITE_SET_MOBILE_MYAPP';
    const MOBILE_INNER = 'SITE_SET_MOBILE_INNER';
    const TENCENT_NEWS = 'SITE_SET_TENCENT_NEWS';
    const TENCENT_VIDEO = 'SITE_SET_TENCENT_VIDEO';
    const TENCENT_KUAIBAO = 'SITE_SET_TENCENT_KUAIBAO';
    const MOBILE_YYB = 'SITE_SET_MOBILE_YYB';
    const PENGYOU = 'SITE_SET_PENGYOU';
    const TUAN = 'SITE_SET_TUAN';
    const MEISHI = 'SITE_SET_MEISHI';
    const PIAO = 'SITE_SET_PIAO';
    const MAIL = 'SITE_SET_MAIL';
    const PC_UNION = 'SITE_SET_PC_UNION';
    const YINGYONGBAO_PC = 'SITE_SET_YINGYONGBAO_PC';
    const PAIPAISEARCH = 'SITE_SET_PAIPAISEARCH';
    const QQSHOP = 'SITE_SET_QQSHOP';
    const PAIPAIDAOGOU = 'SITE_SET_PAIPAIDAOGOU';
    const QZONESEARCH = 'SITE_SET_QZONESEARCH';
    const WEBUNION_DELETED = 'SITE_SET_WEBUNION_DELETED';
    const EXPRESSPORTAL = 'SITE_SET_EXPRESSPORTAL';
    const WEIBO = 'SITE_SET_WEIBO';
    const WANGGOU = 'SITE_SET_WANGGOU';
    const MOBILE_UNION_DELETED = 'SITE_SET_MOBILE_UNION_DELETED';
    const THIRDPARTY = 'SITE_SET_THIRDPARTY';
    const JD_WAICAI = 'SITE_SET_JD_WAICAI';
    const TENCENT_AMS = 'SITE_SET_TENCENT_AMS';
    const OVERSEAS = 'SITE_SET_OVERSEAS';
    const PCQQ = 'SITE_SET_PCQQ';
    const KANDIAN = 'SITE_SET_KANDIAN';
    const QQ_MUSIC_GAME = 'SITE_SET_QQ_MUSIC_GAME';
    const MOMENTS = 'SITE_SET_MOMENTS';
    const MINI_GAME_WECHAT = 'SITE_SET_MINI_GAME_WECHAT';
    const MINI_GAME_QQ = 'SITE_SET_MINI_GAME_QQ';
    const MOBILE_GAME = 'SITE_SET_MOBILE_GAME';
    const QQSHOPPING = 'SITE_SET_QQSHOPPING';
    const TENCENT_VIDEO_OTT = 'SITE_SET_TENCENT_VIDEO_OTT';
    const CHANNELS = 'SITE_SET_CHANNELS';
    const OVERSEAS_UNION = 'SITE_SET_OVERSEAS_UNION';
    const WECHAT_SEARCH = 'SITE_SET_WECHAT_SEARCH';
    const WECHAT_PLUGIN = 'SITE_SET_WECHAT_PLUGIN';
    const FREETRADE = 'SITE_SET_FREETRADE';
    const QBSEARCH = 'SITE_SET_QBSEARCH';
    const FREETRADE_FINDER = 'SITE_SET_FREETRADE_FINDER';
    const BROWSER_MOBILE = 'SITE_SET_BROWSER_MOBILE';
    const SEARCH_SCENE = 'SITE_SET_SEARCH_SCENE';
    const BROWSER_PC = 'SITE_SET_BROWSER_PC';
    const CHANNELS_CONTENT_PROMOTION = 'SITE_SET_CHANNELS_CONTENT_PROMOTION';
    const FREETRADE_WEAPP = 'SITE_SET_FREETRADE_WEAPP';
    const TENCENT_AD_NETWORK_OVERSEA = 'SITE_SET_TENCENT_AD_NETWORK_OVERSEA';
    const YUNXUAN = 'SITE_SET_YUNXUAN';
    const EXPAND = 'SITE_SET_EXPAND';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QZONE,
            self::QQCLIENT,
            self::MUSIC,
            self::MOBILE_UNION,
            self::KUAISHOU,
            self::QQCOM,
            self::WECHAT,
            self::MOBILE_MYAPP,
            self::MOBILE_INNER,
            self::TENCENT_NEWS,
            self::TENCENT_VIDEO,
            self::TENCENT_KUAIBAO,
            self::MOBILE_YYB,
            self::PENGYOU,
            self::TUAN,
            self::MEISHI,
            self::PIAO,
            self::MAIL,
            self::PC_UNION,
            self::YINGYONGBAO_PC,
            self::PAIPAISEARCH,
            self::QQSHOP,
            self::PAIPAIDAOGOU,
            self::QZONESEARCH,
            self::WEBUNION_DELETED,
            self::EXPRESSPORTAL,
            self::WEIBO,
            self::WANGGOU,
            self::MOBILE_UNION_DELETED,
            self::THIRDPARTY,
            self::JD_WAICAI,
            self::TENCENT_AMS,
            self::OVERSEAS,
            self::PCQQ,
            self::KANDIAN,
            self::QQ_MUSIC_GAME,
            self::MOMENTS,
            self::MINI_GAME_WECHAT,
            self::MINI_GAME_QQ,
            self::MOBILE_GAME,
            self::QQSHOPPING,
            self::TENCENT_VIDEO_OTT,
            self::CHANNELS,
            self::OVERSEAS_UNION,
            self::WECHAT_SEARCH,
            self::WECHAT_PLUGIN,
            self::FREETRADE,
            self::QBSEARCH,
            self::FREETRADE_FINDER,
            self::BROWSER_MOBILE,
            self::SEARCH_SCENE,
            self::BROWSER_PC,
            self::CHANNELS_CONTENT_PROMOTION,
            self::FREETRADE_WEAPP,
            self::TENCENT_AD_NETWORK_OVERSEA,
            self::YUNXUAN,
            self::EXPAND,
        ];
    }
}


