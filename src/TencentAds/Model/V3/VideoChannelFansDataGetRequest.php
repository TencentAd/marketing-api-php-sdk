<?php
/**
 * VideoChannelFansDataGetRequest
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
 * VideoChannelFansDataGetRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideoChannelFansDataGetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VideoChannelFansDataGetRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'brandIds' => 'string[]',
        'brandNames' => 'string[]',
        'dealerIds' => 'string[]',
        'dealerNames' => 'string[]',
        'videoChannelIds' => 'string[]',
        'videoChannelNames' => 'string[]',
        'startDate' => 'int',
        'endDate' => 'int',
        'page' => 'int',
        'pageSize' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'brandIds' => null,
        'brandNames' => null,
        'dealerIds' => null,
        'dealerNames' => null,
        'videoChannelIds' => null,
        'videoChannelNames' => null,
        'startDate' => 'int64',
        'endDate' => 'int64',
        'page' => 'int64',
        'pageSize' => 'int64'
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
        'brandIds' => 'brand_ids',
        'brandNames' => 'brand_names',
        'dealerIds' => 'dealer_ids',
        'dealerNames' => 'dealer_names',
        'videoChannelIds' => 'video_channel_ids',
        'videoChannelNames' => 'video_channel_names',
        'startDate' => 'start_date',
        'endDate' => 'end_date',
        'page' => 'page',
        'pageSize' => 'page_size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'brandIds' => 'setBrandIds',
        'brandNames' => 'setBrandNames',
        'dealerIds' => 'setDealerIds',
        'dealerNames' => 'setDealerNames',
        'videoChannelIds' => 'setVideoChannelIds',
        'videoChannelNames' => 'setVideoChannelNames',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'page' => 'setPage',
        'pageSize' => 'setPageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'brandIds' => 'getBrandIds',
        'brandNames' => 'getBrandNames',
        'dealerIds' => 'getDealerIds',
        'dealerNames' => 'getDealerNames',
        'videoChannelIds' => 'getVideoChannelIds',
        'videoChannelNames' => 'getVideoChannelNames',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'page' => 'getPage',
        'pageSize' => 'getPageSize'
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
        $this->container['brandIds'] = isset($data['brandIds']) ? $data['brandIds'] : null;
        $this->container['brandNames'] = isset($data['brandNames']) ? $data['brandNames'] : null;
        $this->container['dealerIds'] = isset($data['dealerIds']) ? $data['dealerIds'] : null;
        $this->container['dealerNames'] = isset($data['dealerNames']) ? $data['dealerNames'] : null;
        $this->container['videoChannelIds'] = isset($data['videoChannelIds']) ? $data['videoChannelIds'] : null;
        $this->container['videoChannelNames'] = isset($data['videoChannelNames']) ? $data['videoChannelNames'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
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
     * Gets brandIds
     *
     * @return string[]|mixed
     */
    public function getBrandIds()
    {
        return $this->container['brandIds'];
    }

    /**
     * Sets brandIds
     *
     * @param string[]|mixed $brandIds brandIds
     *
     * @return $this
     */
    public function setBrandIds($brandIds)
    {
        $this->container['brandIds'] = $brandIds;

        return $this;
    }

    /**
     * Gets brandNames
     *
     * @return string[]|mixed
     */
    public function getBrandNames()
    {
        return $this->container['brandNames'];
    }

    /**
     * Sets brandNames
     *
     * @param string[]|mixed $brandNames brandNames
     *
     * @return $this
     */
    public function setBrandNames($brandNames)
    {
        $this->container['brandNames'] = $brandNames;

        return $this;
    }

    /**
     * Gets dealerIds
     *
     * @return string[]|mixed
     */
    public function getDealerIds()
    {
        return $this->container['dealerIds'];
    }

    /**
     * Sets dealerIds
     *
     * @param string[]|mixed $dealerIds dealerIds
     *
     * @return $this
     */
    public function setDealerIds($dealerIds)
    {
        $this->container['dealerIds'] = $dealerIds;

        return $this;
    }

    /**
     * Gets dealerNames
     *
     * @return string[]|mixed
     */
    public function getDealerNames()
    {
        return $this->container['dealerNames'];
    }

    /**
     * Sets dealerNames
     *
     * @param string[]|mixed $dealerNames dealerNames
     *
     * @return $this
     */
    public function setDealerNames($dealerNames)
    {
        $this->container['dealerNames'] = $dealerNames;

        return $this;
    }

    /**
     * Gets videoChannelIds
     *
     * @return string[]|mixed
     */
    public function getVideoChannelIds()
    {
        return $this->container['videoChannelIds'];
    }

    /**
     * Sets videoChannelIds
     *
     * @param string[]|mixed $videoChannelIds videoChannelIds
     *
     * @return $this
     */
    public function setVideoChannelIds($videoChannelIds)
    {
        $this->container['videoChannelIds'] = $videoChannelIds;

        return $this;
    }

    /**
     * Gets videoChannelNames
     *
     * @return string[]|mixed
     */
    public function getVideoChannelNames()
    {
        return $this->container['videoChannelNames'];
    }

    /**
     * Sets videoChannelNames
     *
     * @param string[]|mixed $videoChannelNames videoChannelNames
     *
     * @return $this
     */
    public function setVideoChannelNames($videoChannelNames)
    {
        $this->container['videoChannelNames'] = $videoChannelNames;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return int|mixed
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param int|mixed $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return int|mixed
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param int|mixed $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|mixed
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|mixed $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|mixed
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|mixed $pageSize pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

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


