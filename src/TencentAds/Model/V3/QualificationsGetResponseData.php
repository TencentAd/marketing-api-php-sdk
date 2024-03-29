<?php
/**
 * QualificationsGetResponseData
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
 * QualificationsGetResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QualificationsGetResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QualificationsGetResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'industryQualifications' => '\TencentAds\Model\V3\IndustryQualificationsStruct[]',
        'adQualifications' => '\TencentAds\Model\V3\AdQualificationsStruct[]',
        'additionalIndustryQualifications' => '\TencentAds\Model\V3\IndustryQualificationsStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'industryQualifications' => null,
        'adQualifications' => null,
        'additionalIndustryQualifications' => null
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
        'industryQualifications' => 'industry_qualifications',
        'adQualifications' => 'ad_qualifications',
        'additionalIndustryQualifications' => 'additional_industry_qualifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'industryQualifications' => 'setIndustryQualifications',
        'adQualifications' => 'setAdQualifications',
        'additionalIndustryQualifications' => 'setAdditionalIndustryQualifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'industryQualifications' => 'getIndustryQualifications',
        'adQualifications' => 'getAdQualifications',
        'additionalIndustryQualifications' => 'getAdditionalIndustryQualifications'
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
        $this->container['industryQualifications'] = isset($data['industryQualifications']) ? $data['industryQualifications'] : null;
        $this->container['adQualifications'] = isset($data['adQualifications']) ? $data['adQualifications'] : null;
        $this->container['additionalIndustryQualifications'] = isset($data['additionalIndustryQualifications']) ? $data['additionalIndustryQualifications'] : null;
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
     * Gets industryQualifications
     *
     * @return \TencentAds\Model\V3\IndustryQualificationsStruct[]|mixed
     */
    public function getIndustryQualifications()
    {
        return $this->container['industryQualifications'];
    }

    /**
     * Sets industryQualifications
     *
     * @param \TencentAds\Model\V3\IndustryQualificationsStruct[]|mixed $industryQualifications industryQualifications
     *
     * @return $this
     */
    public function setIndustryQualifications($industryQualifications)
    {
        $this->container['industryQualifications'] = $industryQualifications;

        return $this;
    }

    /**
     * Gets adQualifications
     *
     * @return \TencentAds\Model\V3\AdQualificationsStruct[]|mixed
     */
    public function getAdQualifications()
    {
        return $this->container['adQualifications'];
    }

    /**
     * Sets adQualifications
     *
     * @param \TencentAds\Model\V3\AdQualificationsStruct[]|mixed $adQualifications adQualifications
     *
     * @return $this
     */
    public function setAdQualifications($adQualifications)
    {
        $this->container['adQualifications'] = $adQualifications;

        return $this;
    }

    /**
     * Gets additionalIndustryQualifications
     *
     * @return \TencentAds\Model\V3\IndustryQualificationsStruct[]|mixed
     */
    public function getAdditionalIndustryQualifications()
    {
        return $this->container['additionalIndustryQualifications'];
    }

    /**
     * Sets additionalIndustryQualifications
     *
     * @param \TencentAds\Model\V3\IndustryQualificationsStruct[]|mixed $additionalIndustryQualifications additionalIndustryQualifications
     *
     * @return $this
     */
    public function setAdditionalIndustryQualifications($additionalIndustryQualifications)
    {
        $this->container['additionalIndustryQualifications'] = $additionalIndustryQualifications;

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

