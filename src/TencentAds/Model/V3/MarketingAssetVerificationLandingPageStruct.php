<?php
/**
 * MarketingAssetVerificationLandingPageStruct
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
 * MarketingAssetVerificationLandingPageStruct Class Doc Comment
 *
 * @category Class
 * @description 资产验真落地页结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketingAssetVerificationLandingPageStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'marketing_asset_verification_landing_page_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'landingPageName' => 'string',
        'marketingAssetVerificationStatus' => '\TencentAds\Model\V3\MarketingAssetVerificationStatus',
        'marketingAssetVerificationStatusCn' => 'string',
        'jumpInfo' => '\TencentAds\Model\V3\JumpinfoComponent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'landingPageName' => null,
        'marketingAssetVerificationStatus' => null,
        'marketingAssetVerificationStatusCn' => null,
        'jumpInfo' => null
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
        'landingPageName' => 'landing_page_name',
        'marketingAssetVerificationStatus' => 'marketing_asset_verification_status',
        'marketingAssetVerificationStatusCn' => 'marketing_asset_verification_status_cn',
        'jumpInfo' => 'jump_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'landingPageName' => 'setLandingPageName',
        'marketingAssetVerificationStatus' => 'setMarketingAssetVerificationStatus',
        'marketingAssetVerificationStatusCn' => 'setMarketingAssetVerificationStatusCn',
        'jumpInfo' => 'setJumpInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'landingPageName' => 'getLandingPageName',
        'marketingAssetVerificationStatus' => 'getMarketingAssetVerificationStatus',
        'marketingAssetVerificationStatusCn' => 'getMarketingAssetVerificationStatusCn',
        'jumpInfo' => 'getJumpInfo'
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
        $this->container['landingPageName'] = isset($data['landingPageName']) ? $data['landingPageName'] : null;
        $this->container['marketingAssetVerificationStatus'] = isset($data['marketingAssetVerificationStatus']) ? $data['marketingAssetVerificationStatus'] : null;
        $this->container['marketingAssetVerificationStatusCn'] = isset($data['marketingAssetVerificationStatusCn']) ? $data['marketingAssetVerificationStatusCn'] : null;
        $this->container['jumpInfo'] = isset($data['jumpInfo']) ? $data['jumpInfo'] : null;
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
     * Gets landingPageName
     *
     * @return string|mixed
     */
    public function getLandingPageName()
    {
        return $this->container['landingPageName'];
    }

    /**
     * Sets landingPageName
     *
     * @param string|mixed $landingPageName landingPageName
     *
     * @return $this
     */
    public function setLandingPageName($landingPageName)
    {
        $this->container['landingPageName'] = $landingPageName;

        return $this;
    }

    /**
     * Gets marketingAssetVerificationStatus
     *
     * @return \TencentAds\Model\V3\MarketingAssetVerificationStatus|mixed
     */
    public function getMarketingAssetVerificationStatus()
    {
        return $this->container['marketingAssetVerificationStatus'];
    }

    /**
     * Sets marketingAssetVerificationStatus
     *
     * @param \TencentAds\Model\V3\MarketingAssetVerificationStatus|mixed $marketingAssetVerificationStatus marketingAssetVerificationStatus
     *
     * @return $this
     */
    public function setMarketingAssetVerificationStatus($marketingAssetVerificationStatus)
    {
        $this->container['marketingAssetVerificationStatus'] = $marketingAssetVerificationStatus;

        return $this;
    }

    /**
     * Gets marketingAssetVerificationStatusCn
     *
     * @return string|mixed
     */
    public function getMarketingAssetVerificationStatusCn()
    {
        return $this->container['marketingAssetVerificationStatusCn'];
    }

    /**
     * Sets marketingAssetVerificationStatusCn
     *
     * @param string|mixed $marketingAssetVerificationStatusCn marketingAssetVerificationStatusCn
     *
     * @return $this
     */
    public function setMarketingAssetVerificationStatusCn($marketingAssetVerificationStatusCn)
    {
        $this->container['marketingAssetVerificationStatusCn'] = $marketingAssetVerificationStatusCn;

        return $this;
    }

    /**
     * Gets jumpInfo
     *
     * @return \TencentAds\Model\V3\JumpinfoComponent|mixed
     */
    public function getJumpInfo()
    {
        return $this->container['jumpInfo'];
    }

    /**
     * Sets jumpInfo
     *
     * @param \TencentAds\Model\V3\JumpinfoComponent|mixed $jumpInfo jumpInfo
     *
     * @return $this
     */
    public function setJumpInfo($jumpInfo)
    {
        $this->container['jumpInfo'] = $jumpInfo;

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


