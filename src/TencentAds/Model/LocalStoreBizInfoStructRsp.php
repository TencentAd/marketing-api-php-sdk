<?php
/**
 * LocalStoreBizInfoStructRsp
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
 * LocalStoreBizInfoStructRsp Class Doc Comment
 *
 * @category Class
 * @description 门店经营信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocalStoreBizInfoStructRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'local_store_biz_info_struct_rsp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'poiId' => 'string',
        'customerProfile' => '\TencentAds\Model\CustomerProfileStruct',
        'customerPerCost' => 'int',
        'firstCategoryId' => 'int',
        'secondCategoryId' => 'int',
        'thirdCategoryId' => 'int',
        'fourthCategoryId' => 'int',
        'firstCategoryName' => 'string',
        'secondCategoryName' => 'string',
        'thirdCategoryName' => 'string',
        'fourthCategoryName' => 'string',
        'peakPeriod' => '\TencentAds\Model\PeakPeriod[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'poiId' => null,
        'customerProfile' => null,
        'customerPerCost' => 'int64',
        'firstCategoryId' => 'int64',
        'secondCategoryId' => 'int64',
        'thirdCategoryId' => 'int64',
        'fourthCategoryId' => 'int64',
        'firstCategoryName' => null,
        'secondCategoryName' => null,
        'thirdCategoryName' => null,
        'fourthCategoryName' => null,
        'peakPeriod' => null
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
        'poiId' => 'poi_id',
        'customerProfile' => 'customer_profile',
        'customerPerCost' => 'customer_per_cost',
        'firstCategoryId' => 'first_category_id',
        'secondCategoryId' => 'second_category_id',
        'thirdCategoryId' => 'third_category_id',
        'fourthCategoryId' => 'fourth_category_id',
        'firstCategoryName' => 'first_category_name',
        'secondCategoryName' => 'second_category_name',
        'thirdCategoryName' => 'third_category_name',
        'fourthCategoryName' => 'fourth_category_name',
        'peakPeriod' => 'peak_period'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'poiId' => 'setPoiId',
        'customerProfile' => 'setCustomerProfile',
        'customerPerCost' => 'setCustomerPerCost',
        'firstCategoryId' => 'setFirstCategoryId',
        'secondCategoryId' => 'setSecondCategoryId',
        'thirdCategoryId' => 'setThirdCategoryId',
        'fourthCategoryId' => 'setFourthCategoryId',
        'firstCategoryName' => 'setFirstCategoryName',
        'secondCategoryName' => 'setSecondCategoryName',
        'thirdCategoryName' => 'setThirdCategoryName',
        'fourthCategoryName' => 'setFourthCategoryName',
        'peakPeriod' => 'setPeakPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'poiId' => 'getPoiId',
        'customerProfile' => 'getCustomerProfile',
        'customerPerCost' => 'getCustomerPerCost',
        'firstCategoryId' => 'getFirstCategoryId',
        'secondCategoryId' => 'getSecondCategoryId',
        'thirdCategoryId' => 'getThirdCategoryId',
        'fourthCategoryId' => 'getFourthCategoryId',
        'firstCategoryName' => 'getFirstCategoryName',
        'secondCategoryName' => 'getSecondCategoryName',
        'thirdCategoryName' => 'getThirdCategoryName',
        'fourthCategoryName' => 'getFourthCategoryName',
        'peakPeriod' => 'getPeakPeriod'
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
        $this->container['poiId'] = isset($data['poiId']) ? $data['poiId'] : null;
        $this->container['customerProfile'] = isset($data['customerProfile']) ? $data['customerProfile'] : null;
        $this->container['customerPerCost'] = isset($data['customerPerCost']) ? $data['customerPerCost'] : null;
        $this->container['firstCategoryId'] = isset($data['firstCategoryId']) ? $data['firstCategoryId'] : null;
        $this->container['secondCategoryId'] = isset($data['secondCategoryId']) ? $data['secondCategoryId'] : null;
        $this->container['thirdCategoryId'] = isset($data['thirdCategoryId']) ? $data['thirdCategoryId'] : null;
        $this->container['fourthCategoryId'] = isset($data['fourthCategoryId']) ? $data['fourthCategoryId'] : null;
        $this->container['firstCategoryName'] = isset($data['firstCategoryName']) ? $data['firstCategoryName'] : null;
        $this->container['secondCategoryName'] = isset($data['secondCategoryName']) ? $data['secondCategoryName'] : null;
        $this->container['thirdCategoryName'] = isset($data['thirdCategoryName']) ? $data['thirdCategoryName'] : null;
        $this->container['fourthCategoryName'] = isset($data['fourthCategoryName']) ? $data['fourthCategoryName'] : null;
        $this->container['peakPeriod'] = isset($data['peakPeriod']) ? $data['peakPeriod'] : null;
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
     * Gets poiId
     *
     * @return string|mixed
     */
    public function getPoiId()
    {
        return $this->container['poiId'];
    }

    /**
     * Sets poiId
     *
     * @param string|mixed $poiId poiId
     *
     * @return $this
     */
    public function setPoiId($poiId)
    {
        $this->container['poiId'] = $poiId;

        return $this;
    }

    /**
     * Gets customerProfile
     *
     * @return \TencentAds\Model\CustomerProfileStruct|mixed
     */
    public function getCustomerProfile()
    {
        return $this->container['customerProfile'];
    }

    /**
     * Sets customerProfile
     *
     * @param \TencentAds\Model\CustomerProfileStruct|mixed $customerProfile customerProfile
     *
     * @return $this
     */
    public function setCustomerProfile($customerProfile)
    {
        $this->container['customerProfile'] = $customerProfile;

        return $this;
    }

    /**
     * Gets customerPerCost
     *
     * @return int|mixed
     */
    public function getCustomerPerCost()
    {
        return $this->container['customerPerCost'];
    }

    /**
     * Sets customerPerCost
     *
     * @param int|mixed $customerPerCost customerPerCost
     *
     * @return $this
     */
    public function setCustomerPerCost($customerPerCost)
    {
        $this->container['customerPerCost'] = $customerPerCost;

        return $this;
    }

    /**
     * Gets firstCategoryId
     *
     * @return int|mixed
     */
    public function getFirstCategoryId()
    {
        return $this->container['firstCategoryId'];
    }

    /**
     * Sets firstCategoryId
     *
     * @param int|mixed $firstCategoryId firstCategoryId
     *
     * @return $this
     */
    public function setFirstCategoryId($firstCategoryId)
    {
        $this->container['firstCategoryId'] = $firstCategoryId;

        return $this;
    }

    /**
     * Gets secondCategoryId
     *
     * @return int|mixed
     */
    public function getSecondCategoryId()
    {
        return $this->container['secondCategoryId'];
    }

    /**
     * Sets secondCategoryId
     *
     * @param int|mixed $secondCategoryId secondCategoryId
     *
     * @return $this
     */
    public function setSecondCategoryId($secondCategoryId)
    {
        $this->container['secondCategoryId'] = $secondCategoryId;

        return $this;
    }

    /**
     * Gets thirdCategoryId
     *
     * @return int|mixed
     */
    public function getThirdCategoryId()
    {
        return $this->container['thirdCategoryId'];
    }

    /**
     * Sets thirdCategoryId
     *
     * @param int|mixed $thirdCategoryId thirdCategoryId
     *
     * @return $this
     */
    public function setThirdCategoryId($thirdCategoryId)
    {
        $this->container['thirdCategoryId'] = $thirdCategoryId;

        return $this;
    }

    /**
     * Gets fourthCategoryId
     *
     * @return int|mixed
     */
    public function getFourthCategoryId()
    {
        return $this->container['fourthCategoryId'];
    }

    /**
     * Sets fourthCategoryId
     *
     * @param int|mixed $fourthCategoryId fourthCategoryId
     *
     * @return $this
     */
    public function setFourthCategoryId($fourthCategoryId)
    {
        $this->container['fourthCategoryId'] = $fourthCategoryId;

        return $this;
    }

    /**
     * Gets firstCategoryName
     *
     * @return string|mixed
     */
    public function getFirstCategoryName()
    {
        return $this->container['firstCategoryName'];
    }

    /**
     * Sets firstCategoryName
     *
     * @param string|mixed $firstCategoryName firstCategoryName
     *
     * @return $this
     */
    public function setFirstCategoryName($firstCategoryName)
    {
        $this->container['firstCategoryName'] = $firstCategoryName;

        return $this;
    }

    /**
     * Gets secondCategoryName
     *
     * @return string|mixed
     */
    public function getSecondCategoryName()
    {
        return $this->container['secondCategoryName'];
    }

    /**
     * Sets secondCategoryName
     *
     * @param string|mixed $secondCategoryName secondCategoryName
     *
     * @return $this
     */
    public function setSecondCategoryName($secondCategoryName)
    {
        $this->container['secondCategoryName'] = $secondCategoryName;

        return $this;
    }

    /**
     * Gets thirdCategoryName
     *
     * @return string|mixed
     */
    public function getThirdCategoryName()
    {
        return $this->container['thirdCategoryName'];
    }

    /**
     * Sets thirdCategoryName
     *
     * @param string|mixed $thirdCategoryName thirdCategoryName
     *
     * @return $this
     */
    public function setThirdCategoryName($thirdCategoryName)
    {
        $this->container['thirdCategoryName'] = $thirdCategoryName;

        return $this;
    }

    /**
     * Gets fourthCategoryName
     *
     * @return string|mixed
     */
    public function getFourthCategoryName()
    {
        return $this->container['fourthCategoryName'];
    }

    /**
     * Sets fourthCategoryName
     *
     * @param string|mixed $fourthCategoryName fourthCategoryName
     *
     * @return $this
     */
    public function setFourthCategoryName($fourthCategoryName)
    {
        $this->container['fourthCategoryName'] = $fourthCategoryName;

        return $this;
    }

    /**
     * Gets peakPeriod
     *
     * @return \TencentAds\Model\PeakPeriod[]|mixed
     */
    public function getPeakPeriod()
    {
        return $this->container['peakPeriod'];
    }

    /**
     * Sets peakPeriod
     *
     * @param \TencentAds\Model\PeakPeriod[]|mixed $peakPeriod peakPeriod
     *
     * @return $this
     */
    public function setPeakPeriod($peakPeriod)
    {
        $this->container['peakPeriod'] = $peakPeriod;

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


