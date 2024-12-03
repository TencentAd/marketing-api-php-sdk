<?php
/**
 * WechatChannelsAccountStruct
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
 * WechatChannelsAccountStruct Class Doc Comment
 *
 * @category Class
 * @description 视频号列表
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatChannelsAccountStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'wechat_channels_account_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wechatChannelsAccountId' => 'string',
        'wechatChannelsAccountName' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'wechatChannelsSpamBlock' => 'bool',
        'wechatChannelsSpamSlient' => 'bool',
        'wechatChannelsAccountIcon' => 'string',
        'authorizationType' => '\TencentAds\Model\V3\WechatChannelsAuthType',
        'authorizationScope' => '\TencentAds\Model\V3\WechatChannelsAuthScope',
        'isBlocked' => 'bool',
        'isPrivate' => 'bool',
        'isAdAcct' => 'bool',
        'authorizationBeginTime' => 'int',
        'authorizationTtl' => 'int',
        'isDisable' => 'bool',
        'disableMessage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'wechatChannelsAccountId' => null,
        'wechatChannelsAccountName' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'wechatChannelsSpamBlock' => null,
        'wechatChannelsSpamSlient' => null,
        'wechatChannelsAccountIcon' => null,
        'authorizationType' => null,
        'authorizationScope' => null,
        'isBlocked' => null,
        'isPrivate' => null,
        'isAdAcct' => null,
        'authorizationBeginTime' => 'int64',
        'authorizationTtl' => 'int64',
        'isDisable' => null,
        'disableMessage' => null
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
        'wechatChannelsAccountId' => 'wechat_channels_account_id',
        'wechatChannelsAccountName' => 'wechat_channels_account_name',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'wechatChannelsSpamBlock' => 'wechat_channels_spam_block',
        'wechatChannelsSpamSlient' => 'wechat_channels_spam_slient',
        'wechatChannelsAccountIcon' => 'wechat_channels_account_icon',
        'authorizationType' => 'authorization_type',
        'authorizationScope' => 'authorization_scope',
        'isBlocked' => 'is_blocked',
        'isPrivate' => 'is_private',
        'isAdAcct' => 'is_ad_acct',
        'authorizationBeginTime' => 'authorization_begin_time',
        'authorizationTtl' => 'authorization_ttl',
        'isDisable' => 'is_disable',
        'disableMessage' => 'disable_message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wechatChannelsAccountId' => 'setWechatChannelsAccountId',
        'wechatChannelsAccountName' => 'setWechatChannelsAccountName',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'wechatChannelsSpamBlock' => 'setWechatChannelsSpamBlock',
        'wechatChannelsSpamSlient' => 'setWechatChannelsSpamSlient',
        'wechatChannelsAccountIcon' => 'setWechatChannelsAccountIcon',
        'authorizationType' => 'setAuthorizationType',
        'authorizationScope' => 'setAuthorizationScope',
        'isBlocked' => 'setIsBlocked',
        'isPrivate' => 'setIsPrivate',
        'isAdAcct' => 'setIsAdAcct',
        'authorizationBeginTime' => 'setAuthorizationBeginTime',
        'authorizationTtl' => 'setAuthorizationTtl',
        'isDisable' => 'setIsDisable',
        'disableMessage' => 'setDisableMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wechatChannelsAccountId' => 'getWechatChannelsAccountId',
        'wechatChannelsAccountName' => 'getWechatChannelsAccountName',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'wechatChannelsSpamBlock' => 'getWechatChannelsSpamBlock',
        'wechatChannelsSpamSlient' => 'getWechatChannelsSpamSlient',
        'wechatChannelsAccountIcon' => 'getWechatChannelsAccountIcon',
        'authorizationType' => 'getAuthorizationType',
        'authorizationScope' => 'getAuthorizationScope',
        'isBlocked' => 'getIsBlocked',
        'isPrivate' => 'getIsPrivate',
        'isAdAcct' => 'getIsAdAcct',
        'authorizationBeginTime' => 'getAuthorizationBeginTime',
        'authorizationTtl' => 'getAuthorizationTtl',
        'isDisable' => 'getIsDisable',
        'disableMessage' => 'getDisableMessage'
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
        $this->container['wechatChannelsAccountId'] = isset($data['wechatChannelsAccountId']) ? $data['wechatChannelsAccountId'] : null;
        $this->container['wechatChannelsAccountName'] = isset($data['wechatChannelsAccountName']) ? $data['wechatChannelsAccountName'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['wechatChannelsSpamBlock'] = isset($data['wechatChannelsSpamBlock']) ? $data['wechatChannelsSpamBlock'] : null;
        $this->container['wechatChannelsSpamSlient'] = isset($data['wechatChannelsSpamSlient']) ? $data['wechatChannelsSpamSlient'] : null;
        $this->container['wechatChannelsAccountIcon'] = isset($data['wechatChannelsAccountIcon']) ? $data['wechatChannelsAccountIcon'] : null;
        $this->container['authorizationType'] = isset($data['authorizationType']) ? $data['authorizationType'] : null;
        $this->container['authorizationScope'] = isset($data['authorizationScope']) ? $data['authorizationScope'] : null;
        $this->container['isBlocked'] = isset($data['isBlocked']) ? $data['isBlocked'] : null;
        $this->container['isPrivate'] = isset($data['isPrivate']) ? $data['isPrivate'] : null;
        $this->container['isAdAcct'] = isset($data['isAdAcct']) ? $data['isAdAcct'] : null;
        $this->container['authorizationBeginTime'] = isset($data['authorizationBeginTime']) ? $data['authorizationBeginTime'] : null;
        $this->container['authorizationTtl'] = isset($data['authorizationTtl']) ? $data['authorizationTtl'] : null;
        $this->container['isDisable'] = isset($data['isDisable']) ? $data['isDisable'] : null;
        $this->container['disableMessage'] = isset($data['disableMessage']) ? $data['disableMessage'] : null;
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
     * Gets wechatChannelsSpamBlock
     *
     * @return bool|mixed
     */
    public function getWechatChannelsSpamBlock()
    {
        return $this->container['wechatChannelsSpamBlock'];
    }

    /**
     * Sets wechatChannelsSpamBlock
     *
     * @param bool|mixed $wechatChannelsSpamBlock wechatChannelsSpamBlock
     *
     * @return $this
     */
    public function setWechatChannelsSpamBlock($wechatChannelsSpamBlock)
    {
        $this->container['wechatChannelsSpamBlock'] = $wechatChannelsSpamBlock;

        return $this;
    }

    /**
     * Gets wechatChannelsSpamSlient
     *
     * @return bool|mixed
     */
    public function getWechatChannelsSpamSlient()
    {
        return $this->container['wechatChannelsSpamSlient'];
    }

    /**
     * Sets wechatChannelsSpamSlient
     *
     * @param bool|mixed $wechatChannelsSpamSlient wechatChannelsSpamSlient
     *
     * @return $this
     */
    public function setWechatChannelsSpamSlient($wechatChannelsSpamSlient)
    {
        $this->container['wechatChannelsSpamSlient'] = $wechatChannelsSpamSlient;

        return $this;
    }

    /**
     * Gets wechatChannelsAccountIcon
     *
     * @return string|mixed
     */
    public function getWechatChannelsAccountIcon()
    {
        return $this->container['wechatChannelsAccountIcon'];
    }

    /**
     * Sets wechatChannelsAccountIcon
     *
     * @param string|mixed $wechatChannelsAccountIcon wechatChannelsAccountIcon
     *
     * @return $this
     */
    public function setWechatChannelsAccountIcon($wechatChannelsAccountIcon)
    {
        $this->container['wechatChannelsAccountIcon'] = $wechatChannelsAccountIcon;

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
     * Gets isBlocked
     *
     * @return bool|mixed
     */
    public function getIsBlocked()
    {
        return $this->container['isBlocked'];
    }

    /**
     * Sets isBlocked
     *
     * @param bool|mixed $isBlocked isBlocked
     *
     * @return $this
     */
    public function setIsBlocked($isBlocked)
    {
        $this->container['isBlocked'] = $isBlocked;

        return $this;
    }

    /**
     * Gets isPrivate
     *
     * @return bool|mixed
     */
    public function getIsPrivate()
    {
        return $this->container['isPrivate'];
    }

    /**
     * Sets isPrivate
     *
     * @param bool|mixed $isPrivate isPrivate
     *
     * @return $this
     */
    public function setIsPrivate($isPrivate)
    {
        $this->container['isPrivate'] = $isPrivate;

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
     * Gets isDisable
     *
     * @return bool|mixed
     */
    public function getIsDisable()
    {
        return $this->container['isDisable'];
    }

    /**
     * Sets isDisable
     *
     * @param bool|mixed $isDisable isDisable
     *
     * @return $this
     */
    public function setIsDisable($isDisable)
    {
        $this->container['isDisable'] = $isDisable;

        return $this;
    }

    /**
     * Gets disableMessage
     *
     * @return string|mixed
     */
    public function getDisableMessage()
    {
        return $this->container['disableMessage'];
    }

    /**
     * Sets disableMessage
     *
     * @param string|mixed $disableMessage disableMessage
     *
     * @return $this
     */
    public function setDisableMessage($disableMessage)
    {
        $this->container['disableMessage'] = $disableMessage;

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


