<?php
/**
 * TargetingsGetListStruct
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
 * TargetingsGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TargetingsGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TargetingsGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'targetingName' => 'string',
        'targeting' => '\TencentAds\Model\V3\ReadTargetingSetting',
        'targetingTranslation' => 'string',
        'isDeleted' => 'bool',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'targetingSourceType' => '\TencentAds\Model\V3\TargetingSourceType',
        'shareFromAccountId' => 'int',
        'shareFromTargetingId' => 'int',
        'targetingId' => 'int',
        'targetingSourceMsg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'targetingName' => null,
        'targeting' => null,
        'targetingTranslation' => null,
        'isDeleted' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'targetingSourceType' => null,
        'shareFromAccountId' => 'int64',
        'shareFromTargetingId' => 'int64',
        'targetingId' => 'int64',
        'targetingSourceMsg' => null
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
        'targetingName' => 'targeting_name',
        'targeting' => 'targeting',
        'targetingTranslation' => 'targeting_translation',
        'isDeleted' => 'is_deleted',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'targetingSourceType' => 'targeting_source_type',
        'shareFromAccountId' => 'share_from_account_id',
        'shareFromTargetingId' => 'share_from_targeting_id',
        'targetingId' => 'targeting_id',
        'targetingSourceMsg' => 'targeting_source_msg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'targetingName' => 'setTargetingName',
        'targeting' => 'setTargeting',
        'targetingTranslation' => 'setTargetingTranslation',
        'isDeleted' => 'setIsDeleted',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'targetingSourceType' => 'setTargetingSourceType',
        'shareFromAccountId' => 'setShareFromAccountId',
        'shareFromTargetingId' => 'setShareFromTargetingId',
        'targetingId' => 'setTargetingId',
        'targetingSourceMsg' => 'setTargetingSourceMsg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'targetingName' => 'getTargetingName',
        'targeting' => 'getTargeting',
        'targetingTranslation' => 'getTargetingTranslation',
        'isDeleted' => 'getIsDeleted',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'targetingSourceType' => 'getTargetingSourceType',
        'shareFromAccountId' => 'getShareFromAccountId',
        'shareFromTargetingId' => 'getShareFromTargetingId',
        'targetingId' => 'getTargetingId',
        'targetingSourceMsg' => 'getTargetingSourceMsg'
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
        $this->container['targetingName'] = isset($data['targetingName']) ? $data['targetingName'] : null;
        $this->container['targeting'] = isset($data['targeting']) ? $data['targeting'] : null;
        $this->container['targetingTranslation'] = isset($data['targetingTranslation']) ? $data['targetingTranslation'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['targetingSourceType'] = isset($data['targetingSourceType']) ? $data['targetingSourceType'] : null;
        $this->container['shareFromAccountId'] = isset($data['shareFromAccountId']) ? $data['shareFromAccountId'] : null;
        $this->container['shareFromTargetingId'] = isset($data['shareFromTargetingId']) ? $data['shareFromTargetingId'] : null;
        $this->container['targetingId'] = isset($data['targetingId']) ? $data['targetingId'] : null;
        $this->container['targetingSourceMsg'] = isset($data['targetingSourceMsg']) ? $data['targetingSourceMsg'] : null;
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
     * Gets targetingName
     *
     * @return string|mixed
     */
    public function getTargetingName()
    {
        return $this->container['targetingName'];
    }

    /**
     * Sets targetingName
     *
     * @param string|mixed $targetingName targetingName
     *
     * @return $this
     */
    public function setTargetingName($targetingName)
    {
        $this->container['targetingName'] = $targetingName;

        return $this;
    }

    /**
     * Gets targeting
     *
     * @return \TencentAds\Model\V3\ReadTargetingSetting|mixed
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param \TencentAds\Model\V3\ReadTargetingSetting|mixed $targeting targeting
     *
     * @return $this
     */
    public function setTargeting($targeting)
    {
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets targetingTranslation
     *
     * @return string|mixed
     */
    public function getTargetingTranslation()
    {
        return $this->container['targetingTranslation'];
    }

    /**
     * Sets targetingTranslation
     *
     * @param string|mixed $targetingTranslation targetingTranslation
     *
     * @return $this
     */
    public function setTargetingTranslation($targetingTranslation)
    {
        $this->container['targetingTranslation'] = $targetingTranslation;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool|mixed
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool|mixed $isDeleted isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

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
     * Gets targetingSourceType
     *
     * @return \TencentAds\Model\V3\TargetingSourceType|mixed
     */
    public function getTargetingSourceType()
    {
        return $this->container['targetingSourceType'];
    }

    /**
     * Sets targetingSourceType
     *
     * @param \TencentAds\Model\V3\TargetingSourceType|mixed $targetingSourceType targetingSourceType
     *
     * @return $this
     */
    public function setTargetingSourceType($targetingSourceType)
    {
        $this->container['targetingSourceType'] = $targetingSourceType;

        return $this;
    }

    /**
     * Gets shareFromAccountId
     *
     * @return int|mixed
     */
    public function getShareFromAccountId()
    {
        return $this->container['shareFromAccountId'];
    }

    /**
     * Sets shareFromAccountId
     *
     * @param int|mixed $shareFromAccountId shareFromAccountId
     *
     * @return $this
     */
    public function setShareFromAccountId($shareFromAccountId)
    {
        $this->container['shareFromAccountId'] = $shareFromAccountId;

        return $this;
    }

    /**
     * Gets shareFromTargetingId
     *
     * @return int|mixed
     */
    public function getShareFromTargetingId()
    {
        return $this->container['shareFromTargetingId'];
    }

    /**
     * Sets shareFromTargetingId
     *
     * @param int|mixed $shareFromTargetingId shareFromTargetingId
     *
     * @return $this
     */
    public function setShareFromTargetingId($shareFromTargetingId)
    {
        $this->container['shareFromTargetingId'] = $shareFromTargetingId;

        return $this;
    }

    /**
     * Gets targetingId
     *
     * @return int|mixed
     */
    public function getTargetingId()
    {
        return $this->container['targetingId'];
    }

    /**
     * Sets targetingId
     *
     * @param int|mixed $targetingId targetingId
     *
     * @return $this
     */
    public function setTargetingId($targetingId)
    {
        $this->container['targetingId'] = $targetingId;

        return $this;
    }

    /**
     * Gets targetingSourceMsg
     *
     * @return string|mixed
     */
    public function getTargetingSourceMsg()
    {
        return $this->container['targetingSourceMsg'];
    }

    /**
     * Sets targetingSourceMsg
     *
     * @param string|mixed $targetingSourceMsg targetingSourceMsg
     *
     * @return $this
     */
    public function setTargetingSourceMsg($targetingSourceMsg)
    {
        $this->container['targetingSourceMsg'] = $targetingSourceMsg;

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


