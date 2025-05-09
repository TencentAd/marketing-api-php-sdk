<?php
/**
 * ComponentsAddRequest
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
 * ComponentsAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComponentsAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ComponentsAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'componentCustomName' => 'string',
        'componentValue' => '\TencentAds\Model\V3\ComponentValue',
        'componentSubType' => '\TencentAds\Model\V3\ComponentSubType',
        'organizationId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'componentCustomName' => null,
        'componentValue' => null,
        'componentSubType' => null,
        'organizationId' => 'int64'
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
        'componentCustomName' => 'component_custom_name',
        'componentValue' => 'component_value',
        'componentSubType' => 'component_sub_type',
        'organizationId' => 'organization_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'componentCustomName' => 'setComponentCustomName',
        'componentValue' => 'setComponentValue',
        'componentSubType' => 'setComponentSubType',
        'organizationId' => 'setOrganizationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'componentCustomName' => 'getComponentCustomName',
        'componentValue' => 'getComponentValue',
        'componentSubType' => 'getComponentSubType',
        'organizationId' => 'getOrganizationId'
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
        $this->container['componentCustomName'] = isset($data['componentCustomName']) ? $data['componentCustomName'] : null;
        $this->container['componentValue'] = isset($data['componentValue']) ? $data['componentValue'] : null;
        $this->container['componentSubType'] = isset($data['componentSubType']) ? $data['componentSubType'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
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
     * Gets componentCustomName
     *
     * @return string|mixed
     */
    public function getComponentCustomName()
    {
        return $this->container['componentCustomName'];
    }

    /**
     * Sets componentCustomName
     *
     * @param string|mixed $componentCustomName componentCustomName
     *
     * @return $this
     */
    public function setComponentCustomName($componentCustomName)
    {
        $this->container['componentCustomName'] = $componentCustomName;

        return $this;
    }

    /**
     * Gets componentValue
     *
     * @return \TencentAds\Model\V3\ComponentValue|mixed
     */
    public function getComponentValue()
    {
        return $this->container['componentValue'];
    }

    /**
     * Sets componentValue
     *
     * @param \TencentAds\Model\V3\ComponentValue|mixed $componentValue componentValue
     *
     * @return $this
     */
    public function setComponentValue($componentValue)
    {
        $this->container['componentValue'] = $componentValue;

        return $this;
    }

    /**
     * Gets componentSubType
     *
     * @return \TencentAds\Model\V3\ComponentSubType|mixed
     */
    public function getComponentSubType()
    {
        return $this->container['componentSubType'];
    }

    /**
     * Sets componentSubType
     *
     * @param \TencentAds\Model\V3\ComponentSubType|mixed $componentSubType componentSubType
     *
     * @return $this
     */
    public function setComponentSubType($componentSubType)
    {
        $this->container['componentSubType'] = $componentSubType;

        return $this;
    }

    /**
     * Gets organizationId
     *
     * @return int|mixed
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     *
     * @param int|mixed $organizationId organizationId
     *
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

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


