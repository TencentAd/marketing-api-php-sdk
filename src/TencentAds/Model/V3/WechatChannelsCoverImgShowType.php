<?php
/**
 * WechatChannelsCoverImgShowType
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
 * WechatChannelsCoverImgShowType Class Doc Comment
 *
 * @category Class
 * @description 视频号封面图显示类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatChannelsCoverImgShowType
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'COVER_IMG_SHOW_TYPE_DEFAULT';
    const TITLE = 'COVER_IMG_SHOW_TYPE_TITLE';
    const CENTER = 'COVER_IMG_SHOW_TYPE_CENTER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::TITLE,
            self::CENTER,
        ];
    }
}

