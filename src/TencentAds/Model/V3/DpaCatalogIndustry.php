<?php
/**
 * DpaCatalogIndustry
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
 * DpaCatalogIndustry Class Doc Comment
 *
 * @category Class
 * @description 商品库行业类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DpaCatalogIndustry
{
    /**
     * Possible values of this enum
     */
    const ECOMMERCE = 'INDUSTRY_TYPE_ECOMMERCE';
    const READING = 'INDUSTRY_TYPE_READING';
    const EDUCATION = 'INDUSTRY_TYPE_EDUCATION';
    const WEDDING = 'INDUSTRY_TYPE_WEDDING';
    const VIDEO = 'INDUSTRY_TYPE_VIDEO';
    const INSURANCE = 'INDUSTRY_TYPE_INSURANCE';
    const LOAN = 'INDUSTRY_TYPE_LOAN';
    const FINANCIAL = 'INDUSTRY_TYPE_FINANCIAL';
    const BANKCARD = 'INDUSTRY_TYPE_BANKCARD';
    const SECURITIES = 'INDUSTRY_TYPE_SECURITIES';
    const ESTATE = 'INDUSTRY_TYPE_ESTATE';
    const CARRIER = 'INDUSTRY_TYPE_CARRIER';
    const MERCHANTS = 'INDUSTRY_TYPE_MERCHANTS';
    const BUSINESS_SERVICE = 'INDUSTRY_TYPE_BUSINESS_SERVICE';
    const DECORATION_BUILDING_MATERIAL = 'INDUSTRY_TYPE_DECORATION_BUILDING_MATERIAL';
    const HOTEL = 'INDUSTRY_TYPE_HOTEL';
    const CAR_ONLINE_PLATFORM = 'INDUSTRY_TYPE_CAR_ONLINE_PLATFORM';
    const CAR_AFTERMARKET = 'INDUSTRY_TYPE_CAR_AFTERMARKET';
    const CAR_TRAVEL_SERVICE = 'INDUSTRY_TYPE_CAR_TRAVEL_SERVICE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ECOMMERCE,
            self::READING,
            self::EDUCATION,
            self::WEDDING,
            self::VIDEO,
            self::INSURANCE,
            self::LOAN,
            self::FINANCIAL,
            self::BANKCARD,
            self::SECURITIES,
            self::ESTATE,
            self::CARRIER,
            self::MERCHANTS,
            self::BUSINESS_SERVICE,
            self::DECORATION_BUILDING_MATERIAL,
            self::HOTEL,
            self::CAR_ONLINE_PLATFORM,
            self::CAR_AFTERMARKET,
            self::CAR_TRAVEL_SERVICE,
        ];
    }
}


