<?php
/**
 * TaskType
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
 * TaskType Class Doc Comment
 *
 * @category Class
 * @description 任务类型（部分任务待废弃）具体请参考
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskType
{
    /**
     * Possible values of this enum
     */
    const TASK_TYPE_REPORT_AGENCY_ADVERTISER_HOURLY = 'TASK_TYPE_REPORT_AGENCY_ADVERTISER_HOURLY';
    const TASK_TYPE_TSA_IMEI = 'TASK_TYPE_TSA_IMEI';
    const TASK_TYPE_CREATIVE_PICTURE_REPORT = 'TASK_TYPE_CREATIVE_PICTURE_REPORT';
    const TASK_TYPE_AD_HOURLY_REPORT = 'TASK_TYPE_AD_HOURLY_REPORT';
    const TASK_TYPE_ADGROUP_HOURLY_REPORT = 'TASK_TYPE_ADGROUP_HOURLY_REPORT';
    const TASK_TYPE_WECHAT_MOMENTS_ADGROUP_HOURLY_REPORT = 'TASK_TYPE_WECHAT_MOMENTS_ADGROUP_HOURLY_REPORT';
    const TASK_TYPE_ADGROUP_DAILY_REPORT = 'TASK_TYPE_ADGROUP_DAILY_REPORT';
    const TASK_TYPE_INDUSTRY_CREATIVE_TEMPLATE_REPORT = 'TASK_TYPE_INDUSTRY_CREATIVE_TEMPLATE_REPORT';
    const TASK_TYPE_WECHAT_ADGROUP_HOURLY_REPORT = 'TASK_TYPE_WECHAT_ADGROUP_HOURLY_REPORT';
    const TASK_TYPE_WECHAT_ADGROUP_DAILY_REPORT = 'TASK_TYPE_WECHAT_ADGROUP_DAILY_REPORT';
    const TASK_TYPE_WECHAT_AD_HOURLY_REPORT = 'TASK_TYPE_WECHAT_AD_HOURLY_REPORT';
    const TASK_TYPE_WECHAT_AD_DAILY_REPORT = 'TASK_TYPE_WECHAT_AD_DAILY_REPORT';
    const TASK_TYPE_WECHAT_ADVERTISING_DATA = 'TASK_TYPE_WECHAT_ADVERTISING_DATA';
    const TASK_TYPE_POI_HOURLY_REPORT = 'TASK_TYPE_POI_HOURLY_REPORT';
    const TASK_TYPE_WECHAT_POI_HOURLY_REPORT = 'TASK_TYPE_WECHAT_POI_HOURLY_REPORT';
    const TASK_TYPE_ENCRYPTED_CUSTOM_IMEI = 'TASK_TYPE_ENCRYPTED_CUSTOM_IMEI';
    const TASK_TYPE_ENCRYPTED_TENCENT_IMEI = 'TASK_TYPE_ENCRYPTED_TENCENT_IMEI';
    const TASK_TYPE_CLEAR_TENCENT_IMEI = 'TASK_TYPE_CLEAR_TENCENT_IMEI';
    const TASK_TYPE_DEVICE_INFO = 'TASK_TYPE_DEVICE_INFO';
    const TASK_TYPE_REBATE_DETAIL = 'TASK_TYPE_REBATE_DETAIL';
    const TASK_TYPE_DEVICE_DETAIL_CPC = 'TASK_TYPE_DEVICE_DETAIL_CPC';
    const TASK_TYPE_OM_ADVERTISING_INFO = 'TASK_TYPE_OM_ADVERTISING_INFO';
    const TASK_TYPE_CREATE_ANDROID_CHANNEL_PACKAGE = 'TASK_TYPE_CREATE_ANDROID_CHANNEL_PACKAGE';
    const TASK_TYPE_UPDATE_ANDROID_CHANNEL_PACKAGE = 'TASK_TYPE_UPDATE_ANDROID_CHANNEL_PACKAGE';
    const TASK_TYPE_CREATE_ANDROID_UNION_CHANNEL_PACKAGE = 'TASK_TYPE_CREATE_ANDROID_UNION_CHANNEL_PACKAGE';
    const TASK_TYPE_UPDATE_ANDROID_UNION_CHANNEL_PACKAGE = 'TASK_TYPE_UPDATE_ANDROID_UNION_CHANNEL_PACKAGE';
    const TASK_TYPE_UNION_POSITION_REPORT = 'TASK_TYPE_UNION_POSITION_REPORT';
    const TASK_TYPE_UPDATE_ANDROID_UNION_CHANNEL_PACKAGE_BY_URL = 'TASK_TYPE_UPDATE_ANDROID_UNION_CHANNEL_PACKAGE_BY_URL';
    const TASK_TYPE_PRODUCT_DAILY_DATA = 'TASK_TYPE_PRODUCT_DAILY_DATA';
    const TASK_TYPE_PRODUCT_ADGROUP_DATA = 'TASK_TYPE_PRODUCT_ADGROUP_DATA';
    const TASK_TYPE_PRODUCT_AD_DATA = 'TASK_TYPE_PRODUCT_AD_DATA';
    const TASK_TYPE_DOWNLOAD_OPERATION_LOG = 'TASK_TYPE_DOWNLOAD_OPERATION_LOG';
    const TASK_TYPE_CAMPAIGN_DATA = 'TASK_TYPE_CAMPAIGN_DATA';
    const TASK_TYPE_REVIEW_ELEMENT_PREREVIEW_RESULT = 'TASK_TYPE_REVIEW_ELEMENT_PREREVIEW_RESULT';
    const TASK_TYPE_INTEGRATED_DATA = 'TASK_TYPE_INTEGRATED_DATA';
    const TASK_TYPE_AD_EDITOR_DOWNLOAD = 'TASK_TYPE_AD_EDITOR_DOWNLOAD';
    const TASK_TYPE_SEARCH_KEYWORD_RECOMMEND_DATA = 'TASK_TYPE_SEARCH_KEYWORD_RECOMMEND_DATA';
    const TASK_TYPE_SEARCH_BIDWORD_REPORT_DATA = 'TASK_TYPE_SEARCH_BIDWORD_REPORT_DATA';
    const TASK_TYPE_SEARCH_QUERYWORD_REPORT_DATA = 'TASK_TYPE_SEARCH_QUERYWORD_REPORT_DATA';
    const TASK_TYPE_BATCH_IMPORT = 'TASK_TYPE_BATCH_IMPORT';
    const TASK_TYPE_WX_SEARCH_KEYWORD_DATA = 'TASK_TYPE_WX_SEARCH_KEYWORD_DATA';
    const TASK_TYPE_SEARCH_BIDWORD_DOWNLOAD = 'TASK_TYPE_SEARCH_BIDWORD_DOWNLOAD';
    const TASK_TYPE_BATCH_REQUEST = 'TASK_TYPE_BATCH_REQUEST';
    const TASK_TYPE_CLICK_FORWARDED_DATA = 'TASK_TYPE_CLICK_FORWARDED_DATA';
    const TASK_TYPE_ADP_OFFLINE_RPT = 'TASK_TYPE_ADP_OFFLINE_RPT';
    const TASK_TYPE_AGENCY_OFFLINE_RPT = 'TASK_TYPE_AGENCY_OFFLINE_RPT';
    const TASK_TYPE_TRANSCODE_TWENTY_EIGHT_TASK = 'TASK_TYPE_TRANSCODE_TWENTY_EIGHT_TASK';
    const TASK_TYPE_MULTI_ACCOUNT_INTEGRATED_DATA = 'TASK_TYPE_MULTI_ACCOUNT_INTEGRATED_DATA';
    const TASK_TYPE_LANDING_PAGE_RPT = 'TASK_TYPE_LANDING_PAGE_RPT';
    const TASK_TYPE_UPDATE_UNION_POSITION_PACKAGE = 'TASK_TYPE_UPDATE_UNION_POSITION_PACKAGE';
    const TASK_TYPE_UPDATE_EXCLUDE_UNION_POSITION_PACKAGE = 'TASK_TYPE_UPDATE_EXCLUDE_UNION_POSITION_PACKAGE';
    const TASK_TYPE_UPDATE_TARGETING_ID = 'TASK_TYPE_UPDATE_TARGETING_ID';
    const TASK_TYPE_UPDATE_BID_STRATEGY = 'TASK_TYPE_UPDATE_BID_STRATEGY';
    const TASK_TYPE_UPDATE_DEEP_CONVERSION_BEHAVIOR_BID = 'TASK_TYPE_UPDATE_DEEP_CONVERSION_BEHAVIOR_BID';
    const TASK_TYPE_CREATE_SCHEDULED_UPDATE_CAMPAIGN_DAILY_BUDGET = 'TASK_TYPE_CREATE_SCHEDULED_UPDATE_CAMPAIGN_DAILY_BUDGET';
    const TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADGROUP_DAILY_BUDGET = 'TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADGROUP_DAILY_BUDGET';
    const TASK_TYPE_DELETE_SCHEDULED_TASK = 'TASK_TYPE_DELETE_SCHEDULED_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_APP_ANDROID_CHANNEL_PACKAGE_ID = 'TASK_TYPE_UPDATE_ADGROUP_APP_ANDROID_CHANNEL_PACKAGE_ID';
    const TASK_TYPE_UPDATE_CAMPAIGN_SPEED_MODE = 'TASK_TYPE_UPDATE_CAMPAIGN_SPEED_MODE';
    const TASK_TYPE_DELETE_CAMPAIGN = 'TASK_TYPE_DELETE_CAMPAIGN';
    const TASK_TYPE_DELETE_ADGROUP = 'TASK_TYPE_DELETE_ADGROUP';
    const TASK_TYPE_DELETE_AD = 'TASK_TYPE_DELETE_AD';
    const TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_RATE = 'TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_RATE';
    const TASK_TYPE_UPDATE_ADCREATIVE_DEEP_LINK_URL = 'TASK_TYPE_UPDATE_ADCREATIVE_DEEP_LINK_URL';
    const TASK_TYPE_TARGETINGS_SHARE = 'TASK_TYPE_TARGETINGS_SHARE';
    const TASK_TYPE_ADMASTER_CAMPAIGN_ADDSTRATEGY = 'TASK_TYPE_ADMASTER_CAMPAIGN_ADDSTRATEGY';
    const TASK_TYPE_ADMASTER_ADGROUP_ADDSTRATEGY = 'TASK_TYPE_ADMASTER_ADGROUP_ADDSTRATEGY';
    const TASK_TYPE_ADMASTER_ADVERTISER_ADDSTRATEGY = 'TASK_TYPE_ADMASTER_ADVERTISER_ADDSTRATEGY';
    const TASK_TYPE_UPDATE_CAMPAIGN_CONFIGURED_STATUS = 'TASK_TYPE_UPDATE_CAMPAIGN_CONFIGURED_STATUS';
    const TASK_TYPE_UPDATE_CAMPAIGN_DAILY_BUDGET = 'TASK_TYPE_UPDATE_CAMPAIGN_DAILY_BUDGET';
    const TASK_TYPE_UPDATE_ADGROUP_CONFIGURED_STATUS = 'TASK_TYPE_UPDATE_ADGROUP_CONFIGURED_STATUS';
    const TASK_TYPE_UPDATE_ADGROUP_DAILY_BUDGET = 'TASK_TYPE_UPDATE_ADGROUP_DAILY_BUDGET';
    const TASK_TYPE_UPDATE_AD_CONFIGURED_STATUS = 'TASK_TYPE_UPDATE_AD_CONFIGURED_STATUS';
    const TASK_TYPE_UPDATE_ADGROUP_DATE = 'TASK_TYPE_UPDATE_ADGROUP_DATE';
    const TASK_TYPE_UPDATE_ADGROUP_BID_AMOUNT = 'TASK_TYPE_UPDATE_ADGROUP_BID_AMOUNT';
    const TASK_TYPE_UPDATE_ADGROUP_AUTO_ACQUISITION = 'TASK_TYPE_UPDATE_ADGROUP_AUTO_ACQUISITION';
    const TASK_TYPE_UPDATE_ADCREATIVE_LANDING_PAGE = 'TASK_TYPE_UPDATE_ADCREATIVE_LANDING_PAGE';
    const TASK_TYPE_UPDATE_ADGROUP_BIND_RTA_POLICY = 'TASK_TYPE_UPDATE_ADGROUP_BIND_RTA_POLICY';
    const TASK_TYPE_UPDATE_ADGROUP_DERIVE_CONF = 'TASK_TYPE_UPDATE_ADGROUP_DERIVE_CONF';
    const TASK_TYPE_UPDATE_ADVERTISER_DAILY_BUDGET = 'TASK_TYPE_UPDATE_ADVERTISER_DAILY_BUDGET';
    const TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADVERTISER_DAILY_BUDGET = 'TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADVERTISER_DAILY_BUDGET';
    const TASK_TYPE_UPDATE_ADGROUP_TIME = 'TASK_TYPE_UPDATE_ADGROUP_TIME';
    const TASK_TYPE_COPY_ORDER = 'TASK_TYPE_COPY_ORDER';
    const TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_ADVANCED_RATE = 'TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_ADVANCED_RATE';
    const TASK_TYPE_UPDATE_CAMPAIGN_TOTAL_BUDGET = 'TASK_TYPE_UPDATE_CAMPAIGN_TOTAL_BUDGET';
    const TASK_TYPE_UPDATE_ADGROUP_FLOW_OPTIMIZATION_ENABLED = 'TASK_TYPE_UPDATE_ADGROUP_FLOW_OPTIMIZATION_ENABLED';
    const TASK_TYPE_UPDATE_CAMPAIGN_BIND_RTA_POLICY = 'TASK_TYPE_UPDATE_CAMPAIGN_BIND_RTA_POLICY';
    const TASK_TYPE_UPDATE_BIDWORD = 'TASK_TYPE_UPDATE_BIDWORD';
    const TASK_TYPE_DELETE_BIDWORD = 'TASK_TYPE_DELETE_BIDWORD';
    const TASK_TYPE_ADD_CAMPAIGN_NEGATIVE_WORD = 'TASK_TYPE_ADD_CAMPAIGN_NEGATIVE_WORD';
    const TASK_TYPE_ADD_ADGROUP_NEGATIVE_WORD = 'TASK_TYPE_ADD_ADGROUP_NEGATIVE_WORD';
    const TASK_TYPE_UPDATE_CAMPAIGN_NEGATIVE_WORD = 'TASK_TYPE_UPDATE_CAMPAIGN_NEGATIVE_WORD';
    const TASK_TYPE_UPDATE_ADGROUP_NEGATIVE_WORD = 'TASK_TYPE_UPDATE_ADGROUP_NEGATIVE_WORD';
    const TASK_TYPE_SYNC_ANDROID_CHANNEL_PACKAGE_DATA = 'TASK_TYPE_SYNC_ANDROID_CHANNEL_PACKAGE_DATA';
    const TASK_TYPE_COPY_ORDER_DELETE = 'TASK_TYPE_COPY_ORDER_DELETE';
    const TASK_TYPE_INVOICE_CONSUME = 'TASK_TYPE_INVOICE_CONSUME';
    const TASK_TYPE_AD_STATUS_CALC = 'TASK_TYPE_AD_STATUS_CALC';
    const TASK_TYPE_AUDIT_INVOICE_CONSUME = 'TASK_TYPE_AUDIT_INVOICE_CONSUME';
    const TASK_TYPE_AUTO_DERIVED_CREATIVE = 'TASK_TYPE_AUTO_DERIVED_CREATIVE';
    const TASK_TYPE_USER_PROJECT_CREATE_ORDER = 'TASK_TYPE_USER_PROJECT_CREATE_ORDER';
    const TASK_TYPE_ACCOUNT_PROJECT_CREATE_ORDER = 'TASK_TYPE_ACCOUNT_PROJECT_CREATE_ORDER';
    const TASK_TYPE_ACCOUNT_PROJECT_CREATE_ORDER_SUB_TASK = 'TASK_TYPE_ACCOUNT_PROJECT_CREATE_ORDER_SUB_TASK';
    const TASK_TYPE_REVIEW_PROCESS_CONSUME = 'TASK_TYPE_REVIEW_PROCESS_CONSUME';
    const TASK_TYPE_DC_BATCH_PROCESS_FINISHED = 'TASK_TYPE_DC_BATCH_PROCESS_FINISHED';
    const TASK_TYPE_SCHEDULED_UPDATE_ADVERTISER_DAILY_BUDGET = 'TASK_TYPE_SCHEDULED_UPDATE_ADVERTISER_DAILY_BUDGET';
    const TASK_TYPE_SCHEDULED_UPDATE_CAMPAIGN_DAILY_BUDGET = 'TASK_TYPE_SCHEDULED_UPDATE_CAMPAIGN_DAILY_BUDGET';
    const TASK_TYPE_SCHEDULED_UPDATE_ADGROUP_DAILY_BUDGET = 'TASK_TYPE_SCHEDULED_UPDATE_ADGROUP_DAILY_BUDGET';
    const TASK_TYPE_CRON_CUSTOMER_REPORT_PUSH = 'TASK_TYPE_CRON_CUSTOMER_REPORT_PUSH';
    const TASK_TYPE_DELAY_CUSTOMER_REPORT_PUSH = 'TASK_TYPE_DELAY_CUSTOMER_REPORT_PUSH';
    const TASK_TYPE_DELAY_CUSTOMER_MESSAGE_PUSH = 'TASK_TYPE_DELAY_CUSTOMER_MESSAGE_PUSH';
    const TASK_TYPE_CHECK_EXPIRED = 'TASK_TYPE_CHECK_EXPIRED';
    const TASK_TYPE_UPDATE_UNION_POSITION_PACKAGE_SUB_TASK = 'TASK_TYPE_UPDATE_UNION_POSITION_PACKAGE_SUB_TASK';
    const TASK_TYPE_UPDATE_EXCLUDE_UNION_POSITION_PACKAGE_SUB_TASK = 'TASK_TYPE_UPDATE_EXCLUDE_UNION_POSITION_PACKAGE_SUB_TASK';
    const TASK_TYPE_UPDATE_TARGETING_ID_SUB_TASK = 'TASK_TYPE_UPDATE_TARGETING_ID_SUB_TASK';
    const TASK_TYPE_UPDATE_BID_STRATEGY_SUB_TASK = 'TASK_TYPE_UPDATE_BID_STRATEGY_SUB_TASK';
    const TASK_TYPE_UPDATE_DEEP_CONVERSION_BEHAVIOR_BID_SUB_TASK = 'TASK_TYPE_UPDATE_DEEP_CONVERSION_BEHAVIOR_BID_SUB_TASK';
    const TASK_TYPE_CREATE_SCHEDULED_UPDATE_CAMPAIGN_DAILY_BUDGET_SUB_TASK = 'TASK_TYPE_CREATE_SCHEDULED_UPDATE_CAMPAIGN_DAILY_BUDGET_SUB_TASK';
    const TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADGROUP_DAILY_BUDGET_SUB_TASK = 'TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADGROUP_DAILY_BUDGET_SUB_TASK';
    const TASK_TYPE_DELETE_SCHEDULED_TASK_SUB_TASK = 'TASK_TYPE_DELETE_SCHEDULED_TASK_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_APP_ANDROID_CHANNEL_PACKAGE_ID_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_APP_ANDROID_CHANNEL_PACKAGE_ID_SUB_TASK';
    const TASK_TYPE_UPDATE_CAMPAIGN_SPEED_MODE_SUB_TASK = 'TASK_TYPE_UPDATE_CAMPAIGN_SPEED_MODE_SUB_TASK';
    const TASK_TYPE_DELETE_CAMPAIGN_SUB_TASK = 'TASK_TYPE_DELETE_CAMPAIGN_SUB_TASK';
    const TASK_TYPE_DELETE_ADGROUP_SUB_TASK = 'TASK_TYPE_DELETE_ADGROUP_SUB_TASK';
    const TASK_TYPE_DELETE_AD_SUB_TASK = 'TASK_TYPE_DELETE_AD_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_RATE_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_RATE_SUB_TASK';
    const TASK_TYPE_UPDATE_ADCREATIVE_DEEP_LINK_URL_SUB_TASK = 'TASK_TYPE_UPDATE_ADCREATIVE_DEEP_LINK_URL_SUB_TASK';
    const TASK_TYPE_TARGETINGS_SHARE_SUB_TASK = 'TASK_TYPE_TARGETINGS_SHARE_SUB_TASK';
    const TASK_TYPE_ADMASTER_CAMPAIGN_ADDSTRATEGY_SUB_TASK = 'TASK_TYPE_ADMASTER_CAMPAIGN_ADDSTRATEGY_SUB_TASK';
    const TASK_TYPE_ADMASTER_ADGROUP_ADDSTRATEGY_SUB_TASK = 'TASK_TYPE_ADMASTER_ADGROUP_ADDSTRATEGY_SUB_TASK';
    const TASK_TYPE_ADMASTER_ADVERTISER_ADDSTRATEGY_SUB_TASK = 'TASK_TYPE_ADMASTER_ADVERTISER_ADDSTRATEGY_SUB_TASK';
    const TASK_TYPE_UPDATE_CAMPAIGN_CONFIGURED_STATUS_SUB_TASK = 'TASK_TYPE_UPDATE_CAMPAIGN_CONFIGURED_STATUS_SUB_TASK';
    const TASK_TYPE_UPDATE_CAMPAIGN_DAILY_BUDGET_SUB_TASK = 'TASK_TYPE_UPDATE_CAMPAIGN_DAILY_BUDGET_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_CONFIGURED_STATUS_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_CONFIGURED_STATUS_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_DAILY_BUDGET_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_DAILY_BUDGET_SUB_TASK';
    const TASK_TYPE_UPDATE_AD_CONFIGURED_STATUS_SUB_TASK = 'TASK_TYPE_UPDATE_AD_CONFIGURED_STATUS_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_DATE_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_DATE_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_BID_AMOUNT_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_BID_AMOUNT_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_AUTO_ACQUISITION_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_AUTO_ACQUISITION_SUB_TASK';
    const TASK_TYPE_UPDATE_ADCREATIVE_LANDING_PAGE_SUB_TASK = 'TASK_TYPE_UPDATE_ADCREATIVE_LANDING_PAGE_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_BIND_RTA_POLICY_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_BIND_RTA_POLICY_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_DERIVE_CONF_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_DERIVE_CONF_SUB_TASK';
    const TASK_TYPE_UPDATE_ADVERTISER_DAILY_BUDGET_SUB_TASK = 'TASK_TYPE_UPDATE_ADVERTISER_DAILY_BUDGET_SUB_TASK';
    const TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADVERTISER_DAILY_BUDGET_SUB_TASK = 'TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADVERTISER_DAILY_BUDGET_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_TIME_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_TIME_SUB_TASK';
    const TASK_TYPE_COPY_ORDER_SUB_TASK = 'TASK_TYPE_COPY_ORDER_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_ADVANCED_RATE_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_ADVANCED_RATE_SUB_TASK';
    const TASK_TYPE_UPDATE_CAMPAIGN_TOTAL_BUDGET_SUB_TASK = 'TASK_TYPE_UPDATE_CAMPAIGN_TOTAL_BUDGET_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_FLOW_OPTIMIZATION_ENABLED_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_FLOW_OPTIMIZATION_ENABLED_SUB_TASK';
    const TASK_TYPE_UPDATE_CAMPAIGN_BIND_RTA_POLICY_SUB_TASK = 'TASK_TYPE_UPDATE_CAMPAIGN_BIND_RTA_POLICY_SUB_TASK';
    const TASK_TYPE_UPDATE_BIDWORD_SUB_TASK = 'TASK_TYPE_UPDATE_BIDWORD_SUB_TASK';
    const TASK_TYPE_DELETE_BIDWORD_SUB_TASK = 'TASK_TYPE_DELETE_BIDWORD_SUB_TASK';
    const TASK_TYPE_ADD_CAMPAIGN_NEGATIVE_WORD_SUB_TASK = 'TASK_TYPE_ADD_CAMPAIGN_NEGATIVE_WORD_SUB_TASK';
    const TASK_TYPE_ADD_ADGROUP_NEGATIVE_WORD_SUB_TASK = 'TASK_TYPE_ADD_ADGROUP_NEGATIVE_WORD_SUB_TASK';
    const TASK_TYPE_UPDATE_CAMPAIGN_NEGATIVE_WORD_SUB_TASK = 'TASK_TYPE_UPDATE_CAMPAIGN_NEGATIVE_WORD_SUB_TASK';
    const TASK_TYPE_UPDATE_ADGROUP_NEGATIVE_WORD_SUB_TASK = 'TASK_TYPE_UPDATE_ADGROUP_NEGATIVE_WORD_SUB_TASK';
    const TASK_TYPE_REFRESH_CONTENT_TOKEN = 'TASK_TYPE_REFRESH_CONTENT_TOKEN';
    const TASK_TYPE_REFRESH_CONTENT_CONTENT = 'TASK_TYPE_REFRESH_CONTENT_CONTENT';
    const TASK_TYPE_WXGAME_GAUSS_CREATIVE = 'TASK_TYPE_WXGAME_GAUSS_CREATIVE';
    const TASK_TYPE_UPDATE_COVER_IMAGE_DATA = 'TASK_TYPE_UPDATE_COVER_IMAGE_DATA';
    const TASK_TYPE_PROCESS_USER_PAGE_OBJECT = 'TASK_TYPE_PROCESS_USER_PAGE_OBJECT';
    const TASK_TYPE_DC_BATCH_CREATE_ADCREATIVE = 'TASK_TYPE_DC_BATCH_CREATE_ADCREATIVE';
    const TASK_TYPE_DC_BATCH_UPDATE_ADCREATIVE = 'TASK_TYPE_DC_BATCH_UPDATE_ADCREATIVE';
    const TASK_TYPE_UPDATE_CREATIVE_WARNSTATUS = 'TASK_TYPE_UPDATE_CREATIVE_WARNSTATUS';
    const TASK_TYPE_MULTI_ACCOUNT_REPORT_DATA = 'TASK_TYPE_MULTI_ACCOUNT_REPORT_DATA';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TASK_TYPE_REPORT_AGENCY_ADVERTISER_HOURLY,
            self::TASK_TYPE_TSA_IMEI,
            self::TASK_TYPE_CREATIVE_PICTURE_REPORT,
            self::TASK_TYPE_AD_HOURLY_REPORT,
            self::TASK_TYPE_ADGROUP_HOURLY_REPORT,
            self::TASK_TYPE_WECHAT_MOMENTS_ADGROUP_HOURLY_REPORT,
            self::TASK_TYPE_ADGROUP_DAILY_REPORT,
            self::TASK_TYPE_INDUSTRY_CREATIVE_TEMPLATE_REPORT,
            self::TASK_TYPE_WECHAT_ADGROUP_HOURLY_REPORT,
            self::TASK_TYPE_WECHAT_ADGROUP_DAILY_REPORT,
            self::TASK_TYPE_WECHAT_AD_HOURLY_REPORT,
            self::TASK_TYPE_WECHAT_AD_DAILY_REPORT,
            self::TASK_TYPE_WECHAT_ADVERTISING_DATA,
            self::TASK_TYPE_POI_HOURLY_REPORT,
            self::TASK_TYPE_WECHAT_POI_HOURLY_REPORT,
            self::TASK_TYPE_ENCRYPTED_CUSTOM_IMEI,
            self::TASK_TYPE_ENCRYPTED_TENCENT_IMEI,
            self::TASK_TYPE_CLEAR_TENCENT_IMEI,
            self::TASK_TYPE_DEVICE_INFO,
            self::TASK_TYPE_REBATE_DETAIL,
            self::TASK_TYPE_DEVICE_DETAIL_CPC,
            self::TASK_TYPE_OM_ADVERTISING_INFO,
            self::TASK_TYPE_CREATE_ANDROID_CHANNEL_PACKAGE,
            self::TASK_TYPE_UPDATE_ANDROID_CHANNEL_PACKAGE,
            self::TASK_TYPE_CREATE_ANDROID_UNION_CHANNEL_PACKAGE,
            self::TASK_TYPE_UPDATE_ANDROID_UNION_CHANNEL_PACKAGE,
            self::TASK_TYPE_UNION_POSITION_REPORT,
            self::TASK_TYPE_UPDATE_ANDROID_UNION_CHANNEL_PACKAGE_BY_URL,
            self::TASK_TYPE_PRODUCT_DAILY_DATA,
            self::TASK_TYPE_PRODUCT_ADGROUP_DATA,
            self::TASK_TYPE_PRODUCT_AD_DATA,
            self::TASK_TYPE_DOWNLOAD_OPERATION_LOG,
            self::TASK_TYPE_CAMPAIGN_DATA,
            self::TASK_TYPE_REVIEW_ELEMENT_PREREVIEW_RESULT,
            self::TASK_TYPE_INTEGRATED_DATA,
            self::TASK_TYPE_AD_EDITOR_DOWNLOAD,
            self::TASK_TYPE_SEARCH_KEYWORD_RECOMMEND_DATA,
            self::TASK_TYPE_SEARCH_BIDWORD_REPORT_DATA,
            self::TASK_TYPE_SEARCH_QUERYWORD_REPORT_DATA,
            self::TASK_TYPE_BATCH_IMPORT,
            self::TASK_TYPE_WX_SEARCH_KEYWORD_DATA,
            self::TASK_TYPE_SEARCH_BIDWORD_DOWNLOAD,
            self::TASK_TYPE_BATCH_REQUEST,
            self::TASK_TYPE_CLICK_FORWARDED_DATA,
            self::TASK_TYPE_ADP_OFFLINE_RPT,
            self::TASK_TYPE_AGENCY_OFFLINE_RPT,
            self::TASK_TYPE_TRANSCODE_TWENTY_EIGHT_TASK,
            self::TASK_TYPE_MULTI_ACCOUNT_INTEGRATED_DATA,
            self::TASK_TYPE_LANDING_PAGE_RPT,
            self::TASK_TYPE_UPDATE_UNION_POSITION_PACKAGE,
            self::TASK_TYPE_UPDATE_EXCLUDE_UNION_POSITION_PACKAGE,
            self::TASK_TYPE_UPDATE_TARGETING_ID,
            self::TASK_TYPE_UPDATE_BID_STRATEGY,
            self::TASK_TYPE_UPDATE_DEEP_CONVERSION_BEHAVIOR_BID,
            self::TASK_TYPE_CREATE_SCHEDULED_UPDATE_CAMPAIGN_DAILY_BUDGET,
            self::TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADGROUP_DAILY_BUDGET,
            self::TASK_TYPE_DELETE_SCHEDULED_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_APP_ANDROID_CHANNEL_PACKAGE_ID,
            self::TASK_TYPE_UPDATE_CAMPAIGN_SPEED_MODE,
            self::TASK_TYPE_DELETE_CAMPAIGN,
            self::TASK_TYPE_DELETE_ADGROUP,
            self::TASK_TYPE_DELETE_AD,
            self::TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_RATE,
            self::TASK_TYPE_UPDATE_ADCREATIVE_DEEP_LINK_URL,
            self::TASK_TYPE_TARGETINGS_SHARE,
            self::TASK_TYPE_ADMASTER_CAMPAIGN_ADDSTRATEGY,
            self::TASK_TYPE_ADMASTER_ADGROUP_ADDSTRATEGY,
            self::TASK_TYPE_ADMASTER_ADVERTISER_ADDSTRATEGY,
            self::TASK_TYPE_UPDATE_CAMPAIGN_CONFIGURED_STATUS,
            self::TASK_TYPE_UPDATE_CAMPAIGN_DAILY_BUDGET,
            self::TASK_TYPE_UPDATE_ADGROUP_CONFIGURED_STATUS,
            self::TASK_TYPE_UPDATE_ADGROUP_DAILY_BUDGET,
            self::TASK_TYPE_UPDATE_AD_CONFIGURED_STATUS,
            self::TASK_TYPE_UPDATE_ADGROUP_DATE,
            self::TASK_TYPE_UPDATE_ADGROUP_BID_AMOUNT,
            self::TASK_TYPE_UPDATE_ADGROUP_AUTO_ACQUISITION,
            self::TASK_TYPE_UPDATE_ADCREATIVE_LANDING_PAGE,
            self::TASK_TYPE_UPDATE_ADGROUP_BIND_RTA_POLICY,
            self::TASK_TYPE_UPDATE_ADGROUP_DERIVE_CONF,
            self::TASK_TYPE_UPDATE_ADVERTISER_DAILY_BUDGET,
            self::TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADVERTISER_DAILY_BUDGET,
            self::TASK_TYPE_UPDATE_ADGROUP_TIME,
            self::TASK_TYPE_COPY_ORDER,
            self::TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_ADVANCED_RATE,
            self::TASK_TYPE_UPDATE_CAMPAIGN_TOTAL_BUDGET,
            self::TASK_TYPE_UPDATE_ADGROUP_FLOW_OPTIMIZATION_ENABLED,
            self::TASK_TYPE_UPDATE_CAMPAIGN_BIND_RTA_POLICY,
            self::TASK_TYPE_UPDATE_BIDWORD,
            self::TASK_TYPE_DELETE_BIDWORD,
            self::TASK_TYPE_ADD_CAMPAIGN_NEGATIVE_WORD,
            self::TASK_TYPE_ADD_ADGROUP_NEGATIVE_WORD,
            self::TASK_TYPE_UPDATE_CAMPAIGN_NEGATIVE_WORD,
            self::TASK_TYPE_UPDATE_ADGROUP_NEGATIVE_WORD,
            self::TASK_TYPE_SYNC_ANDROID_CHANNEL_PACKAGE_DATA,
            self::TASK_TYPE_COPY_ORDER_DELETE,
            self::TASK_TYPE_INVOICE_CONSUME,
            self::TASK_TYPE_AD_STATUS_CALC,
            self::TASK_TYPE_AUDIT_INVOICE_CONSUME,
            self::TASK_TYPE_AUTO_DERIVED_CREATIVE,
            self::TASK_TYPE_USER_PROJECT_CREATE_ORDER,
            self::TASK_TYPE_ACCOUNT_PROJECT_CREATE_ORDER,
            self::TASK_TYPE_ACCOUNT_PROJECT_CREATE_ORDER_SUB_TASK,
            self::TASK_TYPE_REVIEW_PROCESS_CONSUME,
            self::TASK_TYPE_DC_BATCH_PROCESS_FINISHED,
            self::TASK_TYPE_SCHEDULED_UPDATE_ADVERTISER_DAILY_BUDGET,
            self::TASK_TYPE_SCHEDULED_UPDATE_CAMPAIGN_DAILY_BUDGET,
            self::TASK_TYPE_SCHEDULED_UPDATE_ADGROUP_DAILY_BUDGET,
            self::TASK_TYPE_CRON_CUSTOMER_REPORT_PUSH,
            self::TASK_TYPE_DELAY_CUSTOMER_REPORT_PUSH,
            self::TASK_TYPE_DELAY_CUSTOMER_MESSAGE_PUSH,
            self::TASK_TYPE_CHECK_EXPIRED,
            self::TASK_TYPE_UPDATE_UNION_POSITION_PACKAGE_SUB_TASK,
            self::TASK_TYPE_UPDATE_EXCLUDE_UNION_POSITION_PACKAGE_SUB_TASK,
            self::TASK_TYPE_UPDATE_TARGETING_ID_SUB_TASK,
            self::TASK_TYPE_UPDATE_BID_STRATEGY_SUB_TASK,
            self::TASK_TYPE_UPDATE_DEEP_CONVERSION_BEHAVIOR_BID_SUB_TASK,
            self::TASK_TYPE_CREATE_SCHEDULED_UPDATE_CAMPAIGN_DAILY_BUDGET_SUB_TASK,
            self::TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADGROUP_DAILY_BUDGET_SUB_TASK,
            self::TASK_TYPE_DELETE_SCHEDULED_TASK_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_APP_ANDROID_CHANNEL_PACKAGE_ID_SUB_TASK,
            self::TASK_TYPE_UPDATE_CAMPAIGN_SPEED_MODE_SUB_TASK,
            self::TASK_TYPE_DELETE_CAMPAIGN_SUB_TASK,
            self::TASK_TYPE_DELETE_ADGROUP_SUB_TASK,
            self::TASK_TYPE_DELETE_AD_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_RATE_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADCREATIVE_DEEP_LINK_URL_SUB_TASK,
            self::TASK_TYPE_TARGETINGS_SHARE_SUB_TASK,
            self::TASK_TYPE_ADMASTER_CAMPAIGN_ADDSTRATEGY_SUB_TASK,
            self::TASK_TYPE_ADMASTER_ADGROUP_ADDSTRATEGY_SUB_TASK,
            self::TASK_TYPE_ADMASTER_ADVERTISER_ADDSTRATEGY_SUB_TASK,
            self::TASK_TYPE_UPDATE_CAMPAIGN_CONFIGURED_STATUS_SUB_TASK,
            self::TASK_TYPE_UPDATE_CAMPAIGN_DAILY_BUDGET_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_CONFIGURED_STATUS_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_DAILY_BUDGET_SUB_TASK,
            self::TASK_TYPE_UPDATE_AD_CONFIGURED_STATUS_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_DATE_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_BID_AMOUNT_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_AUTO_ACQUISITION_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADCREATIVE_LANDING_PAGE_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_BIND_RTA_POLICY_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_DERIVE_CONF_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADVERTISER_DAILY_BUDGET_SUB_TASK,
            self::TASK_TYPE_CREATE_SCHEDULED_UPDATE_ADVERTISER_DAILY_BUDGET_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_TIME_SUB_TASK,
            self::TASK_TYPE_COPY_ORDER_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_DEEP_CONVERSION_WORTH_ADVANCED_RATE_SUB_TASK,
            self::TASK_TYPE_UPDATE_CAMPAIGN_TOTAL_BUDGET_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_FLOW_OPTIMIZATION_ENABLED_SUB_TASK,
            self::TASK_TYPE_UPDATE_CAMPAIGN_BIND_RTA_POLICY_SUB_TASK,
            self::TASK_TYPE_UPDATE_BIDWORD_SUB_TASK,
            self::TASK_TYPE_DELETE_BIDWORD_SUB_TASK,
            self::TASK_TYPE_ADD_CAMPAIGN_NEGATIVE_WORD_SUB_TASK,
            self::TASK_TYPE_ADD_ADGROUP_NEGATIVE_WORD_SUB_TASK,
            self::TASK_TYPE_UPDATE_CAMPAIGN_NEGATIVE_WORD_SUB_TASK,
            self::TASK_TYPE_UPDATE_ADGROUP_NEGATIVE_WORD_SUB_TASK,
            self::TASK_TYPE_REFRESH_CONTENT_TOKEN,
            self::TASK_TYPE_REFRESH_CONTENT_CONTENT,
            self::TASK_TYPE_WXGAME_GAUSS_CREATIVE,
            self::TASK_TYPE_UPDATE_COVER_IMAGE_DATA,
            self::TASK_TYPE_PROCESS_USER_PAGE_OBJECT,
            self::TASK_TYPE_DC_BATCH_CREATE_ADCREATIVE,
            self::TASK_TYPE_DC_BATCH_UPDATE_ADCREATIVE,
            self::TASK_TYPE_UPDATE_CREATIVE_WARNSTATUS,
            self::TASK_TYPE_MULTI_ACCOUNT_REPORT_DATA,
            self::UNKNOWN,
        ];
    }
}


