<?php
/**
 * ShopAuthListStruct
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
 * ShopAuthListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShopAuthListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'shop_auth_list_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorizationId' => 'int',
        'wechatChannelsShopName' => 'string',
        'wechatChannelsShopId' => 'string',
        'wechatChannelsShopIcon' => 'string',
        'authorizationBeginTime' => 'int',
        'authorizationTtl' => 'int',
        'authorizationStatus' => '\TencentAds\Model\V3\WechatChannelsAuthStatus',
        'authorizationQrcodeUrl' => 'string',
        'authorizationQrcodeExpiredTime' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authorizationId' => 'int64',
        'wechatChannelsShopName' => null,
        'wechatChannelsShopId' => null,
        'wechatChannelsShopIcon' => null,
        'authorizationBeginTime' => 'int64',
        'authorizationTtl' => 'int64',
        'authorizationStatus' => null,
        'authorizationQrcodeUrl' => null,
        'authorizationQrcodeExpiredTime' => 'int64'
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
        'authorizationId' => 'authorization_id',
        'wechatChannelsShopName' => 'wechat_channels_shop_name',
        'wechatChannelsShopId' => 'wechat_channels_shop_id',
        'wechatChannelsShopIcon' => 'wechat_channels_shop_icon',
        'authorizationBeginTime' => 'authorization_begin_time',
        'authorizationTtl' => 'authorization_ttl',
        'authorizationStatus' => 'authorization_status',
        'authorizationQrcodeUrl' => 'authorization_qrcode_url',
        'authorizationQrcodeExpiredTime' => 'authorization_qrcode_expired_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authorizationId' => 'setAuthorizationId',
        'wechatChannelsShopName' => 'setWechatChannelsShopName',
        'wechatChannelsShopId' => 'setWechatChannelsShopId',
        'wechatChannelsShopIcon' => 'setWechatChannelsShopIcon',
        'authorizationBeginTime' => 'setAuthorizationBeginTime',
        'authorizationTtl' => 'setAuthorizationTtl',
        'authorizationStatus' => 'setAuthorizationStatus',
        'authorizationQrcodeUrl' => 'setAuthorizationQrcodeUrl',
        'authorizationQrcodeExpiredTime' => 'setAuthorizationQrcodeExpiredTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authorizationId' => 'getAuthorizationId',
        'wechatChannelsShopName' => 'getWechatChannelsShopName',
        'wechatChannelsShopId' => 'getWechatChannelsShopId',
        'wechatChannelsShopIcon' => 'getWechatChannelsShopIcon',
        'authorizationBeginTime' => 'getAuthorizationBeginTime',
        'authorizationTtl' => 'getAuthorizationTtl',
        'authorizationStatus' => 'getAuthorizationStatus',
        'authorizationQrcodeUrl' => 'getAuthorizationQrcodeUrl',
        'authorizationQrcodeExpiredTime' => 'getAuthorizationQrcodeExpiredTime'
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
        $this->container['authorizationId'] = isset($data['authorizationId']) ? $data['authorizationId'] : null;
        $this->container['wechatChannelsShopName'] = isset($data['wechatChannelsShopName']) ? $data['wechatChannelsShopName'] : null;
        $this->container['wechatChannelsShopId'] = isset($data['wechatChannelsShopId']) ? $data['wechatChannelsShopId'] : null;
        $this->container['wechatChannelsShopIcon'] = isset($data['wechatChannelsShopIcon']) ? $data['wechatChannelsShopIcon'] : null;
        $this->container['authorizationBeginTime'] = isset($data['authorizationBeginTime']) ? $data['authorizationBeginTime'] : null;
        $this->container['authorizationTtl'] = isset($data['authorizationTtl']) ? $data['authorizationTtl'] : null;
        $this->container['authorizationStatus'] = isset($data['authorizationStatus']) ? $data['authorizationStatus'] : null;
        $this->container['authorizationQrcodeUrl'] = isset($data['authorizationQrcodeUrl']) ? $data['authorizationQrcodeUrl'] : null;
        $this->container['authorizationQrcodeExpiredTime'] = isset($data['authorizationQrcodeExpiredTime']) ? $data['authorizationQrcodeExpiredTime'] : null;
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
     * Gets authorizationId
     *
     * @return int|mixed
     */
    public function getAuthorizationId()
    {
        return $this->container['authorizationId'];
    }

    /**
     * Sets authorizationId
     *
     * @param int|mixed $authorizationId authorizationId
     *
     * @return $this
     */
    public function setAuthorizationId($authorizationId)
    {
        $this->container['authorizationId'] = $authorizationId;

        return $this;
    }

    /**
     * Gets wechatChannelsShopName
     *
     * @return string|mixed
     */
    public function getWechatChannelsShopName()
    {
        return $this->container['wechatChannelsShopName'];
    }

    /**
     * Sets wechatChannelsShopName
     *
     * @param string|mixed $wechatChannelsShopName wechatChannelsShopName
     *
     * @return $this
     */
    public function setWechatChannelsShopName($wechatChannelsShopName)
    {
        $this->container['wechatChannelsShopName'] = $wechatChannelsShopName;

        return $this;
    }

    /**
     * Gets wechatChannelsShopId
     *
     * @return string|mixed
     */
    public function getWechatChannelsShopId()
    {
        return $this->container['wechatChannelsShopId'];
    }

    /**
     * Sets wechatChannelsShopId
     *
     * @param string|mixed $wechatChannelsShopId wechatChannelsShopId
     *
     * @return $this
     */
    public function setWechatChannelsShopId($wechatChannelsShopId)
    {
        $this->container['wechatChannelsShopId'] = $wechatChannelsShopId;

        return $this;
    }

    /**
     * Gets wechatChannelsShopIcon
     *
     * @return string|mixed
     */
    public function getWechatChannelsShopIcon()
    {
        return $this->container['wechatChannelsShopIcon'];
    }

    /**
     * Sets wechatChannelsShopIcon
     *
     * @param string|mixed $wechatChannelsShopIcon wechatChannelsShopIcon
     *
     * @return $this
     */
    public function setWechatChannelsShopIcon($wechatChannelsShopIcon)
    {
        $this->container['wechatChannelsShopIcon'] = $wechatChannelsShopIcon;

        return $this;
    }

    /**
     * Gets authorizationBeginTime
     *
     * @return int|mixed
     */
    public function getAuthorizationBeginTime()
    {
        return $this->container['authorizationBeginTime'];
    }

    /**
     * Sets authorizationBeginTime
     *
     * @param int|mixed $authorizationBeginTime authorizationBeginTime
     *
     * @return $this
     */
    public function setAuthorizationBeginTime($authorizationBeginTime)
    {
        $this->container['authorizationBeginTime'] = $authorizationBeginTime;

        return $this;
    }

    /**
     * Gets authorizationTtl
     *
     * @return int|mixed
     */
    public function getAuthorizationTtl()
    {
        return $this->container['authorizationTtl'];
    }

    /**
     * Sets authorizationTtl
     *
     * @param int|mixed $authorizationTtl authorizationTtl
     *
     * @return $this
     */
    public function setAuthorizationTtl($authorizationTtl)
    {
        $this->container['authorizationTtl'] = $authorizationTtl;

        return $this;
    }

    /**
     * Gets authorizationStatus
     *
     * @return \TencentAds\Model\V3\WechatChannelsAuthStatus|mixed
     */
    public function getAuthorizationStatus()
    {
        return $this->container['authorizationStatus'];
    }

    /**
     * Sets authorizationStatus
     *
     * @param \TencentAds\Model\V3\WechatChannelsAuthStatus|mixed $authorizationStatus authorizationStatus
     *
     * @return $this
     */
    public function setAuthorizationStatus($authorizationStatus)
    {
        $this->container['authorizationStatus'] = $authorizationStatus;

        return $this;
    }

    /**
     * Gets authorizationQrcodeUrl
     *
     * @return string|mixed
     */
    public function getAuthorizationQrcodeUrl()
    {
        return $this->container['authorizationQrcodeUrl'];
    }

    /**
     * Sets authorizationQrcodeUrl
     *
     * @param string|mixed $authorizationQrcodeUrl authorizationQrcodeUrl
     *
     * @return $this
     */
    public function setAuthorizationQrcodeUrl($authorizationQrcodeUrl)
    {
        $this->container['authorizationQrcodeUrl'] = $authorizationQrcodeUrl;

        return $this;
    }

    /**
     * Gets authorizationQrcodeExpiredTime
     *
     * @return int|mixed
     */
    public function getAuthorizationQrcodeExpiredTime()
    {
        return $this->container['authorizationQrcodeExpiredTime'];
    }

    /**
     * Sets authorizationQrcodeExpiredTime
     *
     * @param int|mixed $authorizationQrcodeExpiredTime authorizationQrcodeExpiredTime
     *
     * @return $this
     */
    public function setAuthorizationQrcodeExpiredTime($authorizationQrcodeExpiredTime)
    {
        $this->container['authorizationQrcodeExpiredTime'] = $authorizationQrcodeExpiredTime;

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


