<?php
/**
 * MarketingAssetType
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
 * MarketingAssetType Class Doc Comment
 *
 * @category Class
 * @description 产品类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketingAssetType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'MARKETING_ASSET_TYPE_UNKNOWN';
    const TRAFFIC_CAR_BRAND = 'MARKETING_ASSET_TYPE_TRAFFIC_CAR_BRAND';
    const TRAFFIC_CAR_SERIES = 'MARKETING_ASSET_TYPE_TRAFFIC_CAR_SERIES';
    const TRAFFIC_CAR_MODEL = 'MARKETING_ASSET_TYPE_TRAFFIC_CAR_MODEL';
    const CONSUME_MEDICAL_SERVICE = 'MARKETING_ASSET_TYPE_CONSUME_MEDICAL_SERVICE';
    const REAL_ESTATE_BRAND = 'MARKETING_ASSET_TYPE_REAL_ESTATE_BRAND';
    const REAL_ESTATE_REAL_ESTATE = 'MARKETING_ASSET_TYPE_REAL_ESTATE_REAL_ESTATE';
    const REAL_ESTATE_LAYOUT = 'MARKETING_ASSET_TYPE_REAL_ESTATE_LAYOUT';
    const TELECOMMUNICATIONS_OPERATOR_RINGTONE = 'MARKETING_ASSET_TYPE_TELECOMMUNICATIONS_OPERATOR_RINGTONE';
    const TELECOMMUNICATIONS_OPERATOR_MEMBERSHIP_BENEFIT_PACKAGE = 'MARKETING_ASSET_TYPE_TELECOMMUNICATIONS_OPERATOR_MEMBERSHIP_BENEFIT_PACKAGE';
    const TELECOMMUNICATIONS_OPERATOR_DATA_PACK = 'MARKETING_ASSET_TYPE_TELECOMMUNICATIONS_OPERATOR_DATA_PACK';
    const TELECOMMUNICATIONS_OPERATOR_NUMBER_CARD = 'MARKETING_ASSET_TYPE_TELECOMMUNICATIONS_OPERATOR_NUMBER_CARD';
    const TELECOMMUNICATIONS_OPERATOR_BROADBAND = 'MARKETING_ASSET_TYPE_TELECOMMUNICATIONS_OPERATOR_BROADBAND';
    const TELECOMMUNICATIONS_OPERATOR_NICE_MEMBER_DEAL = 'MARKETING_ASSET_TYPE_TELECOMMUNICATIONS_OPERATOR_NICE_MEMBER_DEAL';
    const TELECOMMUNICATIONS_OPERATOR_OTHER = 'MARKETING_ASSET_TYPE_TELECOMMUNICATIONS_OPERATOR_OTHER';
    const TOURIST_ATTRACTIONS_TICKETS_TICKET_PACKAGE = 'MARKETING_ASSET_TYPE_TOURIST_ATTRACTIONS_TICKETS_TICKET_PACKAGE';
    const TOURIST_ATTRACTIONS_TICKETS_ATTRACTION = 'MARKETING_ASSET_TYPE_TOURIST_ATTRACTIONS_TICKETS_ATTRACTION';
    const RENOVATION_SERVICES_SERVICE = 'MARKETING_ASSET_TYPE_RENOVATION_SERVICES_SERVICE';
    const RENOVATION_SERVICES_BRAND = 'MARKETING_ASSET_TYPE_RENOVATION_SERVICES_BRAND';
    const FURNITURE_AND_BUILDING_MATERIALS_PRODUCT = 'MARKETING_ASSET_TYPE_FURNITURE_AND_BUILDING_MATERIALS_PRODUCT';
    const FURNITURE_AND_BUILDING_MATERIALS_BRAND = 'MARKETING_ASSET_TYPE_FURNITURE_AND_BUILDING_MATERIALS_BRAND';
    const EXHIBITION_SALES_EVENT = 'MARKETING_ASSET_TYPE_EXHIBITION_SALES_EVENT';
    const EXHIBITION_SALES_BRAND = 'MARKETING_ASSET_TYPE_EXHIBITION_SALES_BRAND';
    const FINANCE_LOAN = 'MARKETING_ASSET_TYPE_FINANCE_LOAN';
    const FINANCE_INSURANCE_A = 'MARKETING_ASSET_TYPE_FINANCE_INSURANCE_A';
    const FINANCE_INSURANCE_C = 'MARKETING_ASSET_TYPE_FINANCE_INSURANCE_C';
    const FINANCE_BANK_CARD_A = 'MARKETING_ASSET_TYPE_FINANCE_BANK_CARD_A';
    const FINANCE_BANK_CARD_C = 'MARKETING_ASSET_TYPE_FINANCE_BANK_CARD_C';
    const FINANCE_WEALTH = 'MARKETING_ASSET_TYPE_FINANCE_WEALTH';
    const FINANCE_OTHER = 'MARKETING_ASSET_TYPE_FINANCE_OTHER';
    const TOURIST_TRAVEL_ROUTE_BRAND = 'MARKETING_ASSET_TYPE_TOURIST_TRAVEL_ROUTE_BRAND';
    const TOURIST_TRAVEL_ROUTE_FREE = 'MARKETING_ASSET_TYPE_TOURIST_TRAVEL_ROUTE_FREE';
    const TOURIST_TRAVEL_TRAVEL_ROUTE = 'MARKETING_ASSET_TYPE_TOURIST_TRAVEL_TRAVEL_ROUTE';
    const TOURIST_CRUISE_LINE_CRUISE_BRAND = 'MARKETING_ASSET_TYPE_TOURIST_CRUISE_LINE_CRUISE_BRAND';
    const TOURIST_CRUISE_LINE_CRUISE_NAME = 'MARKETING_ASSET_TYPE_TOURIST_CRUISE_LINE_CRUISE_NAME';
    const TOURIST_HOTEL_SERVICE_BRAND = 'MARKETING_ASSET_TYPE_TOURIST_HOTEL_SERVICE_BRAND';
    const TOURIST_HOTEL_SERVICE_SERVICE = 'MARKETING_ASSET_TYPE_TOURIST_HOTEL_SERVICE_SERVICE';
    const TOURIST_AIRLINE_TICKETS_AIRLINE = 'MARKETING_ASSET_TYPE_TOURIST_AIRLINE_TICKETS_AIRLINE';
    const TOURIST_AIRLINE_TICKETS_TICKETS = 'MARKETING_ASSET_TYPE_TOURIST_AIRLINE_TICKETS_TICKETS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::TRAFFIC_CAR_BRAND,
            self::TRAFFIC_CAR_SERIES,
            self::TRAFFIC_CAR_MODEL,
            self::CONSUME_MEDICAL_SERVICE,
            self::REAL_ESTATE_BRAND,
            self::REAL_ESTATE_REAL_ESTATE,
            self::REAL_ESTATE_LAYOUT,
            self::TELECOMMUNICATIONS_OPERATOR_RINGTONE,
            self::TELECOMMUNICATIONS_OPERATOR_MEMBERSHIP_BENEFIT_PACKAGE,
            self::TELECOMMUNICATIONS_OPERATOR_DATA_PACK,
            self::TELECOMMUNICATIONS_OPERATOR_NUMBER_CARD,
            self::TELECOMMUNICATIONS_OPERATOR_BROADBAND,
            self::TELECOMMUNICATIONS_OPERATOR_NICE_MEMBER_DEAL,
            self::TELECOMMUNICATIONS_OPERATOR_OTHER,
            self::TOURIST_ATTRACTIONS_TICKETS_TICKET_PACKAGE,
            self::TOURIST_ATTRACTIONS_TICKETS_ATTRACTION,
            self::RENOVATION_SERVICES_SERVICE,
            self::RENOVATION_SERVICES_BRAND,
            self::FURNITURE_AND_BUILDING_MATERIALS_PRODUCT,
            self::FURNITURE_AND_BUILDING_MATERIALS_BRAND,
            self::EXHIBITION_SALES_EVENT,
            self::EXHIBITION_SALES_BRAND,
            self::FINANCE_LOAN,
            self::FINANCE_INSURANCE_A,
            self::FINANCE_INSURANCE_C,
            self::FINANCE_BANK_CARD_A,
            self::FINANCE_BANK_CARD_C,
            self::FINANCE_WEALTH,
            self::FINANCE_OTHER,
            self::TOURIST_TRAVEL_ROUTE_BRAND,
            self::TOURIST_TRAVEL_ROUTE_FREE,
            self::TOURIST_TRAVEL_TRAVEL_ROUTE,
            self::TOURIST_CRUISE_LINE_CRUISE_BRAND,
            self::TOURIST_CRUISE_LINE_CRUISE_NAME,
            self::TOURIST_HOTEL_SERVICE_BRAND,
            self::TOURIST_HOTEL_SERVICE_SERVICE,
            self::TOURIST_AIRLINE_TICKETS_AIRLINE,
            self::TOURIST_AIRLINE_TICKETS_TICKETS,
        ];
    }
}


