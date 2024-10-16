<?php
/**
 * WechatChannelsSpecFeedConfMiniGameData
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
 * WechatChannelsSpecFeedConfMiniGameData Class Doc Comment
 *
 * @category Class
 * @description 小游戏跳转
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatChannelsSpecFeedConfMiniGameData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'wechat_channels_spec_feed_conf_mini_game_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'miniGameGhId' => 'string',
        'miniGameMonitorQueryString' => 'string',
        'miniGameAppId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'miniGameGhId' => null,
        'miniGameMonitorQueryString' => null,
        'miniGameAppId' => null
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
        'miniGameGhId' => 'mini_game_gh_id',
        'miniGameMonitorQueryString' => 'mini_game_monitor_query_string',
        'miniGameAppId' => 'mini_game_app_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'miniGameGhId' => 'setMiniGameGhId',
        'miniGameMonitorQueryString' => 'setMiniGameMonitorQueryString',
        'miniGameAppId' => 'setMiniGameAppId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'miniGameGhId' => 'getMiniGameGhId',
        'miniGameMonitorQueryString' => 'getMiniGameMonitorQueryString',
        'miniGameAppId' => 'getMiniGameAppId'
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
        $this->container['miniGameGhId'] = isset($data['miniGameGhId']) ? $data['miniGameGhId'] : null;
        $this->container['miniGameMonitorQueryString'] = isset($data['miniGameMonitorQueryString']) ? $data['miniGameMonitorQueryString'] : null;
        $this->container['miniGameAppId'] = isset($data['miniGameAppId']) ? $data['miniGameAppId'] : null;
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
     * Gets miniGameGhId
     *
     * @return string|mixed
     */
    public function getMiniGameGhId()
    {
        return $this->container['miniGameGhId'];
    }

    /**
     * Sets miniGameGhId
     *
     * @param string|mixed $miniGameGhId miniGameGhId
     *
     * @return $this
     */
    public function setMiniGameGhId($miniGameGhId)
    {
        $this->container['miniGameGhId'] = $miniGameGhId;

        return $this;
    }

    /**
     * Gets miniGameMonitorQueryString
     *
     * @return string|mixed
     */
    public function getMiniGameMonitorQueryString()
    {
        return $this->container['miniGameMonitorQueryString'];
    }

    /**
     * Sets miniGameMonitorQueryString
     *
     * @param string|mixed $miniGameMonitorQueryString miniGameMonitorQueryString
     *
     * @return $this
     */
    public function setMiniGameMonitorQueryString($miniGameMonitorQueryString)
    {
        $this->container['miniGameMonitorQueryString'] = $miniGameMonitorQueryString;

        return $this;
    }

    /**
     * Gets miniGameAppId
     *
     * @return string|mixed
     */
    public function getMiniGameAppId()
    {
        return $this->container['miniGameAppId'];
    }

    /**
     * Sets miniGameAppId
     *
     * @param string|mixed $miniGameAppId miniGameAppId
     *
     * @return $this
     */
    public function setMiniGameAppId($miniGameAppId)
    {
        $this->container['miniGameAppId'] = $miniGameAppId;

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


