<?php
/**
 * EcoLocalBusinessMode
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
 * EcoLocalBusinessMode Class Doc Comment
 *
 * @category Class
 * @description 附近推模式
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcoLocalBusinessMode
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'LOCAL_BUSINESS_MODE_DEFAULT';
    const LEADS_COUPON = 'LOCAL_BUSINESS_MODE_LEADS_COUPON';
    const LEADS_RESERVATION = 'LOCAL_BUSINESS_MODE_LEADS_RESERVATION';
    const SHOP_VOUCHER = 'LOCAL_BUSINESS_MODE_SHOP_VOUCHER';
    const TAKEAWAY = 'LOCAL_BUSINESS_MODE_TAKEAWAY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::LEADS_COUPON,
            self::LEADS_RESERVATION,
            self::SHOP_VOUCHER,
            self::TAKEAWAY,
        ];
    }
}


