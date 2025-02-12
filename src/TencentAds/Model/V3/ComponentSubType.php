<?php
/**
 * ComponentSubType
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
 * ComponentSubType Class Doc Comment
 *
 * @category Class
 * @description 创意组件子类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComponentSubType
{
    /**
     * Possible values of this enum
     */
    const SEARCH_TITLE = 'SEARCH_TITLE';
    const SEARCH_DESCRIPTION = 'SEARCH_DESCRIPTION';
    const SEARCH_LONG_SUBLINK = 'SEARCH_LONG_SUBLINK';
    const SEARCH_SHORT_SUBLINK = 'SEARCH_SHORT_SUBLINK';
    const SEARCH_LONG_SUBLINK_LIST = 'SEARCH_LONG_SUBLINK_LIST';
    const SEARCH_SHORT_SUBLINK_LIST = 'SEARCH_SHORT_SUBLINK_LIST';
    const SEARCH_APP_DOWNLOAD = 'SEARCH_APP_DOWNLOAD';
    const SEARCH_IMAGE_1_X1 = 'SEARCH_IMAGE_1X1';
    const SEARCH_IMAGE_LIST_1_X1 = 'SEARCH_IMAGE_LIST_1X1';
    const SEARCH_IMAGE_TEXT_1_X1 = 'SEARCH_IMAGE_TEXT_1X1';
    const SEARCH_IMAGE_BIG_20_X7 = 'SEARCH_IMAGE_BIG_20X7';
    const SEARCH_VIDEO_16_X9_IMAGE_16_X9 = 'SEARCH_VIDEO_16X9_IMAGE_16X9';
    const SEARCH_VIDEO_16_X9_IMAGE_4_X3 = 'SEARCH_VIDEO_16X9_IMAGE_4X3';
    const SEARCH_VIDEO_16_X9_IMAGE_1_X1 = 'SEARCH_VIDEO_16X9_IMAGE_1X1';
    const SEARCH_QUICK_CONSULT = 'SEARCH_QUICK_CONSULT';
    const SEARCH_PHONE = 'SEARCH_PHONE';
    const SEARCH_FORM = 'SEARCH_FORM';
    const SEARCH_BRAND = 'SEARCH_BRAND';
    const SEARCH_LANDING_PAGE = 'SEARCH_LANDING_PAGE';
    const SEARCH_HOLIDAY_LOGO = 'SEARCH_HOLIDAY_LOGO';
    const SEARCH_ACTION_BUTTON = 'SEARCH_ACTION_BUTTON';
    const SEARCH_CHOSEN_BUTTON = 'SEARCH_CHOSEN_BUTTON';
    const SEARCH_VIDEO_9_X16_IMAGE_9_X16 = 'SEARCH_VIDEO_9X16_IMAGE_9X16';
    const SEARCH_IMAGE_16_X9 = 'SEARCH_IMAGE_16X9';
    const SEARCH_LABEL = 'SEARCH_LABEL';
    const SEARCH_PROMOTION_SUBLINK = 'SEARCH_PROMOTION_SUBLINK';
    const SEARCH_IMAGE_LIST_3_X2 = 'SEARCH_IMAGE_LIST_3X2';
    const SEARCH_IMAGE_LIST_9_X16 = 'SEARCH_IMAGE_LIST_9X16';
    const SEARCH_LIST_SUBLINK = 'SEARCH_LIST_SUBLINK';
    const SEARCH_MDPA_TITLE = 'SEARCH_MDPA_TITLE';
    const SEARCH_MDPA_DESCRIPTION = 'SEARCH_MDPA_DESCRIPTION';
    const VIDEO_16_X9 = 'VIDEO_16X9';
    const VIDEO_9_X16 = 'VIDEO_9X16';
    const VIDEO_4_X3 = 'VIDEO_4X3';
    const VIDEO_SHOWCASE = 'VIDEO_SHOWCASE';
    const SHORT_VIDEO_4_X3 = 'SHORT_VIDEO_4X3';
    const VIDEO_9_X16_1080_X1920 = 'VIDEO_9X16_1080X1920';
    const VIDEO_16_X9_1920_X1080 = 'VIDEO_16X9_1920X1080';
    const VIDEO_16_X9_1280_X720 = 'VIDEO_16X9_1280X720';
    const VIDEO_9_X16_720_X1280 = 'VIDEO_9X16_720X1280';
    const VIDEO_1280_X932 = 'VIDEO_1280X932';
    const VIDEO_1280_X866 = 'VIDEO_1280X866';
    const VIDEO_960_X540 = 'VIDEO_960X540';
    const VIDEO_978_X886 = 'VIDEO_978X886';
    const APP_PROMOTION_VIDEO_16_X9 = 'APP_PROMOTION_VIDEO_16X9';
    const IMAGE_16_X9 = 'IMAGE_16X9';
    const IMAGE_9_X16 = 'IMAGE_9X16';
    const IMAGE_1_X1 = 'IMAGE_1X1';
    const IMAGE_3_X2 = 'IMAGE_3X2';
    const IMAGE_3_X4 = 'IMAGE_3X4';
    const IMAGE_4_X3 = 'IMAGE_4X3';
    const IMAGE_5_X4 = 'IMAGE_5X4';
    const IMAGE_4_X5 = 'IMAGE_4X5';
    const IMAGE_20_X7 = 'IMAGE_20X7';
    const IMAGE_7_X2 = 'IMAGE_7X2';
    const IMAGE_SHOWCASE = 'IMAGE_SHOWCASE';
    const IMAGE_100_X9 = 'IMAGE_100X9';
    const IMAGE_1000_X560 = 'IMAGE_1000X560';
    const IMAGE_230_X152 = 'IMAGE_230X152';
    const IMAGE_960_X144 = 'IMAGE_960X144';
    const IMAGE_640_X360 = 'IMAGE_640X360';
    const IMAGE_1280_X932 = 'IMAGE_1280X932';
    const IMAGE_1280_X866 = 'IMAGE_1280X866';
    const IMAGE_16_X9_1920_X1080 = 'IMAGE_16X9_1920X1080';
    const IMAGE_LIST_9_X16_4 = 'IMAGE_LIST_9X16_4';
    const IMAGE_LIST_1_X1_3 = 'IMAGE_LIST_1X1_3';
    const IMAGE_LIST_1_X1_4 = 'IMAGE_LIST_1X1_4';
    const IMAGE_LIST_1_X1_6 = 'IMAGE_LIST_1X1_6';
    const IMAGE_LIST_3_X2_3 = 'IMAGE_LIST_3X2_3';
    const IMAGE_LIST_1_X1_1 = 'IMAGE_LIST_1X1_1';
    const IMAGE_LIST_16_X9_1 = 'IMAGE_LIST_16X9_1';
    const IMAGE_LIST_1_X1_9 = 'IMAGE_LIST_1X1_9';
    const ELEMENT_STORY = 'ELEMENT_STORY';
    const DESCRIPTION = 'DESCRIPTION';
    const TITLE = 'TITLE';
    const ACTION_BUTTON = 'ACTION_BUTTON';
    const LABEL = 'LABEL';
    const SHOW_DATA = 'SHOW_DATA';
    const FLOATING_ZONE_IMAGE_TEXT = 'FLOATING_ZONE_IMAGE_TEXT';
    const FLOATING_ZONE_IMAGE = 'FLOATING_ZONE_IMAGE';
    const BARRAGE = 'BARRAGE';
    const APP_GIFT_PACK_CODE = 'APP_GIFT_PACK_CODE';
    const SHOP_IMAGE = 'SHOP_IMAGE';
    const MARKETING_PENDANT = 'MARKETING_PENDANT';
    const CHOSEN_BUTTON = 'CHOSEN_BUTTON';
    const COUNT_DOWN = 'COUNT_DOWN';
    const LIVING_DESC = 'LIVING_DESC';
    const TEXT_LINK = 'TEXT_LINK';
    const END_PAGE = 'END_PAGE';
    const WECHAT_CHANNELS = 'WECHAT_CHANNELS';
    const WXGAME_PLAYABLE_PAGE = 'WXGAME_PLAYABLE_PAGE';
    const CONSULT = 'CONSULT';
    const PHONE = 'PHONE';
    const FORM = 'FORM';
    const SOCIAL_SKILL = 'SOCIAL_SKILL';
    const MINI_CARD_LINK = 'MINI_CARD_LINK';
    const FLOATING_ZONE_IMAGE_TEXT_LIST = 'FLOATING_ZONE_IMAGE_TEXT_LIST';
    const CONSULT_LINK = 'CONSULT_LINK';
    const SHOP_PRODUCT_CARD = 'SHOP_PRODUCT_CARD';
    const BRAND = 'BRAND';
    const BRAND_PAGE = 'BRAND_PAGE';
    const BRAND_SEARCH = 'BRAND_SEARCH';
    const BRAND_WECHAT_CHANNEL = 'BRAND_WECHAT_CHANNEL';
    const BRAND_WECHAT = 'BRAND_WECHAT';
    const BRAND_WECOM = 'BRAND_WECOM';
    const JUMP_INFO_OFFICIAL = 'JUMP_INFO_OFFICIAL';
    const JUMP_INFO_XJ_ANDROID_APP_H5 = 'JUMP_INFO_XJ_ANDROID_APP_H5';
    const JUMP_INFO_XJ_IOS_APP_H5 = 'JUMP_INFO_XJ_IOS_APP_H5';
    const JUMP_INFO_XJ_WEB_H5 = 'JUMP_INFO_XJ_WEB_H5';
    const JUMP_INFO_XJ_QUICK = 'JUMP_INFO_XJ_QUICK';
    const JUMP_INFO_WECHAT_CANVAS = 'JUMP_INFO_WECHAT_CANVAS';
    const JUMP_INFO_WECHAT_CANVAS_MINI_PROGRAM = 'JUMP_INFO_WECHAT_CANVAS_MINI_PROGRAM';
    const JUMP_INFO_FENGYE_ECOMMERCE = 'JUMP_INFO_FENGYE_ECOMMERCE';
    const JUMP_INFO_H5 = 'JUMP_INFO_H5';
    const JUMP_INFO_WECHAT_SIMPLE_CANVAS = 'JUMP_INFO_WECHAT_SIMPLE_CANVAS';
    const JUMP_INFO_WECHAT_MINI_PROGRAM = 'JUMP_INFO_WECHAT_MINI_PROGRAM';
    const JUMP_INFO_QQ_APP_MINI_PROGRAM = 'JUMP_INFO_QQ_APP_MINI_PROGRAM';
    const JUMP_INFO_WECHAT_CONSULT = 'JUMP_INFO_WECHAT_CONSULT';
    const JUMP_INFO_WECOM_CONSULT = 'JUMP_INFO_WECOM_CONSULT';
    const JUMP_INFO_WECHAT_CHANNELS_WATCH_LIVE = 'JUMP_INFO_WECHAT_CHANNELS_WATCH_LIVE';
    const JUMP_INFO_WECHAT_CHANNELS_RESERVE_LIVE = 'JUMP_INFO_WECHAT_CHANNELS_RESERVE_LIVE';
    const JUMP_INFO_WECHAT_CHANNELS_FEED = 'JUMP_INFO_WECHAT_CHANNELS_FEED';
    const JUMP_INFO_WECHAT_OFFICIAL_ACCOUNT_DETAIL = 'JUMP_INFO_WECHAT_OFFICIAL_ACCOUNT_DETAIL';
    const JUMP_INFO_WECHAT_MINI_GAME = 'JUMP_INFO_WECHAT_MINI_GAME';
    const JUMP_INFO_ANDROID_APP = 'JUMP_INFO_ANDROID_APP';
    const JUMP_INFO_IOS_APP = 'JUMP_INFO_IOS_APP';
    const JUMP_INFO_ANDROID_DIRECT_DOWNLOAD = 'JUMP_INFO_ANDROID_DIRECT_DOWNLOAD';
    const JUMP_INFO_APP_MARKET = 'JUMP_INFO_APP_MARKET';
    const JUMP_INFO_APP_DEEP_LINK = 'JUMP_INFO_APP_DEEP_LINK';
    const JUMP_INFO_ANDROID_QUICK_APP = 'JUMP_INFO_ANDROID_QUICK_APP';
    const JUMP_INFO_WECHAT_CHANNELS_SHOP_PRODUCT = 'JUMP_INFO_WECHAT_CHANNELS_SHOP_PRODUCT';
    const JUMP_INFO_QQ_MINI_GAME = 'JUMP_INFO_QQ_MINI_GAME';
    const JUMP_INFO_APP_HARMONY = 'JUMP_INFO_APP_HARMONY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SEARCH_TITLE,
            self::SEARCH_DESCRIPTION,
            self::SEARCH_LONG_SUBLINK,
            self::SEARCH_SHORT_SUBLINK,
            self::SEARCH_LONG_SUBLINK_LIST,
            self::SEARCH_SHORT_SUBLINK_LIST,
            self::SEARCH_APP_DOWNLOAD,
            self::SEARCH_IMAGE_1_X1,
            self::SEARCH_IMAGE_LIST_1_X1,
            self::SEARCH_IMAGE_TEXT_1_X1,
            self::SEARCH_IMAGE_BIG_20_X7,
            self::SEARCH_VIDEO_16_X9_IMAGE_16_X9,
            self::SEARCH_VIDEO_16_X9_IMAGE_4_X3,
            self::SEARCH_VIDEO_16_X9_IMAGE_1_X1,
            self::SEARCH_QUICK_CONSULT,
            self::SEARCH_PHONE,
            self::SEARCH_FORM,
            self::SEARCH_BRAND,
            self::SEARCH_LANDING_PAGE,
            self::SEARCH_HOLIDAY_LOGO,
            self::SEARCH_ACTION_BUTTON,
            self::SEARCH_CHOSEN_BUTTON,
            self::SEARCH_VIDEO_9_X16_IMAGE_9_X16,
            self::SEARCH_IMAGE_16_X9,
            self::SEARCH_LABEL,
            self::SEARCH_PROMOTION_SUBLINK,
            self::SEARCH_IMAGE_LIST_3_X2,
            self::SEARCH_IMAGE_LIST_9_X16,
            self::SEARCH_LIST_SUBLINK,
            self::SEARCH_MDPA_TITLE,
            self::SEARCH_MDPA_DESCRIPTION,
            self::VIDEO_16_X9,
            self::VIDEO_9_X16,
            self::VIDEO_4_X3,
            self::VIDEO_SHOWCASE,
            self::SHORT_VIDEO_4_X3,
            self::VIDEO_9_X16_1080_X1920,
            self::VIDEO_16_X9_1920_X1080,
            self::VIDEO_16_X9_1280_X720,
            self::VIDEO_9_X16_720_X1280,
            self::VIDEO_1280_X932,
            self::VIDEO_1280_X866,
            self::VIDEO_960_X540,
            self::VIDEO_978_X886,
            self::APP_PROMOTION_VIDEO_16_X9,
            self::IMAGE_16_X9,
            self::IMAGE_9_X16,
            self::IMAGE_1_X1,
            self::IMAGE_3_X2,
            self::IMAGE_3_X4,
            self::IMAGE_4_X3,
            self::IMAGE_5_X4,
            self::IMAGE_4_X5,
            self::IMAGE_20_X7,
            self::IMAGE_7_X2,
            self::IMAGE_SHOWCASE,
            self::IMAGE_100_X9,
            self::IMAGE_1000_X560,
            self::IMAGE_230_X152,
            self::IMAGE_960_X144,
            self::IMAGE_640_X360,
            self::IMAGE_1280_X932,
            self::IMAGE_1280_X866,
            self::IMAGE_16_X9_1920_X1080,
            self::IMAGE_LIST_9_X16_4,
            self::IMAGE_LIST_1_X1_3,
            self::IMAGE_LIST_1_X1_4,
            self::IMAGE_LIST_1_X1_6,
            self::IMAGE_LIST_3_X2_3,
            self::IMAGE_LIST_1_X1_1,
            self::IMAGE_LIST_16_X9_1,
            self::IMAGE_LIST_1_X1_9,
            self::ELEMENT_STORY,
            self::DESCRIPTION,
            self::TITLE,
            self::ACTION_BUTTON,
            self::LABEL,
            self::SHOW_DATA,
            self::FLOATING_ZONE_IMAGE_TEXT,
            self::FLOATING_ZONE_IMAGE,
            self::BARRAGE,
            self::APP_GIFT_PACK_CODE,
            self::SHOP_IMAGE,
            self::MARKETING_PENDANT,
            self::CHOSEN_BUTTON,
            self::COUNT_DOWN,
            self::LIVING_DESC,
            self::TEXT_LINK,
            self::END_PAGE,
            self::WECHAT_CHANNELS,
            self::WXGAME_PLAYABLE_PAGE,
            self::CONSULT,
            self::PHONE,
            self::FORM,
            self::SOCIAL_SKILL,
            self::MINI_CARD_LINK,
            self::FLOATING_ZONE_IMAGE_TEXT_LIST,
            self::CONSULT_LINK,
            self::SHOP_PRODUCT_CARD,
            self::BRAND,
            self::BRAND_PAGE,
            self::BRAND_SEARCH,
            self::BRAND_WECHAT_CHANNEL,
            self::BRAND_WECHAT,
            self::BRAND_WECOM,
            self::JUMP_INFO_OFFICIAL,
            self::JUMP_INFO_XJ_ANDROID_APP_H5,
            self::JUMP_INFO_XJ_IOS_APP_H5,
            self::JUMP_INFO_XJ_WEB_H5,
            self::JUMP_INFO_XJ_QUICK,
            self::JUMP_INFO_WECHAT_CANVAS,
            self::JUMP_INFO_WECHAT_CANVAS_MINI_PROGRAM,
            self::JUMP_INFO_FENGYE_ECOMMERCE,
            self::JUMP_INFO_H5,
            self::JUMP_INFO_WECHAT_SIMPLE_CANVAS,
            self::JUMP_INFO_WECHAT_MINI_PROGRAM,
            self::JUMP_INFO_QQ_APP_MINI_PROGRAM,
            self::JUMP_INFO_WECHAT_CONSULT,
            self::JUMP_INFO_WECOM_CONSULT,
            self::JUMP_INFO_WECHAT_CHANNELS_WATCH_LIVE,
            self::JUMP_INFO_WECHAT_CHANNELS_RESERVE_LIVE,
            self::JUMP_INFO_WECHAT_CHANNELS_FEED,
            self::JUMP_INFO_WECHAT_OFFICIAL_ACCOUNT_DETAIL,
            self::JUMP_INFO_WECHAT_MINI_GAME,
            self::JUMP_INFO_ANDROID_APP,
            self::JUMP_INFO_IOS_APP,
            self::JUMP_INFO_ANDROID_DIRECT_DOWNLOAD,
            self::JUMP_INFO_APP_MARKET,
            self::JUMP_INFO_APP_DEEP_LINK,
            self::JUMP_INFO_ANDROID_QUICK_APP,
            self::JUMP_INFO_WECHAT_CHANNELS_SHOP_PRODUCT,
            self::JUMP_INFO_QQ_MINI_GAME,
            self::JUMP_INFO_APP_HARMONY,
        ];
    }
}


