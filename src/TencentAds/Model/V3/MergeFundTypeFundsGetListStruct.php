<?php
/**
 * MergeFundTypeFundsGetListStruct
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
 * MergeFundTypeFundsGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MergeFundTypeFundsGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MergeFundTypeFundsGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fundType' => '\TencentAds\Model\V3\AccountMergeTypeMap',
        'balance' => 'int',
        'billDepositAmount' => 'int',
        'fundStatus' => '\TencentAds\Model\V3\FundStatus',
        'realtimeCost' => 'int',
        'effectFunds' => '\TencentAds\Model\V3\EffectListStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fundType' => null,
        'balance' => 'int64',
        'billDepositAmount' => 'int64',
        'fundStatus' => null,
        'realtimeCost' => 'int64',
        'effectFunds' => null
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
        'billDepositAmount' => 'bill_deposit_amount',
        'fundStatus' => 'fund_status',
        'realtimeCost' => 'realtime_cost',
        'effectFunds' => 'effect_funds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fundType' => 'setFundType',
        'balance' => 'setBalance',
        'billDepositAmount' => 'setBillDepositAmount',
        'fundStatus' => 'setFundStatus',
        'realtimeCost' => 'setRealtimeCost',
        'effectFunds' => 'setEffectFunds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fundType' => 'getFundType',
        'balance' => 'getBalance',
        'billDepositAmount' => 'getBillDepositAmount',
        'fundStatus' => 'getFundStatus',
        'realtimeCost' => 'getRealtimeCost',
        'effectFunds' => 'getEffectFunds'
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
        $this->container['billDepositAmount'] = isset($data['billDepositAmount']) ? $data['billDepositAmount'] : null;
        $this->container['fundStatus'] = isset($data['fundStatus']) ? $data['fundStatus'] : null;
        $this->container['realtimeCost'] = isset($data['realtimeCost']) ? $data['realtimeCost'] : null;
        $this->container['effectFunds'] = isset($data['effectFunds']) ? $data['effectFunds'] : null;
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
     * @return \TencentAds\Model\V3\AccountMergeTypeMap|mixed
     */
    public function getFundType()
    {
        return $this->container['fundType'];
    }

    /**
     * Sets fundType
     *
     * @param \TencentAds\Model\V3\AccountMergeTypeMap|mixed $fundType fundType
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
     * Gets billDepositAmount
     *
     * @return int|mixed
     */
    public function getBillDepositAmount()
    {
        return $this->container['billDepositAmount'];
    }

    /**
     * Sets billDepositAmount
     *
     * @param int|mixed $billDepositAmount billDepositAmount
     *
     * @return $this
     */
    public function setBillDepositAmount($billDepositAmount)
    {
        $this->container['billDepositAmount'] = $billDepositAmount;

        return $this;
    }

    /**
     * Gets fundStatus
     *
     * @return \TencentAds\Model\V3\FundStatus|mixed
     */
    public function getFundStatus()
    {
        return $this->container['fundStatus'];
    }

    /**
     * Sets fundStatus
     *
     * @param \TencentAds\Model\V3\FundStatus|mixed $fundStatus fundStatus
     *
     * @return $this
     */
    public function setFundStatus($fundStatus)
    {
        $this->container['fundStatus'] = $fundStatus;

        return $this;
    }

    /**
     * Gets realtimeCost
     *
     * @return int|mixed
     */
    public function getRealtimeCost()
    {
        return $this->container['realtimeCost'];
    }

    /**
     * Sets realtimeCost
     *
     * @param int|mixed $realtimeCost realtimeCost
     *
     * @return $this
     */
    public function setRealtimeCost($realtimeCost)
    {
        $this->container['realtimeCost'] = $realtimeCost;

        return $this;
    }

    /**
     * Gets effectFunds
     *
     * @return \TencentAds\Model\V3\EffectListStruct[]|mixed
     */
    public function getEffectFunds()
    {
        return $this->container['effectFunds'];
    }

    /**
     * Sets effectFunds
     *
     * @param \TencentAds\Model\V3\EffectListStruct[]|mixed $effectFunds effectFunds
     *
     * @return $this
     */
    public function setEffectFunds($effectFunds)
    {
        $this->container['effectFunds'] = $effectFunds;

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


