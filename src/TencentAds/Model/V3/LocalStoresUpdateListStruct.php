<?php
/**
 * LocalStoresUpdateListStruct
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
 * LocalStoresUpdateListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocalStoresUpdateListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocalStoresUpdateListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'poiId' => 'string',
        'localStoreName' => 'string',
        'localStoreProvince' => 'string',
        'localStoreCity' => 'string',
        'localStoreAddress' => 'string',
        'localStoreBizInfo' => '\TencentAds\Model\V3\LocalStoreBizInfoStructRsp',
        'wechatEcosystemAccounts' => '\TencentAds\Model\V3\WechatEcosystemAccounts',
        'localStoreStreet' => 'string',
        'localStoreBusinessArea' => 'string',
        'localStoreDistrict' => 'string',
        'localStoreLocation' => '\TencentAds\Model\V3\LocalStoreLocation',
        'wechatWorkCorpId' => 'int',
        'wechatCustomerServiceLink' => 'string',
        'imageSet' => '\TencentAds\Model\V3\ImageSetDataStruct[]',
        'recommendWords' => '\TencentAds\Model\V3\RecommendWordStruct[]',
        'isUseStandardizedName' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'poiId' => null,
        'localStoreName' => null,
        'localStoreProvince' => null,
        'localStoreCity' => null,
        'localStoreAddress' => null,
        'localStoreBizInfo' => null,
        'wechatEcosystemAccounts' => null,
        'localStoreStreet' => null,
        'localStoreBusinessArea' => null,
        'localStoreDistrict' => null,
        'localStoreLocation' => null,
        'wechatWorkCorpId' => 'int64',
        'wechatCustomerServiceLink' => null,
        'imageSet' => null,
        'recommendWords' => null,
        'isUseStandardizedName' => null
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
        'poiId' => 'poi_id',
        'localStoreName' => 'local_store_name',
        'localStoreProvince' => 'local_store_province',
        'localStoreCity' => 'local_store_city',
        'localStoreAddress' => 'local_store_address',
        'localStoreBizInfo' => 'local_store_biz_info',
        'wechatEcosystemAccounts' => 'wechat_ecosystem_accounts',
        'localStoreStreet' => 'local_store_street',
        'localStoreBusinessArea' => 'local_store_business_area',
        'localStoreDistrict' => 'local_store_district',
        'localStoreLocation' => 'local_store_location',
        'wechatWorkCorpId' => 'wechat_work_corp_id',
        'wechatCustomerServiceLink' => 'wechat_customer_service_link',
        'imageSet' => 'image_set',
        'recommendWords' => 'recommend_words',
        'isUseStandardizedName' => 'is_use_standardized_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'poiId' => 'setPoiId',
        'localStoreName' => 'setLocalStoreName',
        'localStoreProvince' => 'setLocalStoreProvince',
        'localStoreCity' => 'setLocalStoreCity',
        'localStoreAddress' => 'setLocalStoreAddress',
        'localStoreBizInfo' => 'setLocalStoreBizInfo',
        'wechatEcosystemAccounts' => 'setWechatEcosystemAccounts',
        'localStoreStreet' => 'setLocalStoreStreet',
        'localStoreBusinessArea' => 'setLocalStoreBusinessArea',
        'localStoreDistrict' => 'setLocalStoreDistrict',
        'localStoreLocation' => 'setLocalStoreLocation',
        'wechatWorkCorpId' => 'setWechatWorkCorpId',
        'wechatCustomerServiceLink' => 'setWechatCustomerServiceLink',
        'imageSet' => 'setImageSet',
        'recommendWords' => 'setRecommendWords',
        'isUseStandardizedName' => 'setIsUseStandardizedName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'poiId' => 'getPoiId',
        'localStoreName' => 'getLocalStoreName',
        'localStoreProvince' => 'getLocalStoreProvince',
        'localStoreCity' => 'getLocalStoreCity',
        'localStoreAddress' => 'getLocalStoreAddress',
        'localStoreBizInfo' => 'getLocalStoreBizInfo',
        'wechatEcosystemAccounts' => 'getWechatEcosystemAccounts',
        'localStoreStreet' => 'getLocalStoreStreet',
        'localStoreBusinessArea' => 'getLocalStoreBusinessArea',
        'localStoreDistrict' => 'getLocalStoreDistrict',
        'localStoreLocation' => 'getLocalStoreLocation',
        'wechatWorkCorpId' => 'getWechatWorkCorpId',
        'wechatCustomerServiceLink' => 'getWechatCustomerServiceLink',
        'imageSet' => 'getImageSet',
        'recommendWords' => 'getRecommendWords',
        'isUseStandardizedName' => 'getIsUseStandardizedName'
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
        $this->container['poiId'] = isset($data['poiId']) ? $data['poiId'] : null;
        $this->container['localStoreName'] = isset($data['localStoreName']) ? $data['localStoreName'] : null;
        $this->container['localStoreProvince'] = isset($data['localStoreProvince']) ? $data['localStoreProvince'] : null;
        $this->container['localStoreCity'] = isset($data['localStoreCity']) ? $data['localStoreCity'] : null;
        $this->container['localStoreAddress'] = isset($data['localStoreAddress']) ? $data['localStoreAddress'] : null;
        $this->container['localStoreBizInfo'] = isset($data['localStoreBizInfo']) ? $data['localStoreBizInfo'] : null;
        $this->container['wechatEcosystemAccounts'] = isset($data['wechatEcosystemAccounts']) ? $data['wechatEcosystemAccounts'] : null;
        $this->container['localStoreStreet'] = isset($data['localStoreStreet']) ? $data['localStoreStreet'] : null;
        $this->container['localStoreBusinessArea'] = isset($data['localStoreBusinessArea']) ? $data['localStoreBusinessArea'] : null;
        $this->container['localStoreDistrict'] = isset($data['localStoreDistrict']) ? $data['localStoreDistrict'] : null;
        $this->container['localStoreLocation'] = isset($data['localStoreLocation']) ? $data['localStoreLocation'] : null;
        $this->container['wechatWorkCorpId'] = isset($data['wechatWorkCorpId']) ? $data['wechatWorkCorpId'] : null;
        $this->container['wechatCustomerServiceLink'] = isset($data['wechatCustomerServiceLink']) ? $data['wechatCustomerServiceLink'] : null;
        $this->container['imageSet'] = isset($data['imageSet']) ? $data['imageSet'] : null;
        $this->container['recommendWords'] = isset($data['recommendWords']) ? $data['recommendWords'] : null;
        $this->container['isUseStandardizedName'] = isset($data['isUseStandardizedName']) ? $data['isUseStandardizedName'] : null;
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
     * Gets poiId
     *
     * @return string|mixed
     */
    public function getPoiId()
    {
        return $this->container['poiId'];
    }

    /**
     * Sets poiId
     *
     * @param string|mixed $poiId poiId
     *
     * @return $this
     */
    public function setPoiId($poiId)
    {
        $this->container['poiId'] = $poiId;

        return $this;
    }

    /**
     * Gets localStoreName
     *
     * @return string|mixed
     */
    public function getLocalStoreName()
    {
        return $this->container['localStoreName'];
    }

    /**
     * Sets localStoreName
     *
     * @param string|mixed $localStoreName localStoreName
     *
     * @return $this
     */
    public function setLocalStoreName($localStoreName)
    {
        $this->container['localStoreName'] = $localStoreName;

        return $this;
    }

    /**
     * Gets localStoreProvince
     *
     * @return string|mixed
     */
    public function getLocalStoreProvince()
    {
        return $this->container['localStoreProvince'];
    }

    /**
     * Sets localStoreProvince
     *
     * @param string|mixed $localStoreProvince localStoreProvince
     *
     * @return $this
     */
    public function setLocalStoreProvince($localStoreProvince)
    {
        $this->container['localStoreProvince'] = $localStoreProvince;

        return $this;
    }

    /**
     * Gets localStoreCity
     *
     * @return string|mixed
     */
    public function getLocalStoreCity()
    {
        return $this->container['localStoreCity'];
    }

    /**
     * Sets localStoreCity
     *
     * @param string|mixed $localStoreCity localStoreCity
     *
     * @return $this
     */
    public function setLocalStoreCity($localStoreCity)
    {
        $this->container['localStoreCity'] = $localStoreCity;

        return $this;
    }

    /**
     * Gets localStoreAddress
     *
     * @return string|mixed
     */
    public function getLocalStoreAddress()
    {
        return $this->container['localStoreAddress'];
    }

    /**
     * Sets localStoreAddress
     *
     * @param string|mixed $localStoreAddress localStoreAddress
     *
     * @return $this
     */
    public function setLocalStoreAddress($localStoreAddress)
    {
        $this->container['localStoreAddress'] = $localStoreAddress;

        return $this;
    }

    /**
     * Gets localStoreBizInfo
     *
     * @return \TencentAds\Model\V3\LocalStoreBizInfoStructRsp|mixed
     */
    public function getLocalStoreBizInfo()
    {
        return $this->container['localStoreBizInfo'];
    }

    /**
     * Sets localStoreBizInfo
     *
     * @param \TencentAds\Model\V3\LocalStoreBizInfoStructRsp|mixed $localStoreBizInfo localStoreBizInfo
     *
     * @return $this
     */
    public function setLocalStoreBizInfo($localStoreBizInfo)
    {
        $this->container['localStoreBizInfo'] = $localStoreBizInfo;

        return $this;
    }

    /**
     * Gets wechatEcosystemAccounts
     *
     * @return \TencentAds\Model\V3\WechatEcosystemAccounts|mixed
     */
    public function getWechatEcosystemAccounts()
    {
        return $this->container['wechatEcosystemAccounts'];
    }

    /**
     * Sets wechatEcosystemAccounts
     *
     * @param \TencentAds\Model\V3\WechatEcosystemAccounts|mixed $wechatEcosystemAccounts wechatEcosystemAccounts
     *
     * @return $this
     */
    public function setWechatEcosystemAccounts($wechatEcosystemAccounts)
    {
        $this->container['wechatEcosystemAccounts'] = $wechatEcosystemAccounts;

        return $this;
    }

    /**
     * Gets localStoreStreet
     *
     * @return string|mixed
     */
    public function getLocalStoreStreet()
    {
        return $this->container['localStoreStreet'];
    }

    /**
     * Sets localStoreStreet
     *
     * @param string|mixed $localStoreStreet localStoreStreet
     *
     * @return $this
     */
    public function setLocalStoreStreet($localStoreStreet)
    {
        $this->container['localStoreStreet'] = $localStoreStreet;

        return $this;
    }

    /**
     * Gets localStoreBusinessArea
     *
     * @return string|mixed
     */
    public function getLocalStoreBusinessArea()
    {
        return $this->container['localStoreBusinessArea'];
    }

    /**
     * Sets localStoreBusinessArea
     *
     * @param string|mixed $localStoreBusinessArea localStoreBusinessArea
     *
     * @return $this
     */
    public function setLocalStoreBusinessArea($localStoreBusinessArea)
    {
        $this->container['localStoreBusinessArea'] = $localStoreBusinessArea;

        return $this;
    }

    /**
     * Gets localStoreDistrict
     *
     * @return string|mixed
     */
    public function getLocalStoreDistrict()
    {
        return $this->container['localStoreDistrict'];
    }

    /**
     * Sets localStoreDistrict
     *
     * @param string|mixed $localStoreDistrict localStoreDistrict
     *
     * @return $this
     */
    public function setLocalStoreDistrict($localStoreDistrict)
    {
        $this->container['localStoreDistrict'] = $localStoreDistrict;

        return $this;
    }

    /**
     * Gets localStoreLocation
     *
     * @return \TencentAds\Model\V3\LocalStoreLocation|mixed
     */
    public function getLocalStoreLocation()
    {
        return $this->container['localStoreLocation'];
    }

    /**
     * Sets localStoreLocation
     *
     * @param \TencentAds\Model\V3\LocalStoreLocation|mixed $localStoreLocation localStoreLocation
     *
     * @return $this
     */
    public function setLocalStoreLocation($localStoreLocation)
    {
        $this->container['localStoreLocation'] = $localStoreLocation;

        return $this;
    }

    /**
     * Gets wechatWorkCorpId
     *
     * @return int|mixed
     */
    public function getWechatWorkCorpId()
    {
        return $this->container['wechatWorkCorpId'];
    }

    /**
     * Sets wechatWorkCorpId
     *
     * @param int|mixed $wechatWorkCorpId wechatWorkCorpId
     *
     * @return $this
     */
    public function setWechatWorkCorpId($wechatWorkCorpId)
    {
        $this->container['wechatWorkCorpId'] = $wechatWorkCorpId;

        return $this;
    }

    /**
     * Gets wechatCustomerServiceLink
     *
     * @return string|mixed
     */
    public function getWechatCustomerServiceLink()
    {
        return $this->container['wechatCustomerServiceLink'];
    }

    /**
     * Sets wechatCustomerServiceLink
     *
     * @param string|mixed $wechatCustomerServiceLink wechatCustomerServiceLink
     *
     * @return $this
     */
    public function setWechatCustomerServiceLink($wechatCustomerServiceLink)
    {
        $this->container['wechatCustomerServiceLink'] = $wechatCustomerServiceLink;

        return $this;
    }

    /**
     * Gets imageSet
     *
     * @return \TencentAds\Model\V3\ImageSetDataStruct[]|mixed
     */
    public function getImageSet()
    {
        return $this->container['imageSet'];
    }

    /**
     * Sets imageSet
     *
     * @param \TencentAds\Model\V3\ImageSetDataStruct[]|mixed $imageSet imageSet
     *
     * @return $this
     */
    public function setImageSet($imageSet)
    {
        $this->container['imageSet'] = $imageSet;

        return $this;
    }

    /**
     * Gets recommendWords
     *
     * @return \TencentAds\Model\V3\RecommendWordStruct[]|mixed
     */
    public function getRecommendWords()
    {
        return $this->container['recommendWords'];
    }

    /**
     * Sets recommendWords
     *
     * @param \TencentAds\Model\V3\RecommendWordStruct[]|mixed $recommendWords recommendWords
     *
     * @return $this
     */
    public function setRecommendWords($recommendWords)
    {
        $this->container['recommendWords'] = $recommendWords;

        return $this;
    }

    /**
     * Gets isUseStandardizedName
     *
     * @return bool|mixed
     */
    public function getIsUseStandardizedName()
    {
        return $this->container['isUseStandardizedName'];
    }

    /**
     * Sets isUseStandardizedName
     *
     * @param bool|mixed $isUseStandardizedName isUseStandardizedName
     *
     * @return $this
     */
    public function setIsUseStandardizedName($isUseStandardizedName)
    {
        $this->container['isUseStandardizedName'] = $isUseStandardizedName;

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


