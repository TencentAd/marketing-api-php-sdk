<?php
/**
 * CustomAudience
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
 * CustomAudience Class Doc Comment
 *
 * @category Class
 * @description custom_audience返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomAudience implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'custom_audience';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'audienceId' => 'int',
        'accountId' => 'int',
        'name' => 'string',
        'description' => 'string',
        'type' => '\TencentAds\Model\AudienceType',
        'status' => '\TencentAds\Model\ProcessStatus',
        'errorCode' => 'int',
        'userCount' => 'int',
        'createdTime' => 'string',
        'lastModifiedTime' => 'string',
        'audienceSpec' => '\TencentAds\Model\AudienceSpec',
        'externalAudienceId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'audienceId' => 'int64',
        'accountId' => 'int64',
        'name' => null,
        'description' => null,
        'type' => null,
        'status' => null,
        'errorCode' => 'int64',
        'userCount' => 'int64',
        'createdTime' => null,
        'lastModifiedTime' => null,
        'audienceSpec' => null,
        'externalAudienceId' => null
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
        'audienceId' => 'audience_id',
        'accountId' => 'account_id',
        'name' => 'name',
        'description' => 'description',
        'type' => 'type',
        'status' => 'status',
        'errorCode' => 'error_code',
        'userCount' => 'user_count',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'audienceSpec' => 'audience_spec',
        'externalAudienceId' => 'external_audience_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audienceId' => 'setAudienceId',
        'accountId' => 'setAccountId',
        'name' => 'setName',
        'description' => 'setDescription',
        'type' => 'setType',
        'status' => 'setStatus',
        'errorCode' => 'setErrorCode',
        'userCount' => 'setUserCount',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'audienceSpec' => 'setAudienceSpec',
        'externalAudienceId' => 'setExternalAudienceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audienceId' => 'getAudienceId',
        'accountId' => 'getAccountId',
        'name' => 'getName',
        'description' => 'getDescription',
        'type' => 'getType',
        'status' => 'getStatus',
        'errorCode' => 'getErrorCode',
        'userCount' => 'getUserCount',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'audienceSpec' => 'getAudienceSpec',
        'externalAudienceId' => 'getExternalAudienceId'
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
        $this->container['audienceId'] = isset($data['audienceId']) ? $data['audienceId'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['userCount'] = isset($data['userCount']) ? $data['userCount'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['audienceSpec'] = isset($data['audienceSpec']) ? $data['audienceSpec'] : null;
        $this->container['externalAudienceId'] = isset($data['externalAudienceId']) ? $data['externalAudienceId'] : null;
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
     * Gets audienceId
     *
     * @return int|mixed
     */
    public function getAudienceId()
    {
        return $this->container['audienceId'];
    }

    /**
     * Sets audienceId
     *
     * @param int|mixed $audienceId audienceId
     *
     * @return $this
     */
    public function setAudienceId($audienceId)
    {
        $this->container['audienceId'] = $audienceId;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int|mixed
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int|mixed $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|mixed
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|mixed $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets type
     *
     * @return \TencentAds\Model\AudienceType|mixed
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \TencentAds\Model\AudienceType|mixed $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \TencentAds\Model\ProcessStatus|mixed
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \TencentAds\Model\ProcessStatus|mixed $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return int|mixed
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param int|mixed $errorCode errorCode
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets userCount
     *
     * @return int|mixed
     */
    public function getUserCount()
    {
        return $this->container['userCount'];
    }

    /**
     * Sets userCount
     *
     * @param int|mixed $userCount userCount
     *
     * @return $this
     */
    public function setUserCount($userCount)
    {
        $this->container['userCount'] = $userCount;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return string|mixed
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param string|mixed $createdTime createdTime
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
     * @return string|mixed
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     *
     * @param string|mixed $lastModifiedTime lastModifiedTime
     *
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

        return $this;
    }

    /**
     * Gets audienceSpec
     *
     * @return \TencentAds\Model\AudienceSpec|mixed
     */
    public function getAudienceSpec()
    {
        return $this->container['audienceSpec'];
    }

    /**
     * Sets audienceSpec
     *
     * @param \TencentAds\Model\AudienceSpec|mixed $audienceSpec audienceSpec
     *
     * @return $this
     */
    public function setAudienceSpec($audienceSpec)
    {
        $this->container['audienceSpec'] = $audienceSpec;

        return $this;
    }

    /**
     * Gets externalAudienceId
     *
     * @return string|mixed
     */
    public function getExternalAudienceId()
    {
        return $this->container['externalAudienceId'];
    }

    /**
     * Sets externalAudienceId
     *
     * @param string|mixed $externalAudienceId externalAudienceId
     *
     * @return $this
     */
    public function setExternalAudienceId($externalAudienceId)
    {
        $this->container['externalAudienceId'] = $externalAudienceId;

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


