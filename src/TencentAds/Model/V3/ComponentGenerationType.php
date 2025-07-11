<?php
/**
 * ComponentGenerationType
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
 * ComponentGenerationType Class Doc Comment
 *
 * @category Class
 * @description 创意组件产生类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComponentGenerationType
{
    /**
     * Possible values of this enum
     */
    const USER_CREATE = 'COMPONENT_GENERATION_TYPE_USER_CREATE';
    const SYSTEM_DERIVE = 'COMPONENT_GENERATION_TYPE_SYSTEM_DERIVE';
    const SYSTEM_GENERATE = 'COMPONENT_GENERATION_TYPE_SYSTEM_GENERATE';
    const BXJG = 'COMPONENT_GENERATION_TYPE_BXJG';
    const SMART_DELIVERY = 'COMPONENT_GENERATION_TYPE_SMART_DELIVERY';
    const MUSE_AIGC = 'COMPONENT_GENERATION_TYPE_MUSE_AIGC';
    const HUXUAN = 'COMPONENT_GENERATION_TYPE_HUXUAN';
    const MARKETING_ASSET = 'COMPONENT_GENERATION_TYPE_MARKETING_ASSET';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USER_CREATE,
            self::SYSTEM_DERIVE,
            self::SYSTEM_GENERATE,
            self::BXJG,
            self::SMART_DELIVERY,
            self::MUSE_AIGC,
            self::HUXUAN,
            self::MARKETING_ASSET,
        ];
    }
}


