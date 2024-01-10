<?php
/**
 * SiteSetExplorationStrategy
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
 * SiteSetExplorationStrategy Class Doc Comment
 *
 * @category Class
 * @description 自动版位探索策略
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SiteSetExplorationStrategy
{
    /**
     * Possible values of this enum
     */
    const EXPLORATION_UNKNOW = 'EXPLORATION_UNKNOW';
    const AUTOMATIC_EXPLORATION = 'AUTOMATIC_EXPLORATION';
    const STEADY_EXPLORATION = 'STEADY_EXPLORATION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXPLORATION_UNKNOW,
            self::AUTOMATIC_EXPLORATION,
            self::STEADY_EXPLORATION,
        ];
    }
}


