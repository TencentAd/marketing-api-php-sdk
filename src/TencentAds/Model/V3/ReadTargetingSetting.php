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
        'geoLocation' => '\TencentAds\Model\V3\GeoLocations',
        'gender' => 'string[]',
        'age' => '\TencentAds\Model\V3\AgeStruct[]',
        'education' => 'string[]',
        'appInstallStatus' => 'string[]',
        'maritalStatus' => 'string[]',
        'excludedConvertedAudience' => '\TencentAds\Model\V3\ExcludedConvertedAudience',
        'customAudience' => 'int[]',
        'excludedCustomAudience' => 'int[]',
        'deviceBrandModel' => '\TencentAds\Model\V3\DeviceBrandModel',
        'userOs' => 'string[]',
        'networkType' => 'string[]',
        'devicePrice' => 'string[]',
        'wechatAdBehavior' => '\TencentAds\Model\V3\WechatAdBehavior',
        'gameConsumptionLevel' => 'string[]',
        'excludedOs' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'geoLocation' => null,
        'gender' => null,
        'age' => null,
        'education' => null,
        'appInstallStatus' => null,
        'maritalStatus' => null,
        'excludedConvertedAudience' => null,
        'customAudience' => 'int64',
        'excludedCustomAudience' => 'int64',
        'deviceBrandModel' => null,
        'userOs' => null,
        'networkType' => null,
        'devicePrice' => null,
        'wechatAdBehavior' => null,
        'gameConsumptionLevel' => null,
        'excludedOs' => null
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
        'geoLocation' => 'geo_location',
        'gender' => 'gender',
        'age' => 'age',
        'education' => 'education',
        'appInstallStatus' => 'app_install_status',
        'maritalStatus' => 'marital_status',
        'excludedConvertedAudience' => 'excluded_converted_audience',
        'customAudience' => 'custom_audience',
        'excludedCustomAudience' => 'excluded_custom_audience',
        'deviceBrandModel' => 'device_brand_model',
        'userOs' => 'user_os',
        'networkType' => 'network_type',
        'devicePrice' => 'device_price',
        'wechatAdBehavior' => 'wechat_ad_behavior',
        'gameConsumptionLevel' => 'game_consumption_level',
        'excludedOs' => 'excluded_os'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'geoLocation' => 'setGeoLocation',
        'gender' => 'setGender',
        'age' => 'setAge',
        'education' => 'setEducation',
        'appInstallStatus' => 'setAppInstallStatus',
        'maritalStatus' => 'setMaritalStatus',
        'excludedConvertedAudience' => 'setExcludedConvertedAudience',
        'customAudience' => 'setCustomAudience',
        'excludedCustomAudience' => 'setExcludedCustomAudience',
        'deviceBrandModel' => 'setDeviceBrandModel',
        'userOs' => 'setUserOs',
        'networkType' => 'setNetworkType',
        'devicePrice' => 'setDevicePrice',
        'wechatAdBehavior' => 'setWechatAdBehavior',
        'gameConsumptionLevel' => 'setGameConsumptionLevel',
        'excludedOs' => 'setExcludedOs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'geoLocation' => 'getGeoLocation',
        'gender' => 'getGender',
        'age' => 'getAge',
        'education' => 'getEducation',
        'appInstallStatus' => 'getAppInstallStatus',
        'maritalStatus' => 'getMaritalStatus',
        'excludedConvertedAudience' => 'getExcludedConvertedAudience',
        'customAudience' => 'getCustomAudience',
        'excludedCustomAudience' => 'getExcludedCustomAudience',
        'deviceBrandModel' => 'getDeviceBrandModel',
        'userOs' => 'getUserOs',
        'networkType' => 'getNetworkType',
        'devicePrice' => 'getDevicePrice',
        'wechatAdBehavior' => 'getWechatAdBehavior',
        'gameConsumptionLevel' => 'getGameConsumptionLevel',
        'excludedOs' => 'getExcludedOs'
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
        $this->container['geoLocation'] = isset($data['geoLocation']) ? $data['geoLocation'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['education'] = isset($data['education']) ? $data['education'] : null;
        $this->container['appInstallStatus'] = isset($data['appInstallStatus']) ? $data['appInstallStatus'] : null;
        $this->container['maritalStatus'] = isset($data['maritalStatus']) ? $data['maritalStatus'] : null;
        $this->container['excludedConvertedAudience'] = isset($data['excludedConvertedAudience']) ? $data['excludedConvertedAudience'] : null;
        $this->container['customAudience'] = isset($data['customAudience']) ? $data['customAudience'] : null;
        $this->container['excludedCustomAudience'] = isset($data['excludedCustomAudience']) ? $data['excludedCustomAudience'] : null;
        $this->container['deviceBrandModel'] = isset($data['deviceBrandModel']) ? $data['deviceBrandModel'] : null;
        $this->container['userOs'] = isset($data['userOs']) ? $data['userOs'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['devicePrice'] = isset($data['devicePrice']) ? $data['devicePrice'] : null;
        $this->container['wechatAdBehavior'] = isset($data['wechatAdBehavior']) ? $data['wechatAdBehavior'] : null;
        $this->container['gameConsumptionLevel'] = isset($data['gameConsumptionLevel']) ? $data['gameConsumptionLevel'] : null;
        $this->container['excludedOs'] = isset($data['excludedOs']) ? $data['excludedOs'] : null;
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
     * Gets geoLocation
     *
     * @return \TencentAds\Model\V3\GeoLocations|mixed
     */
    public function getGeoLocation()
    {
        return $this->container['geoLocation'];
    }

    /**
     * Sets geoLocation
     *
     * @param \TencentAds\Model\V3\GeoLocations|mixed $geoLocation geoLocation
     *
     * @return $this
     */
    public function setGeoLocation($geoLocation)
    {
        $this->container['geoLocation'] = $geoLocation;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string[]|mixed
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string[]|mixed $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets age
     *
     * @return \TencentAds\Model\V3\AgeStruct[]|mixed
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param \TencentAds\Model\V3\AgeStruct[]|mixed $age age
     *
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets education
     *
     * @return string[]|mixed
     */
    public function getEducation()
    {
        return $this->container['education'];
    }

    /**
     * Sets education
     *
     * @param string[]|mixed $education education
     *
     * @return $this
     */
    public function setEducation($education)
    {
        $this->container['education'] = $education;

        return $this;
    }

    /**
     * Gets appInstallStatus
     *
     * @return string[]|mixed
     */
    public function getAppInstallStatus()
    {
        return $this->container['appInstallStatus'];
    }

    /**
     * Sets appInstallStatus
     *
     * @param string[]|mixed $appInstallStatus appInstallStatus
     *
     * @return $this
     */
    public function setAppInstallStatus($appInstallStatus)
    {
        $this->container['appInstallStatus'] = $appInstallStatus;

        return $this;
    }

    /**
     * Gets maritalStatus
     *
     * @return string[]|mixed
     */
    public function getMaritalStatus()
    {
        return $this->container['maritalStatus'];
    }

    /**
     * Sets maritalStatus
     *
     * @param string[]|mixed $maritalStatus maritalStatus
     *
     * @return $this
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->container['maritalStatus'] = $maritalStatus;

        return $this;
    }

    /**
     * Gets excludedConvertedAudience
     *
     * @return \TencentAds\Model\V3\ExcludedConvertedAudience|mixed
     */
    public function getExcludedConvertedAudience()
    {
        return $this->container['excludedConvertedAudience'];
    }

    /**
     * Sets excludedConvertedAudience
     *
     * @param \TencentAds\Model\V3\ExcludedConvertedAudience|mixed $excludedConvertedAudience excludedConvertedAudience
     *
     * @return $this
     */
    public function setExcludedConvertedAudience($excludedConvertedAudience)
    {
        $this->container['excludedConvertedAudience'] = $excludedConvertedAudience;

        return $this;
    }

    /**
     * Gets customAudience
     *
     * @return int[]|mixed
     */
    public function getCustomAudience()
    {
        return $this->container['customAudience'];
    }

    /**
     * Sets customAudience
     *
     * @param int[]|mixed $customAudience customAudience
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
     * @return int[]|mixed
     */
    public function getExcludedCustomAudience()
    {
        return $this->container['excludedCustomAudience'];
    }

    /**
     * Sets excludedCustomAudience
     *
     * @param int[]|mixed $excludedCustomAudience excludedCustomAudience
     *
     * @return $this
     */
    public function setExcludedCustomAudience($excludedCustomAudience)
    {
        $this->container['excludedCustomAudience'] = $excludedCustomAudience;

        return $this;
    }

    /**
     * Gets deviceBrandModel
     *
     * @return \TencentAds\Model\V3\DeviceBrandModel|mixed
     */
    public function getDeviceBrandModel()
    {
        return $this->container['deviceBrandModel'];
    }

    /**
     * Sets deviceBrandModel
     *
     * @param \TencentAds\Model\V3\DeviceBrandModel|mixed $deviceBrandModel deviceBrandModel
     *
     * @return $this
     */
    public function setDeviceBrandModel($deviceBrandModel)
    {
        $this->container['deviceBrandModel'] = $deviceBrandModel;

        return $this;
    }

    /**
     * Gets userOs
     *
     * @return string[]|mixed
     */
    public function getUserOs()
    {
        return $this->container['userOs'];
    }

    /**
     * Sets userOs
     *
     * @param string[]|mixed $userOs userOs
     *
     * @return $this
     */
    public function setUserOs($userOs)
    {
        $this->container['userOs'] = $userOs;

        return $this;
    }

    /**
     * Gets networkType
     *
     * @return string[]|mixed
     */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
     * Sets networkType
     *
     * @param string[]|mixed $networkType networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;

        return $this;
    }

    /**
     * Gets devicePrice
     *
     * @return string[]|mixed
     */
    public function getDevicePrice()
    {
        return $this->container['devicePrice'];
    }

    /**
     * Sets devicePrice
     *
     * @param string[]|mixed $devicePrice devicePrice
     *
     * @return $this
     */
    public function setDevicePrice($devicePrice)
    {
        $this->container['devicePrice'] = $devicePrice;

        return $this;
    }

    /**
     * Gets wechatAdBehavior
     *
     * @return \TencentAds\Model\V3\WechatAdBehavior|mixed
     */
    public function getWechatAdBehavior()
    {
        return $this->container['wechatAdBehavior'];
    }

    /**
     * Sets wechatAdBehavior
     *
     * @param \TencentAds\Model\V3\WechatAdBehavior|mixed $wechatAdBehavior wechatAdBehavior
     *
     * @return $this
     */
    public function setWechatAdBehavior($wechatAdBehavior)
    {
        $this->container['wechatAdBehavior'] = $wechatAdBehavior;

        return $this;
    }

    /**
     * Gets gameConsumptionLevel
     *
     * @return string[]|mixed
     */
    public function getGameConsumptionLevel()
    {
        return $this->container['gameConsumptionLevel'];
    }

    /**
     * Sets gameConsumptionLevel
     *
     * @param string[]|mixed $gameConsumptionLevel gameConsumptionLevel
     *
     * @return $this
     */
    public function setGameConsumptionLevel($gameConsumptionLevel)
    {
        $this->container['gameConsumptionLevel'] = $gameConsumptionLevel;

        return $this;
    }

    /**
     * Gets excludedOs
     *
     * @return string[]|mixed
     */
    public function getExcludedOs()
    {
        return $this->container['excludedOs'];
    }

    /**
     * Sets excludedOs
     *
     * @param string[]|mixed $excludedOs excludedOs
     *
     * @return $this
     */
    public function setExcludedOs($excludedOs)
    {
        $this->container['excludedOs'] = $excludedOs;

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


