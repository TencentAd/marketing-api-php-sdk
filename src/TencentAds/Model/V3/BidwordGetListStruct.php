<?php
/**
 * BidwordGetListStruct
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
 * BidwordGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 关键词信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidwordGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BidwordGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bidwordId' => 'int',
        'campaignId' => 'int',
        'adgroupId' => 'int',
        'bidword' => 'string',
        'bidPrice' => 'int',
        'matchType' => '\TencentAds\Model\V3\BidwordMatchType',
        'configuredStatus' => '\TencentAds\Model\V3\BidwordPauseType',
        'bidwordStatus' => '\TencentAds\Model\V3\BidwordStatus',
        'useGroupPrice' => '\TencentAds\Model\V3\UseGroupPriceType',
        'auditMsg' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'pcLandingPageInfo' => '\TencentAds\Model\V3\BackupsJumpinfoStruct[]',
        'mobileLandingPageInfo' => '\TencentAds\Model\V3\BackupsJumpinfoStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bidwordId' => 'int64',
        'campaignId' => 'int64',
        'adgroupId' => 'int64',
        'bidword' => null,
        'bidPrice' => 'int64',
        'matchType' => null,
        'configuredStatus' => null,
        'bidwordStatus' => null,
        'useGroupPrice' => null,
        'auditMsg' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'pcLandingPageInfo' => null,
        'mobileLandingPageInfo' => null
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
        'bidwordId' => 'bidword_id',
        'campaignId' => 'campaign_id',
        'adgroupId' => 'adgroup_id',
        'bidword' => 'bidword',
        'bidPrice' => 'bid_price',
        'matchType' => 'match_type',
        'configuredStatus' => 'configured_status',
        'bidwordStatus' => 'bidword_status',
        'useGroupPrice' => 'use_group_price',
        'auditMsg' => 'audit_msg',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'pcLandingPageInfo' => 'pc_landing_page_info',
        'mobileLandingPageInfo' => 'mobile_landing_page_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bidwordId' => 'setBidwordId',
        'campaignId' => 'setCampaignId',
        'adgroupId' => 'setAdgroupId',
        'bidword' => 'setBidword',
        'bidPrice' => 'setBidPrice',
        'matchType' => 'setMatchType',
        'configuredStatus' => 'setConfiguredStatus',
        'bidwordStatus' => 'setBidwordStatus',
        'useGroupPrice' => 'setUseGroupPrice',
        'auditMsg' => 'setAuditMsg',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'pcLandingPageInfo' => 'setPcLandingPageInfo',
        'mobileLandingPageInfo' => 'setMobileLandingPageInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bidwordId' => 'getBidwordId',
        'campaignId' => 'getCampaignId',
        'adgroupId' => 'getAdgroupId',
        'bidword' => 'getBidword',
        'bidPrice' => 'getBidPrice',
        'matchType' => 'getMatchType',
        'configuredStatus' => 'getConfiguredStatus',
        'bidwordStatus' => 'getBidwordStatus',
        'useGroupPrice' => 'getUseGroupPrice',
        'auditMsg' => 'getAuditMsg',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'pcLandingPageInfo' => 'getPcLandingPageInfo',
        'mobileLandingPageInfo' => 'getMobileLandingPageInfo'
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
        $this->container['bidwordId'] = isset($data['bidwordId']) ? $data['bidwordId'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['bidword'] = isset($data['bidword']) ? $data['bidword'] : null;
        $this->container['bidPrice'] = isset($data['bidPrice']) ? $data['bidPrice'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['configuredStatus'] = isset($data['configuredStatus']) ? $data['configuredStatus'] : null;
        $this->container['bidwordStatus'] = isset($data['bidwordStatus']) ? $data['bidwordStatus'] : null;
        $this->container['useGroupPrice'] = isset($data['useGroupPrice']) ? $data['useGroupPrice'] : null;
        $this->container['auditMsg'] = isset($data['auditMsg']) ? $data['auditMsg'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['pcLandingPageInfo'] = isset($data['pcLandingPageInfo']) ? $data['pcLandingPageInfo'] : null;
        $this->container['mobileLandingPageInfo'] = isset($data['mobileLandingPageInfo']) ? $data['mobileLandingPageInfo'] : null;
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
     * Gets matchType
     *
     * @return \TencentAds\Model\V3\BidwordMatchType|mixed
     */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
     * Sets matchType
     *
     * @param \TencentAds\Model\V3\BidwordMatchType|mixed $matchType matchType
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
     * @return \TencentAds\Model\V3\BidwordPauseType|mixed
     */
    public function getConfiguredStatus()
    {
        return $this->container['configuredStatus'];
    }

    /**
     * Sets configuredStatus
     *
     * @param \TencentAds\Model\V3\BidwordPauseType|mixed $configuredStatus configuredStatus
     *
     * @return $this
     */
    public function setConfiguredStatus($configuredStatus)
    {
        $this->container['configuredStatus'] = $configuredStatus;

        return $this;
    }

    /**
     * Gets bidwordStatus
     *
     * @return \TencentAds\Model\V3\BidwordStatus|mixed
     */
    public function getBidwordStatus()
    {
        return $this->container['bidwordStatus'];
    }

    /**
     * Sets bidwordStatus
     *
     * @param \TencentAds\Model\V3\BidwordStatus|mixed $bidwordStatus bidwordStatus
     *
     * @return $this
     */
    public function setBidwordStatus($bidwordStatus)
    {
        $this->container['bidwordStatus'] = $bidwordStatus;

        return $this;
    }

    /**
     * Gets useGroupPrice
     *
     * @return \TencentAds\Model\V3\UseGroupPriceType|mixed
     */
    public function getUseGroupPrice()
    {
        return $this->container['useGroupPrice'];
    }

    /**
     * Sets useGroupPrice
     *
     * @param \TencentAds\Model\V3\UseGroupPriceType|mixed $useGroupPrice useGroupPrice
     *
     * @return $this
     */
    public function setUseGroupPrice($useGroupPrice)
    {
        $this->container['useGroupPrice'] = $useGroupPrice;

        return $this;
    }

    /**
     * Gets auditMsg
     *
     * @return string|mixed
     */
    public function getAuditMsg()
    {
        return $this->container['auditMsg'];
    }

    /**
     * Sets auditMsg
     *
     * @param string|mixed $auditMsg auditMsg
     *
     * @return $this
     */
    public function setAuditMsg($auditMsg)
    {
        $this->container['auditMsg'] = $auditMsg;

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
     * Gets pcLandingPageInfo
     *
     * @return \TencentAds\Model\V3\BackupsJumpinfoStruct[]|mixed
     */
    public function getPcLandingPageInfo()
    {
        return $this->container['pcLandingPageInfo'];
    }

    /**
     * Sets pcLandingPageInfo
     *
     * @param \TencentAds\Model\V3\BackupsJumpinfoStruct[]|mixed $pcLandingPageInfo pcLandingPageInfo
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
     * @return \TencentAds\Model\V3\BackupsJumpinfoStruct[]|mixed
     */
    public function getMobileLandingPageInfo()
    {
        return $this->container['mobileLandingPageInfo'];
    }

    /**
     * Sets mobileLandingPageInfo
     *
     * @param \TencentAds\Model\V3\BackupsJumpinfoStruct[]|mixed $mobileLandingPageInfo mobileLandingPageInfo
     *
     * @return $this
     */
    public function setMobileLandingPageInfo($mobileLandingPageInfo)
    {
        $this->container['mobileLandingPageInfo'] = $mobileLandingPageInfo;

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


