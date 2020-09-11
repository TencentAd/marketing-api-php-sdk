<?php
/**
 * ProductItemsGetListStruct
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
 * ProductItemsGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductItemsGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductItemsGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productOuterId' => 'string',
        'productName' => 'string',
        'productImageUrl' => 'string',
        'productShortName' => 'string',
        'price' => 'double',
        'firstCategoryId' => 'int',
        'firstCategoryName' => 'string',
        'secondCategoryId' => 'int',
        'secondCategoryName' => 'string',
        'thirdCategoryId' => 'int',
        'thirdCategoryName' => 'string',
        'fourthCategoryId' => 'int',
        'fourthCategoryName' => 'string',
        'brandName' => 'string',
        'brandId' => 'int',
        'description' => 'string',
        'customData' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'productOuterId' => null,
        'productName' => null,
        'productImageUrl' => null,
        'productShortName' => null,
        'price' => 'double',
        'firstCategoryId' => 'int64',
        'firstCategoryName' => null,
        'secondCategoryId' => 'int64',
        'secondCategoryName' => null,
        'thirdCategoryId' => 'int64',
        'thirdCategoryName' => null,
        'fourthCategoryId' => 'int64',
        'fourthCategoryName' => null,
        'brandName' => null,
        'brandId' => 'int64',
        'description' => null,
        'customData' => null
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
        'productOuterId' => 'product_outer_id',
        'productName' => 'product_name',
        'productImageUrl' => 'product_image_url',
        'productShortName' => 'product_short_name',
        'price' => 'price',
        'firstCategoryId' => 'first_category_id',
        'firstCategoryName' => 'first_category_name',
        'secondCategoryId' => 'second_category_id',
        'secondCategoryName' => 'second_category_name',
        'thirdCategoryId' => 'third_category_id',
        'thirdCategoryName' => 'third_category_name',
        'fourthCategoryId' => 'fourth_category_id',
        'fourthCategoryName' => 'fourth_category_name',
        'brandName' => 'brand_name',
        'brandId' => 'brand_id',
        'description' => 'description',
        'customData' => 'custom_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productOuterId' => 'setProductOuterId',
        'productName' => 'setProductName',
        'productImageUrl' => 'setProductImageUrl',
        'productShortName' => 'setProductShortName',
        'price' => 'setPrice',
        'firstCategoryId' => 'setFirstCategoryId',
        'firstCategoryName' => 'setFirstCategoryName',
        'secondCategoryId' => 'setSecondCategoryId',
        'secondCategoryName' => 'setSecondCategoryName',
        'thirdCategoryId' => 'setThirdCategoryId',
        'thirdCategoryName' => 'setThirdCategoryName',
        'fourthCategoryId' => 'setFourthCategoryId',
        'fourthCategoryName' => 'setFourthCategoryName',
        'brandName' => 'setBrandName',
        'brandId' => 'setBrandId',
        'description' => 'setDescription',
        'customData' => 'setCustomData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productOuterId' => 'getProductOuterId',
        'productName' => 'getProductName',
        'productImageUrl' => 'getProductImageUrl',
        'productShortName' => 'getProductShortName',
        'price' => 'getPrice',
        'firstCategoryId' => 'getFirstCategoryId',
        'firstCategoryName' => 'getFirstCategoryName',
        'secondCategoryId' => 'getSecondCategoryId',
        'secondCategoryName' => 'getSecondCategoryName',
        'thirdCategoryId' => 'getThirdCategoryId',
        'thirdCategoryName' => 'getThirdCategoryName',
        'fourthCategoryId' => 'getFourthCategoryId',
        'fourthCategoryName' => 'getFourthCategoryName',
        'brandName' => 'getBrandName',
        'brandId' => 'getBrandId',
        'description' => 'getDescription',
        'customData' => 'getCustomData'
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
        $this->container['productOuterId'] = isset($data['productOuterId']) ? $data['productOuterId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productImageUrl'] = isset($data['productImageUrl']) ? $data['productImageUrl'] : null;
        $this->container['productShortName'] = isset($data['productShortName']) ? $data['productShortName'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['firstCategoryId'] = isset($data['firstCategoryId']) ? $data['firstCategoryId'] : null;
        $this->container['firstCategoryName'] = isset($data['firstCategoryName']) ? $data['firstCategoryName'] : null;
        $this->container['secondCategoryId'] = isset($data['secondCategoryId']) ? $data['secondCategoryId'] : null;
        $this->container['secondCategoryName'] = isset($data['secondCategoryName']) ? $data['secondCategoryName'] : null;
        $this->container['thirdCategoryId'] = isset($data['thirdCategoryId']) ? $data['thirdCategoryId'] : null;
        $this->container['thirdCategoryName'] = isset($data['thirdCategoryName']) ? $data['thirdCategoryName'] : null;
        $this->container['fourthCategoryId'] = isset($data['fourthCategoryId']) ? $data['fourthCategoryId'] : null;
        $this->container['fourthCategoryName'] = isset($data['fourthCategoryName']) ? $data['fourthCategoryName'] : null;
        $this->container['brandName'] = isset($data['brandName']) ? $data['brandName'] : null;
        $this->container['brandId'] = isset($data['brandId']) ? $data['brandId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['customData'] = isset($data['customData']) ? $data['customData'] : null;
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
     * Gets productOuterId
     *
     * @return string
     */
    public function getProductOuterId()
    {
        return $this->container['productOuterId'];
    }

    /**
     * Sets productOuterId
     *
     * @param string $productOuterId productOuterId
     *
     * @return $this
     */
    public function setProductOuterId($productOuterId)
    {
        $this->container['productOuterId'] = $productOuterId;

        return $this;
    }

    /**
     * Gets productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string $productName productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets productImageUrl
     *
     * @return string
     */
    public function getProductImageUrl()
    {
        return $this->container['productImageUrl'];
    }

    /**
     * Sets productImageUrl
     *
     * @param string $productImageUrl productImageUrl
     *
     * @return $this
     */
    public function setProductImageUrl($productImageUrl)
    {
        $this->container['productImageUrl'] = $productImageUrl;

        return $this;
    }

    /**
     * Gets productShortName
     *
     * @return string
     */
    public function getProductShortName()
    {
        return $this->container['productShortName'];
    }

    /**
     * Sets productShortName
     *
     * @param string $productShortName productShortName
     *
     * @return $this
     */
    public function setProductShortName($productShortName)
    {
        $this->container['productShortName'] = $productShortName;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets firstCategoryId
     *
     * @return int
     */
    public function getFirstCategoryId()
    {
        return $this->container['firstCategoryId'];
    }

    /**
     * Sets firstCategoryId
     *
     * @param int $firstCategoryId firstCategoryId
     *
     * @return $this
     */
    public function setFirstCategoryId($firstCategoryId)
    {
        $this->container['firstCategoryId'] = $firstCategoryId;

        return $this;
    }

    /**
     * Gets firstCategoryName
     *
     * @return string
     */
    public function getFirstCategoryName()
    {
        return $this->container['firstCategoryName'];
    }

    /**
     * Sets firstCategoryName
     *
     * @param string $firstCategoryName firstCategoryName
     *
     * @return $this
     */
    public function setFirstCategoryName($firstCategoryName)
    {
        $this->container['firstCategoryName'] = $firstCategoryName;

        return $this;
    }

    /**
     * Gets secondCategoryId
     *
     * @return int
     */
    public function getSecondCategoryId()
    {
        return $this->container['secondCategoryId'];
    }

    /**
     * Sets secondCategoryId
     *
     * @param int $secondCategoryId secondCategoryId
     *
     * @return $this
     */
    public function setSecondCategoryId($secondCategoryId)
    {
        $this->container['secondCategoryId'] = $secondCategoryId;

        return $this;
    }

    /**
     * Gets secondCategoryName
     *
     * @return string
     */
    public function getSecondCategoryName()
    {
        return $this->container['secondCategoryName'];
    }

    /**
     * Sets secondCategoryName
     *
     * @param string $secondCategoryName secondCategoryName
     *
     * @return $this
     */
    public function setSecondCategoryName($secondCategoryName)
    {
        $this->container['secondCategoryName'] = $secondCategoryName;

        return $this;
    }

    /**
     * Gets thirdCategoryId
     *
     * @return int
     */
    public function getThirdCategoryId()
    {
        return $this->container['thirdCategoryId'];
    }

    /**
     * Sets thirdCategoryId
     *
     * @param int $thirdCategoryId thirdCategoryId
     *
     * @return $this
     */
    public function setThirdCategoryId($thirdCategoryId)
    {
        $this->container['thirdCategoryId'] = $thirdCategoryId;

        return $this;
    }

    /**
     * Gets thirdCategoryName
     *
     * @return string
     */
    public function getThirdCategoryName()
    {
        return $this->container['thirdCategoryName'];
    }

    /**
     * Sets thirdCategoryName
     *
     * @param string $thirdCategoryName thirdCategoryName
     *
     * @return $this
     */
    public function setThirdCategoryName($thirdCategoryName)
    {
        $this->container['thirdCategoryName'] = $thirdCategoryName;

        return $this;
    }

    /**
     * Gets fourthCategoryId
     *
     * @return int
     */
    public function getFourthCategoryId()
    {
        return $this->container['fourthCategoryId'];
    }

    /**
     * Sets fourthCategoryId
     *
     * @param int $fourthCategoryId fourthCategoryId
     *
     * @return $this
     */
    public function setFourthCategoryId($fourthCategoryId)
    {
        $this->container['fourthCategoryId'] = $fourthCategoryId;

        return $this;
    }

    /**
     * Gets fourthCategoryName
     *
     * @return string
     */
    public function getFourthCategoryName()
    {
        return $this->container['fourthCategoryName'];
    }

    /**
     * Sets fourthCategoryName
     *
     * @param string $fourthCategoryName fourthCategoryName
     *
     * @return $this
     */
    public function setFourthCategoryName($fourthCategoryName)
    {
        $this->container['fourthCategoryName'] = $fourthCategoryName;

        return $this;
    }

    /**
     * Gets brandName
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string $brandName brandName
     *
     * @return $this
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets brandId
     *
     * @return int
     */
    public function getBrandId()
    {
        return $this->container['brandId'];
    }

    /**
     * Sets brandId
     *
     * @param int $brandId brandId
     *
     * @return $this
     */
    public function setBrandId($brandId)
    {
        $this->container['brandId'] = $brandId;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets customData
     *
     * @return string
     */
    public function getCustomData()
    {
        return $this->container['customData'];
    }

    /**
     * Sets customData
     *
     * @param string $customData customData
     *
     * @return $this
     */
    public function setCustomData($customData)
    {
        $this->container['customData'] = $customData;

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


