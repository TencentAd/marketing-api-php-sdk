<?php
/**
 * PromotedAssetAttrKey
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
 * PromotedAssetAttrKey Class Doc Comment
 *
 * @category Class
 * @description 推广资产属性名称
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotedAssetAttrKey
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'PROMOTED_ASSET_ATTR_KEY_UNKNOWN';
    const SPU_ID = 'PROMOTED_ASSET_ATTR_KEY_SPU_ID';
    const APP_ANDROID_ID = 'PROMOTED_ASSET_ATTR_KEY_APP_ANDROID_ID';
    const APP_IOS_ID = 'PROMOTED_ASSET_ATTR_KEY_APP_IOS_ID';
    const WECHAT_OFFICIAL_ACCOUNT_ID = 'PROMOTED_ASSET_ATTR_KEY_WECHAT_OFFICIAL_ACCOUNT_ID';
    const EDUCATION_PRODUCT_TYPE = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_PRODUCT_TYPE';
    const EDUCATION_PRODUCT_FORM = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_PRODUCT_FORM';
    const EDUCATION_PRODUCT_CAPACITY = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_PRODUCT_CAPACITY';
    const EDUCATION_PRODUCT_DIRECTION1 = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_PRODUCT_DIRECTION1';
    const EDUCATION_PRODUCT_DIRECTION2 = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_PRODUCT_DIRECTION2';
    const EDUCATION_PRICE = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_PRICE';
    const EDUCATION_INTENDED_CROWD1 = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_INTENDED_CROWD1';
    const EDUCATION_INTENDED_CROWD2 = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_INTENDED_CROWD2';
    const EDUCATION_TEACHING_AID_TYPE1 = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_TEACHING_AID_TYPE1';
    const EDUCATION_TEACHING_AID_TYPE2 = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_TEACHING_AID_TYPE2';
    const EDUCATION_CATEGORY = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_CATEGORY';
    const EDUCATION_PRODUCT_DIRECTION = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_PRODUCT_DIRECTION';
    const EDUCATION_INTENDED_CROWD = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_INTENDED_CROWD';
    const EDUCATION_TEACHING_AID_TYPE = 'PROMOTED_ASSET_ATTR_KEY_EDUCATION_TEACHING_AID_TYPE';
    const TRAFFIC_CAR_BRANDE_NAME = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_BRANDE_NAME';
    const TRAFFIC_CAR_SERIES_NAME = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_SERIES_NAME';
    const TRAFFIC_CAR_MODEL_NAME = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_MODEL_NAME';
    const TRAFFIC_CAR_ENERGY_TYPE = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_ENERGY_TYPE';
    const TRAFFIC_CAR_MODEL_LEVEL = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_MODEL_LEVEL';
    const TRAFFIC_CAR_VENDOR_ATTRIBUTES = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_VENDOR_ATTRIBUTES';
    const TRAFFIC_CAR_DRIVE_FORM = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_DRIVE_FORM';
    const TRAFFIC_CAR_COUNTRY = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_COUNTRY';
    const TRAFFIC_CAR_BODY_STRUCTURE = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_BODY_STRUCTURE';
    const TRAFFIC_CAR_CLTC_PURE_ELECTRIC_RANGE_KM = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_CLTC_PURE_ELECTRIC_RANGE_KM';
    const TRAFFIC_CAR_FAST_CHARGING_TIME = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_FAST_CHARGING_TIME';
    const TRAFFIC_CAR_DISPLACEMENT = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_DISPLACEMENT';
    const TRAFFIC_CAR_NUMBER_OF_SEATS = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_NUMBER_OF_SEATS';
    const TRAFFIC_CAR_INTAKE_FORM = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_INTAKE_FORM';
    const TRAFFIC_CAR_VENDOR = 'PROMOTED_ASSET_ATTR_KEY_TRAFFIC_CAR_VENDOR';
    const MINIGAME_ID = 'PROMOTED_ASSET_ATTR_KEY_MINIGAME_ID';
    const CONSUMER_PRODUCT_COMMODITY_TRADING_URL = 'PROMOTED_ASSET_ATTR_KEY_CONSUMER_PRODUCT_COMMODITY_TRADING_URL';
    const CONSUMER_PRODUCT_COMMODITY_TRADING_TYPE = 'PROMOTED_ASSET_ATTR_KEY_CONSUMER_PRODUCT_COMMODITY_TRADING_TYPE';
    const WECHAT_CHANNELS_ID = 'PROMOTED_ASSET_ATTR_KEY_WECHAT_CHANNELS_ID';
    const MINI_PROGRAM_WECHAT_ID = 'PROMOTED_ASSET_ATTR_KEY_MINI_PROGRAM_WECHAT_ID';
    const APP_QUICK_APP_ID = 'PROMOTED_ASSET_ATTR_KEY_APP_QUICK_APP_ID';
    const CONSUME_MEDICAL_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_CONSUME_MEDICAL_CATE_NAME';
    const CONSUME_MEDICAL_ORGANIZATION_NAME = 'PROMOTED_ASSET_ATTR_KEY_CONSUME_MEDICAL_ORGANIZATION_NAME';
    const COMPREHENSIVE_HOUSEKEEPING_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_COMPREHENSIVE_HOUSEKEEPING_CATE_NAME';
    const COMPREHENSIVE_HOUSEKEEPING_BRAND_NAME = 'PROMOTED_ASSET_ATTR_KEY_COMPREHENSIVE_HOUSEKEEPING_BRAND_NAME';
    const COMPREHENSIVE_HOUSEKEEPING_PRICE_RANGE1 = 'PROMOTED_ASSET_ATTR_KEY_COMPREHENSIVE_HOUSEKEEPING_PRICE_RANGE1';
    const COMPREHENSIVE_HOUSEKEEPING_PRICE_RANGE2 = 'PROMOTED_ASSET_ATTR_KEY_COMPREHENSIVE_HOUSEKEEPING_PRICE_RANGE2';
    const COMPREHENSIVE_HOUSEKEEPING_PRICE_RANGE3 = 'PROMOTED_ASSET_ATTR_KEY_COMPREHENSIVE_HOUSEKEEPING_PRICE_RANGE3';
    const COMPREHENSIVE_HOUSEKEEPING_THEME = 'PROMOTED_ASSET_ATTR_KEY_COMPREHENSIVE_HOUSEKEEPING_THEME';
    const FICTION_BOOK_MALL = 'PROMOTED_ASSET_ATTR_KEY_FICTION_BOOK_MALL';
    const FICTION_CUSTOMER_ORIGINAL_PRODUCT_ID = 'PROMOTED_ASSET_ATTR_KEY_FICTION_CUSTOMER_ORIGINAL_PRODUCT_ID';
    const FICTION_PRODUCT_MAIN_PIC = 'PROMOTED_ASSET_ATTR_KEY_FICTION_PRODUCT_MAIN_PIC';
    const FICTION_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_FICTION_CATE_NAME';
    const SHORT_DRAMA_DRAMA_MALL = 'PROMOTED_ASSET_ATTR_KEY_SHORT_DRAMA_DRAMA_MALL';
    const SHORT_DRAMA_CUSTOMER_ORIGINAL_PRODUCT_ID = 'PROMOTED_ASSET_ATTR_KEY_SHORT_DRAMA_CUSTOMER_ORIGINAL_PRODUCT_ID';
    const SHORT_DRAMA_PRODUCT_MAIN_PIC = 'PROMOTED_ASSET_ATTR_KEY_SHORT_DRAMA_PRODUCT_MAIN_PIC';
    const AUDIOVISUAL_ENTERTAINMENT_FILINGS_NUMBER = 'PROMOTED_ASSET_ATTR_KEY_AUDIOVISUAL_ENTERTAINMENT_FILINGS_NUMBER';
    const AUDIOVISUAL_ENTERTAINMENT_FILINGS_CONTENT_TYPE = 'PROMOTED_ASSET_ATTR_KEY_AUDIOVISUAL_ENTERTAINMENT_FILINGS_CONTENT_TYPE';
    const AUDIOVISUAL_ENTERTAINMENT_FILINGS_PIC = 'PROMOTED_ASSET_ATTR_KEY_AUDIOVISUAL_ENTERTAINMENT_FILINGS_PIC';
    const AUDIOVISUAL_ENTERTAINMENT_ASSET_PIC = 'PROMOTED_ASSET_ATTR_KEY_AUDIOVISUAL_ENTERTAINMENT_ASSET_PIC';
    const AUDIOVISUAL_ENTERTAINMENT_EXTRA_ASSET_PIC = 'PROMOTED_ASSET_ATTR_KEY_AUDIOVISUAL_ENTERTAINMENT_EXTRA_ASSET_PIC';
    const AUDIOVISUAL_ENTERTAINMENT_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_AUDIOVISUAL_ENTERTAINMENT_CATE_NAME';
    const BEAUTY_AND_PERSONAL_CARE_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_BEAUTY_AND_PERSONAL_CARE_CATE_NAME';
    const BEAUTY_AND_PERSONAL_CARE_INTENDED_CROWD = 'PROMOTED_ASSET_ATTR_KEY_BEAUTY_AND_PERSONAL_CARE_INTENDED_CROWD';
    const BEAUTY_AND_PERSONAL_CARE_PRICE_RANGE = 'PROMOTED_ASSET_ATTR_KEY_BEAUTY_AND_PERSONAL_CARE_PRICE_RANGE';
    const BEAUTY_AND_PERSONAL_CARE_BRAND_NAME1 = 'PROMOTED_ASSET_ATTR_KEY_BEAUTY_AND_PERSONAL_CARE_BRAND_NAME1';
    const BEAUTY_AND_PERSONAL_CARE_BRAND_NAME2 = 'PROMOTED_ASSET_ATTR_KEY_BEAUTY_AND_PERSONAL_CARE_BRAND_NAME2';
    const BEAUTY_AND_PERSONAL_CARE_BRAND_NAME3 = 'PROMOTED_ASSET_ATTR_KEY_BEAUTY_AND_PERSONAL_CARE_BRAND_NAME3';
    const BEAUTY_AND_PERSONAL_CARE_OPERATION_METHOD1 = 'PROMOTED_ASSET_ATTR_KEY_BEAUTY_AND_PERSONAL_CARE_OPERATION_METHOD1';
    const BEAUTY_AND_PERSONAL_CARE_OPERATION_METHOD2 = 'PROMOTED_ASSET_ATTR_KEY_BEAUTY_AND_PERSONAL_CARE_OPERATION_METHOD2';
    const WEDDING_AND_PORTRAIT_PHOTOGRAPHY_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_WEDDING_AND_PORTRAIT_PHOTOGRAPHY_CATE_NAME';
    const WEDDING_AND_PORTRAIT_PHOTOGRAPHY_BRAND_NAME1 = 'PROMOTED_ASSET_ATTR_KEY_WEDDING_AND_PORTRAIT_PHOTOGRAPHY_BRAND_NAME1';
    const WEDDING_AND_PORTRAIT_PHOTOGRAPHY_BRAND_NAME2 = 'PROMOTED_ASSET_ATTR_KEY_WEDDING_AND_PORTRAIT_PHOTOGRAPHY_BRAND_NAME2';
    const WEDDING_AND_PORTRAIT_PHOTOGRAPHY_BRAND_NAME3 = 'PROMOTED_ASSET_ATTR_KEY_WEDDING_AND_PORTRAIT_PHOTOGRAPHY_BRAND_NAME3';
    const WEDDING_AND_PORTRAIT_PHOTOGRAPHY_PRICE_RANGE1 = 'PROMOTED_ASSET_ATTR_KEY_WEDDING_AND_PORTRAIT_PHOTOGRAPHY_PRICE_RANGE1';
    const WEDDING_AND_PORTRAIT_PHOTOGRAPHY_PRICE_RANGE2 = 'PROMOTED_ASSET_ATTR_KEY_WEDDING_AND_PORTRAIT_PHOTOGRAPHY_PRICE_RANGE2';
    const WEDDING_AND_PORTRAIT_PHOTOGRAPHY_PRICE_RANGE3 = 'PROMOTED_ASSET_ATTR_KEY_WEDDING_AND_PORTRAIT_PHOTOGRAPHY_PRICE_RANGE3';
    const FRANCHISE_BRAND_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_FRANCHISE_BRAND_CATE_NAME';
    const FRANCHISE_BRAND_NAME = 'PROMOTED_ASSET_ATTR_KEY_FRANCHISE_BRAND_NAME';
    const ENTERPRISE_SERVICES_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_ENTERPRISE_SERVICES_CATE_NAME';
    const ENTERPRISE_SERVICES_IMMIGRANT_AREA = 'PROMOTED_ASSET_ATTR_KEY_ENTERPRISE_SERVICES_IMMIGRANT_AREA';
    const ENTERPRISE_SERVICES_CORPORATE_BRAND = 'PROMOTED_ASSET_ATTR_KEY_ENTERPRISE_SERVICES_CORPORATE_BRAND';
    const ENTERPRISE_SERVICES_TYPE = 'PROMOTED_ASSET_ATTR_KEY_ENTERPRISE_SERVICES_TYPE';
    const EXHIBITION_BOOTH_DESIGN_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_BOOTH_DESIGN_CATE_NAME';
    const EXHIBITION_BOOTH_DESIGN_TICKET_TYPE = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_BOOTH_DESIGN_TICKET_TYPE';
    const EXHIBITION_BOOTH_DESIGN_START_TIME = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_BOOTH_DESIGN_START_TIME';
    const EXHIBITION_BOOTH_DESIGN_EXHIBITION_CITY_AND_PROVINCE = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_BOOTH_DESIGN_EXHIBITION_CITY_AND_PROVINCE';
    const EXHIBITION_BOOTH_DESIGN_END_TIME = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_BOOTH_DESIGN_END_TIME';
    const INSURANCE_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_INSURANCE_CATE_NAME';
    const INSURANCE_UNDERWRITTEN_BRAND = 'PROMOTED_ASSET_ATTR_KEY_INSURANCE_UNDERWRITTEN_BRAND';
    const INSURANCE_PRODUCT_NAME_FOR_FILING = 'PROMOTED_ASSET_ATTR_KEY_INSURANCE_PRODUCT_NAME_FOR_FILING';
    const INSURANCE_LINK_CONTAIN_AN_UPGRADE_ENABLED = 'PROMOTED_ASSET_ATTR_KEY_INSURANCE_LINK_CONTAIN_AN_UPGRADE_ENABLED';
    const BANK_NAME = 'PROMOTED_ASSET_ATTR_KEY_BANK_NAME';
    const BANK_PRODUCTS1 = 'PROMOTED_ASSET_ATTR_KEY_BANK_PRODUCTS1';
    const BANK_HIGHEST_APR = 'PROMOTED_ASSET_ATTR_KEY_BANK_HIGHEST_APR';
    const BANK_LOWEST_APR_RANGE = 'PROMOTED_ASSET_ATTR_KEY_BANK_LOWEST_APR_RANGE';
    const BANK_MAXIMUM_LIMIT = 'PROMOTED_ASSET_ATTR_KEY_BANK_MAXIMUM_LIMIT';
    const BANK_INDUSTRY_OF_THE_LOAN_RECIPIENT = 'PROMOTED_ASSET_ATTR_KEY_BANK_INDUSTRY_OF_THE_LOAN_RECIPIENT';
    const BANK_ISSUER_NAME = 'PROMOTED_ASSET_ATTR_KEY_BANK_ISSUER_NAME';
    const BANK_SALES_MODEL = 'PROMOTED_ASSET_ATTR_KEY_BANK_SALES_MODEL';
    const BANK_ANNUAL_FEE_TIERS = 'PROMOTED_ASSET_ATTR_KEY_BANK_ANNUAL_FEE_TIERS';
    const BANK_CURRENCY = 'PROMOTED_ASSET_ATTR_KEY_BANK_CURRENCY';
    const BANK_CARD_LEVEL = 'PROMOTED_ASSET_ATTR_KEY_BANK_CARD_LEVEL';
    const BANK_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_BANK_CATE_NAME';
    const BANK_PRODUCTS2 = 'PROMOTED_ASSET_ATTR_KEY_BANK_PRODUCTS2';
    const BANK_PRODUCTS3 = 'PROMOTED_ASSET_ATTR_KEY_BANK_PRODUCTS3';
    const CREDIT_PRODUCTS1 = 'PROMOTED_ASSET_ATTR_KEY_CREDIT_PRODUCTS1';
    const CREDIT_HIGHEST_APR = 'PROMOTED_ASSET_ATTR_KEY_CREDIT_HIGHEST_APR';
    const CREDIT_LOWEST_APR_RANGE = 'PROMOTED_ASSET_ATTR_KEY_CREDIT_LOWEST_APR_RANGE';
    const CREDIT_MAXIMUM_LIMIT = 'PROMOTED_ASSET_ATTR_KEY_CREDIT_MAXIMUM_LIMIT';
    const CREDIT_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_CREDIT_CATE_NAME';
    const CREDIT_PRODUCTS2 = 'PROMOTED_ASSET_ATTR_KEY_CREDIT_PRODUCTS2';
    const INVESTMENT_CONSULTING_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_INVESTMENT_CONSULTING_CATE_NAME';
    const INVESTMENT_CONSULTING_BRAND_NAME = 'PROMOTED_ASSET_ATTR_KEY_INVESTMENT_CONSULTING_BRAND_NAME';
    const INVESTMENT_CONSULTING_BACKEND_MARKETING_MODEL = 'PROMOTED_ASSET_ATTR_KEY_INVESTMENT_CONSULTING_BACKEND_MARKETING_MODEL';
    const REAL_ESTATE_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_REAL_ESTATE_CATE_NAME';
    const REAL_ESTATE_BRAND_NAME = 'PROMOTED_ASSET_ATTR_KEY_REAL_ESTATE_BRAND_NAME';
    const REAL_ESTATE_REAL_ESTATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_REAL_ESTATE_REAL_ESTATE_NAME';
    const REAL_ESTATE_REAL_ESTATE_LOCATION = 'PROMOTED_ASSET_ATTR_KEY_REAL_ESTATE_REAL_ESTATE_LOCATION';
    const TELECOMMUNICATIONS_OPERATOR_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_TELECOMMUNICATIONS_OPERATOR_CATE_NAME';
    const TELECOMMUNICATIONS_OPERATOR_ISSUING_PROVINCE = 'PROMOTED_ASSET_ATTR_KEY_TELECOMMUNICATIONS_OPERATOR_ISSUING_PROVINCE';
    const TELECOMMUNICATIONS_OPERATOR_MONTHLY_FEE = 'PROMOTED_ASSET_ATTR_KEY_TELECOMMUNICATIONS_OPERATOR_MONTHLY_FEE';
    const TELECOMMUNICATIONS_OPERATOR_TARGETED_TRAFFIC = 'PROMOTED_ASSET_ATTR_KEY_TELECOMMUNICATIONS_OPERATOR_TARGETED_TRAFFIC';
    const TELECOMMUNICATIONS_OPERATOR_UNIVERSAL_TRAFFIC = 'PROMOTED_ASSET_ATTR_KEY_TELECOMMUNICATIONS_OPERATOR_UNIVERSAL_TRAFFIC';
    const TELECOMMUNICATIONS_OPERATOR_INCLUDES_NUMBER_OF_MEMBERS = 'PROMOTED_ASSET_ATTR_KEY_TELECOMMUNICATIONS_OPERATOR_INCLUDES_NUMBER_OF_MEMBERS';
    const TELECOMMUNICATIONS_OPERATOR_TALK_TIME = 'PROMOTED_ASSET_ATTR_KEY_TELECOMMUNICATIONS_OPERATOR_TALK_TIME';
    const TELECOMMUNICATIONS_OPERATOR_OPTIONAL_NUMBER = 'PROMOTED_ASSET_ATTR_KEY_TELECOMMUNICATIONS_OPERATOR_OPTIONAL_NUMBER';
    const TOURIST_ATTRACTIONS_TICKETS_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_TOURIST_ATTRACTIONS_TICKETS_CATE_NAME';
    const TOURIST_ATTRACTIONS_TICKETS_SCENIC_SPOT_NAME = 'PROMOTED_ASSET_ATTR_KEY_TOURIST_ATTRACTIONS_TICKETS_SCENIC_SPOT_NAME';
    const TOURIST_ATTRACTIONS_TICKETS_CITY = 'PROMOTED_ASSET_ATTR_KEY_TOURIST_ATTRACTIONS_TICKETS_CITY';
    const TOURIST_ATTRACTIONS_TICKETS_TICKET_TYPE = 'PROMOTED_ASSET_ATTR_KEY_TOURIST_ATTRACTIONS_TICKETS_TICKET_TYPE';
    const RENOVATION_SERVICES_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_RENOVATION_SERVICES_CATE_NAME';
    const RENOVATION_SERVICES_COMPANY_NAME = 'PROMOTED_ASSET_ATTR_KEY_RENOVATION_SERVICES_COMPANY_NAME';
    const RENOVATION_SERVICES_CONSTRUCTION_METHOD = 'PROMOTED_ASSET_ATTR_KEY_RENOVATION_SERVICES_CONSTRUCTION_METHOD';
    const RENOVATION_SERVICES_HOUSE_TYPE = 'PROMOTED_ASSET_ATTR_KEY_RENOVATION_SERVICES_HOUSE_TYPE';
    const RENOVATION_SERVICES_AREA_REQUIREMENTS = 'PROMOTED_ASSET_ATTR_KEY_RENOVATION_SERVICES_AREA_REQUIREMENTS';
    const RENOVATION_SERVICES_SPACE_TYPE = 'PROMOTED_ASSET_ATTR_KEY_RENOVATION_SERVICES_SPACE_TYPE';
    const FURNITURE_AND_BUILDING_MATERIALS_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_FURNITURE_AND_BUILDING_MATERIALS_CATE_NAME';
    const FURNITURE_AND_BUILDING_MATERIALS_BRAND_NAME = 'PROMOTED_ASSET_ATTR_KEY_FURNITURE_AND_BUILDING_MATERIALS_BRAND_NAME';
    const FURNITURE_AND_BUILDING_MATERIALS_CUSTOMIZATION_TYPE = 'PROMOTED_ASSET_ATTR_KEY_FURNITURE_AND_BUILDING_MATERIALS_CUSTOMIZATION_TYPE';
    const FURNITURE_AND_BUILDING_MATERIALS_BUSINESS_CATEGORIES = 'PROMOTED_ASSET_ATTR_KEY_FURNITURE_AND_BUILDING_MATERIALS_BUSINESS_CATEGORIES';
    const EXHIBITION_SALES_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_SALES_CATE_NAME';
    const EXHIBITION_SALES_ORGANIZER = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_SALES_ORGANIZER';
    const EXHIBITION_SALES_EVENT_AREA = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_SALES_EVENT_AREA';
    const EXHIBITION_SALES_EVENT_AREA1 = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_SALES_EVENT_AREA1';
    const EXHIBITION_SALES_EVENT_START_TIME = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_SALES_EVENT_START_TIME';
    const EXHIBITION_SALES_EVENT_END_TIME = 'PROMOTED_ASSET_ATTR_KEY_EXHIBITION_SALES_EVENT_END_TIME';
    const MEDICINE_INDUSTRY_COMMERCIAL_CATE_NAME = 'PROMOTED_ASSET_ATTR_KEY_MEDICINE_INDUSTRY_COMMERCIAL_CATE_NAME';
    const MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_NAME = 'PROMOTED_ASSET_ATTR_KEY_MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_NAME';
    const MEDICINE_INDUSTRY_COMMERCIAL_BRAND_NAME = 'PROMOTED_ASSET_ATTR_KEY_MEDICINE_INDUSTRY_COMMERCIAL_BRAND_NAME';
    const MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_TITLE = 'PROMOTED_ASSET_ATTR_KEY_MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_TITLE';
    const MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_PIC = 'PROMOTED_ASSET_ATTR_KEY_MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_PIC';
    const MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_LINK = 'PROMOTED_ASSET_ATTR_KEY_MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_LINK';
    const MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_CATEALOG_ID = 'PROMOTED_ASSET_ATTR_KEY_MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_CATEALOG_ID';
    const MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_ID = 'PROMOTED_ASSET_ATTR_KEY_MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_ID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::SPU_ID,
            self::APP_ANDROID_ID,
            self::APP_IOS_ID,
            self::WECHAT_OFFICIAL_ACCOUNT_ID,
            self::EDUCATION_PRODUCT_TYPE,
            self::EDUCATION_PRODUCT_FORM,
            self::EDUCATION_PRODUCT_CAPACITY,
            self::EDUCATION_PRODUCT_DIRECTION1,
            self::EDUCATION_PRODUCT_DIRECTION2,
            self::EDUCATION_PRICE,
            self::EDUCATION_INTENDED_CROWD1,
            self::EDUCATION_INTENDED_CROWD2,
            self::EDUCATION_TEACHING_AID_TYPE1,
            self::EDUCATION_TEACHING_AID_TYPE2,
            self::EDUCATION_CATEGORY,
            self::EDUCATION_PRODUCT_DIRECTION,
            self::EDUCATION_INTENDED_CROWD,
            self::EDUCATION_TEACHING_AID_TYPE,
            self::TRAFFIC_CAR_BRANDE_NAME,
            self::TRAFFIC_CAR_SERIES_NAME,
            self::TRAFFIC_CAR_MODEL_NAME,
            self::TRAFFIC_CAR_ENERGY_TYPE,
            self::TRAFFIC_CAR_MODEL_LEVEL,
            self::TRAFFIC_CAR_VENDOR_ATTRIBUTES,
            self::TRAFFIC_CAR_DRIVE_FORM,
            self::TRAFFIC_CAR_COUNTRY,
            self::TRAFFIC_CAR_BODY_STRUCTURE,
            self::TRAFFIC_CAR_CLTC_PURE_ELECTRIC_RANGE_KM,
            self::TRAFFIC_CAR_FAST_CHARGING_TIME,
            self::TRAFFIC_CAR_DISPLACEMENT,
            self::TRAFFIC_CAR_NUMBER_OF_SEATS,
            self::TRAFFIC_CAR_INTAKE_FORM,
            self::TRAFFIC_CAR_VENDOR,
            self::MINIGAME_ID,
            self::CONSUMER_PRODUCT_COMMODITY_TRADING_URL,
            self::CONSUMER_PRODUCT_COMMODITY_TRADING_TYPE,
            self::WECHAT_CHANNELS_ID,
            self::MINI_PROGRAM_WECHAT_ID,
            self::APP_QUICK_APP_ID,
            self::CONSUME_MEDICAL_CATE_NAME,
            self::CONSUME_MEDICAL_ORGANIZATION_NAME,
            self::COMPREHENSIVE_HOUSEKEEPING_CATE_NAME,
            self::COMPREHENSIVE_HOUSEKEEPING_BRAND_NAME,
            self::COMPREHENSIVE_HOUSEKEEPING_PRICE_RANGE1,
            self::COMPREHENSIVE_HOUSEKEEPING_PRICE_RANGE2,
            self::COMPREHENSIVE_HOUSEKEEPING_PRICE_RANGE3,
            self::COMPREHENSIVE_HOUSEKEEPING_THEME,
            self::FICTION_BOOK_MALL,
            self::FICTION_CUSTOMER_ORIGINAL_PRODUCT_ID,
            self::FICTION_PRODUCT_MAIN_PIC,
            self::FICTION_CATE_NAME,
            self::SHORT_DRAMA_DRAMA_MALL,
            self::SHORT_DRAMA_CUSTOMER_ORIGINAL_PRODUCT_ID,
            self::SHORT_DRAMA_PRODUCT_MAIN_PIC,
            self::AUDIOVISUAL_ENTERTAINMENT_FILINGS_NUMBER,
            self::AUDIOVISUAL_ENTERTAINMENT_FILINGS_CONTENT_TYPE,
            self::AUDIOVISUAL_ENTERTAINMENT_FILINGS_PIC,
            self::AUDIOVISUAL_ENTERTAINMENT_ASSET_PIC,
            self::AUDIOVISUAL_ENTERTAINMENT_EXTRA_ASSET_PIC,
            self::AUDIOVISUAL_ENTERTAINMENT_CATE_NAME,
            self::BEAUTY_AND_PERSONAL_CARE_CATE_NAME,
            self::BEAUTY_AND_PERSONAL_CARE_INTENDED_CROWD,
            self::BEAUTY_AND_PERSONAL_CARE_PRICE_RANGE,
            self::BEAUTY_AND_PERSONAL_CARE_BRAND_NAME1,
            self::BEAUTY_AND_PERSONAL_CARE_BRAND_NAME2,
            self::BEAUTY_AND_PERSONAL_CARE_BRAND_NAME3,
            self::BEAUTY_AND_PERSONAL_CARE_OPERATION_METHOD1,
            self::BEAUTY_AND_PERSONAL_CARE_OPERATION_METHOD2,
            self::WEDDING_AND_PORTRAIT_PHOTOGRAPHY_CATE_NAME,
            self::WEDDING_AND_PORTRAIT_PHOTOGRAPHY_BRAND_NAME1,
            self::WEDDING_AND_PORTRAIT_PHOTOGRAPHY_BRAND_NAME2,
            self::WEDDING_AND_PORTRAIT_PHOTOGRAPHY_BRAND_NAME3,
            self::WEDDING_AND_PORTRAIT_PHOTOGRAPHY_PRICE_RANGE1,
            self::WEDDING_AND_PORTRAIT_PHOTOGRAPHY_PRICE_RANGE2,
            self::WEDDING_AND_PORTRAIT_PHOTOGRAPHY_PRICE_RANGE3,
            self::FRANCHISE_BRAND_CATE_NAME,
            self::FRANCHISE_BRAND_NAME,
            self::ENTERPRISE_SERVICES_CATE_NAME,
            self::ENTERPRISE_SERVICES_IMMIGRANT_AREA,
            self::ENTERPRISE_SERVICES_CORPORATE_BRAND,
            self::ENTERPRISE_SERVICES_TYPE,
            self::EXHIBITION_BOOTH_DESIGN_CATE_NAME,
            self::EXHIBITION_BOOTH_DESIGN_TICKET_TYPE,
            self::EXHIBITION_BOOTH_DESIGN_START_TIME,
            self::EXHIBITION_BOOTH_DESIGN_EXHIBITION_CITY_AND_PROVINCE,
            self::EXHIBITION_BOOTH_DESIGN_END_TIME,
            self::INSURANCE_CATE_NAME,
            self::INSURANCE_UNDERWRITTEN_BRAND,
            self::INSURANCE_PRODUCT_NAME_FOR_FILING,
            self::INSURANCE_LINK_CONTAIN_AN_UPGRADE_ENABLED,
            self::BANK_NAME,
            self::BANK_PRODUCTS1,
            self::BANK_HIGHEST_APR,
            self::BANK_LOWEST_APR_RANGE,
            self::BANK_MAXIMUM_LIMIT,
            self::BANK_INDUSTRY_OF_THE_LOAN_RECIPIENT,
            self::BANK_ISSUER_NAME,
            self::BANK_SALES_MODEL,
            self::BANK_ANNUAL_FEE_TIERS,
            self::BANK_CURRENCY,
            self::BANK_CARD_LEVEL,
            self::BANK_CATE_NAME,
            self::BANK_PRODUCTS2,
            self::BANK_PRODUCTS3,
            self::CREDIT_PRODUCTS1,
            self::CREDIT_HIGHEST_APR,
            self::CREDIT_LOWEST_APR_RANGE,
            self::CREDIT_MAXIMUM_LIMIT,
            self::CREDIT_CATE_NAME,
            self::CREDIT_PRODUCTS2,
            self::INVESTMENT_CONSULTING_CATE_NAME,
            self::INVESTMENT_CONSULTING_BRAND_NAME,
            self::INVESTMENT_CONSULTING_BACKEND_MARKETING_MODEL,
            self::REAL_ESTATE_CATE_NAME,
            self::REAL_ESTATE_BRAND_NAME,
            self::REAL_ESTATE_REAL_ESTATE_NAME,
            self::REAL_ESTATE_REAL_ESTATE_LOCATION,
            self::TELECOMMUNICATIONS_OPERATOR_CATE_NAME,
            self::TELECOMMUNICATIONS_OPERATOR_ISSUING_PROVINCE,
            self::TELECOMMUNICATIONS_OPERATOR_MONTHLY_FEE,
            self::TELECOMMUNICATIONS_OPERATOR_TARGETED_TRAFFIC,
            self::TELECOMMUNICATIONS_OPERATOR_UNIVERSAL_TRAFFIC,
            self::TELECOMMUNICATIONS_OPERATOR_INCLUDES_NUMBER_OF_MEMBERS,
            self::TELECOMMUNICATIONS_OPERATOR_TALK_TIME,
            self::TELECOMMUNICATIONS_OPERATOR_OPTIONAL_NUMBER,
            self::TOURIST_ATTRACTIONS_TICKETS_CATE_NAME,
            self::TOURIST_ATTRACTIONS_TICKETS_SCENIC_SPOT_NAME,
            self::TOURIST_ATTRACTIONS_TICKETS_CITY,
            self::TOURIST_ATTRACTIONS_TICKETS_TICKET_TYPE,
            self::RENOVATION_SERVICES_CATE_NAME,
            self::RENOVATION_SERVICES_COMPANY_NAME,
            self::RENOVATION_SERVICES_CONSTRUCTION_METHOD,
            self::RENOVATION_SERVICES_HOUSE_TYPE,
            self::RENOVATION_SERVICES_AREA_REQUIREMENTS,
            self::RENOVATION_SERVICES_SPACE_TYPE,
            self::FURNITURE_AND_BUILDING_MATERIALS_CATE_NAME,
            self::FURNITURE_AND_BUILDING_MATERIALS_BRAND_NAME,
            self::FURNITURE_AND_BUILDING_MATERIALS_CUSTOMIZATION_TYPE,
            self::FURNITURE_AND_BUILDING_MATERIALS_BUSINESS_CATEGORIES,
            self::EXHIBITION_SALES_CATE_NAME,
            self::EXHIBITION_SALES_ORGANIZER,
            self::EXHIBITION_SALES_EVENT_AREA,
            self::EXHIBITION_SALES_EVENT_AREA1,
            self::EXHIBITION_SALES_EVENT_START_TIME,
            self::EXHIBITION_SALES_EVENT_END_TIME,
            self::MEDICINE_INDUSTRY_COMMERCIAL_CATE_NAME,
            self::MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_NAME,
            self::MEDICINE_INDUSTRY_COMMERCIAL_BRAND_NAME,
            self::MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_TITLE,
            self::MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_PIC,
            self::MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_LINK,
            self::MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_CATEALOG_ID,
            self::MEDICINE_INDUSTRY_COMMERCIAL_PRODUCT_ID,
        ];
    }
}

