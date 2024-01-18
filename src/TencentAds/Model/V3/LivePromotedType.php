<?php
/**
 * LivePromotedType
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
 * LivePromotedType Class Doc Comment
 *
 * @category Class
 * @description 视频号直播推广形式
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LivePromotedType
{
    /**
     * Possible values of this enum
     */
    const NATIVE_VIDEO = 'LIVE_PROMOTED_TYPE_NATIVE_VIDEO';
    const SHORT_VIDEO = 'LIVE_PROMOTED_TYPE_SHORT_VIDEO';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NATIVE_VIDEO,
            self::SHORT_VIDEO,
        ];
    }
}


