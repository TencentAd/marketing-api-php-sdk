<?php
/**
 * FloatWeappSpec
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
 * FloatWeappSpec Class Doc Comment
 *
 * @category Class
 * @description 进入小程序组件元素
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FloatWeappSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'float_weapp_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'weappUsername' => 'string',
        'weappPath' => 'string',
        'btnTitle' => 'string',
        'btnBgColorTheme' => 'string',
        'fontColor' => 'string',
        'btnFontType' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'weappUsername' => null,
        'weappPath' => null,
        'btnTitle' => null,
        'btnBgColorTheme' => null,
        'fontColor' => null,
        'btnFontType' => 'int64'
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
        'weappUsername' => 'weapp_username',
        'weappPath' => 'weapp_path',
        'btnTitle' => 'btn_title',
        'btnBgColorTheme' => 'btn_bg_color_theme',
        'fontColor' => 'font_color',
        'btnFontType' => 'btn_font_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'weappUsername' => 'setWeappUsername',
        'weappPath' => 'setWeappPath',
        'btnTitle' => 'setBtnTitle',
        'btnBgColorTheme' => 'setBtnBgColorTheme',
        'fontColor' => 'setFontColor',
        'btnFontType' => 'setBtnFontType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'weappUsername' => 'getWeappUsername',
        'weappPath' => 'getWeappPath',
        'btnTitle' => 'getBtnTitle',
        'btnBgColorTheme' => 'getBtnBgColorTheme',
        'fontColor' => 'getFontColor',
        'btnFontType' => 'getBtnFontType'
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
        $this->container['weappUsername'] = isset($data['weappUsername']) ? $data['weappUsername'] : null;
        $this->container['weappPath'] = isset($data['weappPath']) ? $data['weappPath'] : null;
        $this->container['btnTitle'] = isset($data['btnTitle']) ? $data['btnTitle'] : null;
        $this->container['btnBgColorTheme'] = isset($data['btnBgColorTheme']) ? $data['btnBgColorTheme'] : null;
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
        $this->container['btnFontType'] = isset($data['btnFontType']) ? $data['btnFontType'] : null;
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
     * Gets weappUsername
     *
     * @return string|mixed
     */
    public function getWeappUsername()
    {
        return $this->container['weappUsername'];
    }

    /**
     * Sets weappUsername
     *
     * @param string|mixed $weappUsername weappUsername
     *
     * @return $this
     */
    public function setWeappUsername($weappUsername)
    {
        $this->container['weappUsername'] = $weappUsername;

        return $this;
    }

    /**
     * Gets weappPath
     *
     * @return string|mixed
     */
    public function getWeappPath()
    {
        return $this->container['weappPath'];
    }

    /**
     * Sets weappPath
     *
     * @param string|mixed $weappPath weappPath
     *
     * @return $this
     */
    public function setWeappPath($weappPath)
    {
        $this->container['weappPath'] = $weappPath;

        return $this;
    }

    /**
     * Gets btnTitle
     *
     * @return string|mixed
     */
    public function getBtnTitle()
    {
        return $this->container['btnTitle'];
    }

    /**
     * Sets btnTitle
     *
     * @param string|mixed $btnTitle btnTitle
     *
     * @return $this
     */
    public function setBtnTitle($btnTitle)
    {
        $this->container['btnTitle'] = $btnTitle;

        return $this;
    }

    /**
     * Gets btnBgColorTheme
     *
     * @return string|mixed
     */
    public function getBtnBgColorTheme()
    {
        return $this->container['btnBgColorTheme'];
    }

    /**
     * Sets btnBgColorTheme
     *
     * @param string|mixed $btnBgColorTheme btnBgColorTheme
     *
     * @return $this
     */
    public function setBtnBgColorTheme($btnBgColorTheme)
    {
        $this->container['btnBgColorTheme'] = $btnBgColorTheme;

        return $this;
    }

    /**
     * Gets fontColor
     *
     * @return string|mixed
     */
    public function getFontColor()
    {
        return $this->container['fontColor'];
    }

    /**
     * Sets fontColor
     *
     * @param string|mixed $fontColor fontColor
     *
     * @return $this
     */
    public function setFontColor($fontColor)
    {
        $this->container['fontColor'] = $fontColor;

        return $this;
    }

    /**
     * Gets btnFontType
     *
     * @return int|mixed
     */
    public function getBtnFontType()
    {
        return $this->container['btnFontType'];
    }

    /**
     * Sets btnFontType
     *
     * @param int|mixed $btnFontType btnFontType
     *
     * @return $this
     */
    public function setBtnFontType($btnFontType)
    {
        $this->container['btnFontType'] = $btnFontType;

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


