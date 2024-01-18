<?php
/**
 * FansInfoListStruct
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
 * FansInfoListStruct Class Doc Comment
 *
 * @category Class
 * @description 粉丝数据信息结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FansInfoListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'fans_info_list_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'videoChannelId' => 'string',
        'videoChannelName' => 'string',
        'date' => 'int',
        'fansCnt' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'videoChannelId' => null,
        'videoChannelName' => null,
        'date' => 'int64',
        'fansCnt' => 'int64'
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
        'videoChannelId' => 'video_channel_id',
        'videoChannelName' => 'video_channel_name',
        'date' => 'date',
        'fansCnt' => 'fans_cnt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'videoChannelId' => 'setVideoChannelId',
        'videoChannelName' => 'setVideoChannelName',
        'date' => 'setDate',
        'fansCnt' => 'setFansCnt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'videoChannelId' => 'getVideoChannelId',
        'videoChannelName' => 'getVideoChannelName',
        'date' => 'getDate',
        'fansCnt' => 'getFansCnt'
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
        $this->container['videoChannelId'] = isset($data['videoChannelId']) ? $data['videoChannelId'] : null;
        $this->container['videoChannelName'] = isset($data['videoChannelName']) ? $data['videoChannelName'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['fansCnt'] = isset($data['fansCnt']) ? $data['fansCnt'] : null;
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
     * Gets videoChannelId
     *
     * @return string|mixed
     */
    public function getVideoChannelId()
    {
        return $this->container['videoChannelId'];
    }

    /**
     * Sets videoChannelId
     *
     * @param string|mixed $videoChannelId videoChannelId
     *
     * @return $this
     */
    public function setVideoChannelId($videoChannelId)
    {
        $this->container['videoChannelId'] = $videoChannelId;

        return $this;
    }

    /**
     * Gets videoChannelName
     *
     * @return string|mixed
     */
    public function getVideoChannelName()
    {
        return $this->container['videoChannelName'];
    }

    /**
     * Sets videoChannelName
     *
     * @param string|mixed $videoChannelName videoChannelName
     *
     * @return $this
     */
    public function setVideoChannelName($videoChannelName)
    {
        $this->container['videoChannelName'] = $videoChannelName;

        return $this;
    }

    /**
     * Gets date
     *
     * @return int|mixed
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param int|mixed $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets fansCnt
     *
     * @return int|mixed
     */
    public function getFansCnt()
    {
        return $this->container['fansCnt'];
    }

    /**
     * Sets fansCnt
     *
     * @param int|mixed $fansCnt fansCnt
     *
     * @return $this
     */
    public function setFansCnt($fansCnt)
    {
        $this->container['fansCnt'] = $fansCnt;

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

