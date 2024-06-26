<?php
/**
 * BidMode
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
 * BidMode Class Doc Comment
 *
 * @category Class
 * @description 出价方式，&lt;br/&gt; 1. bid_mode为billing_event升级字段，不可同时输入，升级后直接写入bid_mode字段即可；&lt;br/&gt; 2. 当投放智能出价广告，可写入BID_MODE_OCPC/BID_MODE_OCPM。此时，optimization_goal优化目标字段必填；&lt;br/&gt; 3. 当投放非智能出价广告，可写入BID_MODE_CPC/BID_MODE_CPM/BID_MODE_CPA。此时，optimization_goal优化目标字段不可填；&lt;br/&gt; 4. 针对非微信流量，BID_MODE_CPC可编辑修改为BID_MODE_OCPC，BID_MODE_CPM可编辑修改为BID_MODE_OCPM，其他修改不可操作。针对微信流量，bid_mode字段不可修改；&lt;br/&gt; 5. 可通过adcreative_templates/get接口查询不同情况下支持的出价方式;
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidMode
{
    /**
     * Possible values of this enum
     */
    const CPC = 'BID_MODE_CPC';
    const CPA = 'BID_MODE_CPA';
    const CPS = 'BID_MODE_CPS';
    const CPM = 'BID_MODE_CPM';
    const CPT = 'BID_MODE_CPT';
    const CPO = 'BID_MODE_CPO';
    const OCPC = 'BID_MODE_OCPC';
    const OCPA = 'BID_MODE_OCPA';
    const OCPM = 'BID_MODE_OCPM';
    const YUNXUAN_CPS = 'BID_MODE_YUNXUAN_CPS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CPC,
            self::CPA,
            self::CPS,
            self::CPM,
            self::CPT,
            self::CPO,
            self::OCPC,
            self::OCPA,
            self::OCPM,
            self::YUNXUAN_CPS,
        ];
    }
}


