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
    const SEARCH_EXPANSION = 'AD_CREATIVE_SEARCH_EXPANSION';
    const INTEREST_GENERATE = 'AD_CREATIVE_INTEREST_GENERATE';
    
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
            self::SEARCH_EXPANSION,
            self::INTEREST_GENERATE,
        ];
    }
}

