<?php
/**
 * ElementAppealQuotaGetResponseData
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
 * ElementAppealQuotaGetResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ElementAppealQuotaGetResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ElementAppealQuotaGetResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'hasPrivilege' => 'int',
        'dailyQuota' => 'int',
        'leaveQuota' => 'int',
        'quotaCalculateRule' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'hasPrivilege' => 'int64',
        'dailyQuota' => 'int64',
        'leaveQuota' => 'int64',
        'quotaCalculateRule' => null
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
        'accountId' => 'account_id',
        'hasPrivilege' => 'has_privilege',
        'dailyQuota' => 'daily_quota',
        'leaveQuota' => 'leave_quota',
        'quotaCalculateRule' => 'quota_calculate_rule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'hasPrivilege' => 'setHasPrivilege',
        'dailyQuota' => 'setDailyQuota',
        'leaveQuota' => 'setLeaveQuota',
        'quotaCalculateRule' => 'setQuotaCalculateRule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'hasPrivilege' => 'getHasPrivilege',
        'dailyQuota' => 'getDailyQuota',
        'leaveQuota' => 'getLeaveQuota',
        'quotaCalculateRule' => 'getQuotaCalculateRule'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['hasPrivilege'] = isset($data['hasPrivilege']) ? $data['hasPrivilege'] : null;
        $this->container['dailyQuota'] = isset($data['dailyQuota']) ? $data['dailyQuota'] : null;
        $this->container['leaveQuota'] = isset($data['leaveQuota']) ? $data['leaveQuota'] : null;
        $this->container['quotaCalculateRule'] = isset($data['quotaCalculateRule']) ? $data['quotaCalculateRule'] : null;
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
     * Gets hasPrivilege
     *
     * @return int|mixed
     */
    public function getHasPrivilege()
    {
        return $this->container['hasPrivilege'];
    }

    /**
     * Sets hasPrivilege
     *
     * @param int|mixed $hasPrivilege hasPrivilege
     *
     * @return $this
     */
    public function setHasPrivilege($hasPrivilege)
    {
        $this->container['hasPrivilege'] = $hasPrivilege;

        return $this;
    }

    /**
     * Gets dailyQuota
     *
     * @return int|mixed
     */
    public function getDailyQuota()
    {
        return $this->container['dailyQuota'];
    }

    /**
     * Sets dailyQuota
     *
     * @param int|mixed $dailyQuota dailyQuota
     *
     * @return $this
     */
    public function setDailyQuota($dailyQuota)
    {
        $this->container['dailyQuota'] = $dailyQuota;

        return $this;
    }

    /**
     * Gets leaveQuota
     *
     * @return int|mixed
     */
    public function getLeaveQuota()
    {
        return $this->container['leaveQuota'];
    }

    /**
     * Sets leaveQuota
     *
     * @param int|mixed $leaveQuota leaveQuota
     *
     * @return $this
     */
    public function setLeaveQuota($leaveQuota)
    {
        $this->container['leaveQuota'] = $leaveQuota;

        return $this;
    }

    /**
     * Gets quotaCalculateRule
     *
     * @return string|mixed
     */
    public function getQuotaCalculateRule()
    {
        return $this->container['quotaCalculateRule'];
    }

    /**
     * Sets quotaCalculateRule
     *
     * @param string|mixed $quotaCalculateRule quotaCalculateRule
     *
     * @return $this
     */
    public function setQuotaCalculateRule($quotaCalculateRule)
    {
        $this->container['quotaCalculateRule'] = $quotaCalculateRule;

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


