<?php
/**
 * QqMiniProgramPageDetail
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
 * QqMiniProgramPageDetail Class Doc Comment
 *
 * @category Class
 * @description 小程序落地页详情
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QqMiniProgramPageDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'qq_mini_program_page_detail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'miniProgramId' => 'string',
        'miniProgramNickName' => 'string',
        'miniProgramIconUrl' => 'string',
        'miniProgramPath' => 'string',
        'miniProgramPaths' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'miniProgramId' => null,
        'miniProgramNickName' => null,
        'miniProgramIconUrl' => null,
        'miniProgramPath' => null,
        'miniProgramPaths' => null
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
        'miniProgramId' => 'mini_program_id',
        'miniProgramNickName' => 'mini_program_nick_name',
        'miniProgramIconUrl' => 'mini_program_icon_url',
        'miniProgramPath' => 'mini_program_path',
        'miniProgramPaths' => 'mini_program_paths'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'miniProgramId' => 'setMiniProgramId',
        'miniProgramNickName' => 'setMiniProgramNickName',
        'miniProgramIconUrl' => 'setMiniProgramIconUrl',
        'miniProgramPath' => 'setMiniProgramPath',
        'miniProgramPaths' => 'setMiniProgramPaths'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'miniProgramId' => 'getMiniProgramId',
        'miniProgramNickName' => 'getMiniProgramNickName',
        'miniProgramIconUrl' => 'getMiniProgramIconUrl',
        'miniProgramPath' => 'getMiniProgramPath',
        'miniProgramPaths' => 'getMiniProgramPaths'
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
        $this->container['miniProgramId'] = isset($data['miniProgramId']) ? $data['miniProgramId'] : null;
        $this->container['miniProgramNickName'] = isset($data['miniProgramNickName']) ? $data['miniProgramNickName'] : null;
        $this->container['miniProgramIconUrl'] = isset($data['miniProgramIconUrl']) ? $data['miniProgramIconUrl'] : null;
        $this->container['miniProgramPath'] = isset($data['miniProgramPath']) ? $data['miniProgramPath'] : null;
        $this->container['miniProgramPaths'] = isset($data['miniProgramPaths']) ? $data['miniProgramPaths'] : null;
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
     * Gets miniProgramId
     *
     * @return string|mixed
     */
    public function getMiniProgramId()
    {
        return $this->container['miniProgramId'];
    }

    /**
     * Sets miniProgramId
     *
     * @param string|mixed $miniProgramId miniProgramId
     *
     * @return $this
     */
    public function setMiniProgramId($miniProgramId)
    {
        $this->container['miniProgramId'] = $miniProgramId;

        return $this;
    }

    /**
     * Gets miniProgramNickName
     *
     * @return string|mixed
     */
    public function getMiniProgramNickName()
    {
        return $this->container['miniProgramNickName'];
    }

    /**
     * Sets miniProgramNickName
     *
     * @param string|mixed $miniProgramNickName miniProgramNickName
     *
     * @return $this
     */
    public function setMiniProgramNickName($miniProgramNickName)
    {
        $this->container['miniProgramNickName'] = $miniProgramNickName;

        return $this;
    }

    /**
     * Gets miniProgramIconUrl
     *
     * @return string|mixed
     */
    public function getMiniProgramIconUrl()
    {
        return $this->container['miniProgramIconUrl'];
    }

    /**
     * Sets miniProgramIconUrl
     *
     * @param string|mixed $miniProgramIconUrl miniProgramIconUrl
     *
     * @return $this
     */
    public function setMiniProgramIconUrl($miniProgramIconUrl)
    {
        $this->container['miniProgramIconUrl'] = $miniProgramIconUrl;

        return $this;
    }

    /**
     * Gets miniProgramPath
     *
     * @return string|mixed
     */
    public function getMiniProgramPath()
    {
        return $this->container['miniProgramPath'];
    }

    /**
     * Sets miniProgramPath
     *
     * @param string|mixed $miniProgramPath miniProgramPath
     *
     * @return $this
     */
    public function setMiniProgramPath($miniProgramPath)
    {
        $this->container['miniProgramPath'] = $miniProgramPath;

        return $this;
    }

    /**
     * Gets miniProgramPaths
     *
     * @return string[]|mixed
     */
    public function getMiniProgramPaths()
    {
        return $this->container['miniProgramPaths'];
    }

    /**
     * Sets miniProgramPaths
     *
     * @param string[]|mixed $miniProgramPaths miniProgramPaths
     *
     * @return $this
     */
    public function setMiniProgramPaths($miniProgramPaths)
    {
        $this->container['miniProgramPaths'] = $miniProgramPaths;

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


