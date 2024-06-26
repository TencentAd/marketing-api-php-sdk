<?php
/**
 * UpdateFrequency
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
 * UpdateFrequency Class Doc Comment
 *
 * @category Class
 * @description 更新频率
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateFrequency
{
    /**
     * Possible values of this enum
     */
    const DAILY = 'UPDATE_DAILY';
    const WEEKLY = 'UPDATE_WEEKLY';
    const MULTI_WEEKLY = 'UPDATE_MULTI_WEEKLY';
    const ONE_WEEK = 'UPDATE_ONE_WEEK';
    const MULTI_FORTNIGHT = 'UPDATE_MULTI_FORTNIGHT';
    const MONTHLY = 'UPDATE_MONTHLY';
    const MULTI_MONTHLY = 'UPDATE_MULTI_MONTHLY';
    const RANDOM = 'UPDATE_RANDOM';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAILY,
            self::WEEKLY,
            self::MULTI_WEEKLY,
            self::ONE_WEEK,
            self::MULTI_FORTNIGHT,
            self::MONTHLY,
            self::MULTI_MONTHLY,
            self::RANDOM,
        ];
    }
}


