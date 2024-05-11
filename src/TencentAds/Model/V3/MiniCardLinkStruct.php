<?php
/**
 * MiniCardLinkStruct
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
 * MiniCardLinkStruct Class Doc Comment
 *
 * @category Class
 * @description 图文链接结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MiniCardLinkStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'mini_card_link_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'miniCardLinkDescription' => 'string',
        'miniCardLinkImage' => 'string',
        'miniCardLinkButtonText' => 'string',
        'jumpInfo' => '\TencentAds\Model\V3\JumpinfoStruct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'miniCardLinkDescription' => null,
        'miniCardLinkImage' => null,
        'miniCardLinkButtonText' => null,
        'jumpInfo' => null
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
        'miniCardLinkDescription' => 'mini_card_link_description',
        'miniCardLinkImage' => 'mini_card_link_image',
        'miniCardLinkButtonText' => 'mini_card_link_button_text',
        'jumpInfo' => 'jump_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'miniCardLinkDescription' => 'setMiniCardLinkDescription',
        'miniCardLinkImage' => 'setMiniCardLinkImage',
        'miniCardLinkButtonText' => 'setMiniCardLinkButtonText',
        'jumpInfo' => 'setJumpInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'miniCardLinkDescription' => 'getMiniCardLinkDescription',
        'miniCardLinkImage' => 'getMiniCardLinkImage',
        'miniCardLinkButtonText' => 'getMiniCardLinkButtonText',
        'jumpInfo' => 'getJumpInfo'
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
        $this->container['miniCardLinkDescription'] = isset($data['miniCardLinkDescription']) ? $data['miniCardLinkDescription'] : null;
        $this->container['miniCardLinkImage'] = isset($data['miniCardLinkImage']) ? $data['miniCardLinkImage'] : null;
        $this->container['miniCardLinkButtonText'] = isset($data['miniCardLinkButtonText']) ? $data['miniCardLinkButtonText'] : null;
        $this->container['jumpInfo'] = isset($data['jumpInfo']) ? $data['jumpInfo'] : null;
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
     * Gets miniCardLinkDescription
     *
     * @return string|mixed
     */
    public function getMiniCardLinkDescription()
    {
        return $this->container['miniCardLinkDescription'];
    }

    /**
     * Sets miniCardLinkDescription
     *
     * @param string|mixed $miniCardLinkDescription miniCardLinkDescription
     *
     * @return $this
     */
    public function setMiniCardLinkDescription($miniCardLinkDescription)
    {
        $this->container['miniCardLinkDescription'] = $miniCardLinkDescription;

        return $this;
    }

    /**
     * Gets miniCardLinkImage
     *
     * @return string|mixed
     */
    public function getMiniCardLinkImage()
    {
        return $this->container['miniCardLinkImage'];
    }

    /**
     * Sets miniCardLinkImage
     *
     * @param string|mixed $miniCardLinkImage miniCardLinkImage
     *
     * @return $this
     */
    public function setMiniCardLinkImage($miniCardLinkImage)
    {
        $this->container['miniCardLinkImage'] = $miniCardLinkImage;

        return $this;
    }

    /**
     * Gets miniCardLinkButtonText
     *
     * @return string|mixed
     */
    public function getMiniCardLinkButtonText()
    {
        return $this->container['miniCardLinkButtonText'];
    }

    /**
     * Sets miniCardLinkButtonText
     *
     * @param string|mixed $miniCardLinkButtonText miniCardLinkButtonText
     *
     * @return $this
     */
    public function setMiniCardLinkButtonText($miniCardLinkButtonText)
    {
        $this->container['miniCardLinkButtonText'] = $miniCardLinkButtonText;

        return $this;
    }

    /**
     * Gets jumpInfo
     *
     * @return \TencentAds\Model\V3\JumpinfoStruct|mixed
     */
    public function getJumpInfo()
    {
        return $this->container['jumpInfo'];
    }

    /**
     * Sets jumpInfo
     *
     * @param \TencentAds\Model\V3\JumpinfoStruct|mixed $jumpInfo jumpInfo
     *
     * @return $this
     */
    public function setJumpInfo($jumpInfo)
    {
        $this->container['jumpInfo'] = $jumpInfo;

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


