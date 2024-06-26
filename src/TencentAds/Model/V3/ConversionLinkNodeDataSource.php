<?php
/**
 * ConversionLinkNodeDataSource
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
 * ConversionLinkNodeDataSource Class Doc Comment
 *
 * @category Class
 * @description 节点数据来源
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversionLinkNodeDataSource
{
    /**
     * Possible values of this enum
     */
    const ADVERTISER = 'DATA_SOURCE_ADVERTISER';
    const PLATFORM = 'DATA_SOURCE_PLATFORM';
    const ADVERTISER_PLATFORM = 'DATA_SOURCE_ADVERTISER_PLATFORM';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADVERTISER,
            self::PLATFORM,
            self::ADVERTISER_PLATFORM,
        ];
    }
}


