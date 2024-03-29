<?php
/**
 * ElementType
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
 * ElementType Class Doc Comment
 *
 * @category Class
 * @description 创意元素类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ElementType
{
    /**
     * Possible values of this enum
     */
    const ELEMENT_TYPE_TEXT = 'ELEMENT_TYPE_TEXT';
    const ELEMENT_TYPE_IMAGE = 'ELEMENT_TYPE_IMAGE';
    const ELEMENT_TYPE_VIDEO = 'ELEMENT_TYPE_VIDEO';
    const ELEMENT_TYPE_URL = 'ELEMENT_TYPE_URL';
    const ELEMENT_TYPE_ENUM = 'ELEMENT_TYPE_ENUM';
    const ELEMENT_TYPE_CANVAS = 'ELEMENT_TYPE_CANVAS';
    const ELEMENT_TYPE_STRUCT = 'ELEMENT_TYPE_STRUCT';
    const ELEMENT_TYPE_REFERENCE = 'ELEMENT_TYPE_REFERENCE';
    const ELEMENT_TYPE_BOOLEAN = 'ELEMENT_TYPE_BOOLEAN';
    const ELEMENT_TYPE_PHONE = 'ELEMENT_TYPE_PHONE';
    const ELEMENT_TYPE_FORM = 'ELEMENT_TYPE_FORM';
    const ELEMENT_TYPE_CONSULT = 'ELEMENT_TYPE_CONSULT';
    const ELEMENT_TYPE_NUMBER = 'ELEMENT_TYPE_NUMBER';
    const ELEMENT_TYPE_LANDING_PAGE_STRUCT = 'ELEMENT_TYPE_LANDING_PAGE_STRUCT';
    const STRUCT = 'STRUCT';
    const TEXT = 'TEXT';
    const URL = 'URL';
    const IMAGE = 'IMAGE';
    const VIDEO = 'VIDEO';
    const BIRTHDAY_ACTIVITY_PAGE_CARD = 'BIRTHDAY_ACTIVITY_PAGE_CARD';
    const FESTIVAL_ACTIVITY_PAGE_CARD = 'FESTIVAL_ACTIVITY_PAGE_CARD';
    const ID = 'ID';
    const PHONE_BY_USER_INPUT = 'PHONE_BY_USER_INPUT';
    const DYNAMIC_CREATIVE = 'DYNAMIC_CREATIVE';
    const DEEP_LINK_TYPE = 'DEEP_LINK_TYPE';
    const CANVAS = 'CANVAS';
    const ANIMATION_EFFECT = 'ANIMATION_EFFECT';
    const LABEL = 'LABEL';
    const LANDING_PAGE_STRUCT = 'LANDING_PAGE_STRUCT';
    const COMPONENT = 'COMPONENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ELEMENT_TYPE_TEXT,
            self::ELEMENT_TYPE_IMAGE,
            self::ELEMENT_TYPE_VIDEO,
            self::ELEMENT_TYPE_URL,
            self::ELEMENT_TYPE_ENUM,
            self::ELEMENT_TYPE_CANVAS,
            self::ELEMENT_TYPE_STRUCT,
            self::ELEMENT_TYPE_REFERENCE,
            self::ELEMENT_TYPE_BOOLEAN,
            self::ELEMENT_TYPE_PHONE,
            self::ELEMENT_TYPE_FORM,
            self::ELEMENT_TYPE_CONSULT,
            self::ELEMENT_TYPE_NUMBER,
            self::ELEMENT_TYPE_LANDING_PAGE_STRUCT,
            self::STRUCT,
            self::TEXT,
            self::URL,
            self::IMAGE,
            self::VIDEO,
            self::BIRTHDAY_ACTIVITY_PAGE_CARD,
            self::FESTIVAL_ACTIVITY_PAGE_CARD,
            self::ID,
            self::PHONE_BY_USER_INPUT,
            self::DYNAMIC_CREATIVE,
            self::DEEP_LINK_TYPE,
            self::CANVAS,
            self::ANIMATION_EFFECT,
            self::LABEL,
            self::LANDING_PAGE_STRUCT,
            self::COMPONENT,
        ];
    }
}


