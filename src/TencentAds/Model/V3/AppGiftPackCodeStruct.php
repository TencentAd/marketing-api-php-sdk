<?php
/**
 * AppGiftPackCodeStruct
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
 * AppGiftPackCodeStruct Class Doc Comment
 *
 * @category Class
 * @description 礼包码组件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppGiftPackCodeStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'app_gift_pack_code_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'tips' => 'string',
        'description' => 'string',
        'gameGiftId' => 'string',
        'gameActId' => 'string',
        'gameGiftImageId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'tips' => null,
        'description' => null,
        'gameGiftId' => null,
        'gameActId' => null,
        'gameGiftImageId' => null
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
        'code' => 'code',
        'tips' => 'tips',
        'description' => 'description',
        'gameGiftId' => 'game_gift_id',
        'gameActId' => 'game_act_id',
        'gameGiftImageId' => 'game_gift_image_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'tips' => 'setTips',
        'description' => 'setDescription',
        'gameGiftId' => 'setGameGiftId',
        'gameActId' => 'setGameActId',
        'gameGiftImageId' => 'setGameGiftImageId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'tips' => 'getTips',
        'description' => 'getDescription',
        'gameGiftId' => 'getGameGiftId',
        'gameActId' => 'getGameActId',
        'gameGiftImageId' => 'getGameGiftImageId'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['tips'] = isset($data['tips']) ? $data['tips'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['gameGiftId'] = isset($data['gameGiftId']) ? $data['gameGiftId'] : null;
        $this->container['gameActId'] = isset($data['gameActId']) ? $data['gameActId'] : null;
        $this->container['gameGiftImageId'] = isset($data['gameGiftImageId']) ? $data['gameGiftImageId'] : null;
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
     * Gets code
     *
     * @return string|mixed
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|mixed $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets tips
     *
     * @return string|mixed
     */
    public function getTips()
    {
        return $this->container['tips'];
    }

    /**
     * Sets tips
     *
     * @param string|mixed $tips tips
     *
     * @return $this
     */
    public function setTips($tips)
    {
        $this->container['tips'] = $tips;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|mixed
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|mixed $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets gameGiftId
     *
     * @return string|mixed
     */
    public function getGameGiftId()
    {
        return $this->container['gameGiftId'];
    }

    /**
     * Sets gameGiftId
     *
     * @param string|mixed $gameGiftId gameGiftId
     *
     * @return $this
     */
    public function setGameGiftId($gameGiftId)
    {
        $this->container['gameGiftId'] = $gameGiftId;

        return $this;
    }

    /**
     * Gets gameActId
     *
     * @return string|mixed
     */
    public function getGameActId()
    {
        return $this->container['gameActId'];
    }

    /**
     * Sets gameActId
     *
     * @param string|mixed $gameActId gameActId
     *
     * @return $this
     */
    public function setGameActId($gameActId)
    {
        $this->container['gameActId'] = $gameActId;

        return $this;
    }

    /**
     * Gets gameGiftImageId
     *
     * @return string|mixed
     */
    public function getGameGiftImageId()
    {
        return $this->container['gameGiftImageId'];
    }

    /**
     * Sets gameGiftImageId
     *
     * @param string|mixed $gameGiftImageId gameGiftImageId
     *
     * @return $this
     */
    public function setGameGiftImageId($gameGiftImageId)
    {
        $this->container['gameGiftImageId'] = $gameGiftImageId;

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

