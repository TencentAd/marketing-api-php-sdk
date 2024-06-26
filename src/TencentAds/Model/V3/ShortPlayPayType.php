<?php
/**
 * ShortPlayPayType
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
 * ShortPlayPayType Class Doc Comment
 *
 * @category Class
 * @description 售卖方式类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShortPlayPayType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'SHORT_PLAY_PAY_TYPE_UNKNOWN';
    const FREE_PLAY = 'SHORT_PLAY_PAY_TYPE_FREE_PLAY';
    const CHARGE_PLAY = 'SHORT_PLAY_PAY_TYPE_CHARGE_PLAY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::FREE_PLAY,
            self::CHARGE_PLAY,
        ];
    }
}


