<?php
/**
 * PlayVoice
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
 * PlayVoice Class Doc Comment
 *
 * @category Class
 * @description 作品配音
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlayVoice
{
    /**
     * Possible values of this enum
     */
    const SYSTEM = 'PLAY_VOICE_SYSTEM';
    const NORMAL = 'PLAY_VOICE_NORMAL';
    const PROFESSIONAL = 'PLAY_VOICE_PROFESSIONAL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SYSTEM,
            self::NORMAL,
            self::PROFESSIONAL,
        ];
    }
}


