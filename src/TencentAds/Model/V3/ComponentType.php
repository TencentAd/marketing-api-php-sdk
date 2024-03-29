<?php
/**
 * ComponentType
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
 * ComponentType Class Doc Comment
 *
 * @category Class
 * @description 创意组件类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComponentType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const TITLE = 'TITLE';
    const DESCRIPTION = 'DESCRIPTION';
    const IMAGE = 'IMAGE';
    const IMAGE_LIST = 'IMAGE_LIST';
    const JUMP_INFO = 'JUMP_INFO';
    const VIDEO = 'VIDEO';
    const BRAND = 'BRAND';
    const CONSULT = 'CONSULT';
    const PHONE = 'PHONE';
    const FORM = 'FORM';
    const ACTION_BUTTON = 'ACTION_BUTTON';
    const CHOSEN_BUTTON = 'CHOSEN_BUTTON';
    const LABEL = 'LABEL';
    const SHOW_DATA = 'SHOW_DATA';
    const MARKETING_PENDANT = 'MARKETING_PENDANT';
    const APP_GIFT_PACK_CODE = 'APP_GIFT_PACK_CODE';
    const SHOP_IMAGE = 'SHOP_IMAGE';
    const COUNT_DOWN = 'COUNT_DOWN';
    const BARRAGE = 'BARRAGE';
    const FLOATING_ZONE = 'FLOATING_ZONE';
    const TEXT_LINK = 'TEXT_LINK';
    const END_PAGE = 'END_PAGE';
    const LIVING_DESC = 'LIVING_DESC';
    const WECHAT_CHANNELS = 'WECHAT_CHANNELS';
    const SHORT_VIDEO = 'SHORT_VIDEO';
    const ELEMENT_STORY = 'ELEMENT_STORY';
    const WXGAME_PLAYABLE_PAGE = 'WXGAME_PLAYABLE_PAGE';
    const V2_TITLE = 'V2_TITLE';
    const V2_DESCRIPTION = 'V2_DESCRIPTION';
    const V2_LONG_SUBLINK = 'V2_LONG_SUBLINK';
    const V2_SHORT_SUBLINK = 'V2_SHORT_SUBLINK';
    const V2_LONG_SUBLINK_LIST = 'V2_LONG_SUBLINK_LIST';
    const V2_SHORT_SUBLINK_LIST = 'V2_SHORT_SUBLINK_LIST';
    const V2_APP_DOWNLOAD = 'V2_APP_DOWNLOAD';
    const V2_IMAGE_1_X1 = 'V2_IMAGE_1X1';
    const V2_IMAGE_LIST_1_X1 = 'V2_IMAGE_LIST_1X1';
    const V2_IMAGE_TEXT_1_X1 = 'V2_IMAGE_TEXT_1X1';
    const V2_IMAGE_BIG_20_X7 = 'V2_IMAGE_BIG_20X7';
    const V2_VIDEO_16_X9_IMAGE_16_X9 = 'V2_VIDEO_16X9_IMAGE_16X9';
    const V2_VIDEO_16_X9_IMAGE_4_X3 = 'V2_VIDEO_16X9_IMAGE_4X3';
    const V2_VIDEO_16_X9_IMAGE_1_X1 = 'V2_VIDEO_16X9_IMAGE_1X1';
    const V2_QUICK_CONSULT = 'V2_QUICK_CONSULT';
    const V2_PHONE = 'V2_PHONE';
    const V2_FORM = 'V2_FORM';
    const V2_BRAND = 'V2_BRAND';
    const V2_LANDING_PAGE = 'V2_LANDING_PAGE';
    const V2_HOLIDAY_LOGO = 'V2_HOLIDAY_LOGO';
    const V2_ACTION_BUTTON = 'V2_ACTION_BUTTON';
    const V2_CHOSEN_BUTTON = 'V2_CHOSEN_BUTTON';
    const V2_VIDEO_9_X16_IMAGE_9_X16 = 'V2_VIDEO_9X16_IMAGE_9X16';
    const V2_IMAGE_16_X9 = 'V2_IMAGE_16X9';
    const V2_LABEL = 'V2_LABEL';
    const V2_PROMOTION_SUBLINK = 'V2_PROMOTION_SUBLINK';
    const V2_IMAGE_LIST_3_X2 = 'V2_IMAGE_LIST_3X2';
    const V2_IMAGE_LIST_9_X16 = 'V2_IMAGE_LIST_9X16';
    const V2_LIST_SUBLINK = 'V2_LIST_SUBLINK';
    const V2_MDPA_TITLE = 'V2_MDPA_TITLE';
    const V2_MDPA_DESCRIPTION = 'V2_MDPA_DESCRIPTION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::TITLE,
            self::DESCRIPTION,
            self::IMAGE,
            self::IMAGE_LIST,
            self::JUMP_INFO,
            self::VIDEO,
            self::BRAND,
            self::CONSULT,
            self::PHONE,
            self::FORM,
            self::ACTION_BUTTON,
            self::CHOSEN_BUTTON,
            self::LABEL,
            self::SHOW_DATA,
            self::MARKETING_PENDANT,
            self::APP_GIFT_PACK_CODE,
            self::SHOP_IMAGE,
            self::COUNT_DOWN,
            self::BARRAGE,
            self::FLOATING_ZONE,
            self::TEXT_LINK,
            self::END_PAGE,
            self::LIVING_DESC,
            self::WECHAT_CHANNELS,
            self::SHORT_VIDEO,
            self::ELEMENT_STORY,
            self::WXGAME_PLAYABLE_PAGE,
            self::V2_TITLE,
            self::V2_DESCRIPTION,
            self::V2_LONG_SUBLINK,
            self::V2_SHORT_SUBLINK,
            self::V2_LONG_SUBLINK_LIST,
            self::V2_SHORT_SUBLINK_LIST,
            self::V2_APP_DOWNLOAD,
            self::V2_IMAGE_1_X1,
            self::V2_IMAGE_LIST_1_X1,
            self::V2_IMAGE_TEXT_1_X1,
            self::V2_IMAGE_BIG_20_X7,
            self::V2_VIDEO_16_X9_IMAGE_16_X9,
            self::V2_VIDEO_16_X9_IMAGE_4_X3,
            self::V2_VIDEO_16_X9_IMAGE_1_X1,
            self::V2_QUICK_CONSULT,
            self::V2_PHONE,
            self::V2_FORM,
            self::V2_BRAND,
            self::V2_LANDING_PAGE,
            self::V2_HOLIDAY_LOGO,
            self::V2_ACTION_BUTTON,
            self::V2_CHOSEN_BUTTON,
            self::V2_VIDEO_9_X16_IMAGE_9_X16,
            self::V2_IMAGE_16_X9,
            self::V2_LABEL,
            self::V2_PROMOTION_SUBLINK,
            self::V2_IMAGE_LIST_3_X2,
            self::V2_IMAGE_LIST_9_X16,
            self::V2_LIST_SUBLINK,
            self::V2_MDPA_TITLE,
            self::V2_MDPA_DESCRIPTION,
        ];
    }
}


