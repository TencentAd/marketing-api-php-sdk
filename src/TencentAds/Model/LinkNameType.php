<?php
/**
 * LinkNameType
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
 * LinkNameType Class Doc Comment
 *
 * @category Class
 * @description 链接名称类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LinkNameType
{
    /**
     * Possible values of this enum
     */
    const VIEW_DETAILS = 'VIEW_DETAILS';
    const GET_COUPONS = 'GET_COUPONS';
    const MAKE_AN_APPOINTMENT = 'MAKE_AN_APPOINTMENT';
    const BUY_NOW = 'BUY_NOW';
    const GO_SHOPPING = 'GO_SHOPPING';
    const ENTER_MINI_PROGRAM = 'ENTER_MINI_PROGRAM';
    const ENTER_MINI_GAME = 'ENTER_MINI_GAME';
    const APPLY_NOW = 'APPLY_NOW';
    const BOOK_NOW = 'BOOK_NOW';
    const RESERVATION_BUY = 'RESERVATION_BUY';
    const CONSULT_NOW = 'CONSULT_NOW';
    const BOOK_DRIVE = 'BOOK_DRIVE';
    const ENTER_OFFICIAL_ACCOUNTS = 'ENTER_OFFICIAL_ACCOUNTS';
    const PLAY_NOW = 'PLAY_NOW';
    const OPEN_MINI_GAME = 'OPEN_MINI_GAME';
    const DOWNLOAD_APP = 'DOWNLOAD_APP';
    const DOWNLOAD_GAME = 'DOWNLOAD_GAME';
    const GET_SAMPLES = 'GET_SAMPLES';
    const TRY_NOW = 'TRY_NOW';
    const GET_IT_NOW = 'GET_IT_NOW';
    const BUY_ASAP = 'BUY_ASAP';
    const DOWNLOAD_NOW = 'DOWNLOAD_NOW';
    const VIEW_APPS = 'VIEW_APPS';
    const MORE_INFO = 'MORE_INFO';
    const GET_VOUCHERS = 'GET_VOUCHERS';
    const FOLLOW_OFFICIAL_ACCOUNT = 'FOLLOW_OFFICIAL_ACCOUNT';
    const READ_NOVELS = 'READ_NOVELS';
    const GO_TO_JD = 'GO_TO_JD';
    const GO_TO_PDD = 'GO_TO_PDD';
    const GO_TO_SUNING = 'GO_TO_SUNING';
    const GO_TO_VIP = 'GO_TO_VIP';
    const GO_TO_XIAOHONGSHU = 'GO_TO_XIAOHONGSHU';
    const GO_TO_KUAISHOU = 'GO_TO_KUAISHOU';
    const WATCH_LIVE = 'WATCH_LIVE';
    const RESERVE_NOW = 'RESERVE_NOW';
    const FOLLOW_CHANNELS = 'FOLLOW_CHANNELS';
    const MORE_ABOUT_CHANNELS = 'MORE_ABOUT_CHANNELS';
    const OPEN_APP = 'OPEN_APP';
    const ALREADY_INSTALL = 'ALREADY_INSTALL';
    const RESERVE_LIVE = 'RESERVE_LIVE';
    const SETUP_NOW = 'SETUP_NOW';
    const SECKILL_NOW = 'SECKILL_NOW';
    const TRY_PLAY_NOW = 'TRY_PLAY_NOW';
    const INSTALL_NOW = 'INSTALL_NOW';
    const MORE_ABOUT_OFFICIAL_ACCOUNT_CHT = 'MORE_ABOUT_OFFICIAL_ACCOUNT_CHT';
    const FOLLOW_OFFICIAL_ACCOUNT_CHT = 'FOLLOW_OFFICIAL_ACCOUNT_CHT';
    const GET_FOR_FREE = 'GET_FOR_FREE';
    const WATCH_VIDEO = 'WATCH_VIDEO';
    const CARNIVAL_618 = 'CARNIVAL_618';
    const SURPRISE_618 = 'SURPRISE_618';
    const DISCOUNT_618 = 'DISCOUNT_618';
    const GO_618_VENUE = 'GO_618_VENUE';
    const GET_618_WELFARE = 'GET_618_WELFARE';
    const CONTACT_CUSTOMER_SERVICE = 'CONTACT_CUSTOMER_SERVICE';
    const CONTACT_BUSINESS = 'CONTACT_BUSINESS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VIEW_DETAILS,
            self::GET_COUPONS,
            self::MAKE_AN_APPOINTMENT,
            self::BUY_NOW,
            self::GO_SHOPPING,
            self::ENTER_MINI_PROGRAM,
            self::ENTER_MINI_GAME,
            self::APPLY_NOW,
            self::BOOK_NOW,
            self::RESERVATION_BUY,
            self::CONSULT_NOW,
            self::BOOK_DRIVE,
            self::ENTER_OFFICIAL_ACCOUNTS,
            self::PLAY_NOW,
            self::OPEN_MINI_GAME,
            self::DOWNLOAD_APP,
            self::DOWNLOAD_GAME,
            self::GET_SAMPLES,
            self::TRY_NOW,
            self::GET_IT_NOW,
            self::BUY_ASAP,
            self::DOWNLOAD_NOW,
            self::VIEW_APPS,
            self::MORE_INFO,
            self::GET_VOUCHERS,
            self::FOLLOW_OFFICIAL_ACCOUNT,
            self::READ_NOVELS,
            self::GO_TO_JD,
            self::GO_TO_PDD,
            self::GO_TO_SUNING,
            self::GO_TO_VIP,
            self::GO_TO_XIAOHONGSHU,
            self::GO_TO_KUAISHOU,
            self::WATCH_LIVE,
            self::RESERVE_NOW,
            self::FOLLOW_CHANNELS,
            self::MORE_ABOUT_CHANNELS,
            self::OPEN_APP,
            self::ALREADY_INSTALL,
            self::RESERVE_LIVE,
            self::SETUP_NOW,
            self::SECKILL_NOW,
            self::TRY_PLAY_NOW,
            self::INSTALL_NOW,
            self::MORE_ABOUT_OFFICIAL_ACCOUNT_CHT,
            self::FOLLOW_OFFICIAL_ACCOUNT_CHT,
            self::GET_FOR_FREE,
            self::WATCH_VIDEO,
            self::CARNIVAL_618,
            self::SURPRISE_618,
            self::DISCOUNT_618,
            self::GO_618_VENUE,
            self::GET_618_WELFARE,
            self::CONTACT_CUSTOMER_SERVICE,
            self::CONTACT_BUSINESS,
        ];
    }
}


