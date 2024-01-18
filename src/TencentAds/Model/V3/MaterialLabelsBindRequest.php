<?php
/**
 * MaterialLabelsBindRequest
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
 * MaterialLabelsBindRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MaterialLabelsBindRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MaterialLabelsBindRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'imageIdList' => 'string[]',
        'mediaIdList' => 'string[]',
        'labelIdList' => 'int[]',
        'bindingType' => '\TencentAds\Model\V3\BindingType',
        'businessScenario' => '\TencentAds\Model\V3\BusinessScenario'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'imageIdList' => null,
        'mediaIdList' => null,
        'labelIdList' => 'int64',
        'bindingType' => null,
        'businessScenario' => null
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
        'accountId' => 'account_id',
        'imageIdList' => 'image_id_list',
        'mediaIdList' => 'media_id_list',
        'labelIdList' => 'label_id_list',
        'bindingType' => 'binding_type',
        'businessScenario' => 'business_scenario'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'imageIdList' => 'setImageIdList',
        'mediaIdList' => 'setMediaIdList',
        'labelIdList' => 'setLabelIdList',
        'bindingType' => 'setBindingType',
        'businessScenario' => 'setBusinessScenario'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'imageIdList' => 'getImageIdList',
        'mediaIdList' => 'getMediaIdList',
        'labelIdList' => 'getLabelIdList',
        'bindingType' => 'getBindingType',
        'businessScenario' => 'getBusinessScenario'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['imageIdList'] = isset($data['imageIdList']) ? $data['imageIdList'] : null;
        $this->container['mediaIdList'] = isset($data['mediaIdList']) ? $data['mediaIdList'] : null;
        $this->container['labelIdList'] = isset($data['labelIdList']) ? $data['labelIdList'] : null;
        $this->container['bindingType'] = isset($data['bindingType']) ? $data['bindingType'] : null;
        $this->container['businessScenario'] = isset($data['businessScenario']) ? $data['businessScenario'] : null;
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
     * Gets accountId
     *
     * @return int|mixed
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int|mixed $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets imageIdList
     *
     * @return string[]|mixed
     */
    public function getImageIdList()
    {
        return $this->container['imageIdList'];
    }

    /**
     * Sets imageIdList
     *
     * @param string[]|mixed $imageIdList imageIdList
     *
     * @return $this
     */
    public function setImageIdList($imageIdList)
    {
        $this->container['imageIdList'] = $imageIdList;

        return $this;
    }

    /**
     * Gets mediaIdList
     *
     * @return string[]|mixed
     */
    public function getMediaIdList()
    {
        return $this->container['mediaIdList'];
    }

    /**
     * Sets mediaIdList
     *
     * @param string[]|mixed $mediaIdList mediaIdList
     *
     * @return $this
     */
    public function setMediaIdList($mediaIdList)
    {
        $this->container['mediaIdList'] = $mediaIdList;

        return $this;
    }

    /**
     * Gets labelIdList
     *
     * @return int[]|mixed
     */
    public function getLabelIdList()
    {
        return $this->container['labelIdList'];
    }

    /**
     * Sets labelIdList
     *
     * @param int[]|mixed $labelIdList labelIdList
     *
     * @return $this
     */
    public function setLabelIdList($labelIdList)
    {
        $this->container['labelIdList'] = $labelIdList;

        return $this;
    }

    /**
     * Gets bindingType
     *
     * @return \TencentAds\Model\V3\BindingType|mixed
     */
    public function getBindingType()
    {
        return $this->container['bindingType'];
    }

    /**
     * Sets bindingType
     *
     * @param \TencentAds\Model\V3\BindingType|mixed $bindingType bindingType
     *
     * @return $this
     */
    public function setBindingType($bindingType)
    {
        $this->container['bindingType'] = $bindingType;

        return $this;
    }

    /**
     * Gets businessScenario
     *
     * @return \TencentAds\Model\V3\BusinessScenario|mixed
     */
    public function getBusinessScenario()
    {
        return $this->container['businessScenario'];
    }

    /**
     * Sets businessScenario
     *
     * @param \TencentAds\Model\V3\BusinessScenario|mixed $businessScenario businessScenario
     *
     * @return $this
     */
    public function setBusinessScenario($businessScenario)
    {
        $this->container['businessScenario'] = $businessScenario;

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


