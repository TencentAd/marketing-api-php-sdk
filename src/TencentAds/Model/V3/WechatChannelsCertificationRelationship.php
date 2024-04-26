<?php
/**
 * WechatChannelsCertificationRelationship
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
 * WechatChannelsCertificationRelationship Class Doc Comment
 *
 * @category Class
 * @description 视频号授权资质主体关系
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatChannelsCertificationRelationship
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'RELATIONSHIP_UNKNOWN';
    const CORPORATION = 'RELATIONSHIP_CORPORATION';
    const EMPLOYMENT = 'RELATIONSHIP_EMPLOYMENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::CORPORATION,
            self::EMPLOYMENT,
        ];
    }
}

