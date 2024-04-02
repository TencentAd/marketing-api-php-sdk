<?php
/**
 * SetObjectCommentFlagOpType
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
 * SetObjectCommentFlagOpType Class Doc Comment
 *
 * @category Class
 * @description 设置视频号评论管理操作类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SetObjectCommentFlagOpType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'SET_OBJECT_COMMENT_FLAG_OP_TYPE_UNKNOWN';
    const OPEN = 'SET_OBJECT_COMMENT_FLAG_OP_TYPE_OPEN';
    const CLOSE = 'SET_OBJECT_COMMENT_FLAG_OP_TYPE_CLOSE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::OPEN,
            self::CLOSE,
        ];
    }
}


