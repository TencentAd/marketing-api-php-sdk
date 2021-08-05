<?php
/**
 * DetailFunnelStruct
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
 * DetailFunnelStruct Class Doc Comment
 *
 * @category Class
 * @description 诊断详情-漏斗分析明细
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DetailFunnelStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'detail_funnel_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'targetingWidenessRate' => '\TencentAds\Model\TargetingWidenessRateFunnelStruct',
        'competeWinRate' => '\TencentAds\Model\CompeteWinRateFunnelStruct',
        'exposureCount' => '\TencentAds\Model\ExposureCountFunnelStruct',
        'ctr' => '\TencentAds\Model\CtrFunnelStruct',
        'cvr' => '\TencentAds\Model\CvrFunnelStruct',
        'cpa' => '\TencentAds\Model\CpaFunnelStruct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'targetingWidenessRate' => null,
        'competeWinRate' => null,
        'exposureCount' => null,
        'ctr' => null,
        'cvr' => null,
        'cpa' => null
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
        'targetingWidenessRate' => 'targeting_wideness_rate',
        'competeWinRate' => 'compete_win_rate',
        'exposureCount' => 'exposure_count',
        'ctr' => 'ctr',
        'cvr' => 'cvr',
        'cpa' => 'cpa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'targetingWidenessRate' => 'setTargetingWidenessRate',
        'competeWinRate' => 'setCompeteWinRate',
        'exposureCount' => 'setExposureCount',
        'ctr' => 'setCtr',
        'cvr' => 'setCvr',
        'cpa' => 'setCpa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'targetingWidenessRate' => 'getTargetingWidenessRate',
        'competeWinRate' => 'getCompeteWinRate',
        'exposureCount' => 'getExposureCount',
        'ctr' => 'getCtr',
        'cvr' => 'getCvr',
        'cpa' => 'getCpa'
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
        $this->container['targetingWidenessRate'] = isset($data['targetingWidenessRate']) ? $data['targetingWidenessRate'] : null;
        $this->container['competeWinRate'] = isset($data['competeWinRate']) ? $data['competeWinRate'] : null;
        $this->container['exposureCount'] = isset($data['exposureCount']) ? $data['exposureCount'] : null;
        $this->container['ctr'] = isset($data['ctr']) ? $data['ctr'] : null;
        $this->container['cvr'] = isset($data['cvr']) ? $data['cvr'] : null;
        $this->container['cpa'] = isset($data['cpa']) ? $data['cpa'] : null;
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
     * Gets targetingWidenessRate
     *
     * @return \TencentAds\Model\TargetingWidenessRateFunnelStruct|mixed
     */
    public function getTargetingWidenessRate()
    {
        return $this->container['targetingWidenessRate'];
    }

    /**
     * Sets targetingWidenessRate
     *
     * @param \TencentAds\Model\TargetingWidenessRateFunnelStruct|mixed $targetingWidenessRate targetingWidenessRate
     *
     * @return $this
     */
    public function setTargetingWidenessRate($targetingWidenessRate)
    {
        $this->container['targetingWidenessRate'] = $targetingWidenessRate;

        return $this;
    }

    /**
     * Gets competeWinRate
     *
     * @return \TencentAds\Model\CompeteWinRateFunnelStruct|mixed
     */
    public function getCompeteWinRate()
    {
        return $this->container['competeWinRate'];
    }

    /**
     * Sets competeWinRate
     *
     * @param \TencentAds\Model\CompeteWinRateFunnelStruct|mixed $competeWinRate competeWinRate
     *
     * @return $this
     */
    public function setCompeteWinRate($competeWinRate)
    {
        $this->container['competeWinRate'] = $competeWinRate;

        return $this;
    }

    /**
     * Gets exposureCount
     *
     * @return \TencentAds\Model\ExposureCountFunnelStruct|mixed
     */
    public function getExposureCount()
    {
        return $this->container['exposureCount'];
    }

    /**
     * Sets exposureCount
     *
     * @param \TencentAds\Model\ExposureCountFunnelStruct|mixed $exposureCount exposureCount
     *
     * @return $this
     */
    public function setExposureCount($exposureCount)
    {
        $this->container['exposureCount'] = $exposureCount;

        return $this;
    }

    /**
     * Gets ctr
     *
     * @return \TencentAds\Model\CtrFunnelStruct|mixed
     */
    public function getCtr()
    {
        return $this->container['ctr'];
    }

    /**
     * Sets ctr
     *
     * @param \TencentAds\Model\CtrFunnelStruct|mixed $ctr ctr
     *
     * @return $this
     */
    public function setCtr($ctr)
    {
        $this->container['ctr'] = $ctr;

        return $this;
    }

    /**
     * Gets cvr
     *
     * @return \TencentAds\Model\CvrFunnelStruct|mixed
     */
    public function getCvr()
    {
        return $this->container['cvr'];
    }

    /**
     * Sets cvr
     *
     * @param \TencentAds\Model\CvrFunnelStruct|mixed $cvr cvr
     *
     * @return $this
     */
    public function setCvr($cvr)
    {
        $this->container['cvr'] = $cvr;

        return $this;
    }

    /**
     * Gets cpa
     *
     * @return \TencentAds\Model\CpaFunnelStruct|mixed
     */
    public function getCpa()
    {
        return $this->container['cpa'];
    }

    /**
     * Sets cpa
     *
     * @param \TencentAds\Model\CpaFunnelStruct|mixed $cpa cpa
     *
     * @return $this
     */
    public function setCpa($cpa)
    {
        $this->container['cpa'] = $cpa;

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


