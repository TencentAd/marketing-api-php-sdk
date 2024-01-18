<?php
/**
 * ListSublinkComponentValueStruct
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
 * ListSublinkComponentValueStruct Class Doc Comment
 *
 * @category Class
 * @description 列表子链结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListSublinkComponentValueStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'list_sublink_component_value_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text1' => 'string',
        'jumpInfo1' => '\TencentAds\Model\LandingPageStructure[]',
        'text2' => 'string',
        'jumpInfo2' => '\TencentAds\Model\LandingPageStructure[]',
        'text3' => 'string',
        'jumpInfo3' => '\TencentAds\Model\LandingPageStructure[]',
        'text4' => 'string',
        'jumpInfo4' => '\TencentAds\Model\LandingPageStructure[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text1' => null,
        'jumpInfo1' => null,
        'text2' => null,
        'jumpInfo2' => null,
        'text3' => null,
        'jumpInfo3' => null,
        'text4' => null,
        'jumpInfo4' => null
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
        'text1' => 'text1',
        'jumpInfo1' => 'jump_info1',
        'text2' => 'text2',
        'jumpInfo2' => 'jump_info2',
        'text3' => 'text3',
        'jumpInfo3' => 'jump_info3',
        'text4' => 'text4',
        'jumpInfo4' => 'jump_info4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text1' => 'setText1',
        'jumpInfo1' => 'setJumpInfo1',
        'text2' => 'setText2',
        'jumpInfo2' => 'setJumpInfo2',
        'text3' => 'setText3',
        'jumpInfo3' => 'setJumpInfo3',
        'text4' => 'setText4',
        'jumpInfo4' => 'setJumpInfo4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text1' => 'getText1',
        'jumpInfo1' => 'getJumpInfo1',
        'text2' => 'getText2',
        'jumpInfo2' => 'getJumpInfo2',
        'text3' => 'getText3',
        'jumpInfo3' => 'getJumpInfo3',
        'text4' => 'getText4',
        'jumpInfo4' => 'getJumpInfo4'
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
        $this->container['text1'] = isset($data['text1']) ? $data['text1'] : null;
        $this->container['jumpInfo1'] = isset($data['jumpInfo1']) ? $data['jumpInfo1'] : null;
        $this->container['text2'] = isset($data['text2']) ? $data['text2'] : null;
        $this->container['jumpInfo2'] = isset($data['jumpInfo2']) ? $data['jumpInfo2'] : null;
        $this->container['text3'] = isset($data['text3']) ? $data['text3'] : null;
        $this->container['jumpInfo3'] = isset($data['jumpInfo3']) ? $data['jumpInfo3'] : null;
        $this->container['text4'] = isset($data['text4']) ? $data['text4'] : null;
        $this->container['jumpInfo4'] = isset($data['jumpInfo4']) ? $data['jumpInfo4'] : null;
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
     * Gets text1
     *
     * @return string|mixed
     */
    public function getText1()
    {
        return $this->container['text1'];
    }

    /**
     * Sets text1
     *
     * @param string|mixed $text1 text1
     *
     * @return $this
     */
    public function setText1($text1)
    {
        $this->container['text1'] = $text1;

        return $this;
    }

    /**
     * Gets jumpInfo1
     *
     * @return \TencentAds\Model\LandingPageStructure[]|mixed
     */
    public function getJumpInfo1()
    {
        return $this->container['jumpInfo1'];
    }

    /**
     * Sets jumpInfo1
     *
     * @param \TencentAds\Model\LandingPageStructure[]|mixed $jumpInfo1 jumpInfo1
     *
     * @return $this
     */
    public function setJumpInfo1($jumpInfo1)
    {
        $this->container['jumpInfo1'] = $jumpInfo1;

        return $this;
    }

    /**
     * Gets text2
     *
     * @return string|mixed
     */
    public function getText2()
    {
        return $this->container['text2'];
    }

    /**
     * Sets text2
     *
     * @param string|mixed $text2 text2
     *
     * @return $this
     */
    public function setText2($text2)
    {
        $this->container['text2'] = $text2;

        return $this;
    }

    /**
     * Gets jumpInfo2
     *
     * @return \TencentAds\Model\LandingPageStructure[]|mixed
     */
    public function getJumpInfo2()
    {
        return $this->container['jumpInfo2'];
    }

    /**
     * Sets jumpInfo2
     *
     * @param \TencentAds\Model\LandingPageStructure[]|mixed $jumpInfo2 jumpInfo2
     *
     * @return $this
     */
    public function setJumpInfo2($jumpInfo2)
    {
        $this->container['jumpInfo2'] = $jumpInfo2;

        return $this;
    }

    /**
     * Gets text3
     *
     * @return string|mixed
     */
    public function getText3()
    {
        return $this->container['text3'];
    }

    /**
     * Sets text3
     *
     * @param string|mixed $text3 text3
     *
     * @return $this
     */
    public function setText3($text3)
    {
        $this->container['text3'] = $text3;

        return $this;
    }

    /**
     * Gets jumpInfo3
     *
     * @return \TencentAds\Model\LandingPageStructure[]|mixed
     */
    public function getJumpInfo3()
    {
        return $this->container['jumpInfo3'];
    }

    /**
     * Sets jumpInfo3
     *
     * @param \TencentAds\Model\LandingPageStructure[]|mixed $jumpInfo3 jumpInfo3
     *
     * @return $this
     */
    public function setJumpInfo3($jumpInfo3)
    {
        $this->container['jumpInfo3'] = $jumpInfo3;

        return $this;
    }

    /**
     * Gets text4
     *
     * @return string|mixed
     */
    public function getText4()
    {
        return $this->container['text4'];
    }

    /**
     * Sets text4
     *
     * @param string|mixed $text4 text4
     *
     * @return $this
     */
    public function setText4($text4)
    {
        $this->container['text4'] = $text4;

        return $this;
    }

    /**
     * Gets jumpInfo4
     *
     * @return \TencentAds\Model\LandingPageStructure[]|mixed
     */
    public function getJumpInfo4()
    {
        return $this->container['jumpInfo4'];
    }

    /**
     * Sets jumpInfo4
     *
     * @param \TencentAds\Model\LandingPageStructure[]|mixed $jumpInfo4 jumpInfo4
     *
     * @return $this
     */
    public function setJumpInfo4($jumpInfo4)
    {
        $this->container['jumpInfo4'] = $jumpInfo4;

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

