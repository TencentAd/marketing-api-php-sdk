<?php
/**
 * ProductUpdateItem
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
 * ProductUpdateItem Class Doc Comment
 *
 * @category Class
 * @description 商品更新信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductUpdateItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'product_update_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productOuterId' => 'string',
        'price' => 'double',
        'salePrice' => 'double',
        'pricePc' => 'double',
        'priceMobile' => 'double',
        'priceApp' => 'double',
        'stockVolume' => 'int',
        'discount' => 'double',
        'expirationTime' => 'string',
        'productSaleStatus' => '\TencentAds\Model\V3\DpaProductSaleStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'productOuterId' => null,
        'price' => 'double',
        'salePrice' => 'double',
        'pricePc' => 'double',
        'priceMobile' => 'double',
        'priceApp' => 'double',
        'stockVolume' => 'int64',
        'discount' => 'double',
        'expirationTime' => null,
        'productSaleStatus' => null
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
        'price' => 'price',
        'salePrice' => 'sale_price',
        'pricePc' => 'price_pc',
        'priceMobile' => 'price_mobile',
        'priceApp' => 'price_app',
        'stockVolume' => 'stock_volume',
        'discount' => 'discount',
        'expirationTime' => 'expiration_time',
        'productSaleStatus' => 'product_sale_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productOuterId' => 'setProductOuterId',
        'price' => 'setPrice',
        'salePrice' => 'setSalePrice',
        'pricePc' => 'setPricePc',
        'priceMobile' => 'setPriceMobile',
        'priceApp' => 'setPriceApp',
        'stockVolume' => 'setStockVolume',
        'discount' => 'setDiscount',
        'expirationTime' => 'setExpirationTime',
        'productSaleStatus' => 'setProductSaleStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productOuterId' => 'getProductOuterId',
        'price' => 'getPrice',
        'salePrice' => 'getSalePrice',
        'pricePc' => 'getPricePc',
        'priceMobile' => 'getPriceMobile',
        'priceApp' => 'getPriceApp',
        'stockVolume' => 'getStockVolume',
        'discount' => 'getDiscount',
        'expirationTime' => 'getExpirationTime',
        'productSaleStatus' => 'getProductSaleStatus'
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
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['salePrice'] = isset($data['salePrice']) ? $data['salePrice'] : null;
        $this->container['pricePc'] = isset($data['pricePc']) ? $data['pricePc'] : null;
        $this->container['priceMobile'] = isset($data['priceMobile']) ? $data['priceMobile'] : null;
        $this->container['priceApp'] = isset($data['priceApp']) ? $data['priceApp'] : null;
        $this->container['stockVolume'] = isset($data['stockVolume']) ? $data['stockVolume'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['productSaleStatus'] = isset($data['productSaleStatus']) ? $data['productSaleStatus'] : null;
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
     * @return string|mixed
     */
    public function getProductOuterId()
    {
        return $this->container['productOuterId'];
    }

    /**
     * Sets productOuterId
     *
     * @param string|mixed $productOuterId productOuterId
     *
     * @return $this
     */
    public function setProductOuterId($productOuterId)
    {
        $this->container['productOuterId'] = $productOuterId;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double|mixed
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double|mixed $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets salePrice
     *
     * @return double|mixed
     */
    public function getSalePrice()
    {
        return $this->container['salePrice'];
    }

    /**
     * Sets salePrice
     *
     * @param double|mixed $salePrice salePrice
     *
     * @return $this
     */
    public function setSalePrice($salePrice)
    {
        $this->container['salePrice'] = $salePrice;

        return $this;
    }

    /**
     * Gets pricePc
     *
     * @return double|mixed
     */
    public function getPricePc()
    {
        return $this->container['pricePc'];
    }

    /**
     * Sets pricePc
     *
     * @param double|mixed $pricePc pricePc
     *
     * @return $this
     */
    public function setPricePc($pricePc)
    {
        $this->container['pricePc'] = $pricePc;

        return $this;
    }

    /**
     * Gets priceMobile
     *
     * @return double|mixed
     */
    public function getPriceMobile()
    {
        return $this->container['priceMobile'];
    }

    /**
     * Sets priceMobile
     *
     * @param double|mixed $priceMobile priceMobile
     *
     * @return $this
     */
    public function setPriceMobile($priceMobile)
    {
        $this->container['priceMobile'] = $priceMobile;

        return $this;
    }

    /**
     * Gets priceApp
     *
     * @return double|mixed
     */
    public function getPriceApp()
    {
        return $this->container['priceApp'];
    }

    /**
     * Sets priceApp
     *
     * @param double|mixed $priceApp priceApp
     *
     * @return $this
     */
    public function setPriceApp($priceApp)
    {
        $this->container['priceApp'] = $priceApp;

        return $this;
    }

    /**
     * Gets stockVolume
     *
     * @return int|mixed
     */
    public function getStockVolume()
    {
        return $this->container['stockVolume'];
    }

    /**
     * Sets stockVolume
     *
     * @param int|mixed $stockVolume stockVolume
     *
     * @return $this
     */
    public function setStockVolume($stockVolume)
    {
        $this->container['stockVolume'] = $stockVolume;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return double|mixed
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param double|mixed $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets expirationTime
     *
     * @return string|mixed
     */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
     * Sets expirationTime
     *
     * @param string|mixed $expirationTime expirationTime
     *
     * @return $this
     */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;

        return $this;
    }

    /**
     * Gets productSaleStatus
     *
     * @return \TencentAds\Model\V3\DpaProductSaleStatus|mixed
     */
    public function getProductSaleStatus()
    {
        return $this->container['productSaleStatus'];
    }

    /**
     * Sets productSaleStatus
     *
     * @param \TencentAds\Model\V3\DpaProductSaleStatus|mixed $productSaleStatus productSaleStatus
     *
     * @return $this
     */
    public function setProductSaleStatus($productSaleStatus)
    {
        $this->container['productSaleStatus'] = $productSaleStatus;

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


