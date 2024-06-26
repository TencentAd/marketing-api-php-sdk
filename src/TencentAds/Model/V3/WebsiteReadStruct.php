<?php
/**
 * WebsiteReadStruct
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
 * WebsiteReadStruct Class Doc Comment
 *
 * @category Class
 * @description 推广链接结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebsiteReadStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'website_read_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'websiteDomain' => 'string',
        'icpImageId' => 'string',
        'systemStatus' => '\TencentAds\Model\V3\WebsiteStatus',
        'rejectMessage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'websiteDomain' => null,
        'icpImageId' => null,
        'systemStatus' => null,
        'rejectMessage' => null
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
        'websiteDomain' => 'website_domain',
        'icpImageId' => 'icp_image_id',
        'systemStatus' => 'system_status',
        'rejectMessage' => 'reject_message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'websiteDomain' => 'setWebsiteDomain',
        'icpImageId' => 'setIcpImageId',
        'systemStatus' => 'setSystemStatus',
        'rejectMessage' => 'setRejectMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'websiteDomain' => 'getWebsiteDomain',
        'icpImageId' => 'getIcpImageId',
        'systemStatus' => 'getSystemStatus',
        'rejectMessage' => 'getRejectMessage'
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
        $this->container['websiteDomain'] = isset($data['websiteDomain']) ? $data['websiteDomain'] : null;
        $this->container['icpImageId'] = isset($data['icpImageId']) ? $data['icpImageId'] : null;
        $this->container['systemStatus'] = isset($data['systemStatus']) ? $data['systemStatus'] : null;
        $this->container['rejectMessage'] = isset($data['rejectMessage']) ? $data['rejectMessage'] : null;
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
     * Gets websiteDomain
     *
     * @return string|mixed
     */
    public function getWebsiteDomain()
    {
        return $this->container['websiteDomain'];
    }

    /**
     * Sets websiteDomain
     *
     * @param string|mixed $websiteDomain websiteDomain
     *
     * @return $this
     */
    public function setWebsiteDomain($websiteDomain)
    {
        $this->container['websiteDomain'] = $websiteDomain;

        return $this;
    }

    /**
     * Gets icpImageId
     *
     * @return string|mixed
     */
    public function getIcpImageId()
    {
        return $this->container['icpImageId'];
    }

    /**
     * Sets icpImageId
     *
     * @param string|mixed $icpImageId icpImageId
     *
     * @return $this
     */
    public function setIcpImageId($icpImageId)
    {
        $this->container['icpImageId'] = $icpImageId;

        return $this;
    }

    /**
     * Gets systemStatus
     *
     * @return \TencentAds\Model\V3\WebsiteStatus|mixed
     */
    public function getSystemStatus()
    {
        return $this->container['systemStatus'];
    }

    /**
     * Sets systemStatus
     *
     * @param \TencentAds\Model\V3\WebsiteStatus|mixed $systemStatus systemStatus
     *
     * @return $this
     */
    public function setSystemStatus($systemStatus)
    {
        $this->container['systemStatus'] = $systemStatus;

        return $this;
    }

    /**
     * Gets rejectMessage
     *
     * @return string|mixed
     */
    public function getRejectMessage()
    {
        return $this->container['rejectMessage'];
    }

    /**
     * Sets rejectMessage
     *
     * @param string|mixed $rejectMessage rejectMessage
     *
     * @return $this
     */
    public function setRejectMessage($rejectMessage)
    {
        $this->container['rejectMessage'] = $rejectMessage;

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


