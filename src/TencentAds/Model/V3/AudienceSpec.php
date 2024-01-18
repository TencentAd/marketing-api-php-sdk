<?php
/**
 * AudienceSpec
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
 * AudienceSpec Class Doc Comment
 *
 * @category Class
 * @description 人群信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AudienceSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'audience_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lookalikeSpec' => '\TencentAds\Model\V3\LookalikeSpec',
        'userActionSpec' => '\TencentAds\Model\V3\UserActionSpec',
        'keywordSpec' => '\TencentAds\Model\V3\KeywordSpec',
        'adRuleSpec' => '\TencentAds\Model\V3\AdRuleSpec',
        'combineSpec' => '\TencentAds\Model\V3\CombineSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lookalikeSpec' => null,
        'userActionSpec' => null,
        'keywordSpec' => null,
        'adRuleSpec' => null,
        'combineSpec' => null
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
        'lookalikeSpec' => 'lookalike_spec',
        'userActionSpec' => 'user_action_spec',
        'keywordSpec' => 'keyword_spec',
        'adRuleSpec' => 'ad_rule_spec',
        'combineSpec' => 'combine_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lookalikeSpec' => 'setLookalikeSpec',
        'userActionSpec' => 'setUserActionSpec',
        'keywordSpec' => 'setKeywordSpec',
        'adRuleSpec' => 'setAdRuleSpec',
        'combineSpec' => 'setCombineSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lookalikeSpec' => 'getLookalikeSpec',
        'userActionSpec' => 'getUserActionSpec',
        'keywordSpec' => 'getKeywordSpec',
        'adRuleSpec' => 'getAdRuleSpec',
        'combineSpec' => 'getCombineSpec'
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
        $this->container['lookalikeSpec'] = isset($data['lookalikeSpec']) ? $data['lookalikeSpec'] : null;
        $this->container['userActionSpec'] = isset($data['userActionSpec']) ? $data['userActionSpec'] : null;
        $this->container['keywordSpec'] = isset($data['keywordSpec']) ? $data['keywordSpec'] : null;
        $this->container['adRuleSpec'] = isset($data['adRuleSpec']) ? $data['adRuleSpec'] : null;
        $this->container['combineSpec'] = isset($data['combineSpec']) ? $data['combineSpec'] : null;
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
     * Gets lookalikeSpec
     *
     * @return \TencentAds\Model\V3\LookalikeSpec|mixed
     */
    public function getLookalikeSpec()
    {
        return $this->container['lookalikeSpec'];
    }

    /**
     * Sets lookalikeSpec
     *
     * @param \TencentAds\Model\V3\LookalikeSpec|mixed $lookalikeSpec lookalikeSpec
     *
     * @return $this
     */
    public function setLookalikeSpec($lookalikeSpec)
    {
        $this->container['lookalikeSpec'] = $lookalikeSpec;

        return $this;
    }

    /**
     * Gets userActionSpec
     *
     * @return \TencentAds\Model\V3\UserActionSpec|mixed
     */
    public function getUserActionSpec()
    {
        return $this->container['userActionSpec'];
    }

    /**
     * Sets userActionSpec
     *
     * @param \TencentAds\Model\V3\UserActionSpec|mixed $userActionSpec userActionSpec
     *
     * @return $this
     */
    public function setUserActionSpec($userActionSpec)
    {
        $this->container['userActionSpec'] = $userActionSpec;

        return $this;
    }

    /**
     * Gets keywordSpec
     *
     * @return \TencentAds\Model\V3\KeywordSpec|mixed
     */
    public function getKeywordSpec()
    {
        return $this->container['keywordSpec'];
    }

    /**
     * Sets keywordSpec
     *
     * @param \TencentAds\Model\V3\KeywordSpec|mixed $keywordSpec keywordSpec
     *
     * @return $this
     */
    public function setKeywordSpec($keywordSpec)
    {
        $this->container['keywordSpec'] = $keywordSpec;

        return $this;
    }

    /**
     * Gets adRuleSpec
     *
     * @return \TencentAds\Model\V3\AdRuleSpec|mixed
     */
    public function getAdRuleSpec()
    {
        return $this->container['adRuleSpec'];
    }

    /**
     * Sets adRuleSpec
     *
     * @param \TencentAds\Model\V3\AdRuleSpec|mixed $adRuleSpec adRuleSpec
     *
     * @return $this
     */
    public function setAdRuleSpec($adRuleSpec)
    {
        $this->container['adRuleSpec'] = $adRuleSpec;

        return $this;
    }

    /**
     * Gets combineSpec
     *
     * @return \TencentAds\Model\V3\CombineSpec|mixed
     */
    public function getCombineSpec()
    {
        return $this->container['combineSpec'];
    }

    /**
     * Sets combineSpec
     *
     * @param \TencentAds\Model\V3\CombineSpec|mixed $combineSpec combineSpec
     *
     * @return $this
     */
    public function setCombineSpec($combineSpec)
    {
        $this->container['combineSpec'] = $combineSpec;

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


