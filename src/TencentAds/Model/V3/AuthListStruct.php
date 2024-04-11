<?php
/**
 * AuthListStruct
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
 * AuthListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'auth_list_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wechatChannelsAccountName' => 'string',
        'finderUsername' => 'string',
        'authorizationId' => 'string',
        'authorizationBeginTime' => 'int',
        'authorizationTtl' => 'int',
        'authorizationStatus' => '\TencentAds\Model\V3\WechatChannelsAuthStatus',
        'auditMsg' => 'string',
        'authorizationType' => '\TencentAds\Model\V3\WechatChannelsAuthType',
        'authorizationScope' => '\TencentAds\Model\V3\WechatChannelsAuthScope',
        'isAdAcct' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'wechatChannelsAccountName' => null,
        'finderUsername' => null,
        'authorizationId' => null,
        'authorizationBeginTime' => 'int64',
        'authorizationTtl' => 'int64',
        'authorizationStatus' => null,
        'auditMsg' => null,
        'authorizationType' => null,
        'authorizationScope' => null,
        'isAdAcct' => null
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
        'wechatChannelsAccountName' => 'wechat_channels_account_name',
        'finderUsername' => 'finder_username',
        'authorizationId' => 'authorization_id',
        'authorizationBeginTime' => 'authorization_begin_time',
        'authorizationTtl' => 'authorization_ttl',
        'authorizationStatus' => 'authorization_status',
        'auditMsg' => 'audit_msg',
        'authorizationType' => 'authorization_type',
        'authorizationScope' => 'authorization_scope',
        'isAdAcct' => 'is_ad_acct'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wechatChannelsAccountName' => 'setWechatChannelsAccountName',
        'finderUsername' => 'setFinderUsername',
        'authorizationId' => 'setAuthorizationId',
        'authorizationBeginTime' => 'setAuthorizationBeginTime',
        'authorizationTtl' => 'setAuthorizationTtl',
        'authorizationStatus' => 'setAuthorizationStatus',
        'auditMsg' => 'setAuditMsg',
        'authorizationType' => 'setAuthorizationType',
        'authorizationScope' => 'setAuthorizationScope',
        'isAdAcct' => 'setIsAdAcct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wechatChannelsAccountName' => 'getWechatChannelsAccountName',
        'finderUsername' => 'getFinderUsername',
        'authorizationId' => 'getAuthorizationId',
        'authorizationBeginTime' => 'getAuthorizationBeginTime',
        'authorizationTtl' => 'getAuthorizationTtl',
        'authorizationStatus' => 'getAuthorizationStatus',
        'auditMsg' => 'getAuditMsg',
        'authorizationType' => 'getAuthorizationType',
        'authorizationScope' => 'getAuthorizationScope',
        'isAdAcct' => 'getIsAdAcct'
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
        $this->container['wechatChannelsAccountName'] = isset($data['wechatChannelsAccountName']) ? $data['wechatChannelsAccountName'] : null;
        $this->container['finderUsername'] = isset($data['finderUsername']) ? $data['finderUsername'] : null;
        $this->container['authorizationId'] = isset($data['authorizationId']) ? $data['authorizationId'] : null;
        $this->container['authorizationBeginTime'] = isset($data['authorizationBeginTime']) ? $data['authorizationBeginTime'] : null;
        $this->container['authorizationTtl'] = isset($data['authorizationTtl']) ? $data['authorizationTtl'] : null;
        $this->container['authorizationStatus'] = isset($data['authorizationStatus']) ? $data['authorizationStatus'] : null;
        $this->container['auditMsg'] = isset($data['auditMsg']) ? $data['auditMsg'] : null;
        $this->container['authorizationType'] = isset($data['authorizationType']) ? $data['authorizationType'] : null;
        $this->container['authorizationScope'] = isset($data['authorizationScope']) ? $data['authorizationScope'] : null;
        $this->container['isAdAcct'] = isset($data['isAdAcct']) ? $data['isAdAcct'] : null;
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
     * Gets wechatChannelsAccountName
     *
     * @return string|mixed
     */
    public function getWechatChannelsAccountName()
    {
        return $this->container['wechatChannelsAccountName'];
    }

    /**
     * Sets wechatChannelsAccountName
     *
     * @param string|mixed $wechatChannelsAccountName wechatChannelsAccountName
     *
     * @return $this
     */
    public function setWechatChannelsAccountName($wechatChannelsAccountName)
    {
        $this->container['wechatChannelsAccountName'] = $wechatChannelsAccountName;

        return $this;
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
     * Gets authorizationId
     *
     * @return string|mixed
     */
    public function getAuthorizationId()
    {
        return $this->container['authorizationId'];
    }

    /**
     * Sets authorizationId
     *
     * @param string|mixed $authorizationId authorizationId
     *
     * @return $this
     */
    public function setAuthorizationId($authorizationId)
    {
        $this->container['authorizationId'] = $authorizationId;

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
     * Gets auditMsg
     *
     * @return string|mixed
     */
    public function getAuditMsg()
    {
        return $this->container['auditMsg'];
    }

    /**
     * Sets auditMsg
     *
     * @param string|mixed $auditMsg auditMsg
     *
     * @return $this
     */
    public function setAuditMsg($auditMsg)
    {
        $this->container['auditMsg'] = $auditMsg;

        return $this;
    }

    /**
     * Gets authorizationType
     *
     * @return \TencentAds\Model\V3\WechatChannelsAuthType|mixed
     */
    public function getAuthorizationType()
    {
        return $this->container['authorizationType'];
    }

    /**
     * Sets authorizationType
     *
     * @param \TencentAds\Model\V3\WechatChannelsAuthType|mixed $authorizationType authorizationType
     *
     * @return $this
     */
    public function setAuthorizationType($authorizationType)
    {
        $this->container['authorizationType'] = $authorizationType;

        return $this;
    }

    /**
     * Gets authorizationScope
     *
     * @return \TencentAds\Model\V3\WechatChannelsAuthScope|mixed
     */
    public function getAuthorizationScope()
    {
        return $this->container['authorizationScope'];
    }

    /**
     * Sets authorizationScope
     *
     * @param \TencentAds\Model\V3\WechatChannelsAuthScope|mixed $authorizationScope authorizationScope
     *
     * @return $this
     */
    public function setAuthorizationScope($authorizationScope)
    {
        $this->container['authorizationScope'] = $authorizationScope;

        return $this;
    }

    /**
     * Gets isAdAcct
     *
     * @return bool|mixed
     */
    public function getIsAdAcct()
    {
        return $this->container['isAdAcct'];
    }

    /**
     * Sets isAdAcct
     *
     * @param bool|mixed $isAdAcct isAdAcct
     *
     * @return $this
     */
    public function setIsAdAcct($isAdAcct)
    {
        $this->container['isAdAcct'] = $isAdAcct;

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


