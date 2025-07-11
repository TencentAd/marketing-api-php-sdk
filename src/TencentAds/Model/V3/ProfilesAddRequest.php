<?php
/**
 * ProfilesAddRequest
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
 * ProfilesAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfilesAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProfilesAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'marketingGoal' => '\TencentAds\Model\V3\MarketingGoal',
        'marketingSubGoal' => '\TencentAds\Model\V3\MarketingSubGoal',
        'marketingCarrierType' => '\TencentAds\Model\V3\MarketingCarrierType',
        'marketingTargetType' => '\TencentAds\Model\V3\MarketingTargetType',
        'marketingCarrierId' => 'string',
        'profileType' => '\TencentAds\Model\V3\ProfileType',
        'headImageId' => 'string',
        'profileName' => 'string',
        'description' => 'string',
        'organizationId' => 'int',
        'mdmId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'marketingGoal' => null,
        'marketingSubGoal' => null,
        'marketingCarrierType' => null,
        'marketingTargetType' => null,
        'marketingCarrierId' => null,
        'profileType' => null,
        'headImageId' => null,
        'profileName' => null,
        'description' => null,
        'organizationId' => 'int64',
        'mdmId' => 'int64'
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
        'marketingGoal' => 'marketing_goal',
        'marketingSubGoal' => 'marketing_sub_goal',
        'marketingCarrierType' => 'marketing_carrier_type',
        'marketingTargetType' => 'marketing_target_type',
        'marketingCarrierId' => 'marketing_carrier_id',
        'profileType' => 'profile_type',
        'headImageId' => 'head_image_id',
        'profileName' => 'profile_name',
        'description' => 'description',
        'organizationId' => 'organization_id',
        'mdmId' => 'mdm_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'marketingGoal' => 'setMarketingGoal',
        'marketingSubGoal' => 'setMarketingSubGoal',
        'marketingCarrierType' => 'setMarketingCarrierType',
        'marketingTargetType' => 'setMarketingTargetType',
        'marketingCarrierId' => 'setMarketingCarrierId',
        'profileType' => 'setProfileType',
        'headImageId' => 'setHeadImageId',
        'profileName' => 'setProfileName',
        'description' => 'setDescription',
        'organizationId' => 'setOrganizationId',
        'mdmId' => 'setMdmId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'marketingGoal' => 'getMarketingGoal',
        'marketingSubGoal' => 'getMarketingSubGoal',
        'marketingCarrierType' => 'getMarketingCarrierType',
        'marketingTargetType' => 'getMarketingTargetType',
        'marketingCarrierId' => 'getMarketingCarrierId',
        'profileType' => 'getProfileType',
        'headImageId' => 'getHeadImageId',
        'profileName' => 'getProfileName',
        'description' => 'getDescription',
        'organizationId' => 'getOrganizationId',
        'mdmId' => 'getMdmId'
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
        $this->container['marketingGoal'] = isset($data['marketingGoal']) ? $data['marketingGoal'] : null;
        $this->container['marketingSubGoal'] = isset($data['marketingSubGoal']) ? $data['marketingSubGoal'] : null;
        $this->container['marketingCarrierType'] = isset($data['marketingCarrierType']) ? $data['marketingCarrierType'] : null;
        $this->container['marketingTargetType'] = isset($data['marketingTargetType']) ? $data['marketingTargetType'] : null;
        $this->container['marketingCarrierId'] = isset($data['marketingCarrierId']) ? $data['marketingCarrierId'] : null;
        $this->container['profileType'] = isset($data['profileType']) ? $data['profileType'] : null;
        $this->container['headImageId'] = isset($data['headImageId']) ? $data['headImageId'] : null;
        $this->container['profileName'] = isset($data['profileName']) ? $data['profileName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['mdmId'] = isset($data['mdmId']) ? $data['mdmId'] : null;
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
     * Gets marketingGoal
     *
     * @return \TencentAds\Model\V3\MarketingGoal|mixed
     */
    public function getMarketingGoal()
    {
        return $this->container['marketingGoal'];
    }

    /**
     * Sets marketingGoal
     *
     * @param \TencentAds\Model\V3\MarketingGoal|mixed $marketingGoal marketingGoal
     *
     * @return $this
     */
    public function setMarketingGoal($marketingGoal)
    {
        $this->container['marketingGoal'] = $marketingGoal;

        return $this;
    }

    /**
     * Gets marketingSubGoal
     *
     * @return \TencentAds\Model\V3\MarketingSubGoal|mixed
     */
    public function getMarketingSubGoal()
    {
        return $this->container['marketingSubGoal'];
    }

    /**
     * Sets marketingSubGoal
     *
     * @param \TencentAds\Model\V3\MarketingSubGoal|mixed $marketingSubGoal marketingSubGoal
     *
     * @return $this
     */
    public function setMarketingSubGoal($marketingSubGoal)
    {
        $this->container['marketingSubGoal'] = $marketingSubGoal;

        return $this;
    }

    /**
     * Gets marketingCarrierType
     *
     * @return \TencentAds\Model\V3\MarketingCarrierType|mixed
     */
    public function getMarketingCarrierType()
    {
        return $this->container['marketingCarrierType'];
    }

    /**
     * Sets marketingCarrierType
     *
     * @param \TencentAds\Model\V3\MarketingCarrierType|mixed $marketingCarrierType marketingCarrierType
     *
     * @return $this
     */
    public function setMarketingCarrierType($marketingCarrierType)
    {
        $this->container['marketingCarrierType'] = $marketingCarrierType;

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
     * Gets marketingCarrierId
     *
     * @return string|mixed
     */
    public function getMarketingCarrierId()
    {
        return $this->container['marketingCarrierId'];
    }

    /**
     * Sets marketingCarrierId
     *
     * @param string|mixed $marketingCarrierId marketingCarrierId
     *
     * @return $this
     */
    public function setMarketingCarrierId($marketingCarrierId)
    {
        $this->container['marketingCarrierId'] = $marketingCarrierId;

        return $this;
    }

    /**
     * Gets profileType
     *
     * @return \TencentAds\Model\V3\ProfileType|mixed
     */
    public function getProfileType()
    {
        return $this->container['profileType'];
    }

    /**
     * Sets profileType
     *
     * @param \TencentAds\Model\V3\ProfileType|mixed $profileType profileType
     *
     * @return $this
     */
    public function setProfileType($profileType)
    {
        $this->container['profileType'] = $profileType;

        return $this;
    }

    /**
     * Gets headImageId
     *
     * @return string|mixed
     */
    public function getHeadImageId()
    {
        return $this->container['headImageId'];
    }

    /**
     * Sets headImageId
     *
     * @param string|mixed $headImageId headImageId
     *
     * @return $this
     */
    public function setHeadImageId($headImageId)
    {
        $this->container['headImageId'] = $headImageId;

        return $this;
    }

    /**
     * Gets profileName
     *
     * @return string|mixed
     */
    public function getProfileName()
    {
        return $this->container['profileName'];
    }

    /**
     * Sets profileName
     *
     * @param string|mixed $profileName profileName
     *
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->container['profileName'] = $profileName;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|mixed
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|mixed $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets organizationId
     *
     * @return int|mixed
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     *
     * @param int|mixed $organizationId organizationId
     *
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets mdmId
     *
     * @return int|mixed
     */
    public function getMdmId()
    {
        return $this->container['mdmId'];
    }

    /**
     * Sets mdmId
     *
     * @param int|mixed $mdmId mdmId
     *
     * @return $this
     */
    public function setMdmId($mdmId)
    {
        $this->container['mdmId'] = $mdmId;

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


