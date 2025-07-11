<?php
/**
 * CalcAdGroupStatus
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
 * CalcAdGroupStatus Class Doc Comment
 *
 * @category Class
 * @description 广告在系统中的状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CalcAdGroupStatus
{
    /**
     * Possible values of this enum
     */
    const ADGROUP_STATUS_FROZEN = 'ADGROUP_STATUS_FROZEN';
    const ADGROUP_STATUS_SUSPEND = 'ADGROUP_STATUS_SUSPEND';
    const ADGROUP_STATUS_NOT_IN_DELIVERY_TIME = 'ADGROUP_STATUS_NOT_IN_DELIVERY_TIME';
    const ADGROUP_STATUS_ACTIVE = 'ADGROUP_STATUS_ACTIVE';
    const ADGROUP_STATUS_DELETED = 'ADGROUP_STATUS_DELETED';
    const ADGROUP_STATUS_ACCOUNT_BALANCE_NOT_ENOUGH = 'ADGROUP_STATUS_ACCOUNT_BALANCE_NOT_ENOUGH';
    const ADGROUP_STATUS_DAILY_BUDGET_REACHED = 'ADGROUP_STATUS_DAILY_BUDGET_REACHED';
    const ADGROUP_STATUS_PARTIAL_ACTIVE = 'ADGROUP_STATUS_PARTIAL_ACTIVE';
    const ADGROUP_STATUS_WECHAT_CHANNELS_STOP = 'ADGROUP_STATUS_WECHAT_CHANNELS_STOP';
    const ADGROUP_STATUS_CREATIVE_STATUS_PENDING = 'ADGROUP_STATUS_CREATIVE_STATUS_PENDING';
    const ADGROUP_STATUS_CREATIVE_EMPTY = 'ADGROUP_STATUS_CREATIVE_EMPTY';
    const ADGROUP_STATUS_JOINT_BUDGET_REACHED = 'ADGROUP_STATUS_JOINT_BUDGET_REACHED';
    const ADGROUP_STATUS_TOTAL_BUDGET_REACHED = 'ADGROUP_STATUS_TOTAL_BUDGET_REACHED';
    const ADGROUP_STATUS_PRE_LOCK = 'ADGROUP_STATUS_PRE_LOCK';
    const ADGROUP_STATUS_UNLOCKING = 'ADGROUP_STATUS_UNLOCKING';
    const ADGROUP_STATUS_STOP = 'ADGROUP_STATUS_STOP';
    const ADGROUP_STATUS_LIVE_NOT_ACTIVE = 'ADGROUP_STATUS_LIVE_NOT_ACTIVE';
    const ADGROUP_STATUS_NOT_ACTIVE_PRODUCT_AUDIT_FAIL = 'ADGROUP_STATUS_NOT_ACTIVE_PRODUCT_AUDIT_FAIL';
    const ADGROUP_STATUS_LIVE_VIOLATION = 'ADGROUP_STATUS_LIVE_VIOLATION';
    const SMART_ADGROUP_STATUS_DELETED = 'SMART_ADGROUP_STATUS_DELETED';
    const SMART_ADGROUP_STATUS_SUSPEND = 'SMART_ADGROUP_STATUS_SUSPEND';
    const SMART_ADGROUP_STATUS_JOINT_BUDGET_REACHED = 'SMART_ADGROUP_STATUS_JOINT_BUDGET_REACHED';
    const SMART_ADGROUP_STATUS_ACCOUNT_BALANCE_NOT_ENOUGH = 'SMART_ADGROUP_STATUS_ACCOUNT_BALANCE_NOT_ENOUGH';
    const SMART_ADGROUP_STATUS_DAILY_BUDGET_REACHED = 'SMART_ADGROUP_STATUS_DAILY_BUDGET_REACHED';
    const SMART_ADGROUP_STATUS_ADGROUP_STATUS_STOP = 'SMART_ADGROUP_STATUS_ADGROUP_STATUS_STOP';
    const SMART_ADGROUP_STATUS_NOT_IN_DELIVERY_TIME = 'SMART_ADGROUP_STATUS_NOT_IN_DELIVERY_TIME';
    const SMART_ADGROUP_STATUS_ACTIVE = 'SMART_ADGROUP_STATUS_ACTIVE';
    const SMART_ADGROUP_STATUS_USING = 'SMART_ADGROUP_STATUS_USING';
    const SMART_ADGROUP_STATUS_INVALID_LIVE_NOT_ACTIVE = 'SMART_ADGROUP_STATUS_INVALID_LIVE_NOT_ACTIVE';
    const SMART_ADGROUP_STATUS_INVALID_LIVE_VIOLATION = 'SMART_ADGROUP_STATUS_INVALID_LIVE_VIOLATION';
    const SMART_ADGROUP_STATUS_INVALID_PRODUCT_AUDIT_FAIL = 'SMART_ADGROUP_STATUS_INVALID_PRODUCT_AUDIT_FAIL';
    const SMART_ADGROUP_STATUS_INVALID_CHANNELS_STOP = 'SMART_ADGROUP_STATUS_INVALID_CHANNELS_STOP';
    const SMART_ADGROUP_STATUS_INVALID_LIVE_NOT_ACTIVE_PRODUCT_AUDIT_FAIL = 'SMART_ADGROUP_STATUS_INVALID_LIVE_NOT_ACTIVE_PRODUCT_AUDIT_FAIL';
    const SMART_ADGROUP_STATUS_INVALID_LIVE_VIOLATION_PRODUCT_AUDIT_FAIL = 'SMART_ADGROUP_STATUS_INVALID_LIVE_VIOLATION_PRODUCT_AUDIT_FAIL';
    const SMART_ADGROUP_STATUS_INVALID_CHANNELS_STOP_PRODUCT_AUDIT_FAIL = 'SMART_ADGROUP_STATUS_INVALID_CHANNELS_STOP_PRODUCT_AUDIT_FAIL';
    const SMART_ADGROUP_STATUS_USING_LIVE_NOT_ACTIVE = 'SMART_ADGROUP_STATUS_USING_LIVE_NOT_ACTIVE';
    const SMART_ADGROUP_STATUS_USING_LIVE_VIOLATION = 'SMART_ADGROUP_STATUS_USING_LIVE_VIOLATION';
    const SMART_ADGROUP_STATUS_USING_PRODUCT_AUDIT_FAIL = 'SMART_ADGROUP_STATUS_USING_PRODUCT_AUDIT_FAIL';
    const SMART_ADGROUP_STATUS_USING_CHANNELS_STOP = 'SMART_ADGROUP_STATUS_USING_CHANNELS_STOP';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADGROUP_STATUS_FROZEN,
            self::ADGROUP_STATUS_SUSPEND,
            self::ADGROUP_STATUS_NOT_IN_DELIVERY_TIME,
            self::ADGROUP_STATUS_ACTIVE,
            self::ADGROUP_STATUS_DELETED,
            self::ADGROUP_STATUS_ACCOUNT_BALANCE_NOT_ENOUGH,
            self::ADGROUP_STATUS_DAILY_BUDGET_REACHED,
            self::ADGROUP_STATUS_PARTIAL_ACTIVE,
            self::ADGROUP_STATUS_WECHAT_CHANNELS_STOP,
            self::ADGROUP_STATUS_CREATIVE_STATUS_PENDING,
            self::ADGROUP_STATUS_CREATIVE_EMPTY,
            self::ADGROUP_STATUS_JOINT_BUDGET_REACHED,
            self::ADGROUP_STATUS_TOTAL_BUDGET_REACHED,
            self::ADGROUP_STATUS_PRE_LOCK,
            self::ADGROUP_STATUS_UNLOCKING,
            self::ADGROUP_STATUS_STOP,
            self::ADGROUP_STATUS_LIVE_NOT_ACTIVE,
            self::ADGROUP_STATUS_NOT_ACTIVE_PRODUCT_AUDIT_FAIL,
            self::ADGROUP_STATUS_LIVE_VIOLATION,
            self::SMART_ADGROUP_STATUS_DELETED,
            self::SMART_ADGROUP_STATUS_SUSPEND,
            self::SMART_ADGROUP_STATUS_JOINT_BUDGET_REACHED,
            self::SMART_ADGROUP_STATUS_ACCOUNT_BALANCE_NOT_ENOUGH,
            self::SMART_ADGROUP_STATUS_DAILY_BUDGET_REACHED,
            self::SMART_ADGROUP_STATUS_ADGROUP_STATUS_STOP,
            self::SMART_ADGROUP_STATUS_NOT_IN_DELIVERY_TIME,
            self::SMART_ADGROUP_STATUS_ACTIVE,
            self::SMART_ADGROUP_STATUS_USING,
            self::SMART_ADGROUP_STATUS_INVALID_LIVE_NOT_ACTIVE,
            self::SMART_ADGROUP_STATUS_INVALID_LIVE_VIOLATION,
            self::SMART_ADGROUP_STATUS_INVALID_PRODUCT_AUDIT_FAIL,
            self::SMART_ADGROUP_STATUS_INVALID_CHANNELS_STOP,
            self::SMART_ADGROUP_STATUS_INVALID_LIVE_NOT_ACTIVE_PRODUCT_AUDIT_FAIL,
            self::SMART_ADGROUP_STATUS_INVALID_LIVE_VIOLATION_PRODUCT_AUDIT_FAIL,
            self::SMART_ADGROUP_STATUS_INVALID_CHANNELS_STOP_PRODUCT_AUDIT_FAIL,
            self::SMART_ADGROUP_STATUS_USING_LIVE_NOT_ACTIVE,
            self::SMART_ADGROUP_STATUS_USING_LIVE_VIOLATION,
            self::SMART_ADGROUP_STATUS_USING_PRODUCT_AUDIT_FAIL,
            self::SMART_ADGROUP_STATUS_USING_CHANNELS_STOP,
        ];
    }
}


