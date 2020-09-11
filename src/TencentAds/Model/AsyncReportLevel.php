<?php
/**
 * AsyncReportLevel
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
 * AsyncReportLevel Class Doc Comment
 *
 * @category Class
 * @description 异步报表类型级别
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AsyncReportLevel
{
    /**
     * Possible values of this enum
     */
    const ADGROUP_WECHAT = 'REPORT_LEVEL_ADGROUP_WECHAT';
    const AD_WECHAT = 'REPORT_LEVEL_AD_WECHAT';
    const POI_WECHAT = 'REPORT_LEVEL_POI_WECHAT';
    const AD = 'REPORT_LEVEL_AD';
    const ADVERTISER = 'REPORT_LEVEL_ADVERTISER';
    const CAMPAIGN = 'REPORT_LEVEL_CAMPAIGN';
    const ADGROUP = 'REPORT_LEVEL_ADGROUP';
    const MATERIAL_VIDEO = 'REPORT_LEVEL_MATERIAL_VIDEO';
    const MATERIAL_IMAGE = 'REPORT_LEVEL_MATERIAL_IMAGE';
    const PROMOTED_OBJECT = 'REPORT_LEVEL_PROMOTED_OBJECT';
    const CREATIVE_TEMPLATE = 'REPORT_LEVEL_CREATIVE_TEMPLATE';
    const PRODUCT_CATELOG = 'REPORT_LEVEL_PRODUCT_CATELOG';
    const AGE = 'REPORT_LEVEL_AGE';
    const GENDER = 'REPORT_LEVEL_GENDER';
    const REGION_RECENTLY_IN = 'REPORT_LEVEL_REGION_RECENTLY_IN';
    const REGION_VISITED_IN = 'REPORT_LEVEL_REGION_VISITED_IN';
    const REGION_LIVE_IN = 'REPORT_LEVEL_REGION_LIVE_IN';
    const REGION_TRAVEL_IN = 'REPORT_LEVEL_REGION_TRAVEL_IN';
    const CITY_RECENTLY_IN = 'REPORT_LEVEL_CITY_RECENTLY_IN';
    const CITY_VISITED_IN = 'REPORT_LEVEL_CITY_VISITED_IN';
    const CITY_LIVE_IN = 'REPORT_LEVEL_CITY_LIVE_IN';
    const CITY_TRAVEL_IN = 'REPORT_LEVEL_CITY_TRAVEL_IN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADGROUP_WECHAT,
            self::AD_WECHAT,
            self::POI_WECHAT,
            self::AD,
            self::ADVERTISER,
            self::CAMPAIGN,
            self::ADGROUP,
            self::MATERIAL_VIDEO,
            self::MATERIAL_IMAGE,
            self::PROMOTED_OBJECT,
            self::CREATIVE_TEMPLATE,
            self::PRODUCT_CATELOG,
            self::AGE,
            self::GENDER,
            self::REGION_RECENTLY_IN,
            self::REGION_VISITED_IN,
            self::REGION_LIVE_IN,
            self::REGION_TRAVEL_IN,
            self::CITY_RECENTLY_IN,
            self::CITY_VISITED_IN,
            self::CITY_LIVE_IN,
            self::CITY_TRAVEL_IN,
        ];
    }
}


