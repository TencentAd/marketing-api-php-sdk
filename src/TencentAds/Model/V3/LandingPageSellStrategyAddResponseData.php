<?php
/**
 * LandingPageSellStrategyAddResponseData
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
 * LandingPageSellStrategyAddResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandingPageSellStrategyAddResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LandingPageSellStrategyAddResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'strategyId' => 'int',
        'strategyName' => 'string',
        'strategyType' => 'string',
        'strategyStatus' => 'int',
        'episodePrice' => 'double',
        'minRechargeTier' => 'double',
        'rechargeNum' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'strategyId' => 'int64',
        'strategyName' => null,
        'strategyType' => null,
        'strategyStatus' => 'int64',
        'episodePrice' => 'double',
        'minRechargeTier' => 'double',
        'rechargeNum' => 'int64'
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
        'strategyId' => 'strategy_id',
        'strategyName' => 'strategy_name',
        'strategyType' => 'strategy_type',
        'strategyStatus' => 'strategy_status',
        'episodePrice' => 'episode_price',
        'minRechargeTier' => 'min_recharge_tier',
        'rechargeNum' => 'recharge_num'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'strategyId' => 'setStrategyId',
        'strategyName' => 'setStrategyName',
        'strategyType' => 'setStrategyType',
        'strategyStatus' => 'setStrategyStatus',
        'episodePrice' => 'setEpisodePrice',
        'minRechargeTier' => 'setMinRechargeTier',
        'rechargeNum' => 'setRechargeNum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'strategyId' => 'getStrategyId',
        'strategyName' => 'getStrategyName',
        'strategyType' => 'getStrategyType',
        'strategyStatus' => 'getStrategyStatus',
        'episodePrice' => 'getEpisodePrice',
        'minRechargeTier' => 'getMinRechargeTier',
        'rechargeNum' => 'getRechargeNum'
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
        $this->container['strategyId'] = isset($data['strategyId']) ? $data['strategyId'] : null;
        $this->container['strategyName'] = isset($data['strategyName']) ? $data['strategyName'] : null;
        $this->container['strategyType'] = isset($data['strategyType']) ? $data['strategyType'] : null;
        $this->container['strategyStatus'] = isset($data['strategyStatus']) ? $data['strategyStatus'] : null;
        $this->container['episodePrice'] = isset($data['episodePrice']) ? $data['episodePrice'] : null;
        $this->container['minRechargeTier'] = isset($data['minRechargeTier']) ? $data['minRechargeTier'] : null;
        $this->container['rechargeNum'] = isset($data['rechargeNum']) ? $data['rechargeNum'] : null;
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
     * Gets strategyId
     *
     * @return int|mixed
     */
    public function getStrategyId()
    {
        return $this->container['strategyId'];
    }

    /**
     * Sets strategyId
     *
     * @param int|mixed $strategyId strategyId
     *
     * @return $this
     */
    public function setStrategyId($strategyId)
    {
        $this->container['strategyId'] = $strategyId;

        return $this;
    }

    /**
     * Gets strategyName
     *
     * @return string|mixed
     */
    public function getStrategyName()
    {
        return $this->container['strategyName'];
    }

    /**
     * Sets strategyName
     *
     * @param string|mixed $strategyName strategyName
     *
     * @return $this
     */
    public function setStrategyName($strategyName)
    {
        $this->container['strategyName'] = $strategyName;

        return $this;
    }

    /**
     * Gets strategyType
     *
     * @return string|mixed
     */
    public function getStrategyType()
    {
        return $this->container['strategyType'];
    }

    /**
     * Sets strategyType
     *
     * @param string|mixed $strategyType strategyType
     *
     * @return $this
     */
    public function setStrategyType($strategyType)
    {
        $this->container['strategyType'] = $strategyType;

        return $this;
    }

    /**
     * Gets strategyStatus
     *
     * @return int|mixed
     */
    public function getStrategyStatus()
    {
        return $this->container['strategyStatus'];
    }

    /**
     * Sets strategyStatus
     *
     * @param int|mixed $strategyStatus strategyStatus
     *
     * @return $this
     */
    public function setStrategyStatus($strategyStatus)
    {
        $this->container['strategyStatus'] = $strategyStatus;

        return $this;
    }

    /**
     * Gets episodePrice
     *
     * @return double|mixed
     */
    public function getEpisodePrice()
    {
        return $this->container['episodePrice'];
    }

    /**
     * Sets episodePrice
     *
     * @param double|mixed $episodePrice episodePrice
     *
     * @return $this
     */
    public function setEpisodePrice($episodePrice)
    {
        $this->container['episodePrice'] = $episodePrice;

        return $this;
    }

    /**
     * Gets minRechargeTier
     *
     * @return double|mixed
     */
    public function getMinRechargeTier()
    {
        return $this->container['minRechargeTier'];
    }

    /**
     * Sets minRechargeTier
     *
     * @param double|mixed $minRechargeTier minRechargeTier
     *
     * @return $this
     */
    public function setMinRechargeTier($minRechargeTier)
    {
        $this->container['minRechargeTier'] = $minRechargeTier;

        return $this;
    }

    /**
     * Gets rechargeNum
     *
     * @return int|mixed
     */
    public function getRechargeNum()
    {
        return $this->container['rechargeNum'];
    }

    /**
     * Sets rechargeNum
     *
     * @param int|mixed $rechargeNum rechargeNum
     *
     * @return $this
     */
    public function setRechargeNum($rechargeNum)
    {
        $this->container['rechargeNum'] = $rechargeNum;

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


