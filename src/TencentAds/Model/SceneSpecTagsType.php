<?php
/**
 * SceneSpecTagsType
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
 * SceneSpecTagsType Class Doc Comment
 *
 * @category Class
 * @description 场景定向标签类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SceneSpecTagsType
{
    /**
     * Possible values of this enum
     */
    const WECHAT_POSITION = 'WECHAT_POSITION';
    const OFFICIAL_ACCOUNT_MEDIA_CATEGORY = 'OFFICIAL_ACCOUNT_MEDIA_CATEGORY';
    const MINI_PROGRAM_AND_MINI_GAME = 'MINI_PROGRAM_AND_MINI_GAME';
    const PAY_SCENE = 'PAY_SCENE';
    const MOBILE_UNION_CATEGORY = 'MOBILE_UNION_CATEGORY';
    const WECHAT_CHANNELS_SCENE = 'WECHAT_CHANNELS_SCENE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WECHAT_POSITION,
            self::OFFICIAL_ACCOUNT_MEDIA_CATEGORY,
            self::MINI_PROGRAM_AND_MINI_GAME,
            self::PAY_SCENE,
            self::MOBILE_UNION_CATEGORY,
            self::WECHAT_CHANNELS_SCENE,
        ];
    }
}


