<?php
/**
 * LiveConvComponentSpecStruct
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
 * LiveConvComponentSpecStruct Class Doc Comment
 *
 * @category Class
 * @description 直播间转化组件详情
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LiveConvComponentSpecStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'live_conv_component_spec_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pageId' => 'int',
        'title' => 'string',
        'imgUrl' => 'string',
        'imgId' => 'string',
        'desc' => 'string',
        'buttonText' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pageId' => 'int64',
        'title' => null,
        'imgUrl' => null,
        'imgId' => null,
        'desc' => null,
        'buttonText' => null
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
        'pageId' => 'page_id',
        'title' => 'title',
        'imgUrl' => 'img_url',
        'imgId' => 'img_id',
        'desc' => 'desc',
        'buttonText' => 'button_text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageId' => 'setPageId',
        'title' => 'setTitle',
        'imgUrl' => 'setImgUrl',
        'imgId' => 'setImgId',
        'desc' => 'setDesc',
        'buttonText' => 'setButtonText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageId' => 'getPageId',
        'title' => 'getTitle',
        'imgUrl' => 'getImgUrl',
        'imgId' => 'getImgId',
        'desc' => 'getDesc',
        'buttonText' => 'getButtonText'
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
        $this->container['pageId'] = isset($data['pageId']) ? $data['pageId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['imgUrl'] = isset($data['imgUrl']) ? $data['imgUrl'] : null;
        $this->container['imgId'] = isset($data['imgId']) ? $data['imgId'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['buttonText'] = isset($data['buttonText']) ? $data['buttonText'] : null;
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
     * Gets pageId
     *
     * @return int|mixed
     */
    public function getPageId()
    {
        return $this->container['pageId'];
    }

    /**
     * Sets pageId
     *
     * @param int|mixed $pageId pageId
     *
     * @return $this
     */
    public function setPageId($pageId)
    {
        $this->container['pageId'] = $pageId;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|mixed
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|mixed $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets imgUrl
     *
     * @return string|mixed
     */
    public function getImgUrl()
    {
        return $this->container['imgUrl'];
    }

    /**
     * Sets imgUrl
     *
     * @param string|mixed $imgUrl imgUrl
     *
     * @return $this
     */
    public function setImgUrl($imgUrl)
    {
        $this->container['imgUrl'] = $imgUrl;

        return $this;
    }

    /**
     * Gets imgId
     *
     * @return string|mixed
     */
    public function getImgId()
    {
        return $this->container['imgId'];
    }

    /**
     * Sets imgId
     *
     * @param string|mixed $imgId imgId
     *
     * @return $this
     */
    public function setImgId($imgId)
    {
        $this->container['imgId'] = $imgId;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|mixed
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|mixed $desc desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets buttonText
     *
     * @return string|mixed
     */
    public function getButtonText()
    {
        return $this->container['buttonText'];
    }

    /**
     * Sets buttonText
     *
     * @param string|mixed $buttonText buttonText
     *
     * @return $this
     */
    public function setButtonText($buttonText)
    {
        $this->container['buttonText'] = $buttonText;

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


