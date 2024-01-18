<?php
/**
 * DeepConversionType
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
 * DeepConversionType Class Doc Comment
 *
 * @category Class
 * @description oCPA深度优化价值配置
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeepConversionType
{
    /**
     * Possible values of this enum
     */
    const WORTH = 'DEEP_CONVERSION_WORTH';
    const BEHAVIOR = 'DEEP_CONVERSION_BEHAVIOR';
    const WORTH_ADVANCED = 'DEEP_CONVERSION_WORTH_ADVANCED';
    const BEHAVIOR_ADVANCED = 'DEEP_CONVERSION_BEHAVIOR_ADVANCED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WORTH,
            self::BEHAVIOR,
            self::WORTH_ADVANCED,
            self::BEHAVIOR_ADVANCED,
        ];
    }
}


