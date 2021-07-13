<?php
/**
 * ReadTargetingSetting
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

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * ReadTargetingSetting Class Doc Comment
 *
 * @category Class
 * @description 定向详细设置
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReadTargetingSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'read_targeting_setting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'age' => '\TencentAds\Model\AgeStruct[]',
        'gender' => 'string[]',
        'education' => 'string[]',
        'maritalStatus' => 'string[]',
        'workingStatus' => 'string[]',
        'geoLocation' => '\TencentAds\Model\GeoLocations',
        'userOs' => 'string[]',
        'newDevice' => 'string[]',
        'devicePrice' => 'string[]',
        'deviceBrandModel' => '\TencentAds\Model\DeviceBrandModel',
        'networkType' => 'string[]',
        'networkOperator' => 'string[]',
        'networkScene' => 'string[]',
        'dressingIndex' => 'string[]',
        'uvIndex' => 'string[]',
        'makeupIndex' => 'string[]',
        'climate' => 'string[]',
        'temperature' => '\TencentAds\Model\TemperatureStruct[]',
        'airQualityIndex' => 'string[]',
        'appInstallStatus' => 'string[]',
        'consumptionStatus' => 'string[]',
        'gameConsumptionLevel' => 'string[]',
        'residentialCommunityPrice' => '\TencentAds\Model\ResidentialCommunityPriceStruct[]',
        'financialSituation' => 'string[]',
        'consumptionType' => 'string[]',
        'wechatAdBehavior' => '\TencentAds\Model\WechatAdBehavior',
        'customAudience' => 'int[]',
        'excludedCustomAudience' => 'int[]',
        'behaviorOrInterest' => '\TencentAds\Model\BehaviorOrInterest',
        'wechatOfficialAccountCategory' => 'int[]',
        'mobileUnionCategory' => 'int[]',
        'businessInterest' => 'int[]',
        'keyword' => '\TencentAds\Model\Keyword',
        'appBehavior' => '\TencentAds\Model\AppBehavior',
        'paidUser' => 'string[]',
        'deprecatedCustomAudience' => 'int[]',
        'deprecatedExcludedCustomAudience' => 'int[]',
        'deprecatedRegion' => 'int[]',
        'excludedConvertedAudience' => '\TencentAds\Model\ExcludedConvertedAudienceStruct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'age' => null,
        'gender' => null,
        'education' => null,
        'maritalStatus' => null,
        'workingStatus' => null,
        'geoLocation' => null,
        'userOs' => null,
        'newDevice' => null,
        'devicePrice' => null,
        'deviceBrandModel' => null,
        'networkType' => null,
        'networkOperator' => null,
        'networkScene' => null,
        'dressingIndex' => null,
        'uvIndex' => null,
        'makeupIndex' => null,
        'climate' => null,
        'temperature' => null,
        'airQualityIndex' => null,
        'appInstallStatus' => null,
        'consumptionStatus' => null,
        'gameConsumptionLevel' => null,
        'residentialCommunityPrice' => null,
        'financialSituation' => null,
        'consumptionType' => null,
        'wechatAdBehavior' => null,
        'customAudience' => 'int64',
        'excludedCustomAudience' => 'int64',
        'behaviorOrInterest' => null,
        'wechatOfficialAccountCategory' => 'int64',
        'mobileUnionCategory' => 'int64',
        'businessInterest' => 'int64',
        'keyword' => null,
        'appBehavior' => null,
        'paidUser' => null,
        'deprecatedCustomAudience' => 'int64',
        'deprecatedExcludedCustomAudience' => 'int64',
        'deprecatedRegion' => 'int64',
        'excludedConvertedAudience' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'age' => 'age',
        'gender' => 'gender',
        'education' => 'education',
        'maritalStatus' => 'marital_status',
        'workingStatus' => 'working_status',
        'geoLocation' => 'geo_location',
        'userOs' => 'user_os',
        'newDevice' => 'new_device',
        'devicePrice' => 'device_price',
        'deviceBrandModel' => 'device_brand_model',
        'networkType' => 'network_type',
        'networkOperator' => 'network_operator',
        'networkScene' => 'network_scene',
        'dressingIndex' => 'dressing_index',
        'uvIndex' => 'uv_index',
        'makeupIndex' => 'makeup_index',
        'climate' => 'climate',
        'temperature' => 'temperature',
        'airQualityIndex' => 'air_quality_index',
        'appInstallStatus' => 'app_install_status',
        'consumptionStatus' => 'consumption_status',
        'gameConsumptionLevel' => 'game_consumption_level',
        'residentialCommunityPrice' => 'residential_community_price',
        'financialSituation' => 'financial_situation',
        'consumptionType' => 'consumption_type',
        'wechatAdBehavior' => 'wechat_ad_behavior',
        'customAudience' => 'custom_audience',
        'excludedCustomAudience' => 'excluded_custom_audience',
        'behaviorOrInterest' => 'behavior_or_interest',
        'wechatOfficialAccountCategory' => 'wechat_official_account_category',
        'mobileUnionCategory' => 'mobile_union_category',
        'businessInterest' => 'business_interest',
        'keyword' => 'keyword',
        'appBehavior' => 'app_behavior',
        'paidUser' => 'paid_user',
        'deprecatedCustomAudience' => 'deprecated_custom_audience',
        'deprecatedExcludedCustomAudience' => 'deprecated_excluded_custom_audience',
        'deprecatedRegion' => 'deprecated_region',
        'excludedConvertedAudience' => 'excluded_converted_audience'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'age' => 'setAge',
        'gender' => 'setGender',
        'education' => 'setEducation',
        'maritalStatus' => 'setMaritalStatus',
        'workingStatus' => 'setWorkingStatus',
        'geoLocation' => 'setGeoLocation',
        'userOs' => 'setUserOs',
        'newDevice' => 'setNewDevice',
        'devicePrice' => 'setDevicePrice',
        'deviceBrandModel' => 'setDeviceBrandModel',
        'networkType' => 'setNetworkType',
        'networkOperator' => 'setNetworkOperator',
        'networkScene' => 'setNetworkScene',
        'dressingIndex' => 'setDressingIndex',
        'uvIndex' => 'setUvIndex',
        'makeupIndex' => 'setMakeupIndex',
        'climate' => 'setClimate',
        'temperature' => 'setTemperature',
        'airQualityIndex' => 'setAirQualityIndex',
        'appInstallStatus' => 'setAppInstallStatus',
        'consumptionStatus' => 'setConsumptionStatus',
        'gameConsumptionLevel' => 'setGameConsumptionLevel',
        'residentialCommunityPrice' => 'setResidentialCommunityPrice',
        'financialSituation' => 'setFinancialSituation',
        'consumptionType' => 'setConsumptionType',
        'wechatAdBehavior' => 'setWechatAdBehavior',
        'customAudience' => 'setCustomAudience',
        'excludedCustomAudience' => 'setExcludedCustomAudience',
        'behaviorOrInterest' => 'setBehaviorOrInterest',
        'wechatOfficialAccountCategory' => 'setWechatOfficialAccountCategory',
        'mobileUnionCategory' => 'setMobileUnionCategory',
        'businessInterest' => 'setBusinessInterest',
        'keyword' => 'setKeyword',
        'appBehavior' => 'setAppBehavior',
        'paidUser' => 'setPaidUser',
        'deprecatedCustomAudience' => 'setDeprecatedCustomAudience',
        'deprecatedExcludedCustomAudience' => 'setDeprecatedExcludedCustomAudience',
        'deprecatedRegion' => 'setDeprecatedRegion',
        'excludedConvertedAudience' => 'setExcludedConvertedAudience'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'age' => 'getAge',
        'gender' => 'getGender',
        'education' => 'getEducation',
        'maritalStatus' => 'getMaritalStatus',
        'workingStatus' => 'getWorkingStatus',
        'geoLocation' => 'getGeoLocation',
        'userOs' => 'getUserOs',
        'newDevice' => 'getNewDevice',
        'devicePrice' => 'getDevicePrice',
        'deviceBrandModel' => 'getDeviceBrandModel',
        'networkType' => 'getNetworkType',
        'networkOperator' => 'getNetworkOperator',
        'networkScene' => 'getNetworkScene',
        'dressingIndex' => 'getDressingIndex',
        'uvIndex' => 'getUvIndex',
        'makeupIndex' => 'getMakeupIndex',
        'climate' => 'getClimate',
        'temperature' => 'getTemperature',
        'airQualityIndex' => 'getAirQualityIndex',
        'appInstallStatus' => 'getAppInstallStatus',
        'consumptionStatus' => 'getConsumptionStatus',
        'gameConsumptionLevel' => 'getGameConsumptionLevel',
        'residentialCommunityPrice' => 'getResidentialCommunityPrice',
        'financialSituation' => 'getFinancialSituation',
        'consumptionType' => 'getConsumptionType',
        'wechatAdBehavior' => 'getWechatAdBehavior',
        'customAudience' => 'getCustomAudience',
        'excludedCustomAudience' => 'getExcludedCustomAudience',
        'behaviorOrInterest' => 'getBehaviorOrInterest',
        'wechatOfficialAccountCategory' => 'getWechatOfficialAccountCategory',
        'mobileUnionCategory' => 'getMobileUnionCategory',
        'businessInterest' => 'getBusinessInterest',
        'keyword' => 'getKeyword',
        'appBehavior' => 'getAppBehavior',
        'paidUser' => 'getPaidUser',
        'deprecatedCustomAudience' => 'getDeprecatedCustomAudience',
        'deprecatedExcludedCustomAudience' => 'getDeprecatedExcludedCustomAudience',
        'deprecatedRegion' => 'getDeprecatedRegion',
        'excludedConvertedAudience' => 'getExcludedConvertedAudience'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['education'] = isset($data['education']) ? $data['education'] : null;
        $this->container['maritalStatus'] = isset($data['maritalStatus']) ? $data['maritalStatus'] : null;
        $this->container['workingStatus'] = isset($data['workingStatus']) ? $data['workingStatus'] : null;
        $this->container['geoLocation'] = isset($data['geoLocation']) ? $data['geoLocation'] : null;
        $this->container['userOs'] = isset($data['userOs']) ? $data['userOs'] : null;
        $this->container['newDevice'] = isset($data['newDevice']) ? $data['newDevice'] : null;
        $this->container['devicePrice'] = isset($data['devicePrice']) ? $data['devicePrice'] : null;
        $this->container['deviceBrandModel'] = isset($data['deviceBrandModel']) ? $data['deviceBrandModel'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['networkOperator'] = isset($data['networkOperator']) ? $data['networkOperator'] : null;
        $this->container['networkScene'] = isset($data['networkScene']) ? $data['networkScene'] : null;
        $this->container['dressingIndex'] = isset($data['dressingIndex']) ? $data['dressingIndex'] : null;
        $this->container['uvIndex'] = isset($data['uvIndex']) ? $data['uvIndex'] : null;
        $this->container['makeupIndex'] = isset($data['makeupIndex']) ? $data['makeupIndex'] : null;
        $this->container['climate'] = isset($data['climate']) ? $data['climate'] : null;
        $this->container['temperature'] = isset($data['temperature']) ? $data['temperature'] : null;
        $this->container['airQualityIndex'] = isset($data['airQualityIndex']) ? $data['airQualityIndex'] : null;
        $this->container['appInstallStatus'] = isset($data['appInstallStatus']) ? $data['appInstallStatus'] : null;
        $this->container['consumptionStatus'] = isset($data['consumptionStatus']) ? $data['consumptionStatus'] : null;
        $this->container['gameConsumptionLevel'] = isset($data['gameConsumptionLevel']) ? $data['gameConsumptionLevel'] : null;
        $this->container['residentialCommunityPrice'] = isset($data['residentialCommunityPrice']) ? $data['residentialCommunityPrice'] : null;
        $this->container['financialSituation'] = isset($data['financialSituation']) ? $data['financialSituation'] : null;
        $this->container['consumptionType'] = isset($data['consumptionType']) ? $data['consumptionType'] : null;
        $this->container['wechatAdBehavior'] = isset($data['wechatAdBehavior']) ? $data['wechatAdBehavior'] : null;
        $this->container['customAudience'] = isset($data['customAudience']) ? $data['customAudience'] : null;
        $this->container['excludedCustomAudience'] = isset($data['excludedCustomAudience']) ? $data['excludedCustomAudience'] : null;
        $this->container['behaviorOrInterest'] = isset($data['behaviorOrInterest']) ? $data['behaviorOrInterest'] : null;
        $this->container['wechatOfficialAccountCategory'] = isset($data['wechatOfficialAccountCategory']) ? $data['wechatOfficialAccountCategory'] : null;
        $this->container['mobileUnionCategory'] = isset($data['mobileUnionCategory']) ? $data['mobileUnionCategory'] : null;
        $this->container['businessInterest'] = isset($data['businessInterest']) ? $data['businessInterest'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['appBehavior'] = isset($data['appBehavior']) ? $data['appBehavior'] : null;
        $this->container['paidUser'] = isset($data['paidUser']) ? $data['paidUser'] : null;
        $this->container['deprecatedCustomAudience'] = isset($data['deprecatedCustomAudience']) ? $data['deprecatedCustomAudience'] : null;
        $this->container['deprecatedExcludedCustomAudience'] = isset($data['deprecatedExcludedCustomAudience']) ? $data['deprecatedExcludedCustomAudience'] : null;
        $this->container['deprecatedRegion'] = isset($data['deprecatedRegion']) ? $data['deprecatedRegion'] : null;
        $this->container['excludedConvertedAudience'] = isset($data['excludedConvertedAudience']) ? $data['excludedConvertedAudience'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets age
     *
     * @return \TencentAds\Model\AgeStruct[]
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param \TencentAds\Model\AgeStruct[] $age age
     *
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string[]
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string[] $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets education
     *
     * @return string[]
     */
    public function getEducation()
    {
        return $this->container['education'];
    }

    /**
     * Sets education
     *
     * @param string[] $education education
     *
     * @return $this
     */
    public function setEducation($education)
    {
        $this->container['education'] = $education;

        return $this;
    }

    /**
     * Gets maritalStatus
     *
     * @return string[]
     */
    public function getMaritalStatus()
    {
        return $this->container['maritalStatus'];
    }

    /**
     * Sets maritalStatus
     *
     * @param string[] $maritalStatus maritalStatus
     *
     * @return $this
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->container['maritalStatus'] = $maritalStatus;

        return $this;
    }

    /**
     * Gets workingStatus
     *
     * @return string[]
     */
    public function getWorkingStatus()
    {
        return $this->container['workingStatus'];
    }

    /**
     * Sets workingStatus
     *
     * @param string[] $workingStatus workingStatus
     *
     * @return $this
     */
    public function setWorkingStatus($workingStatus)
    {
        $this->container['workingStatus'] = $workingStatus;

        return $this;
    }

    /**
     * Gets geoLocation
     *
     * @return \TencentAds\Model\GeoLocations
     */
    public function getGeoLocation()
    {
        return $this->container['geoLocation'];
    }

    /**
     * Sets geoLocation
     *
     * @param \TencentAds\Model\GeoLocations $geoLocation geoLocation
     *
     * @return $this
     */
    public function setGeoLocation($geoLocation)
    {
        $this->container['geoLocation'] = $geoLocation;

        return $this;
    }

    /**
     * Gets userOs
     *
     * @return string[]
     */
    public function getUserOs()
    {
        return $this->container['userOs'];
    }

    /**
     * Sets userOs
     *
     * @param string[] $userOs userOs
     *
     * @return $this
     */
    public function setUserOs($userOs)
    {
        $this->container['userOs'] = $userOs;

        return $this;
    }

    /**
     * Gets newDevice
     *
     * @return string[]
     */
    public function getNewDevice()
    {
        return $this->container['newDevice'];
    }

    /**
     * Sets newDevice
     *
     * @param string[] $newDevice newDevice
     *
     * @return $this
     */
    public function setNewDevice($newDevice)
    {
        $this->container['newDevice'] = $newDevice;

        return $this;
    }

    /**
     * Gets devicePrice
     *
     * @return string[]
     */
    public function getDevicePrice()
    {
        return $this->container['devicePrice'];
    }

    /**
     * Sets devicePrice
     *
     * @param string[] $devicePrice devicePrice
     *
     * @return $this
     */
    public function setDevicePrice($devicePrice)
    {
        $this->container['devicePrice'] = $devicePrice;

        return $this;
    }

    /**
     * Gets deviceBrandModel
     *
     * @return \TencentAds\Model\DeviceBrandModel
     */
    public function getDeviceBrandModel()
    {
        return $this->container['deviceBrandModel'];
    }

    /**
     * Sets deviceBrandModel
     *
     * @param \TencentAds\Model\DeviceBrandModel $deviceBrandModel deviceBrandModel
     *
     * @return $this
     */
    public function setDeviceBrandModel($deviceBrandModel)
    {
        $this->container['deviceBrandModel'] = $deviceBrandModel;

        return $this;
    }

    /**
     * Gets networkType
     *
     * @return string[]
     */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
     * Sets networkType
     *
     * @param string[] $networkType networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;

        return $this;
    }

    /**
     * Gets networkOperator
     *
     * @return string[]
     */
    public function getNetworkOperator()
    {
        return $this->container['networkOperator'];
    }

    /**
     * Sets networkOperator
     *
     * @param string[] $networkOperator networkOperator
     *
     * @return $this
     */
    public function setNetworkOperator($networkOperator)
    {
        $this->container['networkOperator'] = $networkOperator;

        return $this;
    }

    /**
     * Gets networkScene
     *
     * @return string[]
     */
    public function getNetworkScene()
    {
        return $this->container['networkScene'];
    }

    /**
     * Sets networkScene
     *
     * @param string[] $networkScene networkScene
     *
     * @return $this
     */
    public function setNetworkScene($networkScene)
    {
        $this->container['networkScene'] = $networkScene;

        return $this;
    }

    /**
     * Gets dressingIndex
     *
     * @return string[]
     */
    public function getDressingIndex()
    {
        return $this->container['dressingIndex'];
    }

    /**
     * Sets dressingIndex
     *
     * @param string[] $dressingIndex dressingIndex
     *
     * @return $this
     */
    public function setDressingIndex($dressingIndex)
    {
        $this->container['dressingIndex'] = $dressingIndex;

        return $this;
    }

    /**
     * Gets uvIndex
     *
     * @return string[]
     */
    public function getUvIndex()
    {
        return $this->container['uvIndex'];
    }

    /**
     * Sets uvIndex
     *
     * @param string[] $uvIndex uvIndex
     *
     * @return $this
     */
    public function setUvIndex($uvIndex)
    {
        $this->container['uvIndex'] = $uvIndex;

        return $this;
    }

    /**
     * Gets makeupIndex
     *
     * @return string[]
     */
    public function getMakeupIndex()
    {
        return $this->container['makeupIndex'];
    }

    /**
     * Sets makeupIndex
     *
     * @param string[] $makeupIndex makeupIndex
     *
     * @return $this
     */
    public function setMakeupIndex($makeupIndex)
    {
        $this->container['makeupIndex'] = $makeupIndex;

        return $this;
    }

    /**
     * Gets climate
     *
     * @return string[]
     */
    public function getClimate()
    {
        return $this->container['climate'];
    }

    /**
     * Sets climate
     *
     * @param string[] $climate climate
     *
     * @return $this
     */
    public function setClimate($climate)
    {
        $this->container['climate'] = $climate;

        return $this;
    }

    /**
     * Gets temperature
     *
     * @return \TencentAds\Model\TemperatureStruct[]
     */
    public function getTemperature()
    {
        return $this->container['temperature'];
    }

    /**
     * Sets temperature
     *
     * @param \TencentAds\Model\TemperatureStruct[] $temperature temperature
     *
     * @return $this
     */
    public function setTemperature($temperature)
    {
        $this->container['temperature'] = $temperature;

        return $this;
    }

    /**
     * Gets airQualityIndex
     *
     * @return string[]
     */
    public function getAirQualityIndex()
    {
        return $this->container['airQualityIndex'];
    }

    /**
     * Sets airQualityIndex
     *
     * @param string[] $airQualityIndex airQualityIndex
     *
     * @return $this
     */
    public function setAirQualityIndex($airQualityIndex)
    {
        $this->container['airQualityIndex'] = $airQualityIndex;

        return $this;
    }

    /**
     * Gets appInstallStatus
     *
     * @return string[]
     */
    public function getAppInstallStatus()
    {
        return $this->container['appInstallStatus'];
    }

    /**
     * Sets appInstallStatus
     *
     * @param string[] $appInstallStatus appInstallStatus
     *
     * @return $this
     */
    public function setAppInstallStatus($appInstallStatus)
    {
        $this->container['appInstallStatus'] = $appInstallStatus;

        return $this;
    }

    /**
     * Gets consumptionStatus
     *
     * @return string[]
     */
    public function getConsumptionStatus()
    {
        return $this->container['consumptionStatus'];
    }

    /**
     * Sets consumptionStatus
     *
     * @param string[] $consumptionStatus consumptionStatus
     *
     * @return $this
     */
    public function setConsumptionStatus($consumptionStatus)
    {
        $this->container['consumptionStatus'] = $consumptionStatus;

        return $this;
    }

    /**
     * Gets gameConsumptionLevel
     *
     * @return string[]
     */
    public function getGameConsumptionLevel()
    {
        return $this->container['gameConsumptionLevel'];
    }

    /**
     * Sets gameConsumptionLevel
     *
     * @param string[] $gameConsumptionLevel gameConsumptionLevel
     *
     * @return $this
     */
    public function setGameConsumptionLevel($gameConsumptionLevel)
    {
        $this->container['gameConsumptionLevel'] = $gameConsumptionLevel;

        return $this;
    }

    /**
     * Gets residentialCommunityPrice
     *
     * @return \TencentAds\Model\ResidentialCommunityPriceStruct[]
     */
    public function getResidentialCommunityPrice()
    {
        return $this->container['residentialCommunityPrice'];
    }

    /**
     * Sets residentialCommunityPrice
     *
     * @param \TencentAds\Model\ResidentialCommunityPriceStruct[] $residentialCommunityPrice residentialCommunityPrice
     *
     * @return $this
     */
    public function setResidentialCommunityPrice($residentialCommunityPrice)
    {
        $this->container['residentialCommunityPrice'] = $residentialCommunityPrice;

        return $this;
    }

    /**
     * Gets financialSituation
     *
     * @return string[]
     */
    public function getFinancialSituation()
    {
        return $this->container['financialSituation'];
    }

    /**
     * Sets financialSituation
     *
     * @param string[] $financialSituation financialSituation
     *
     * @return $this
     */
    public function setFinancialSituation($financialSituation)
    {
        $this->container['financialSituation'] = $financialSituation;

        return $this;
    }

    /**
     * Gets consumptionType
     *
     * @return string[]
     */
    public function getConsumptionType()
    {
        return $this->container['consumptionType'];
    }

    /**
     * Sets consumptionType
     *
     * @param string[] $consumptionType consumptionType
     *
     * @return $this
     */
    public function setConsumptionType($consumptionType)
    {
        $this->container['consumptionType'] = $consumptionType;

        return $this;
    }

    /**
     * Gets wechatAdBehavior
     *
     * @return \TencentAds\Model\WechatAdBehavior
     */
    public function getWechatAdBehavior()
    {
        return $this->container['wechatAdBehavior'];
    }

    /**
     * Sets wechatAdBehavior
     *
     * @param \TencentAds\Model\WechatAdBehavior $wechatAdBehavior wechatAdBehavior
     *
     * @return $this
     */
    public function setWechatAdBehavior($wechatAdBehavior)
    {
        $this->container['wechatAdBehavior'] = $wechatAdBehavior;

        return $this;
    }

    /**
     * Gets customAudience
     *
     * @return int[]
     */
    public function getCustomAudience()
    {
        return $this->container['customAudience'];
    }

    /**
     * Sets customAudience
     *
     * @param int[] $customAudience customAudience
     *
     * @return $this
     */
    public function setCustomAudience($customAudience)
    {
        $this->container['customAudience'] = $customAudience;

        return $this;
    }

    /**
     * Gets excludedCustomAudience
     *
     * @return int[]
     */
    public function getExcludedCustomAudience()
    {
        return $this->container['excludedCustomAudience'];
    }

    /**
     * Sets excludedCustomAudience
     *
     * @param int[] $excludedCustomAudience excludedCustomAudience
     *
     * @return $this
     */
    public function setExcludedCustomAudience($excludedCustomAudience)
    {
        $this->container['excludedCustomAudience'] = $excludedCustomAudience;

        return $this;
    }

    /**
     * Gets behaviorOrInterest
     *
     * @return \TencentAds\Model\BehaviorOrInterest
     */
    public function getBehaviorOrInterest()
    {
        return $this->container['behaviorOrInterest'];
    }

    /**
     * Sets behaviorOrInterest
     *
     * @param \TencentAds\Model\BehaviorOrInterest $behaviorOrInterest behaviorOrInterest
     *
     * @return $this
     */
    public function setBehaviorOrInterest($behaviorOrInterest)
    {
        $this->container['behaviorOrInterest'] = $behaviorOrInterest;

        return $this;
    }

    /**
     * Gets wechatOfficialAccountCategory
     *
     * @return int[]
     */
    public function getWechatOfficialAccountCategory()
    {
        return $this->container['wechatOfficialAccountCategory'];
    }

    /**
     * Sets wechatOfficialAccountCategory
     *
     * @param int[] $wechatOfficialAccountCategory wechatOfficialAccountCategory
     *
     * @return $this
     */
    public function setWechatOfficialAccountCategory($wechatOfficialAccountCategory)
    {
        $this->container['wechatOfficialAccountCategory'] = $wechatOfficialAccountCategory;

        return $this;
    }

    /**
     * Gets mobileUnionCategory
     *
     * @return int[]
     */
    public function getMobileUnionCategory()
    {
        return $this->container['mobileUnionCategory'];
    }

    /**
     * Sets mobileUnionCategory
     *
     * @param int[] $mobileUnionCategory mobileUnionCategory
     *
     * @return $this
     */
    public function setMobileUnionCategory($mobileUnionCategory)
    {
        $this->container['mobileUnionCategory'] = $mobileUnionCategory;

        return $this;
    }

    /**
     * Gets businessInterest
     *
     * @return int[]
     */
    public function getBusinessInterest()
    {
        return $this->container['businessInterest'];
    }

    /**
     * Sets businessInterest
     *
     * @param int[] $businessInterest businessInterest
     *
     * @return $this
     */
    public function setBusinessInterest($businessInterest)
    {
        $this->container['businessInterest'] = $businessInterest;

        return $this;
    }

    /**
     * Gets keyword
     *
     * @return \TencentAds\Model\Keyword
     */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword
     *
     * @param \TencentAds\Model\Keyword $keyword keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;

        return $this;
    }

    /**
     * Gets appBehavior
     *
     * @return \TencentAds\Model\AppBehavior
     */
    public function getAppBehavior()
    {
        return $this->container['appBehavior'];
    }

    /**
     * Sets appBehavior
     *
     * @param \TencentAds\Model\AppBehavior $appBehavior appBehavior
     *
     * @return $this
     */
    public function setAppBehavior($appBehavior)
    {
        $this->container['appBehavior'] = $appBehavior;

        return $this;
    }

    /**
     * Gets paidUser
     *
     * @return string[]
     */
    public function getPaidUser()
    {
        return $this->container['paidUser'];
    }

    /**
     * Sets paidUser
     *
     * @param string[] $paidUser paidUser
     *
     * @return $this
     */
    public function setPaidUser($paidUser)
    {
        $this->container['paidUser'] = $paidUser;

        return $this;
    }

    /**
     * Gets deprecatedCustomAudience
     *
     * @return int[]
     */
    public function getDeprecatedCustomAudience()
    {
        return $this->container['deprecatedCustomAudience'];
    }

    /**
     * Sets deprecatedCustomAudience
     *
     * @param int[] $deprecatedCustomAudience deprecatedCustomAudience
     *
     * @return $this
     */
    public function setDeprecatedCustomAudience($deprecatedCustomAudience)
    {
        $this->container['deprecatedCustomAudience'] = $deprecatedCustomAudience;

        return $this;
    }

    /**
     * Gets deprecatedExcludedCustomAudience
     *
     * @return int[]
     */
    public function getDeprecatedExcludedCustomAudience()
    {
        return $this->container['deprecatedExcludedCustomAudience'];
    }

    /**
     * Sets deprecatedExcludedCustomAudience
     *
     * @param int[] $deprecatedExcludedCustomAudience deprecatedExcludedCustomAudience
     *
     * @return $this
     */
    public function setDeprecatedExcludedCustomAudience($deprecatedExcludedCustomAudience)
    {
        $this->container['deprecatedExcludedCustomAudience'] = $deprecatedExcludedCustomAudience;

        return $this;
    }

    /**
     * Gets deprecatedRegion
     *
     * @return int[]
     */
    public function getDeprecatedRegion()
    {
        return $this->container['deprecatedRegion'];
    }

    /**
     * Sets deprecatedRegion
     *
     * @param int[] $deprecatedRegion deprecatedRegion
     *
     * @return $this
     */
    public function setDeprecatedRegion($deprecatedRegion)
    {
        $this->container['deprecatedRegion'] = $deprecatedRegion;

        return $this;
    }

    /**
     * Gets excludedConvertedAudience
     *
     * @return \TencentAds\Model\ExcludedConvertedAudienceStruct
     */
    public function getExcludedConvertedAudience()
    {
        return $this->container['excludedConvertedAudience'];
    }

    /**
     * Sets excludedConvertedAudience
     *
     * @param \TencentAds\Model\ExcludedConvertedAudienceStruct $excludedConvertedAudience excludedConvertedAudience
     *
     * @return $this
     */
    public function setExcludedConvertedAudience($excludedConvertedAudience)
    {
        $this->container['excludedConvertedAudience'] = $excludedConvertedAudience;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


