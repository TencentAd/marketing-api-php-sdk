<?php
/**
 * MaterialDcasetAddRequest
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
 * MaterialDcasetAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MaterialDcasetAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MaterialDcasetAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'imageIdList' => 'int[]',
        'mediaIdList' => 'int[]',
        'marketingAssetId' => 'int',
        'marketingTargetType' => '\TencentAds\Model\V3\MarketingTargetType',
        'marketingAssetOuterSpec' => '\TencentAds\Model\V3\MarketingAssetOuterSpecV1',
        'setName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'imageIdList' => 'int64',
        'mediaIdList' => 'int64',
        'marketingAssetId' => 'int64',
        'marketingTargetType' => null,
        'marketingAssetOuterSpec' => null,
        'setName' => null
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
        'marketingAssetId' => 'marketing_asset_id',
        'marketingTargetType' => 'marketing_target_type',
        'marketingAssetOuterSpec' => 'marketing_asset_outer_spec',
        'setName' => 'set_name'
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
        'marketingAssetId' => 'setMarketingAssetId',
        'marketingTargetType' => 'setMarketingTargetType',
        'marketingAssetOuterSpec' => 'setMarketingAssetOuterSpec',
        'setName' => 'setSetName'
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
        'marketingAssetId' => 'getMarketingAssetId',
        'marketingTargetType' => 'getMarketingTargetType',
        'marketingAssetOuterSpec' => 'getMarketingAssetOuterSpec',
        'setName' => 'getSetName'
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
        $this->container['marketingAssetId'] = isset($data['marketingAssetId']) ? $data['marketingAssetId'] : null;
        $this->container['marketingTargetType'] = isset($data['marketingTargetType']) ? $data['marketingTargetType'] : null;
        $this->container['marketingAssetOuterSpec'] = isset($data['marketingAssetOuterSpec']) ? $data['marketingAssetOuterSpec'] : null;
        $this->container['setName'] = isset($data['setName']) ? $data['setName'] : null;
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
     * @return int[]|mixed
     */
    public function getImageIdList()
    {
        return $this->container['imageIdList'];
    }

    /**
     * Sets imageIdList
     *
     * @param int[]|mixed $imageIdList imageIdList
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
     * @return int[]|mixed
     */
    public function getMediaIdList()
    {
        return $this->container['mediaIdList'];
    }

    /**
     * Sets mediaIdList
     *
     * @param int[]|mixed $mediaIdList mediaIdList
     *
     * @return $this
     */
    public function setMediaIdList($mediaIdList)
    {
        $this->container['mediaIdList'] = $mediaIdList;

        return $this;
    }

    /**
     * Gets marketingAssetId
     *
     * @return int|mixed
     */
    public function getMarketingAssetId()
    {
        return $this->container['marketingAssetId'];
    }

    /**
     * Sets marketingAssetId
     *
     * @param int|mixed $marketingAssetId marketingAssetId
     *
     * @return $this
     */
    public function setMarketingAssetId($marketingAssetId)
    {
        $this->container['marketingAssetId'] = $marketingAssetId;

        return $this;
    }

    /**
     * Gets marketingTargetType
     *
     * @return \TencentAds\Model\V3\MarketingTargetType|mixed
     */
    public function getMarketingTargetType()
    {
        return $this->container['marketingTargetType'];
    }

    /**
     * Sets marketingTargetType
     *
     * @param \TencentAds\Model\V3\MarketingTargetType|mixed $marketingTargetType marketingTargetType
     *
     * @return $this
     */
    public function setMarketingTargetType($marketingTargetType)
    {
        $this->container['marketingTargetType'] = $marketingTargetType;

        return $this;
    }

    /**
     * Gets marketingAssetOuterSpec
     *
     * @return \TencentAds\Model\V3\MarketingAssetOuterSpecV1|mixed
     */
    public function getMarketingAssetOuterSpec()
    {
        return $this->container['marketingAssetOuterSpec'];
    }

    /**
     * Sets marketingAssetOuterSpec
     *
     * @param \TencentAds\Model\V3\MarketingAssetOuterSpecV1|mixed $marketingAssetOuterSpec marketingAssetOuterSpec
     *
     * @return $this
     */
    public function setMarketingAssetOuterSpec($marketingAssetOuterSpec)
    {
        $this->container['marketingAssetOuterSpec'] = $marketingAssetOuterSpec;

        return $this;
    }

    /**
     * Gets setName
     *
     * @return string|mixed
     */
    public function getSetName()
    {
        return $this->container['setName'];
    }

    /**
     * Sets setName
     *
     * @param string|mixed $setName setName
     *
     * @return $this
     */
    public function setSetName($setName)
    {
        $this->container['setName'] = $setName;

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


