<?php
/**
 * MarketingTargetType
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
 * MarketingTargetType Class Doc Comment
 *
 * @category Class
 * @description 推广内容资产类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketingTargetType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'MARKETING_TARGET_TYPE_UNKNOWN';
    const APP_ANDROID = 'MARKETING_TARGET_TYPE_APP_ANDROID';
    const APP_IOS = 'MARKETING_TARGET_TYPE_APP_IOS';
    const WECHAT_OFFICIAL_ACCOUNT = 'MARKETING_TARGET_TYPE_WECHAT_OFFICIAL_ACCOUNT';
    const PRODUCT = 'MARKETING_TARGET_TYPE_PRODUCT';
    const TRAFFIC = 'MARKETING_TARGET_TYPE_TRAFFIC';
    const HOUSE_PROPERTY = 'MARKETING_TARGET_TYPE_HOUSE_PROPERTY';
    const LOCAL_STORE = 'MARKETING_TARGET_TYPE_LOCAL_STORE';
    const WECHAT_MINI_GAME = 'MARKETING_TARGET_TYPE_WECHAT_MINI_GAME';
    const CONSUMER_PRODUCT = 'MARKETING_TARGET_TYPE_CONSUMER_PRODUCT';
    const WECHAT_CHANNELS = 'MARKETING_TARGET_TYPE_WECHAT_CHANNELS';
    const WECHAT_CHANNELS_LIVE = 'MARKETING_TARGET_TYPE_WECHAT_CHANNELS_LIVE';
    const WECHAT_CHANNELS_LIVE_RESERVATION = 'MARKETING_TARGET_TYPE_WECHAT_CHANNELS_LIVE_RESERVATION';
    const MINI_PROGRAM_WECHAT = 'MARKETING_TARGET_TYPE_MINI_PROGRAM_WECHAT';
    const APP_QUICK_APP = 'MARKETING_TARGET_TYPE_APP_QUICK_APP';
    const CONSUME_MEDICAL = 'MARKETING_TARGET_TYPE_CONSUME_MEDICAL';
    const COMPREHENSIVE_HOUSEKEEPING = 'MARKETING_TARGET_TYPE_COMPREHENSIVE_HOUSEKEEPING';
    const FICTION = 'MARKETING_TARGET_TYPE_FICTION';
    const SHORT_DRAMA = 'MARKETING_TARGET_TYPE_SHORT_DRAMA';
    const AUDIOVISUAL_ENTERTAINMENT = 'MARKETING_TARGET_TYPE_AUDIOVISUAL_ENTERTAINMENT';
    const BEAUTY_AND_PERSONAL_CARE = 'MARKETING_TARGET_TYPE_BEAUTY_AND_PERSONAL_CARE';
    const WEDDING_AND_PORTRAIT_PHOTOGRAPHY = 'MARKETING_TARGET_TYPE_WEDDING_AND_PORTRAIT_PHOTOGRAPHY';
    const FRANCHISE_BRAND = 'MARKETING_TARGET_TYPE_FRANCHISE_BRAND';
    const ENTERPRISE_SERVICES = 'MARKETING_TARGET_TYPE_ENTERPRISE_SERVICES';
    const EXHIBITION_BOOTH_DESIGN = 'MARKETING_TARGET_TYPE_EXHIBITION_BOOTH_DESIGN';
    const INSURANCE = 'MARKETING_TARGET_TYPE_INSURANCE';
    const BANK = 'MARKETING_TARGET_TYPE_BANK';
    const CREDIT = 'MARKETING_TARGET_TYPE_CREDIT';
    const INVESTMENT_CONSULTING = 'MARKETING_TARGET_TYPE_INVESTMENT_CONSULTING';
    const REAL_ESTATE = 'MARKETING_TARGET_TYPE_REAL_ESTATE';
    const TELECOMMUNICATIONS_OPERATOR = 'MARKETING_TARGET_TYPE_TELECOMMUNICATIONS_OPERATOR';
    const TOURIST_ATTRACTIONS_TICKETS = 'MARKETING_TARGET_TYPE_TOURIST_ATTRACTIONS_TICKETS';
    const RENOVATION_SERVICES = 'MARKETING_TARGET_TYPE_RENOVATION_SERVICES';
    const FURNITURE_AND_BUILDING_MATERIALS = 'MARKETING_TARGET_TYPE_FURNITURE_AND_BUILDING_MATERIALS';
    const EXHIBITION_SALES = 'MARKETING_TARGET_TYPE_EXHIBITION_SALES';
    const MEDICINE_INDUSTRY_COMMERCIAL = 'MARKETING_TARGET_TYPE_MEDICINE_INDUSTRY_COMMERCIAL';
    
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
            self::PRODUCT,
            self::TRAFFIC,
            self::HOUSE_PROPERTY,
            self::LOCAL_STORE,
            self::WECHAT_MINI_GAME,
            self::CONSUMER_PRODUCT,
            self::WECHAT_CHANNELS,
            self::WECHAT_CHANNELS_LIVE,
            self::WECHAT_CHANNELS_LIVE_RESERVATION,
            self::MINI_PROGRAM_WECHAT,
            self::APP_QUICK_APP,
            self::CONSUME_MEDICAL,
            self::COMPREHENSIVE_HOUSEKEEPING,
            self::FICTION,
            self::SHORT_DRAMA,
            self::AUDIOVISUAL_ENTERTAINMENT,
            self::BEAUTY_AND_PERSONAL_CARE,
            self::WEDDING_AND_PORTRAIT_PHOTOGRAPHY,
            self::FRANCHISE_BRAND,
            self::ENTERPRISE_SERVICES,
            self::EXHIBITION_BOOTH_DESIGN,
            self::INSURANCE,
            self::BANK,
            self::CREDIT,
            self::INVESTMENT_CONSULTING,
            self::REAL_ESTATE,
            self::TELECOMMUNICATIONS_OPERATOR,
            self::TOURIST_ATTRACTIONS_TICKETS,
            self::RENOVATION_SERVICES,
            self::FURNITURE_AND_BUILDING_MATERIALS,
            self::EXHIBITION_SALES,
            self::MEDICINE_INDUSTRY_COMMERCIAL,
        ];
    }
}


