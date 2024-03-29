<?php
/**
 * DynamicAdImageTemplatesGetListStruct
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
 * DynamicAdImageTemplatesGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicAdImageTemplatesGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DynamicAdImageTemplatesGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dynamicAdTemplateId' => 'int',
        'dynamicAdTemplateName' => 'string',
        'productItemDisplayQuantity' => '\TencentAds\Model\V3\ProductMode',
        'dynamicAdTemplateWidth' => 'int',
        'dynamicAdTemplateHeight' => 'int',
        'imageUrl' => 'string',
        'imageProductFields' => 'string[]',
        'fillType' => '\TencentAds\Model\V3\TemplateImageFillType',
        'coverage' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dynamicAdTemplateId' => 'int64',
        'dynamicAdTemplateName' => null,
        'productItemDisplayQuantity' => null,
        'dynamicAdTemplateWidth' => 'int64',
        'dynamicAdTemplateHeight' => 'int64',
        'imageUrl' => null,
        'imageProductFields' => null,
        'fillType' => null,
        'coverage' => 'double'
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
        'dynamicAdTemplateId' => 'dynamic_ad_template_id',
        'dynamicAdTemplateName' => 'dynamic_ad_template_name',
        'productItemDisplayQuantity' => 'product_item_display_quantity',
        'dynamicAdTemplateWidth' => 'dynamic_ad_template_width',
        'dynamicAdTemplateHeight' => 'dynamic_ad_template_height',
        'imageUrl' => 'image_url',
        'imageProductFields' => 'image_product_fields',
        'fillType' => 'fill_type',
        'coverage' => 'coverage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dynamicAdTemplateId' => 'setDynamicAdTemplateId',
        'dynamicAdTemplateName' => 'setDynamicAdTemplateName',
        'productItemDisplayQuantity' => 'setProductItemDisplayQuantity',
        'dynamicAdTemplateWidth' => 'setDynamicAdTemplateWidth',
        'dynamicAdTemplateHeight' => 'setDynamicAdTemplateHeight',
        'imageUrl' => 'setImageUrl',
        'imageProductFields' => 'setImageProductFields',
        'fillType' => 'setFillType',
        'coverage' => 'setCoverage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dynamicAdTemplateId' => 'getDynamicAdTemplateId',
        'dynamicAdTemplateName' => 'getDynamicAdTemplateName',
        'productItemDisplayQuantity' => 'getProductItemDisplayQuantity',
        'dynamicAdTemplateWidth' => 'getDynamicAdTemplateWidth',
        'dynamicAdTemplateHeight' => 'getDynamicAdTemplateHeight',
        'imageUrl' => 'getImageUrl',
        'imageProductFields' => 'getImageProductFields',
        'fillType' => 'getFillType',
        'coverage' => 'getCoverage'
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
        $this->container['dynamicAdTemplateId'] = isset($data['dynamicAdTemplateId']) ? $data['dynamicAdTemplateId'] : null;
        $this->container['dynamicAdTemplateName'] = isset($data['dynamicAdTemplateName']) ? $data['dynamicAdTemplateName'] : null;
        $this->container['productItemDisplayQuantity'] = isset($data['productItemDisplayQuantity']) ? $data['productItemDisplayQuantity'] : null;
        $this->container['dynamicAdTemplateWidth'] = isset($data['dynamicAdTemplateWidth']) ? $data['dynamicAdTemplateWidth'] : null;
        $this->container['dynamicAdTemplateHeight'] = isset($data['dynamicAdTemplateHeight']) ? $data['dynamicAdTemplateHeight'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['imageProductFields'] = isset($data['imageProductFields']) ? $data['imageProductFields'] : null;
        $this->container['fillType'] = isset($data['fillType']) ? $data['fillType'] : null;
        $this->container['coverage'] = isset($data['coverage']) ? $data['coverage'] : null;
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
     * Gets dynamicAdTemplateId
     *
     * @return int|mixed
     */
    public function getDynamicAdTemplateId()
    {
        return $this->container['dynamicAdTemplateId'];
    }

    /**
     * Sets dynamicAdTemplateId
     *
     * @param int|mixed $dynamicAdTemplateId dynamicAdTemplateId
     *
     * @return $this
     */
    public function setDynamicAdTemplateId($dynamicAdTemplateId)
    {
        $this->container['dynamicAdTemplateId'] = $dynamicAdTemplateId;

        return $this;
    }

    /**
     * Gets dynamicAdTemplateName
     *
     * @return string|mixed
     */
    public function getDynamicAdTemplateName()
    {
        return $this->container['dynamicAdTemplateName'];
    }

    /**
     * Sets dynamicAdTemplateName
     *
     * @param string|mixed $dynamicAdTemplateName dynamicAdTemplateName
     *
     * @return $this
     */
    public function setDynamicAdTemplateName($dynamicAdTemplateName)
    {
        $this->container['dynamicAdTemplateName'] = $dynamicAdTemplateName;

        return $this;
    }

    /**
     * Gets productItemDisplayQuantity
     *
     * @return \TencentAds\Model\V3\ProductMode|mixed
     */
    public function getProductItemDisplayQuantity()
    {
        return $this->container['productItemDisplayQuantity'];
    }

    /**
     * Sets productItemDisplayQuantity
     *
     * @param \TencentAds\Model\V3\ProductMode|mixed $productItemDisplayQuantity productItemDisplayQuantity
     *
     * @return $this
     */
    public function setProductItemDisplayQuantity($productItemDisplayQuantity)
    {
        $this->container['productItemDisplayQuantity'] = $productItemDisplayQuantity;

        return $this;
    }

    /**
     * Gets dynamicAdTemplateWidth
     *
     * @return int|mixed
     */
    public function getDynamicAdTemplateWidth()
    {
        return $this->container['dynamicAdTemplateWidth'];
    }

    /**
     * Sets dynamicAdTemplateWidth
     *
     * @param int|mixed $dynamicAdTemplateWidth dynamicAdTemplateWidth
     *
     * @return $this
     */
    public function setDynamicAdTemplateWidth($dynamicAdTemplateWidth)
    {
        $this->container['dynamicAdTemplateWidth'] = $dynamicAdTemplateWidth;

        return $this;
    }

    /**
     * Gets dynamicAdTemplateHeight
     *
     * @return int|mixed
     */
    public function getDynamicAdTemplateHeight()
    {
        return $this->container['dynamicAdTemplateHeight'];
    }

    /**
     * Sets dynamicAdTemplateHeight
     *
     * @param int|mixed $dynamicAdTemplateHeight dynamicAdTemplateHeight
     *
     * @return $this
     */
    public function setDynamicAdTemplateHeight($dynamicAdTemplateHeight)
    {
        $this->container['dynamicAdTemplateHeight'] = $dynamicAdTemplateHeight;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string|mixed
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string|mixed $imageUrl imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets imageProductFields
     *
     * @return string[]|mixed
     */
    public function getImageProductFields()
    {
        return $this->container['imageProductFields'];
    }

    /**
     * Sets imageProductFields
     *
     * @param string[]|mixed $imageProductFields imageProductFields
     *
     * @return $this
     */
    public function setImageProductFields($imageProductFields)
    {
        $this->container['imageProductFields'] = $imageProductFields;

        return $this;
    }

    /**
     * Gets fillType
     *
     * @return \TencentAds\Model\V3\TemplateImageFillType|mixed
     */
    public function getFillType()
    {
        return $this->container['fillType'];
    }

    /**
     * Sets fillType
     *
     * @param \TencentAds\Model\V3\TemplateImageFillType|mixed $fillType fillType
     *
     * @return $this
     */
    public function setFillType($fillType)
    {
        $this->container['fillType'] = $fillType;

        return $this;
    }

    /**
     * Gets coverage
     *
     * @return double|mixed
     */
    public function getCoverage()
    {
        return $this->container['coverage'];
    }

    /**
     * Sets coverage
     *
     * @param double|mixed $coverage coverage
     *
     * @return $this
     */
    public function setCoverage($coverage)
    {
        $this->container['coverage'] = $coverage;

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

