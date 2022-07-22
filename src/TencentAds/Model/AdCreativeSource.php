<?php
/**
 * AdCreativeSource
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
 * AdCreativeSource Class Doc Comment
 *
 * @category Class
 * @description 创意来源
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdCreativeSource
{
    /**
     * Possible values of this enum
     */
    const SOURCE_NORMAL = 'AD_CREATIVE_SOURCE_NORMAL';
    const AUTO_DERIVE = 'AD_CREATIVE_AUTO_DERIVE';
    const AUTO_GENERATE = 'AD_CREATIVE_AUTO_GENERATE';
    const PAGE_DERIVE = 'AD_CREATIVE_PAGE_DERIVE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SOURCE_NORMAL,
            self::AUTO_DERIVE,
            self::AUTO_GENERATE,
            self::PAGE_DERIVE,
        ];
    }
}


