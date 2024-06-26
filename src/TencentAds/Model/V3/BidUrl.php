<?php
/**
 * BidUrl
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
 * BidUrl Class Doc Comment
 *
 * @category Class
 * @description 竞价链接
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BidUrl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bid_url';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rtaId' => 'int',
        'bidUrl' => 'string',
        'qpsLimit' => 'int',
        'phase' => 'int',
        'agencyIds' => 'string',
        'iDCZone' => 'string',
        'proxyURL' => 'string',
        'isHttp2' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rtaId' => 'int64',
        'bidUrl' => null,
        'qpsLimit' => 'int64',
        'phase' => 'int64',
        'agencyIds' => null,
        'iDCZone' => null,
        'proxyURL' => null,
        'isHttp2' => 'int64'
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
        'rtaId' => 'RtaId',
        'bidUrl' => 'BidUrl',
        'qpsLimit' => 'QpsLimit',
        'phase' => 'Phase',
        'agencyIds' => 'AgencyIds',
        'iDCZone' => 'IDCZone',
        'proxyURL' => 'ProxyURL',
        'isHttp2' => 'IsHttp2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rtaId' => 'setRtaId',
        'bidUrl' => 'setBidUrl',
        'qpsLimit' => 'setQpsLimit',
        'phase' => 'setPhase',
        'agencyIds' => 'setAgencyIds',
        'iDCZone' => 'setIDCZone',
        'proxyURL' => 'setProxyURL',
        'isHttp2' => 'setIsHttp2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rtaId' => 'getRtaId',
        'bidUrl' => 'getBidUrl',
        'qpsLimit' => 'getQpsLimit',
        'phase' => 'getPhase',
        'agencyIds' => 'getAgencyIds',
        'iDCZone' => 'getIDCZone',
        'proxyURL' => 'getProxyURL',
        'isHttp2' => 'getIsHttp2'
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
        $this->container['rtaId'] = isset($data['rtaId']) ? $data['rtaId'] : null;
        $this->container['bidUrl'] = isset($data['bidUrl']) ? $data['bidUrl'] : null;
        $this->container['qpsLimit'] = isset($data['qpsLimit']) ? $data['qpsLimit'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['agencyIds'] = isset($data['agencyIds']) ? $data['agencyIds'] : null;
        $this->container['iDCZone'] = isset($data['iDCZone']) ? $data['iDCZone'] : null;
        $this->container['proxyURL'] = isset($data['proxyURL']) ? $data['proxyURL'] : null;
        $this->container['isHttp2'] = isset($data['isHttp2']) ? $data['isHttp2'] : null;
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
     * Gets rtaId
     *
     * @return int|mixed
     */
    public function getRtaId()
    {
        return $this->container['rtaId'];
    }

    /**
     * Sets rtaId
     *
     * @param int|mixed $rtaId rtaId
     *
     * @return $this
     */
    public function setRtaId($rtaId)
    {
        $this->container['rtaId'] = $rtaId;

        return $this;
    }

    /**
     * Gets bidUrl
     *
     * @return string|mixed
     */
    public function getBidUrl()
    {
        return $this->container['bidUrl'];
    }

    /**
     * Sets bidUrl
     *
     * @param string|mixed $bidUrl bidUrl
     *
     * @return $this
     */
    public function setBidUrl($bidUrl)
    {
        $this->container['bidUrl'] = $bidUrl;

        return $this;
    }

    /**
     * Gets qpsLimit
     *
     * @return int|mixed
     */
    public function getQpsLimit()
    {
        return $this->container['qpsLimit'];
    }

    /**
     * Sets qpsLimit
     *
     * @param int|mixed $qpsLimit qpsLimit
     *
     * @return $this
     */
    public function setQpsLimit($qpsLimit)
    {
        $this->container['qpsLimit'] = $qpsLimit;

        return $this;
    }

    /**
     * Gets phase
     *
     * @return int|mixed
     */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     *
     * @param int|mixed $phase phase
     *
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;

        return $this;
    }

    /**
     * Gets agencyIds
     *
     * @return string|mixed
     */
    public function getAgencyIds()
    {
        return $this->container['agencyIds'];
    }

    /**
     * Sets agencyIds
     *
     * @param string|mixed $agencyIds agencyIds
     *
     * @return $this
     */
    public function setAgencyIds($agencyIds)
    {
        $this->container['agencyIds'] = $agencyIds;

        return $this;
    }

    /**
     * Gets iDCZone
     *
     * @return string|mixed
     */
    public function getIDCZone()
    {
        return $this->container['iDCZone'];
    }

    /**
     * Sets iDCZone
     *
     * @param string|mixed $iDCZone iDCZone
     *
     * @return $this
     */
    public function setIDCZone($iDCZone)
    {
        $this->container['iDCZone'] = $iDCZone;

        return $this;
    }

    /**
     * Gets proxyURL
     *
     * @return string|mixed
     */
    public function getProxyURL()
    {
        return $this->container['proxyURL'];
    }

    /**
     * Sets proxyURL
     *
     * @param string|mixed $proxyURL proxyURL
     *
     * @return $this
     */
    public function setProxyURL($proxyURL)
    {
        $this->container['proxyURL'] = $proxyURL;

        return $this;
    }

    /**
     * Gets isHttp2
     *
     * @return int|mixed
     */
    public function getIsHttp2()
    {
        return $this->container['isHttp2'];
    }

    /**
     * Sets isHttp2
     *
     * @param int|mixed $isHttp2 isHttp2
     *
     * @return $this
     */
    public function setIsHttp2($isHttp2)
    {
        $this->container['isHttp2'] = $isHttp2;

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


