<?php
/**
 * ProductCatalogsGetListStruct
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
 * ProductCatalogsGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductCatalogsGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductCatalogsGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productCatalogId' => 'int',
        'productCatalogName' => 'string',
        'productCatalogType' => '\TencentAds\Model\V3\DpaApiCatalogType',
        'productCatalogVertical' => '\TencentAds\Model\V3\CatalogVertical',
        'productCatalogStatus' => '\TencentAds\Model\V3\CatalogStatus',
        'productRecommendMethods' => '\TencentAds\Model\V3\ProductRecommendMethod[]',
        'deepLinkEnabled' => '\TencentAds\Model\V3\DeepLinkEnabled'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'productCatalogId' => 'int64',
        'productCatalogName' => null,
        'productCatalogType' => null,
        'productCatalogVertical' => null,
        'productCatalogStatus' => null,
        'productRecommendMethods' => null,
        'deepLinkEnabled' => null
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
        'productCatalogId' => 'product_catalog_id',
        'productCatalogName' => 'product_catalog_name',
        'productCatalogType' => 'product_catalog_type',
        'productCatalogVertical' => 'product_catalog_vertical',
        'productCatalogStatus' => 'product_catalog_status',
        'productRecommendMethods' => 'product_recommend_methods',
        'deepLinkEnabled' => 'deep_link_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productCatalogId' => 'setProductCatalogId',
        'productCatalogName' => 'setProductCatalogName',
        'productCatalogType' => 'setProductCatalogType',
        'productCatalogVertical' => 'setProductCatalogVertical',
        'productCatalogStatus' => 'setProductCatalogStatus',
        'productRecommendMethods' => 'setProductRecommendMethods',
        'deepLinkEnabled' => 'setDeepLinkEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productCatalogId' => 'getProductCatalogId',
        'productCatalogName' => 'getProductCatalogName',
        'productCatalogType' => 'getProductCatalogType',
        'productCatalogVertical' => 'getProductCatalogVertical',
        'productCatalogStatus' => 'getProductCatalogStatus',
        'productRecommendMethods' => 'getProductRecommendMethods',
        'deepLinkEnabled' => 'getDeepLinkEnabled'
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
        $this->container['productCatalogId'] = isset($data['productCatalogId']) ? $data['productCatalogId'] : null;
        $this->container['productCatalogName'] = isset($data['productCatalogName']) ? $data['productCatalogName'] : null;
        $this->container['productCatalogType'] = isset($data['productCatalogType']) ? $data['productCatalogType'] : null;
        $this->container['productCatalogVertical'] = isset($data['productCatalogVertical']) ? $data['productCatalogVertical'] : null;
        $this->container['productCatalogStatus'] = isset($data['productCatalogStatus']) ? $data['productCatalogStatus'] : null;
        $this->container['productRecommendMethods'] = isset($data['productRecommendMethods']) ? $data['productRecommendMethods'] : null;
        $this->container['deepLinkEnabled'] = isset($data['deepLinkEnabled']) ? $data['deepLinkEnabled'] : null;
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
     * Gets productCatalogName
     *
     * @return string|mixed
     */
    public function getProductCatalogName()
    {
        return $this->container['productCatalogName'];
    }

    /**
     * Sets productCatalogName
     *
     * @param string|mixed $productCatalogName productCatalogName
     *
     * @return $this
     */
    public function setProductCatalogName($productCatalogName)
    {
        $this->container['productCatalogName'] = $productCatalogName;

        return $this;
    }

    /**
     * Gets productCatalogType
     *
     * @return \TencentAds\Model\V3\DpaApiCatalogType|mixed
     */
    public function getProductCatalogType()
    {
        return $this->container['productCatalogType'];
    }

    /**
     * Sets productCatalogType
     *
     * @param \TencentAds\Model\V3\DpaApiCatalogType|mixed $productCatalogType productCatalogType
     *
     * @return $this
     */
    public function setProductCatalogType($productCatalogType)
    {
        $this->container['productCatalogType'] = $productCatalogType;

        return $this;
    }

    /**
     * Gets productCatalogVertical
     *
     * @return \TencentAds\Model\V3\CatalogVertical|mixed
     */
    public function getProductCatalogVertical()
    {
        return $this->container['productCatalogVertical'];
    }

    /**
     * Sets productCatalogVertical
     *
     * @param \TencentAds\Model\V3\CatalogVertical|mixed $productCatalogVertical productCatalogVertical
     *
     * @return $this
     */
    public function setProductCatalogVertical($productCatalogVertical)
    {
        $this->container['productCatalogVertical'] = $productCatalogVertical;

        return $this;
    }

    /**
     * Gets productCatalogStatus
     *
     * @return \TencentAds\Model\V3\CatalogStatus|mixed
     */
    public function getProductCatalogStatus()
    {
        return $this->container['productCatalogStatus'];
    }

    /**
     * Sets productCatalogStatus
     *
     * @param \TencentAds\Model\V3\CatalogStatus|mixed $productCatalogStatus productCatalogStatus
     *
     * @return $this
     */
    public function setProductCatalogStatus($productCatalogStatus)
    {
        $this->container['productCatalogStatus'] = $productCatalogStatus;

        return $this;
    }

    /**
     * Gets productRecommendMethods
     *
     * @return \TencentAds\Model\V3\ProductRecommendMethod[]|mixed
     */
    public function getProductRecommendMethods()
    {
        return $this->container['productRecommendMethods'];
    }

    /**
     * Sets productRecommendMethods
     *
     * @param \TencentAds\Model\V3\ProductRecommendMethod[]|mixed $productRecommendMethods productRecommendMethods
     *
     * @return $this
     */
    public function setProductRecommendMethods($productRecommendMethods)
    {
        $this->container['productRecommendMethods'] = $productRecommendMethods;

        return $this;
    }

    /**
     * Gets deepLinkEnabled
     *
     * @return \TencentAds\Model\V3\DeepLinkEnabled|mixed
     */
    public function getDeepLinkEnabled()
    {
        return $this->container['deepLinkEnabled'];
    }

    /**
     * Sets deepLinkEnabled
     *
     * @param \TencentAds\Model\V3\DeepLinkEnabled|mixed $deepLinkEnabled deepLinkEnabled
     *
     * @return $this
     */
    public function setDeepLinkEnabled($deepLinkEnabled)
    {
        $this->container['deepLinkEnabled'] = $deepLinkEnabled;

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


