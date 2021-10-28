<?php
/**
 * ExcludedDay
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
 * ExcludedDay Class Doc Comment
 *
 * @category Class
 * @description 排除天数
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExcludedDay
{
    /**
     * Possible values of this enum
     */
    const SEVEN_DAY = 'EXCLUDED_DAY_SEVEN_DAY';
    const ONE_MONTH = 'EXCLUDED_DAY_ONE_MONTH';
    const TWO_MONTH = 'EXCLUDED_DAY_TWO_MONTH';
    const THREE_MONTH = 'EXCLUDED_DAY_THREE_MONTH';
    const SIX_MONTH = 'EXCLUDED_DAY_SIX_MONTH';
    const ONE_DAY = 'EXCLUDED_DAY_ONE_DAY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SEVEN_DAY,
            self::ONE_MONTH,
            self::TWO_MONTH,
            self::THREE_MONTH,
            self::SIX_MONTH,
            self::ONE_DAY,
        ];
    }
}


