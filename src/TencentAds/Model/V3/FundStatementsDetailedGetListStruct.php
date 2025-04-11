<?php
/**
 * FundStatementsDetailedGetListStruct
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
 * FundStatementsDetailedGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FundStatementsDetailedGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FundStatementsDetailedGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'fundType' => '\TencentAds\Model\V3\AccountTypeMap',
        'balance' => 'int',
        'time' => 'int',
        'externalBillNo' => 'string',
        'tradeTypeExt' => '\TencentAds\Model\V3\TradeTypeExt',
        'amount' => 'int',
        'description' => 'string',
        'primaryKey' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'fundType' => null,
        'balance' => 'int64',
        'time' => 'int64',
        'externalBillNo' => null,
        'tradeTypeExt' => null,
        'amount' => 'int64',
        'description' => null,
        'primaryKey' => null
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
        'fundType' => 'fund_type',
        'balance' => 'balance',
        'time' => 'time',
        'externalBillNo' => 'external_bill_no',
        'tradeTypeExt' => 'trade_type_ext',
        'amount' => 'amount',
        'description' => 'description',
        'primaryKey' => 'primary_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'fundType' => 'setFundType',
        'balance' => 'setBalance',
        'time' => 'setTime',
        'externalBillNo' => 'setExternalBillNo',
        'tradeTypeExt' => 'setTradeTypeExt',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'primaryKey' => 'setPrimaryKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'fundType' => 'getFundType',
        'balance' => 'getBalance',
        'time' => 'getTime',
        'externalBillNo' => 'getExternalBillNo',
        'tradeTypeExt' => 'getTradeTypeExt',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'primaryKey' => 'getPrimaryKey'
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
        $this->container['fundType'] = isset($data['fundType']) ? $data['fundType'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['externalBillNo'] = isset($data['externalBillNo']) ? $data['externalBillNo'] : null;
        $this->container['tradeTypeExt'] = isset($data['tradeTypeExt']) ? $data['tradeTypeExt'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['primaryKey'] = isset($data['primaryKey']) ? $data['primaryKey'] : null;
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
     * Gets fundType
     *
     * @return \TencentAds\Model\V3\AccountTypeMap|mixed
     */
    public function getFundType()
    {
        return $this->container['fundType'];
    }

    /**
     * Sets fundType
     *
     * @param \TencentAds\Model\V3\AccountTypeMap|mixed $fundType fundType
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
     * Gets time
     *
     * @return int|mixed
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int|mixed $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets externalBillNo
     *
     * @return string|mixed
     */
    public function getExternalBillNo()
    {
        return $this->container['externalBillNo'];
    }

    /**
     * Sets externalBillNo
     *
     * @param string|mixed $externalBillNo externalBillNo
     *
     * @return $this
     */
    public function setExternalBillNo($externalBillNo)
    {
        $this->container['externalBillNo'] = $externalBillNo;

        return $this;
    }

    /**
     * Gets tradeTypeExt
     *
     * @return \TencentAds\Model\V3\TradeTypeExt|mixed
     */
    public function getTradeTypeExt()
    {
        return $this->container['tradeTypeExt'];
    }

    /**
     * Sets tradeTypeExt
     *
     * @param \TencentAds\Model\V3\TradeTypeExt|mixed $tradeTypeExt tradeTypeExt
     *
     * @return $this
     */
    public function setTradeTypeExt($tradeTypeExt)
    {
        $this->container['tradeTypeExt'] = $tradeTypeExt;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|mixed
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|mixed $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * Gets primaryKey
     *
     * @return string|mixed
     */
    public function getPrimaryKey()
    {
        return $this->container['primaryKey'];
    }

    /**
     * Sets primaryKey
     *
     * @param string|mixed $primaryKey primaryKey
     *
     * @return $this
     */
    public function setPrimaryKey($primaryKey)
    {
        $this->container['primaryKey'] = $primaryKey;

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


