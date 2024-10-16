<?php
/**
 * ConversionLinkInfo
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
 * ConversionLinkInfo Class Doc Comment
 *
 * @category Class
 * @description 链路信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversionLinkInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'conversion_link_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conversionLinkId' => 'int',
        'conversionLinkDesc' => 'string',
        'landingPageAccess' => '\TencentAds\Model\V3\LinkLandingPageAccess'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conversionLinkId' => 'int64',
        'conversionLinkDesc' => null,
        'landingPageAccess' => null
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
        'conversionLinkId' => 'conversion_link_id',
        'conversionLinkDesc' => 'conversion_link_desc',
        'landingPageAccess' => 'landing_page_access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversionLinkId' => 'setConversionLinkId',
        'conversionLinkDesc' => 'setConversionLinkDesc',
        'landingPageAccess' => 'setLandingPageAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversionLinkId' => 'getConversionLinkId',
        'conversionLinkDesc' => 'getConversionLinkDesc',
        'landingPageAccess' => 'getLandingPageAccess'
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
        $this->container['conversionLinkId'] = isset($data['conversionLinkId']) ? $data['conversionLinkId'] : null;
        $this->container['conversionLinkDesc'] = isset($data['conversionLinkDesc']) ? $data['conversionLinkDesc'] : null;
        $this->container['landingPageAccess'] = isset($data['landingPageAccess']) ? $data['landingPageAccess'] : null;
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
     * Gets conversionLinkId
     *
     * @return int|mixed
     */
    public function getConversionLinkId()
    {
        return $this->container['conversionLinkId'];
    }

    /**
     * Sets conversionLinkId
     *
     * @param int|mixed $conversionLinkId conversionLinkId
     *
     * @return $this
     */
    public function setConversionLinkId($conversionLinkId)
    {
        $this->container['conversionLinkId'] = $conversionLinkId;

        return $this;
    }

    /**
     * Gets conversionLinkDesc
     *
     * @return string|mixed
     */
    public function getConversionLinkDesc()
    {
        return $this->container['conversionLinkDesc'];
    }

    /**
     * Sets conversionLinkDesc
     *
     * @param string|mixed $conversionLinkDesc conversionLinkDesc
     *
     * @return $this
     */
    public function setConversionLinkDesc($conversionLinkDesc)
    {
        $this->container['conversionLinkDesc'] = $conversionLinkDesc;

        return $this;
    }

    /**
     * Gets landingPageAccess
     *
     * @return \TencentAds\Model\V3\LinkLandingPageAccess|mixed
     */
    public function getLandingPageAccess()
    {
        return $this->container['landingPageAccess'];
    }

    /**
     * Sets landingPageAccess
     *
     * @param \TencentAds\Model\V3\LinkLandingPageAccess|mixed $landingPageAccess landingPageAccess
     *
     * @return $this
     */
    public function setLandingPageAccess($landingPageAccess)
    {
        $this->container['landingPageAccess'] = $landingPageAccess;

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


