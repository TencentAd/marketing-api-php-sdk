<?php
/**
 * FinderObjectStruct
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
 * FinderObjectStruct Class Doc Comment
 *
 * @category Class
 * @description 视频号动态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinderObjectStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'finder_object_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'finderUsername' => 'string',
        'description' => 'string',
        'medias' => '\TencentAds\Model\V3\Medias',
        'flag' => 'int',
        'wechatChannelsAccountId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'finderUsername' => null,
        'description' => null,
        'medias' => null,
        'flag' => 'int64',
        'wechatChannelsAccountId' => null
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
        'finderUsername' => 'finder_username',
        'description' => 'description',
        'medias' => 'medias',
        'flag' => 'flag',
        'wechatChannelsAccountId' => 'wechat_channels_account_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'finderUsername' => 'setFinderUsername',
        'description' => 'setDescription',
        'medias' => 'setMedias',
        'flag' => 'setFlag',
        'wechatChannelsAccountId' => 'setWechatChannelsAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'finderUsername' => 'getFinderUsername',
        'description' => 'getDescription',
        'medias' => 'getMedias',
        'flag' => 'getFlag',
        'wechatChannelsAccountId' => 'getWechatChannelsAccountId'
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
        $this->container['finderUsername'] = isset($data['finderUsername']) ? $data['finderUsername'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['medias'] = isset($data['medias']) ? $data['medias'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['wechatChannelsAccountId'] = isset($data['wechatChannelsAccountId']) ? $data['wechatChannelsAccountId'] : null;
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
     * Gets finderUsername
     *
     * @return string|mixed
     */
    public function getFinderUsername()
    {
        return $this->container['finderUsername'];
    }

    /**
     * Sets finderUsername
     *
     * @param string|mixed $finderUsername finderUsername
     *
     * @return $this
     */
    public function setFinderUsername($finderUsername)
    {
        $this->container['finderUsername'] = $finderUsername;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|mixed
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|mixed $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets medias
     *
     * @return \TencentAds\Model\V3\Medias|mixed
     */
    public function getMedias()
    {
        return $this->container['medias'];
    }

    /**
     * Sets medias
     *
     * @param \TencentAds\Model\V3\Medias|mixed $medias medias
     *
     * @return $this
     */
    public function setMedias($medias)
    {
        $this->container['medias'] = $medias;

        return $this;
    }

    /**
     * Gets flag
     *
     * @return int|mixed
     */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
     * Sets flag
     *
     * @param int|mixed $flag flag
     *
     * @return $this
     */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;

        return $this;
    }

    /**
     * Gets wechatChannelsAccountId
     *
     * @return string|mixed
     */
    public function getWechatChannelsAccountId()
    {
        return $this->container['wechatChannelsAccountId'];
    }

    /**
     * Sets wechatChannelsAccountId
     *
     * @param string|mixed $wechatChannelsAccountId wechatChannelsAccountId
     *
     * @return $this
     */
    public function setWechatChannelsAccountId($wechatChannelsAccountId)
    {
        $this->container['wechatChannelsAccountId'] = $wechatChannelsAccountId;

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


