<?php
/**
 * ShelfButtonSpec
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
 * ShelfButtonSpec Class Doc Comment
 *
 * @category Class
 * @description 按钮信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShelfButtonSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'shelf_button_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'linkSpec' => '\TencentAds\Model\V3\LinkSpec',
        'appDownloadSpec' => '\TencentAds\Model\V3\AppDownloadSpec',
        'miniProgramSpec' => '\TencentAds\Model\V3\MiniProgramSpec',
        'wecomSpec' => '\TencentAds\Model\V3\WecomSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'linkSpec' => null,
        'appDownloadSpec' => null,
        'miniProgramSpec' => null,
        'wecomSpec' => null
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
        'linkSpec' => 'link_spec',
        'appDownloadSpec' => 'app_download_spec',
        'miniProgramSpec' => 'mini_program_spec',
        'wecomSpec' => 'wecom_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linkSpec' => 'setLinkSpec',
        'appDownloadSpec' => 'setAppDownloadSpec',
        'miniProgramSpec' => 'setMiniProgramSpec',
        'wecomSpec' => 'setWecomSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linkSpec' => 'getLinkSpec',
        'appDownloadSpec' => 'getAppDownloadSpec',
        'miniProgramSpec' => 'getMiniProgramSpec',
        'wecomSpec' => 'getWecomSpec'
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
        $this->container['linkSpec'] = isset($data['linkSpec']) ? $data['linkSpec'] : null;
        $this->container['appDownloadSpec'] = isset($data['appDownloadSpec']) ? $data['appDownloadSpec'] : null;
        $this->container['miniProgramSpec'] = isset($data['miniProgramSpec']) ? $data['miniProgramSpec'] : null;
        $this->container['wecomSpec'] = isset($data['wecomSpec']) ? $data['wecomSpec'] : null;
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
     * Gets linkSpec
     *
     * @return \TencentAds\Model\V3\LinkSpec|mixed
     */
    public function getLinkSpec()
    {
        return $this->container['linkSpec'];
    }

    /**
     * Sets linkSpec
     *
     * @param \TencentAds\Model\V3\LinkSpec|mixed $linkSpec linkSpec
     *
     * @return $this
     */
    public function setLinkSpec($linkSpec)
    {
        $this->container['linkSpec'] = $linkSpec;

        return $this;
    }

    /**
     * Gets appDownloadSpec
     *
     * @return \TencentAds\Model\V3\AppDownloadSpec|mixed
     */
    public function getAppDownloadSpec()
    {
        return $this->container['appDownloadSpec'];
    }

    /**
     * Sets appDownloadSpec
     *
     * @param \TencentAds\Model\V3\AppDownloadSpec|mixed $appDownloadSpec appDownloadSpec
     *
     * @return $this
     */
    public function setAppDownloadSpec($appDownloadSpec)
    {
        $this->container['appDownloadSpec'] = $appDownloadSpec;

        return $this;
    }

    /**
     * Gets miniProgramSpec
     *
     * @return \TencentAds\Model\V3\MiniProgramSpec|mixed
     */
    public function getMiniProgramSpec()
    {
        return $this->container['miniProgramSpec'];
    }

    /**
     * Sets miniProgramSpec
     *
     * @param \TencentAds\Model\V3\MiniProgramSpec|mixed $miniProgramSpec miniProgramSpec
     *
     * @return $this
     */
    public function setMiniProgramSpec($miniProgramSpec)
    {
        $this->container['miniProgramSpec'] = $miniProgramSpec;

        return $this;
    }

    /**
     * Gets wecomSpec
     *
     * @return \TencentAds\Model\V3\WecomSpec|mixed
     */
    public function getWecomSpec()
    {
        return $this->container['wecomSpec'];
    }

    /**
     * Sets wecomSpec
     *
     * @param \TencentAds\Model\V3\WecomSpec|mixed $wecomSpec wecomSpec
     *
     * @return $this
     */
    public function setWecomSpec($wecomSpec)
    {
        $this->container['wecomSpec'] = $wecomSpec;

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


