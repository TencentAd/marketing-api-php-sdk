<?php
/**
 * TargetingAdvancedRecommendType
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
 * TargetingAdvancedRecommendType Class Doc Comment
 *
 * @category Class
 * @description 优质推荐类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TargetingAdvancedRecommendType
{
    /**
     * Possible values of this enum
     */
    const SYSTEMATIC = 'ADVANCED_RECOMMEND_TYPE_SYSTEMATIC';
    const INDUSTRY_HOT = 'ADVANCED_RECOMMEND_TYPE_INDUSTRY_HOT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SYSTEMATIC,
            self::INDUSTRY_HOT,
        ];
    }
}


