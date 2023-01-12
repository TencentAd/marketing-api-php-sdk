<?php
/**
 * RedEnvelopeStruct
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
 * RedEnvelopeStruct Class Doc Comment
 *
 * @category Class
 * @description 剧情红包组件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RedEnvelopeStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'red_envelope_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'redEnvelopeSwitch' => 'bool',
        'redEnvelopeImageId' => 'string',
        'redEnvelopeExtraSceneId' => 'string',
        'redEnvelopeAppearTimeMs' => 'int',
        'redEnvelopeDisappearTimeMs' => 'int',
        'redEnvelopeOriginExtraSceneId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'redEnvelopeSwitch' => null,
        'redEnvelopeImageId' => null,
        'redEnvelopeExtraSceneId' => null,
        'redEnvelopeAppearTimeMs' => 'int64',
        'redEnvelopeDisappearTimeMs' => 'int64',
        'redEnvelopeOriginExtraSceneId' => null
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
        'redEnvelopeSwitch' => 'red_envelope_switch',
        'redEnvelopeImageId' => 'red_envelope_image_id',
        'redEnvelopeExtraSceneId' => 'red_envelope_extra_scene_id',
        'redEnvelopeAppearTimeMs' => 'red_envelope_appear_time_ms',
        'redEnvelopeDisappearTimeMs' => 'red_envelope_disappear_time_ms',
        'redEnvelopeOriginExtraSceneId' => 'red_envelope_origin_extra_scene_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redEnvelopeSwitch' => 'setRedEnvelopeSwitch',
        'redEnvelopeImageId' => 'setRedEnvelopeImageId',
        'redEnvelopeExtraSceneId' => 'setRedEnvelopeExtraSceneId',
        'redEnvelopeAppearTimeMs' => 'setRedEnvelopeAppearTimeMs',
        'redEnvelopeDisappearTimeMs' => 'setRedEnvelopeDisappearTimeMs',
        'redEnvelopeOriginExtraSceneId' => 'setRedEnvelopeOriginExtraSceneId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redEnvelopeSwitch' => 'getRedEnvelopeSwitch',
        'redEnvelopeImageId' => 'getRedEnvelopeImageId',
        'redEnvelopeExtraSceneId' => 'getRedEnvelopeExtraSceneId',
        'redEnvelopeAppearTimeMs' => 'getRedEnvelopeAppearTimeMs',
        'redEnvelopeDisappearTimeMs' => 'getRedEnvelopeDisappearTimeMs',
        'redEnvelopeOriginExtraSceneId' => 'getRedEnvelopeOriginExtraSceneId'
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
        $this->container['redEnvelopeSwitch'] = isset($data['redEnvelopeSwitch']) ? $data['redEnvelopeSwitch'] : null;
        $this->container['redEnvelopeImageId'] = isset($data['redEnvelopeImageId']) ? $data['redEnvelopeImageId'] : null;
        $this->container['redEnvelopeExtraSceneId'] = isset($data['redEnvelopeExtraSceneId']) ? $data['redEnvelopeExtraSceneId'] : null;
        $this->container['redEnvelopeAppearTimeMs'] = isset($data['redEnvelopeAppearTimeMs']) ? $data['redEnvelopeAppearTimeMs'] : null;
        $this->container['redEnvelopeDisappearTimeMs'] = isset($data['redEnvelopeDisappearTimeMs']) ? $data['redEnvelopeDisappearTimeMs'] : null;
        $this->container['redEnvelopeOriginExtraSceneId'] = isset($data['redEnvelopeOriginExtraSceneId']) ? $data['redEnvelopeOriginExtraSceneId'] : null;
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
     * Gets redEnvelopeSwitch
     *
     * @return bool|mixed
     */
    public function getRedEnvelopeSwitch()
    {
        return $this->container['redEnvelopeSwitch'];
    }

    /**
     * Sets redEnvelopeSwitch
     *
     * @param bool|mixed $redEnvelopeSwitch redEnvelopeSwitch
     *
     * @return $this
     */
    public function setRedEnvelopeSwitch($redEnvelopeSwitch)
    {
        $this->container['redEnvelopeSwitch'] = $redEnvelopeSwitch;

        return $this;
    }

    /**
     * Gets redEnvelopeImageId
     *
     * @return string|mixed
     */
    public function getRedEnvelopeImageId()
    {
        return $this->container['redEnvelopeImageId'];
    }

    /**
     * Sets redEnvelopeImageId
     *
     * @param string|mixed $redEnvelopeImageId redEnvelopeImageId
     *
     * @return $this
     */
    public function setRedEnvelopeImageId($redEnvelopeImageId)
    {
        $this->container['redEnvelopeImageId'] = $redEnvelopeImageId;

        return $this;
    }

    /**
     * Gets redEnvelopeExtraSceneId
     *
     * @return string|mixed
     */
    public function getRedEnvelopeExtraSceneId()
    {
        return $this->container['redEnvelopeExtraSceneId'];
    }

    /**
     * Sets redEnvelopeExtraSceneId
     *
     * @param string|mixed $redEnvelopeExtraSceneId redEnvelopeExtraSceneId
     *
     * @return $this
     */
    public function setRedEnvelopeExtraSceneId($redEnvelopeExtraSceneId)
    {
        $this->container['redEnvelopeExtraSceneId'] = $redEnvelopeExtraSceneId;

        return $this;
    }

    /**
     * Gets redEnvelopeAppearTimeMs
     *
     * @return int|mixed
     */
    public function getRedEnvelopeAppearTimeMs()
    {
        return $this->container['redEnvelopeAppearTimeMs'];
    }

    /**
     * Sets redEnvelopeAppearTimeMs
     *
     * @param int|mixed $redEnvelopeAppearTimeMs redEnvelopeAppearTimeMs
     *
     * @return $this
     */
    public function setRedEnvelopeAppearTimeMs($redEnvelopeAppearTimeMs)
    {
        $this->container['redEnvelopeAppearTimeMs'] = $redEnvelopeAppearTimeMs;

        return $this;
    }

    /**
     * Gets redEnvelopeDisappearTimeMs
     *
     * @return int|mixed
     */
    public function getRedEnvelopeDisappearTimeMs()
    {
        return $this->container['redEnvelopeDisappearTimeMs'];
    }

    /**
     * Sets redEnvelopeDisappearTimeMs
     *
     * @param int|mixed $redEnvelopeDisappearTimeMs redEnvelopeDisappearTimeMs
     *
     * @return $this
     */
    public function setRedEnvelopeDisappearTimeMs($redEnvelopeDisappearTimeMs)
    {
        $this->container['redEnvelopeDisappearTimeMs'] = $redEnvelopeDisappearTimeMs;

        return $this;
    }

    /**
     * Gets redEnvelopeOriginExtraSceneId
     *
     * @return string|mixed
     */
    public function getRedEnvelopeOriginExtraSceneId()
    {
        return $this->container['redEnvelopeOriginExtraSceneId'];
    }

    /**
     * Sets redEnvelopeOriginExtraSceneId
     *
     * @param string|mixed $redEnvelopeOriginExtraSceneId redEnvelopeOriginExtraSceneId
     *
     * @return $this
     */
    public function setRedEnvelopeOriginExtraSceneId($redEnvelopeOriginExtraSceneId)
    {
        $this->container['redEnvelopeOriginExtraSceneId'] = $redEnvelopeOriginExtraSceneId;

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

