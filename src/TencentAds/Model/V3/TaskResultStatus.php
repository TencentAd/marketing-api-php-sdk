<?php
/**
 * TaskResultStatus
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
 * TaskResultStatus Class Doc Comment
 *
 * @category Class
 * @description 任务结果状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskResultStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'TASK_RESULT_STATUS_UNKNOWN';
    const PENDING = 'TASK_RESULT_STATUS_PENDING';
    const PROCESSING = 'TASK_RESULT_STATUS_PROCESSING';
    const SUCCESS = 'TASK_RESULT_STATUS_SUCCESS';
    const FAIL = 'TASK_RESULT_STATUS_FAIL';
    const PARTIAL_FAIL = 'TASK_RESULT_STATUS_PARTIAL_FAIL';
    const SYSTEM_ERROR = 'TASK_RESULT_STATUS_SYSTEM_ERROR';
    const DELETED = 'TASK_RESULT_STATUS_DELETED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PENDING,
            self::PROCESSING,
            self::SUCCESS,
            self::FAIL,
            self::PARTIAL_FAIL,
            self::SYSTEM_ERROR,
            self::DELETED,
        ];
    }
}


