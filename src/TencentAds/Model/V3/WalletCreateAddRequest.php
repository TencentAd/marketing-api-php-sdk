<?php
/**
 * WalletCreateAddRequest
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
 * WalletCreateAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WalletCreateAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WalletCreateAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'mdmId' => 'int',
        'walletName' => 'string',
        'tagList' => 'string[]',
        'contactInfoList' => '\TencentAds\Model\V3\ContactInfoStruct[]',
        'contactNotifyCondition' => '\TencentAds\Model\V3\ContactNotifyCondition'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'mdmId' => 'int64',
        'walletName' => null,
        'tagList' => null,
        'contactInfoList' => null,
        'contactNotifyCondition' => null
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
        'mdmId' => 'mdm_id',
        'walletName' => 'wallet_name',
        'tagList' => 'tag_list',
        'contactInfoList' => 'contact_info_list',
        'contactNotifyCondition' => 'contact_notify_condition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'mdmId' => 'setMdmId',
        'walletName' => 'setWalletName',
        'tagList' => 'setTagList',
        'contactInfoList' => 'setContactInfoList',
        'contactNotifyCondition' => 'setContactNotifyCondition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'mdmId' => 'getMdmId',
        'walletName' => 'getWalletName',
        'tagList' => 'getTagList',
        'contactInfoList' => 'getContactInfoList',
        'contactNotifyCondition' => 'getContactNotifyCondition'
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
        $this->container['mdmId'] = isset($data['mdmId']) ? $data['mdmId'] : null;
        $this->container['walletName'] = isset($data['walletName']) ? $data['walletName'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
        $this->container['contactInfoList'] = isset($data['contactInfoList']) ? $data['contactInfoList'] : null;
        $this->container['contactNotifyCondition'] = isset($data['contactNotifyCondition']) ? $data['contactNotifyCondition'] : null;
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
     * Gets walletName
     *
     * @return string|mixed
     */
    public function getWalletName()
    {
        return $this->container['walletName'];
    }

    /**
     * Sets walletName
     *
     * @param string|mixed $walletName walletName
     *
     * @return $this
     */
    public function setWalletName($walletName)
    {
        $this->container['walletName'] = $walletName;

        return $this;
    }

    /**
     * Gets tagList
     *
     * @return string[]|mixed
     */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
     * Sets tagList
     *
     * @param string[]|mixed $tagList tagList
     *
     * @return $this
     */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;

        return $this;
    }

    /**
     * Gets contactInfoList
     *
     * @return \TencentAds\Model\V3\ContactInfoStruct[]|mixed
     */
    public function getContactInfoList()
    {
        return $this->container['contactInfoList'];
    }

    /**
     * Sets contactInfoList
     *
     * @param \TencentAds\Model\V3\ContactInfoStruct[]|mixed $contactInfoList contactInfoList
     *
     * @return $this
     */
    public function setContactInfoList($contactInfoList)
    {
        $this->container['contactInfoList'] = $contactInfoList;

        return $this;
    }

    /**
     * Gets contactNotifyCondition
     *
     * @return \TencentAds\Model\V3\ContactNotifyCondition|mixed
     */
    public function getContactNotifyCondition()
    {
        return $this->container['contactNotifyCondition'];
    }

    /**
     * Sets contactNotifyCondition
     *
     * @param \TencentAds\Model\V3\ContactNotifyCondition|mixed $contactNotifyCondition contactNotifyCondition
     *
     * @return $this
     */
    public function setContactNotifyCondition($contactNotifyCondition)
    {
        $this->container['contactNotifyCondition'] = $contactNotifyCondition;

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


