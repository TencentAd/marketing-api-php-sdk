<?php
/**
 * UnionChannelTaskStatus
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
 * UnionChannelTaskStatus Class Doc Comment
 *
 * @category Class
 * @description 渠道包任务处理状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnionChannelTaskStatus
{
    /**
     * Possible values of this enum
     */
    const APPLYING = 'UNION_CHANNEL_TASK_STATUS_APPLYING';
    const SUCCESS = 'UNION_CHANNEL_TASK_STATUS_SUCCESS';
    const APP_ERROR = 'UNION_CHANNEL_TASK_STATUS_APP_ERROR';
    const APP_STATUS_ERROR = 'UNION_CHANNEL_TASK_STATUS_APP_STATUS_ERROR';
    const PACKAGE_NAME_ERROR = 'UNION_CHANNEL_TASK_STATUS_PACKAGE_NAME_ERROR';
    const CHANNEL_NAME_ERROR = 'UNION_CHANNEL_TASK_STATUS_CHANNEL_NAME_ERROR';
    const PKG_MD5_ERROR = 'UNION_CHANNEL_TASK_STATUS_PKG_MD5_ERROR';
    const PKG_ERROR = 'UNION_CHANNEL_TASK_STATUS_PKG_ERROR';
    const SYSTEM_ERROR = 'UNION_CHANNEL_TASK_STATUS_SYSTEM_ERROR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPLYING,
            self::SUCCESS,
            self::APP_ERROR,
            self::APP_STATUS_ERROR,
            self::PACKAGE_NAME_ERROR,
            self::CHANNEL_NAME_ERROR,
            self::PKG_MD5_ERROR,
            self::PKG_ERROR,
            self::SYSTEM_ERROR,
        ];
    }
}


