<?php
/**
 * CreativeComponentType
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
 * CreativeComponentType Class Doc Comment
 *
 * @category Class
 * @description 直播间组件类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreativeComponentType
{
    /**
     * Possible values of this enum
     */
    const IMAGE_UNKNOWN = 'LIVE_IMAGE_UNKNOWN';
    const IMAGE_COMPONENT = 'LIVE_IMAGE_COMPONENT';
    const CONV_COMPONENT = 'LIVE_CONV_COMPONENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IMAGE_UNKNOWN,
            self::IMAGE_COMPONENT,
            self::CONV_COMPONENT,
        ];
    }
}

