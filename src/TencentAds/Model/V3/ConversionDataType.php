<?php
/**
 * ConversionDataType
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
 * ConversionDataType Class Doc Comment
 *
 * @category Class
 * @description 数据外显转换数据类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversionDataType
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'CONVERSION_DATA_DEFAULT';
    const FRIEND_PLAY = 'CONVERSION_DATA_FRIEND_PLAY';
    const APP_DOWNLOAD = 'CONVERSION_DATA_APP_DOWNLOAD';
    const ONSHOP = 'CONVERSION_DATA_ONSHOP';
    const ADMETRIC = 'CONVERSION_DATA_ADMETRIC';
    const FRIEND_FOLLOW = 'CONVERSION_DATA_FRIEND_FOLLOW';
    const FRIEND_WATCH = 'CONVERSION_DATA_FRIEND_WATCH';
    const INDUSTRY_LABEL = 'CONVERSION_DATA_INDUSTRY_LABEL';
    const SHOP = 'CONVERSION_DATA_SHOP';
    const FORM = 'CONVERSION_DATA_FORM';
    const PRODUCT_DATA = 'CONVERSION_DATA_PRODUCT_DATA';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::FRIEND_PLAY,
            self::APP_DOWNLOAD,
            self::ONSHOP,
            self::ADMETRIC,
            self::FRIEND_FOLLOW,
            self::FRIEND_WATCH,
            self::INDUSTRY_LABEL,
            self::SHOP,
            self::FORM,
            self::PRODUCT_DATA,
        ];
    }
}


