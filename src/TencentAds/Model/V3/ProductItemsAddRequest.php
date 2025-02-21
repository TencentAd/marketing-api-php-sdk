<?php
/**
 * ProductItemsAddRequest
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
 * ProductItemsAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductItemsAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductItemsAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'productCatalogId' => 'int',
        'feedId' => 'int',
        'requestSource' => 'string',
        'usageInfo' => '\TencentAds\Model\V3\UsageInfo',
        'productItemSpecList' => '\TencentAds\Model\V3\ProductItemSpec[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'productCatalogId' => 'int64',
        'feedId' => 'int64',
        'requestSource' => null,
        'usageInfo' => null,
        'productItemSpecList' => null
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
        'productCatalogId' => 'product_catalog_id',
        'feedId' => 'feed_id',
        'requestSource' => 'request_source',
        'usageInfo' => 'usage_info',
        'productItemSpecList' => 'product_item_spec_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'productCatalogId' => 'setProductCatalogId',
        'feedId' => 'setFeedId',
        'requestSource' => 'setRequestSource',
        'usageInfo' => 'setUsageInfo',
        'productItemSpecList' => 'setProductItemSpecList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'productCatalogId' => 'getProductCatalogId',
        'feedId' => 'getFeedId',
        'requestSource' => 'getRequestSource',
        'usageInfo' => 'getUsageInfo',
        'productItemSpecList' => 'getProductItemSpecList'
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
        $this->container['productCatalogId'] = isset($data['productCatalogId']) ? $data['productCatalogId'] : null;
        $this->container['feedId'] = isset($data['feedId']) ? $data['feedId'] : null;
        $this->container['requestSource'] = isset($data['requestSource']) ? $data['requestSource'] : null;
        $this->container['usageInfo'] = isset($data['usageInfo']) ? $data['usageInfo'] : null;
        $this->container['productItemSpecList'] = isset($data['productItemSpecList']) ? $data['productItemSpecList'] : null;
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
     * Gets productCatalogId
     *
     * @return int|mixed
     */
    public function getProductCatalogId()
    {
        return $this->container['productCatalogId'];
    }

    /**
     * Sets productCatalogId
     *
     * @param int|mixed $productCatalogId productCatalogId
     *
     * @return $this
     */
    public function setProductCatalogId($productCatalogId)
    {
        $this->container['productCatalogId'] = $productCatalogId;

        return $this;
    }

    /**
     * Gets feedId
     *
     * @return int|mixed
     */
    public function getFeedId()
    {
        return $this->container['feedId'];
    }

    /**
     * Sets feedId
     *
     * @param int|mixed $feedId feedId
     *
     * @return $this
     */
    public function setFeedId($feedId)
    {
        $this->container['feedId'] = $feedId;

        return $this;
    }

    /**
     * Gets requestSource
     *
     * @return string|mixed
     */
    public function getRequestSource()
    {
        return $this->container['requestSource'];
    }

    /**
     * Sets requestSource
     *
     * @param string|mixed $requestSource requestSource
     *
     * @return $this
     */
    public function setRequestSource($requestSource)
    {
        $this->container['requestSource'] = $requestSource;

        return $this;
    }

    /**
     * Gets usageInfo
     *
     * @return \TencentAds\Model\V3\UsageInfo|mixed
     */
    public function getUsageInfo()
    {
        return $this->container['usageInfo'];
    }

    /**
     * Sets usageInfo
     *
     * @param \TencentAds\Model\V3\UsageInfo|mixed $usageInfo usageInfo
     *
     * @return $this
     */
    public function setUsageInfo($usageInfo)
    {
        $this->container['usageInfo'] = $usageInfo;

        return $this;
    }

    /**
     * Gets productItemSpecList
     *
     * @return \TencentAds\Model\V3\ProductItemSpec[]|mixed
     */
    public function getProductItemSpecList()
    {
        return $this->container['productItemSpecList'];
    }

    /**
     * Sets productItemSpecList
     *
     * @param \TencentAds\Model\V3\ProductItemSpec[]|mixed $productItemSpecList productItemSpecList
     *
     * @return $this
     */
    public function setProductItemSpecList($productItemSpecList)
    {
        $this->container['productItemSpecList'] = $productItemSpecList;

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


