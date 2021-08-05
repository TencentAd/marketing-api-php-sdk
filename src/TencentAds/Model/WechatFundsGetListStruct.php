<?php
/**
 * WechatFundsGetListStruct
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
 * WechatFundsGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatFundsGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WechatFundsGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fundType' => '\TencentAds\Model\WechatMpOpenFundType',
        'balance' => 'int',
        'creditRollSpec' => '\TencentAds\Model\CreditRollSpec',
        'miniprogramSpec' => '\TencentAds\Model\MiniprogramAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fundType' => null,
        'balance' => 'int64',
        'creditRollSpec' => null,
        'miniprogramSpec' => null
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
        'fundType' => 'fund_type',
        'balance' => 'balance',
        'creditRollSpec' => 'credit_roll_spec',
        'miniprogramSpec' => 'miniprogram_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fundType' => 'setFundType',
        'balance' => 'setBalance',
        'creditRollSpec' => 'setCreditRollSpec',
        'miniprogramSpec' => 'setMiniprogramSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fundType' => 'getFundType',
        'balance' => 'getBalance',
        'creditRollSpec' => 'getCreditRollSpec',
        'miniprogramSpec' => 'getMiniprogramSpec'
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
        $this->container['fundType'] = isset($data['fundType']) ? $data['fundType'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['creditRollSpec'] = isset($data['creditRollSpec']) ? $data['creditRollSpec'] : null;
        $this->container['miniprogramSpec'] = isset($data['miniprogramSpec']) ? $data['miniprogramSpec'] : null;
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
     * Gets fundType
     *
     * @return \TencentAds\Model\WechatMpOpenFundType|mixed
     */
    public function getFundType()
    {
        return $this->container['fundType'];
    }

    /**
     * Sets fundType
     *
     * @param \TencentAds\Model\WechatMpOpenFundType|mixed $fundType fundType
     *
     * @return $this
     */
    public function setFundType($fundType)
    {
        $this->container['fundType'] = $fundType;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int|mixed
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int|mixed $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets creditRollSpec
     *
     * @return \TencentAds\Model\CreditRollSpec|mixed
     */
    public function getCreditRollSpec()
    {
        return $this->container['creditRollSpec'];
    }

    /**
     * Sets creditRollSpec
     *
     * @param \TencentAds\Model\CreditRollSpec|mixed $creditRollSpec creditRollSpec
     *
     * @return $this
     */
    public function setCreditRollSpec($creditRollSpec)
    {
        $this->container['creditRollSpec'] = $creditRollSpec;

        return $this;
    }

    /**
     * Gets miniprogramSpec
     *
     * @return \TencentAds\Model\MiniprogramAmount|mixed
     */
    public function getMiniprogramSpec()
    {
        return $this->container['miniprogramSpec'];
    }

    /**
     * Sets miniprogramSpec
     *
     * @param \TencentAds\Model\MiniprogramAmount|mixed $miniprogramSpec miniprogramSpec
     *
     * @return $this
     */
    public function setMiniprogramSpec($miniprogramSpec)
    {
        $this->container['miniprogramSpec'] = $miniprogramSpec;

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


