<?php
/**
 * UnbreakableTargetingSetting
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
 * UnbreakableTargetingSetting Class Doc Comment
 *
 * @category Class
 * @description 智能定向 —— 不可突破定向详细设置，默认支持地域、年龄、性别设置，根据不同行业支持应用安装、排除已转化等设置，如需了解可联系您的运营接口同学
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnbreakableTargetingSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'unbreakable_targeting_setting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'age' => '\TencentAds\Model\AgeStruct[]',
        'gender' => 'string[]',
        'geoLocation' => '\TencentAds\Model\GeoLocations',
        'userOs' => 'string[]',
        'appInstallStatus' => 'string[]',
        'excludedConvertedAudience' => '\TencentAds\Model\ExcludedConvertedAudience'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'age' => null,
        'gender' => null,
        'geoLocation' => null,
        'userOs' => null,
        'appInstallStatus' => null,
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
        'geoLocation' => 'geo_location',
        'userOs' => 'user_os',
        'appInstallStatus' => 'app_install_status',
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
        'geoLocation' => 'setGeoLocation',
        'userOs' => 'setUserOs',
        'appInstallStatus' => 'setAppInstallStatus',
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
        'geoLocation' => 'getGeoLocation',
        'userOs' => 'getUserOs',
        'appInstallStatus' => 'getAppInstallStatus',
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
        $this->container['geoLocation'] = isset($data['geoLocation']) ? $data['geoLocation'] : null;
        $this->container['userOs'] = isset($data['userOs']) ? $data['userOs'] : null;
        $this->container['appInstallStatus'] = isset($data['appInstallStatus']) ? $data['appInstallStatus'] : null;
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
     * @return \TencentAds\Model\AgeStruct[]|mixed
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param \TencentAds\Model\AgeStruct[]|mixed $age age
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
     * Gets geoLocation
     *
     * @return \TencentAds\Model\GeoLocations|mixed
     */
    public function getGeoLocation()
    {
        return $this->container['geoLocation'];
    }

    /**
     * Sets geoLocation
     *
     * @param \TencentAds\Model\GeoLocations|mixed $geoLocation geoLocation
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
     * Gets excludedConvertedAudience
     *
     * @return \TencentAds\Model\ExcludedConvertedAudience|mixed
     */
    public function getExcludedConvertedAudience()
    {
        return $this->container['excludedConvertedAudience'];
    }

    /**
     * Sets excludedConvertedAudience
     *
     * @param \TencentAds\Model\ExcludedConvertedAudience|mixed $excludedConvertedAudience excludedConvertedAudience
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


