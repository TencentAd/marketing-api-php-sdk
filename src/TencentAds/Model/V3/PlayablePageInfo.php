<?php
/**
 * PlayablePageInfo
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
 * PlayablePageInfo Class Doc Comment
 *
 * @category Class
 * @description 试玩页信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlayablePageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'playable_page_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'playablePagePath' => 'string',
        'playablePageName' => 'string',
        'nickName' => 'string',
        'status' => '\TencentAds\Model\V3\PlayablePageStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'playablePagePath' => null,
        'playablePageName' => null,
        'nickName' => null,
        'status' => null
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
        'playablePagePath' => 'playable_page_path',
        'playablePageName' => 'playable_page_name',
        'nickName' => 'nick_name',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'playablePagePath' => 'setPlayablePagePath',
        'playablePageName' => 'setPlayablePageName',
        'nickName' => 'setNickName',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'playablePagePath' => 'getPlayablePagePath',
        'playablePageName' => 'getPlayablePageName',
        'nickName' => 'getNickName',
        'status' => 'getStatus'
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
        $this->container['playablePagePath'] = isset($data['playablePagePath']) ? $data['playablePagePath'] : null;
        $this->container['playablePageName'] = isset($data['playablePageName']) ? $data['playablePageName'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets playablePagePath
     *
     * @return string|mixed
     */
    public function getPlayablePagePath()
    {
        return $this->container['playablePagePath'];
    }

    /**
     * Sets playablePagePath
     *
     * @param string|mixed $playablePagePath playablePagePath
     *
     * @return $this
     */
    public function setPlayablePagePath($playablePagePath)
    {
        $this->container['playablePagePath'] = $playablePagePath;

        return $this;
    }

    /**
     * Gets playablePageName
     *
     * @return string|mixed
     */
    public function getPlayablePageName()
    {
        return $this->container['playablePageName'];
    }

    /**
     * Sets playablePageName
     *
     * @param string|mixed $playablePageName playablePageName
     *
     * @return $this
     */
    public function setPlayablePageName($playablePageName)
    {
        $this->container['playablePageName'] = $playablePageName;

        return $this;
    }

    /**
     * Gets nickName
     *
     * @return string|mixed
     */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
     * Sets nickName
     *
     * @param string|mixed $nickName nickName
     *
     * @return $this
     */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \TencentAds\Model\V3\PlayablePageStatus|mixed
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \TencentAds\Model\V3\PlayablePageStatus|mixed $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


