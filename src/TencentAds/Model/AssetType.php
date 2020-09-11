<?php
/**
 * AssetType
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
 * AssetType Class Doc Comment
 *
 * @category Class
 * @description 资产类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetType
{
    /**
     * Possible values of this enum
     */
    const XIJING = 'ASSET_TYPE_XIJING';
    const CANVAS_WECHAT = 'ASSET_TYPE_CANVAS_WECHAT';
    const CANVAS_IMAGE = 'ASSET_TYPE_CANVAS_IMAGE';
    const CANVAS_VIDEO = 'ASSET_TYPE_CANVAS_VIDEO';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::XIJING,
            self::CANVAS_WECHAT,
            self::CANVAS_IMAGE,
            self::CANVAS_VIDEO,
        ];
    }
}


