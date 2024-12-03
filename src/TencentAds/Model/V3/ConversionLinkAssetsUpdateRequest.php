<?php
/**
 * ConversionLinkAssetsUpdateRequest
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
 * ConversionLinkAssetsUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversionLinkAssetsUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversionLinkAssetsUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'conversionLinkAssetId' => 'int',
        'version' => 'int',
        'name' => 'string',
        'feedbackId' => 'int',
        'optionalOgNodesIndex' => 'int[]',
        'customReportNodesIndex' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'conversionLinkAssetId' => 'int64',
        'version' => 'int64',
        'name' => null,
        'feedbackId' => 'int64',
        'optionalOgNodesIndex' => 'int64',
        'customReportNodesIndex' => 'int64'
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
        'conversionLinkAssetId' => 'conversion_link_asset_id',
        'version' => 'version',
        'name' => 'name',
        'feedbackId' => 'feedback_id',
        'optionalOgNodesIndex' => 'optional_og_nodes_index',
        'customReportNodesIndex' => 'custom_report_nodes_index'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'conversionLinkAssetId' => 'setConversionLinkAssetId',
        'version' => 'setVersion',
        'name' => 'setName',
        'feedbackId' => 'setFeedbackId',
        'optionalOgNodesIndex' => 'setOptionalOgNodesIndex',
        'customReportNodesIndex' => 'setCustomReportNodesIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'conversionLinkAssetId' => 'getConversionLinkAssetId',
        'version' => 'getVersion',
        'name' => 'getName',
        'feedbackId' => 'getFeedbackId',
        'optionalOgNodesIndex' => 'getOptionalOgNodesIndex',
        'customReportNodesIndex' => 'getCustomReportNodesIndex'
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
        $this->container['conversionLinkAssetId'] = isset($data['conversionLinkAssetId']) ? $data['conversionLinkAssetId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['feedbackId'] = isset($data['feedbackId']) ? $data['feedbackId'] : null;
        $this->container['optionalOgNodesIndex'] = isset($data['optionalOgNodesIndex']) ? $data['optionalOgNodesIndex'] : null;
        $this->container['customReportNodesIndex'] = isset($data['customReportNodesIndex']) ? $data['customReportNodesIndex'] : null;
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
     * Gets conversionLinkAssetId
     *
     * @return int|mixed
     */
    public function getConversionLinkAssetId()
    {
        return $this->container['conversionLinkAssetId'];
    }

    /**
     * Sets conversionLinkAssetId
     *
     * @param int|mixed $conversionLinkAssetId conversionLinkAssetId
     *
     * @return $this
     */
    public function setConversionLinkAssetId($conversionLinkAssetId)
    {
        $this->container['conversionLinkAssetId'] = $conversionLinkAssetId;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|mixed
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|mixed $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|mixed
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|mixed $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets feedbackId
     *
     * @return int|mixed
     */
    public function getFeedbackId()
    {
        return $this->container['feedbackId'];
    }

    /**
     * Sets feedbackId
     *
     * @param int|mixed $feedbackId feedbackId
     *
     * @return $this
     */
    public function setFeedbackId($feedbackId)
    {
        $this->container['feedbackId'] = $feedbackId;

        return $this;
    }

    /**
     * Gets optionalOgNodesIndex
     *
     * @return int[]|mixed
     */
    public function getOptionalOgNodesIndex()
    {
        return $this->container['optionalOgNodesIndex'];
    }

    /**
     * Sets optionalOgNodesIndex
     *
     * @param int[]|mixed $optionalOgNodesIndex optionalOgNodesIndex
     *
     * @return $this
     */
    public function setOptionalOgNodesIndex($optionalOgNodesIndex)
    {
        $this->container['optionalOgNodesIndex'] = $optionalOgNodesIndex;

        return $this;
    }

    /**
     * Gets customReportNodesIndex
     *
     * @return int[]|mixed
     */
    public function getCustomReportNodesIndex()
    {
        return $this->container['customReportNodesIndex'];
    }

    /**
     * Sets customReportNodesIndex
     *
     * @param int[]|mixed $customReportNodesIndex customReportNodesIndex
     *
     * @return $this
     */
    public function setCustomReportNodesIndex($customReportNodesIndex)
    {
        $this->container['customReportNodesIndex'] = $customReportNodesIndex;

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

