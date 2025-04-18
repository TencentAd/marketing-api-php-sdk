<?php
/**
 * WechatOfficialAccountStruct
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
 * WechatOfficialAccountStruct Class Doc Comment
 *
 * @category Class
 * @description 渠道包信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatOfficialAccountStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'wechat_official_account_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wechatOfficialAccountId' => 'string',
        'wechatOfficialAccountName' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'wechatOfficialAccountIcon' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'wechatOfficialAccountId' => null,
        'wechatOfficialAccountName' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'wechatOfficialAccountIcon' => null
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
        'wechatOfficialAccountId' => 'wechat_official_account_id',
        'wechatOfficialAccountName' => 'wechat_official_account_name',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'wechatOfficialAccountIcon' => 'wechat_official_account_icon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wechatOfficialAccountId' => 'setWechatOfficialAccountId',
        'wechatOfficialAccountName' => 'setWechatOfficialAccountName',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'wechatOfficialAccountIcon' => 'setWechatOfficialAccountIcon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wechatOfficialAccountId' => 'getWechatOfficialAccountId',
        'wechatOfficialAccountName' => 'getWechatOfficialAccountName',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'wechatOfficialAccountIcon' => 'getWechatOfficialAccountIcon'
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
        $this->container['wechatOfficialAccountId'] = isset($data['wechatOfficialAccountId']) ? $data['wechatOfficialAccountId'] : null;
        $this->container['wechatOfficialAccountName'] = isset($data['wechatOfficialAccountName']) ? $data['wechatOfficialAccountName'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['wechatOfficialAccountIcon'] = isset($data['wechatOfficialAccountIcon']) ? $data['wechatOfficialAccountIcon'] : null;
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
     * Gets wechatOfficialAccountId
     *
     * @return string|mixed
     */
    public function getWechatOfficialAccountId()
    {
        return $this->container['wechatOfficialAccountId'];
    }

    /**
     * Sets wechatOfficialAccountId
     *
     * @param string|mixed $wechatOfficialAccountId wechatOfficialAccountId
     *
     * @return $this
     */
    public function setWechatOfficialAccountId($wechatOfficialAccountId)
    {
        $this->container['wechatOfficialAccountId'] = $wechatOfficialAccountId;

        return $this;
    }

    /**
     * Gets wechatOfficialAccountName
     *
     * @return string|mixed
     */
    public function getWechatOfficialAccountName()
    {
        return $this->container['wechatOfficialAccountName'];
    }

    /**
     * Sets wechatOfficialAccountName
     *
     * @param string|mixed $wechatOfficialAccountName wechatOfficialAccountName
     *
     * @return $this
     */
    public function setWechatOfficialAccountName($wechatOfficialAccountName)
    {
        $this->container['wechatOfficialAccountName'] = $wechatOfficialAccountName;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return int|mixed
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param int|mixed $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets lastModifiedTime
     *
     * @return int|mixed
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     *
     * @param int|mixed $lastModifiedTime lastModifiedTime
     *
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

        return $this;
    }

    /**
     * Gets wechatOfficialAccountIcon
     *
     * @return string|mixed
     */
    public function getWechatOfficialAccountIcon()
    {
        return $this->container['wechatOfficialAccountIcon'];
    }

    /**
     * Sets wechatOfficialAccountIcon
     *
     * @param string|mixed $wechatOfficialAccountIcon wechatOfficialAccountIcon
     *
     * @return $this
     */
    public function setWechatOfficialAccountIcon($wechatOfficialAccountIcon)
    {
        $this->container['wechatOfficialAccountIcon'] = $wechatOfficialAccountIcon;

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


