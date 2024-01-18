<?php
/**
 * AdgroupNegativewordsAddResponseData
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
 * AdgroupNegativewordsAddResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdgroupNegativewordsAddResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdgroupNegativewordsAddResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adgroupId' => 'int',
        'status' => '\TencentAds\Model\V3\NegativeWordOperStatus',
        'duplicateWords' => '\TencentAds\Model\V3\DuplicateNegativeWordStruct',
        'exceedLengthWords' => '\TencentAds\Model\V3\ExceedLengthNegativeWordStruct',
        'exceedLimitWords' => '\TencentAds\Model\V3\ExceedLimitNegativeWordStruct',
        'hasSpecialWords' => '\TencentAds\Model\V3\HasSpecialNegativeWordStruct',
        'successWords' => '\TencentAds\Model\V3\SuccessNegativeWordStruct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adgroupId' => 'int64',
        'status' => null,
        'duplicateWords' => null,
        'exceedLengthWords' => null,
        'exceedLimitWords' => null,
        'hasSpecialWords' => null,
        'successWords' => null
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
        'adgroupId' => 'adgroup_id',
        'status' => 'status',
        'duplicateWords' => 'duplicate_words',
        'exceedLengthWords' => 'exceed_length_words',
        'exceedLimitWords' => 'exceed_limit_words',
        'hasSpecialWords' => 'has_special_words',
        'successWords' => 'success_words'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adgroupId' => 'setAdgroupId',
        'status' => 'setStatus',
        'duplicateWords' => 'setDuplicateWords',
        'exceedLengthWords' => 'setExceedLengthWords',
        'exceedLimitWords' => 'setExceedLimitWords',
        'hasSpecialWords' => 'setHasSpecialWords',
        'successWords' => 'setSuccessWords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adgroupId' => 'getAdgroupId',
        'status' => 'getStatus',
        'duplicateWords' => 'getDuplicateWords',
        'exceedLengthWords' => 'getExceedLengthWords',
        'exceedLimitWords' => 'getExceedLimitWords',
        'hasSpecialWords' => 'getHasSpecialWords',
        'successWords' => 'getSuccessWords'
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
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['duplicateWords'] = isset($data['duplicateWords']) ? $data['duplicateWords'] : null;
        $this->container['exceedLengthWords'] = isset($data['exceedLengthWords']) ? $data['exceedLengthWords'] : null;
        $this->container['exceedLimitWords'] = isset($data['exceedLimitWords']) ? $data['exceedLimitWords'] : null;
        $this->container['hasSpecialWords'] = isset($data['hasSpecialWords']) ? $data['hasSpecialWords'] : null;
        $this->container['successWords'] = isset($data['successWords']) ? $data['successWords'] : null;
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
     * Gets adgroupId
     *
     * @return int|mixed
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int|mixed $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \TencentAds\Model\V3\NegativeWordOperStatus|mixed
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \TencentAds\Model\V3\NegativeWordOperStatus|mixed $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets duplicateWords
     *
     * @return \TencentAds\Model\V3\DuplicateNegativeWordStruct|mixed
     */
    public function getDuplicateWords()
    {
        return $this->container['duplicateWords'];
    }

    /**
     * Sets duplicateWords
     *
     * @param \TencentAds\Model\V3\DuplicateNegativeWordStruct|mixed $duplicateWords duplicateWords
     *
     * @return $this
     */
    public function setDuplicateWords($duplicateWords)
    {
        $this->container['duplicateWords'] = $duplicateWords;

        return $this;
    }

    /**
     * Gets exceedLengthWords
     *
     * @return \TencentAds\Model\V3\ExceedLengthNegativeWordStruct|mixed
     */
    public function getExceedLengthWords()
    {
        return $this->container['exceedLengthWords'];
    }

    /**
     * Sets exceedLengthWords
     *
     * @param \TencentAds\Model\V3\ExceedLengthNegativeWordStruct|mixed $exceedLengthWords exceedLengthWords
     *
     * @return $this
     */
    public function setExceedLengthWords($exceedLengthWords)
    {
        $this->container['exceedLengthWords'] = $exceedLengthWords;

        return $this;
    }

    /**
     * Gets exceedLimitWords
     *
     * @return \TencentAds\Model\V3\ExceedLimitNegativeWordStruct|mixed
     */
    public function getExceedLimitWords()
    {
        return $this->container['exceedLimitWords'];
    }

    /**
     * Sets exceedLimitWords
     *
     * @param \TencentAds\Model\V3\ExceedLimitNegativeWordStruct|mixed $exceedLimitWords exceedLimitWords
     *
     * @return $this
     */
    public function setExceedLimitWords($exceedLimitWords)
    {
        $this->container['exceedLimitWords'] = $exceedLimitWords;

        return $this;
    }

    /**
     * Gets hasSpecialWords
     *
     * @return \TencentAds\Model\V3\HasSpecialNegativeWordStruct|mixed
     */
    public function getHasSpecialWords()
    {
        return $this->container['hasSpecialWords'];
    }

    /**
     * Sets hasSpecialWords
     *
     * @param \TencentAds\Model\V3\HasSpecialNegativeWordStruct|mixed $hasSpecialWords hasSpecialWords
     *
     * @return $this
     */
    public function setHasSpecialWords($hasSpecialWords)
    {
        $this->container['hasSpecialWords'] = $hasSpecialWords;

        return $this;
    }

    /**
     * Gets successWords
     *
     * @return \TencentAds\Model\V3\SuccessNegativeWordStruct|mixed
     */
    public function getSuccessWords()
    {
        return $this->container['successWords'];
    }

    /**
     * Sets successWords
     *
     * @param \TencentAds\Model\V3\SuccessNegativeWordStruct|mixed $successWords successWords
     *
     * @return $this
     */
    public function setSuccessWords($successWords)
    {
        $this->container['successWords'] = $successWords;

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


