<?php
/**
 * PromotedAssetType
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
 * PromotedAssetType Class Doc Comment
 *
 * @category Class
 * @description 推广内容类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotedAssetType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'PROMOTED_ASSET_TYPE_UNKNOWN';
    const APP_ANDROID = 'PROMOTED_ASSET_TYPE_APP_ANDROID';
    const APP_IOS = 'PROMOTED_ASSET_TYPE_APP_IOS';
    const WECHAT_OFFICIAL_ACCOUNT = 'PROMOTED_ASSET_TYPE_WECHAT_OFFICIAL_ACCOUNT';
    const EDUCATION = 'PROMOTED_ASSET_TYPE_EDUCATION';
    const TRAFFIC = 'PROMOTED_ASSET_TYPE_TRAFFIC';
    const HOUSE_PROPERTY = 'PROMOTED_ASSET_TYPE_HOUSE_PROPERTY';
    const LOCAL_STORE = 'PROMOTED_ASSET_TYPE_LOCAL_STORE';
    const MINIGAME = 'PROMOTED_ASSET_TYPE_MINIGAME';
    const CONSUMER_PRODUCT = 'PROMOTED_ASSET_TYPE_CONSUMER_PRODUCT';
    const WECHAT_CHANNELS = 'PROMOTED_ASSET_TYPE_WECHAT_CHANNELS';
    const WECHAT_CHANNELS_LIVE = 'PROMOTED_ASSET_TYPE_WECHAT_CHANNELS_LIVE';
    const WECHAT_CHANNELS_LIVE_RESERVATION = 'PROMOTED_ASSET_TYPE_WECHAT_CHANNELS_LIVE_RESERVATION';
    const MINI_PROGRAM_WECHAT = 'PROMOTED_ASSET_TYPE_MINI_PROGRAM_WECHAT';
    const APP_QUICK_APP = 'PROMOTED_ASSET_TYPE_APP_QUICK_APP';
    const CONSUME_MEDICAL = 'PROMOTED_ASSET_TYPE_CONSUME_MEDICAL';
    const COMPREHENSIVE_HOUSEKEEPING = 'PROMOTED_ASSET_TYPE_COMPREHENSIVE_HOUSEKEEPING';
    const FICTION = 'PROMOTED_ASSET_TYPE_FICTION';
    const SHORT_DRAMA = 'PROMOTED_ASSET_TYPE_SHORT_DRAMA';
    const AUDIOVISUAL_ENTERTAINMENT = 'PROMOTED_ASSET_TYPE_AUDIOVISUAL_ENTERTAINMENT';
    const BEAUTY_AND_PERSONAL_CARE = 'PROMOTED_ASSET_TYPE_BEAUTY_AND_PERSONAL_CARE';
    const WEDDING_AND_PORTRAIT_PHOTOGRAPHY = 'PROMOTED_ASSET_TYPE_WEDDING_AND_PORTRAIT_PHOTOGRAPHY';
    const FRANCHISE_BRAND = 'PROMOTED_ASSET_TYPE_FRANCHISE_BRAND';
    const ENTERPRISE_SERVICES = 'PROMOTED_ASSET_TYPE_ENTERPRISE_SERVICES';
    const EXHIBITION_BOOTH_DESIGN = 'PROMOTED_ASSET_TYPE_EXHIBITION_BOOTH_DESIGN';
    const INSURANCE = 'PROMOTED_ASSET_TYPE_INSURANCE';
    const BANK = 'PROMOTED_ASSET_TYPE_BANK';
    const CREDIT = 'PROMOTED_ASSET_TYPE_CREDIT';
    const INVESTMENT_CONSULTING = 'PROMOTED_ASSET_TYPE_INVESTMENT_CONSULTING';
    const REAL_ESTATE = 'PROMOTED_ASSET_TYPE_REAL_ESTATE';
    const TELECOMMUNICATIONS_OPERATOR = 'PROMOTED_ASSET_TYPE_TELECOMMUNICATIONS_OPERATOR';
    const TOURIST_ATTRACTIONS_TICKETS = 'PROMOTED_ASSET_TYPE_TOURIST_ATTRACTIONS_TICKETS';
    const RENOVATION_SERVICES = 'PROMOTED_ASSET_TYPE_RENOVATION_SERVICES';
    const FURNITURE_AND_BUILDING_MATERIALS = 'PROMOTED_ASSET_TYPE_FURNITURE_AND_BUILDING_MATERIALS';
    const EXHIBITION_SALES = 'PROMOTED_ASSET_TYPE_EXHIBITION_SALES';
    const MEDICINE_INDUSTRY_COMMERCIAL = 'PROMOTED_ASSET_TYPE_MEDICINE_INDUSTRY_COMMERCIAL';
    const FINANCE = 'PROMOTED_ASSET_TYPE_FINANCE';
    const LOCAL_STORE_PACKAGE = 'PROMOTED_ASSET_TYPE_LOCAL_STORE_PACKAGE';
    const CATERING_AND_LEISURE = 'PROMOTED_ASSET_TYPE_CATERING_AND_LEISURE';
    const CHAIN_RESTAURANT = 'PROMOTED_ASSET_TYPE_CHAIN_RESTAURANT';
    const COMMODITY_SET = 'PROMOTED_ASSET_TYPE_COMMODITY_SET';
    const TOURIST_TRAVEL_ROUTE = 'PROMOTED_ASSET_TYPE_TOURIST_TRAVEL_ROUTE';
    const TOURIST_CRUISE_LINE = 'PROMOTED_ASSET_TYPE_TOURIST_CRUISE_LINE';
    const TOURIST_HOTEL_SERVICE = 'PROMOTED_ASSET_TYPE_TOURIST_HOTEL_SERVICE';
    const TOURIST_AIRLINE_TICKETS = 'PROMOTED_ASSET_TYPE_TOURIST_AIRLINE_TICKETS';
    const LOCAL_STORE_COMBINE_WITH_PRODUCT = 'PROMOTED_ASSET_TYPE_LOCAL_STORE_COMBINE_WITH_PRODUCT';
    const ACTIVITY = 'PROMOTED_ASSET_TYPE_ACTIVITY';
    const STORE = 'PROMOTED_ASSET_TYPE_STORE';
    const MINI_GAME_QQ = 'PROMOTED_ASSET_TYPE_MINI_GAME_QQ';
    const APP_GAME_ANDROID = 'PROMOTED_ASSET_TYPE_APP_GAME_ANDROID';
    const APP_GAME_IOS = 'PROMOTED_ASSET_TYPE_APP_GAME_IOS';
    const PC_GAME = 'PROMOTED_ASSET_TYPE_PC_GAME';
    const WECHAT_WORK = 'PROMOTED_ASSET_TYPE_WECHAT_WORK';
    const LIVE_STREAM_ROOM = 'PROMOTED_ASSET_TYPE_LIVE_STREAM_ROOM';
    const PERSONAL_STORE = 'PROMOTED_ASSET_TYPE_PERSONAL_STORE';
    const PLATFORM_CHANNEL = 'PROMOTED_ASSET_TYPE_PLATFORM_CHANNEL';
    const TWO_WHEEL_VEHICLE = 'PROMOTED_ASSET_TYPE_TWO_WHEEL_VEHICLE';
    const GOVERNMENT_AFFAIRS = 'PROMOTED_ASSET_TYPE_GOVERNMENT_AFFAIRS';
    const CAR_ECOLOGY = 'PROMOTED_ASSET_TYPE_CAR_ECOLOGY';
    const WECHAT_STORE_PRODUCT = 'PROMOTED_ASSET_TYPE_WECHAT_STORE_PRODUCT';
    
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
            self::EDUCATION,
            self::TRAFFIC,
            self::HOUSE_PROPERTY,
            self::LOCAL_STORE,
            self::MINIGAME,
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
            self::FINANCE,
            self::LOCAL_STORE_PACKAGE,
            self::CATERING_AND_LEISURE,
            self::CHAIN_RESTAURANT,
            self::COMMODITY_SET,
            self::TOURIST_TRAVEL_ROUTE,
            self::TOURIST_CRUISE_LINE,
            self::TOURIST_HOTEL_SERVICE,
            self::TOURIST_AIRLINE_TICKETS,
            self::LOCAL_STORE_COMBINE_WITH_PRODUCT,
            self::ACTIVITY,
            self::STORE,
            self::MINI_GAME_QQ,
            self::APP_GAME_ANDROID,
            self::APP_GAME_IOS,
            self::PC_GAME,
            self::WECHAT_WORK,
            self::LIVE_STREAM_ROOM,
            self::PERSONAL_STORE,
            self::PLATFORM_CHANNEL,
            self::TWO_WHEEL_VEHICLE,
            self::GOVERNMENT_AFFAIRS,
            self::CAR_ECOLOGY,
            self::WECHAT_STORE_PRODUCT,
        ];
    }
}


