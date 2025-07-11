<?php
/**
 * BidwordStruct
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
 * BidwordStruct Class Doc Comment
 *
 * @category Class
 * @description 关键词信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidwordStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bidword_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaignId' => 'int',
        'adgroupId' => 'int',
        'bidword' => 'string',
        'bidPrice' => 'int',
        'useGroupPrice' => '\TencentAds\Model\UseGroupPriceType',
        'matchType' => '\TencentAds\Model\BidwordMatchType',
        'configuredStatus' => '\TencentAds\Model\BidwordPauseType',
        'pcLandingPageInfo' => '\TencentAds\Model\KeywordLandingPageInfo[]',
        'mobileLandingPageInfo' => '\TencentAds\Model\KeywordLandingPageInfo[]',
        'dynamicCreativeId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaignId' => 'int64',
        'adgroupId' => 'int64',
        'bidword' => null,
        'bidPrice' => 'int64',
        'useGroupPrice' => null,
        'matchType' => null,
        'configuredStatus' => null,
        'pcLandingPageInfo' => null,
        'mobileLandingPageInfo' => null,
        'dynamicCreativeId' => 'int64'
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
        'campaignId' => 'campaign_id',
        'adgroupId' => 'adgroup_id',
        'bidword' => 'bidword',
        'bidPrice' => 'bid_price',
        'useGroupPrice' => 'use_group_price',
        'matchType' => 'match_type',
        'configuredStatus' => 'configured_status',
        'pcLandingPageInfo' => 'pc_landing_page_info',
        'mobileLandingPageInfo' => 'mobile_landing_page_info',
        'dynamicCreativeId' => 'dynamic_creative_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignId' => 'setCampaignId',
        'adgroupId' => 'setAdgroupId',
        'bidword' => 'setBidword',
        'bidPrice' => 'setBidPrice',
        'useGroupPrice' => 'setUseGroupPrice',
        'matchType' => 'setMatchType',
        'configuredStatus' => 'setConfiguredStatus',
        'pcLandingPageInfo' => 'setPcLandingPageInfo',
        'mobileLandingPageInfo' => 'setMobileLandingPageInfo',
        'dynamicCreativeId' => 'setDynamicCreativeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignId' => 'getCampaignId',
        'adgroupId' => 'getAdgroupId',
        'bidword' => 'getBidword',
        'bidPrice' => 'getBidPrice',
        'useGroupPrice' => 'getUseGroupPrice',
        'matchType' => 'getMatchType',
        'configuredStatus' => 'getConfiguredStatus',
        'pcLandingPageInfo' => 'getPcLandingPageInfo',
        'mobileLandingPageInfo' => 'getMobileLandingPageInfo',
        'dynamicCreativeId' => 'getDynamicCreativeId'
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
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['bidword'] = isset($data['bidword']) ? $data['bidword'] : null;
        $this->container['bidPrice'] = isset($data['bidPrice']) ? $data['bidPrice'] : null;
        $this->container['useGroupPrice'] = isset($data['useGroupPrice']) ? $data['useGroupPrice'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['configuredStatus'] = isset($data['configuredStatus']) ? $data['configuredStatus'] : null;
        $this->container['pcLandingPageInfo'] = isset($data['pcLandingPageInfo']) ? $data['pcLandingPageInfo'] : null;
        $this->container['mobileLandingPageInfo'] = isset($data['mobileLandingPageInfo']) ? $data['mobileLandingPageInfo'] : null;
        $this->container['dynamicCreativeId'] = isset($data['dynamicCreativeId']) ? $data['dynamicCreativeId'] : null;
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
     * Gets campaignId
     *
     * @return int|mixed
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int|mixed $campaignId campaignId
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets adgroupId
     *
     * @return int|mixed
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int|mixed $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

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
     * Gets useGroupPrice
     *
     * @return \TencentAds\Model\UseGroupPriceType|mixed
     */
    public function getUseGroupPrice()
    {
        return $this->container['useGroupPrice'];
    }

    /**
     * Sets useGroupPrice
     *
     * @param \TencentAds\Model\UseGroupPriceType|mixed $useGroupPrice useGroupPrice
     *
     * @return $this
     */
    public function setUseGroupPrice($useGroupPrice)
    {
        $this->container['useGroupPrice'] = $useGroupPrice;

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
     * Gets pcLandingPageInfo
     *
     * @return \TencentAds\Model\KeywordLandingPageInfo[]|mixed
     */
    public function getPcLandingPageInfo()
    {
        return $this->container['pcLandingPageInfo'];
    }

    /**
     * Sets pcLandingPageInfo
     *
     * @param \TencentAds\Model\KeywordLandingPageInfo[]|mixed $pcLandingPageInfo pcLandingPageInfo
     *
     * @return $this
     */
    public function setPcLandingPageInfo($pcLandingPageInfo)
    {
        $this->container['pcLandingPageInfo'] = $pcLandingPageInfo;

        return $this;
    }

    /**
     * Gets mobileLandingPageInfo
     *
     * @return \TencentAds\Model\KeywordLandingPageInfo[]|mixed
     */
    public function getMobileLandingPageInfo()
    {
        return $this->container['mobileLandingPageInfo'];
    }

    /**
     * Sets mobileLandingPageInfo
     *
     * @param \TencentAds\Model\KeywordLandingPageInfo[]|mixed $mobileLandingPageInfo mobileLandingPageInfo
     *
     * @return $this
     */
    public function setMobileLandingPageInfo($mobileLandingPageInfo)
    {
        $this->container['mobileLandingPageInfo'] = $mobileLandingPageInfo;

        return $this;
    }

    /**
     * Gets dynamicCreativeId
     *
     * @return int|mixed
     */
    public function getDynamicCreativeId()
    {
        return $this->container['dynamicCreativeId'];
    }

    /**
     * Sets dynamicCreativeId
     *
     * @param int|mixed $dynamicCreativeId dynamicCreativeId
     *
     * @return $this
     */
    public function setDynamicCreativeId($dynamicCreativeId)
    {
        $this->container['dynamicCreativeId'] = $dynamicCreativeId;

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


