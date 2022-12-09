<?php
/**
 * BidwordRespStruct
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
 * BidwordRespStruct Class Doc Comment
 *
 * @category Class
 * @description 返回的关键词信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidwordRespStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bidword_resp_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'index' => 'int',
        'bidwordId' => 'int',
        'bidword' => 'string',
        'bidPrice' => 'int',
        'matchType' => '\TencentAds\Model\BidwordMatchType',
        'configuredStatus' => '\TencentAds\Model\BidwordPauseType',
        'errorMsg' => 'string',
        'approvalStatus' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'index' => 'int64',
        'bidwordId' => 'int64',
        'bidword' => null,
        'bidPrice' => 'int64',
        'matchType' => null,
        'configuredStatus' => null,
        'errorMsg' => null,
        'approvalStatus' => 'int64'
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
        'index' => 'index',
        'bidwordId' => 'bidword_id',
        'bidword' => 'bidword',
        'bidPrice' => 'bid_price',
        'matchType' => 'match_type',
        'configuredStatus' => 'configured_status',
        'errorMsg' => 'error_msg',
        'approvalStatus' => 'approval_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'bidwordId' => 'setBidwordId',
        'bidword' => 'setBidword',
        'bidPrice' => 'setBidPrice',
        'matchType' => 'setMatchType',
        'configuredStatus' => 'setConfiguredStatus',
        'errorMsg' => 'setErrorMsg',
        'approvalStatus' => 'setApprovalStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'bidwordId' => 'getBidwordId',
        'bidword' => 'getBidword',
        'bidPrice' => 'getBidPrice',
        'matchType' => 'getMatchType',
        'configuredStatus' => 'getConfiguredStatus',
        'errorMsg' => 'getErrorMsg',
        'approvalStatus' => 'getApprovalStatus'
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['bidwordId'] = isset($data['bidwordId']) ? $data['bidwordId'] : null;
        $this->container['bidword'] = isset($data['bidword']) ? $data['bidword'] : null;
        $this->container['bidPrice'] = isset($data['bidPrice']) ? $data['bidPrice'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['configuredStatus'] = isset($data['configuredStatus']) ? $data['configuredStatus'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['approvalStatus'] = isset($data['approvalStatus']) ? $data['approvalStatus'] : null;
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
     * Gets index
     *
     * @return int|mixed
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|mixed $index index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets bidwordId
     *
     * @return int|mixed
     */
    public function getBidwordId()
    {
        return $this->container['bidwordId'];
    }

    /**
     * Sets bidwordId
     *
     * @param int|mixed $bidwordId bidwordId
     *
     * @return $this
     */
    public function setBidwordId($bidwordId)
    {
        $this->container['bidwordId'] = $bidwordId;

        return $this;
    }

    /**
     * Gets bidword
     *
     * @return string|mixed
     */
    public function getBidword()
    {
        return $this->container['bidword'];
    }

    /**
     * Sets bidword
     *
     * @param string|mixed $bidword bidword
     *
     * @return $this
     */
    public function setBidword($bidword)
    {
        $this->container['bidword'] = $bidword;

        return $this;
    }

    /**
     * Gets bidPrice
     *
     * @return int|mixed
     */
    public function getBidPrice()
    {
        return $this->container['bidPrice'];
    }

    /**
     * Sets bidPrice
     *
     * @param int|mixed $bidPrice bidPrice
     *
     * @return $this
     */
    public function setBidPrice($bidPrice)
    {
        $this->container['bidPrice'] = $bidPrice;

        return $this;
    }

    /**
     * Gets matchType
     *
     * @return \TencentAds\Model\BidwordMatchType|mixed
     */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
     * Sets matchType
     *
     * @param \TencentAds\Model\BidwordMatchType|mixed $matchType matchType
     *
     * @return $this
     */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;

        return $this;
    }

    /**
     * Gets configuredStatus
     *
     * @return \TencentAds\Model\BidwordPauseType|mixed
     */
    public function getConfiguredStatus()
    {
        return $this->container['configuredStatus'];
    }

    /**
     * Sets configuredStatus
     *
     * @param \TencentAds\Model\BidwordPauseType|mixed $configuredStatus configuredStatus
     *
     * @return $this
     */
    public function setConfiguredStatus($configuredStatus)
    {
        $this->container['configuredStatus'] = $configuredStatus;

        return $this;
    }

    /**
     * Gets errorMsg
     *
     * @return string|mixed
     */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
     * Sets errorMsg
     *
     * @param string|mixed $errorMsg errorMsg
     *
     * @return $this
     */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;

        return $this;
    }

    /**
     * Gets approvalStatus
     *
     * @return int|mixed
     */
    public function getApprovalStatus()
    {
        return $this->container['approvalStatus'];
    }

    /**
     * Sets approvalStatus
     *
     * @param int|mixed $approvalStatus approvalStatus
     *
     * @return $this
     */
    public function setApprovalStatus($approvalStatus)
    {
        $this->container['approvalStatus'] = $approvalStatus;

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

