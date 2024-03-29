<?php
/**
 * UserActionSpec
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
 * UserActionSpec Class Doc Comment
 *
 * @category Class
 * @description UserAction人群信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserActionSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'user_action_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userActionSetId' => 'int',
        'matchRuleType' => '\TencentAds\Model\V3\MatchRuleType',
        'extractType' => '\TencentAds\Model\V3\ExtractRuleType',
        'timeWindow' => 'int',
        'urlMatchRule' => '\TencentAds\Model\V3\UrlMatchRule',
        'actionMatchRule' => '\TencentAds\Model\V3\ActionMatchRule',
        'actionAggregationRule' => '\TencentAds\Model\V3\ActionAggregationRule'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'userActionSetId' => 'int64',
        'matchRuleType' => null,
        'extractType' => null,
        'timeWindow' => 'int64',
        'urlMatchRule' => null,
        'actionMatchRule' => null,
        'actionAggregationRule' => null
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
        'userActionSetId' => 'user_action_set_id',
        'matchRuleType' => 'match_rule_type',
        'extractType' => 'extract_type',
        'timeWindow' => 'time_window',
        'urlMatchRule' => 'url_match_rule',
        'actionMatchRule' => 'action_match_rule',
        'actionAggregationRule' => 'action_aggregation_rule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userActionSetId' => 'setUserActionSetId',
        'matchRuleType' => 'setMatchRuleType',
        'extractType' => 'setExtractType',
        'timeWindow' => 'setTimeWindow',
        'urlMatchRule' => 'setUrlMatchRule',
        'actionMatchRule' => 'setActionMatchRule',
        'actionAggregationRule' => 'setActionAggregationRule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userActionSetId' => 'getUserActionSetId',
        'matchRuleType' => 'getMatchRuleType',
        'extractType' => 'getExtractType',
        'timeWindow' => 'getTimeWindow',
        'urlMatchRule' => 'getUrlMatchRule',
        'actionMatchRule' => 'getActionMatchRule',
        'actionAggregationRule' => 'getActionAggregationRule'
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
        $this->container['userActionSetId'] = isset($data['userActionSetId']) ? $data['userActionSetId'] : null;
        $this->container['matchRuleType'] = isset($data['matchRuleType']) ? $data['matchRuleType'] : null;
        $this->container['extractType'] = isset($data['extractType']) ? $data['extractType'] : null;
        $this->container['timeWindow'] = isset($data['timeWindow']) ? $data['timeWindow'] : null;
        $this->container['urlMatchRule'] = isset($data['urlMatchRule']) ? $data['urlMatchRule'] : null;
        $this->container['actionMatchRule'] = isset($data['actionMatchRule']) ? $data['actionMatchRule'] : null;
        $this->container['actionAggregationRule'] = isset($data['actionAggregationRule']) ? $data['actionAggregationRule'] : null;
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
     * Gets userActionSetId
     *
     * @return int|mixed
     */
    public function getUserActionSetId()
    {
        return $this->container['userActionSetId'];
    }

    /**
     * Sets userActionSetId
     *
     * @param int|mixed $userActionSetId userActionSetId
     *
     * @return $this
     */
    public function setUserActionSetId($userActionSetId)
    {
        $this->container['userActionSetId'] = $userActionSetId;

        return $this;
    }

    /**
     * Gets matchRuleType
     *
     * @return \TencentAds\Model\V3\MatchRuleType|mixed
     */
    public function getMatchRuleType()
    {
        return $this->container['matchRuleType'];
    }

    /**
     * Sets matchRuleType
     *
     * @param \TencentAds\Model\V3\MatchRuleType|mixed $matchRuleType matchRuleType
     *
     * @return $this
     */
    public function setMatchRuleType($matchRuleType)
    {
        $this->container['matchRuleType'] = $matchRuleType;

        return $this;
    }

    /**
     * Gets extractType
     *
     * @return \TencentAds\Model\V3\ExtractRuleType|mixed
     */
    public function getExtractType()
    {
        return $this->container['extractType'];
    }

    /**
     * Sets extractType
     *
     * @param \TencentAds\Model\V3\ExtractRuleType|mixed $extractType extractType
     *
     * @return $this
     */
    public function setExtractType($extractType)
    {
        $this->container['extractType'] = $extractType;

        return $this;
    }

    /**
     * Gets timeWindow
     *
     * @return int|mixed
     */
    public function getTimeWindow()
    {
        return $this->container['timeWindow'];
    }

    /**
     * Sets timeWindow
     *
     * @param int|mixed $timeWindow timeWindow
     *
     * @return $this
     */
    public function setTimeWindow($timeWindow)
    {
        $this->container['timeWindow'] = $timeWindow;

        return $this;
    }

    /**
     * Gets urlMatchRule
     *
     * @return \TencentAds\Model\V3\UrlMatchRule|mixed
     */
    public function getUrlMatchRule()
    {
        return $this->container['urlMatchRule'];
    }

    /**
     * Sets urlMatchRule
     *
     * @param \TencentAds\Model\V3\UrlMatchRule|mixed $urlMatchRule urlMatchRule
     *
     * @return $this
     */
    public function setUrlMatchRule($urlMatchRule)
    {
        $this->container['urlMatchRule'] = $urlMatchRule;

        return $this;
    }

    /**
     * Gets actionMatchRule
     *
     * @return \TencentAds\Model\V3\ActionMatchRule|mixed
     */
    public function getActionMatchRule()
    {
        return $this->container['actionMatchRule'];
    }

    /**
     * Sets actionMatchRule
     *
     * @param \TencentAds\Model\V3\ActionMatchRule|mixed $actionMatchRule actionMatchRule
     *
     * @return $this
     */
    public function setActionMatchRule($actionMatchRule)
    {
        $this->container['actionMatchRule'] = $actionMatchRule;

        return $this;
    }

    /**
     * Gets actionAggregationRule
     *
     * @return \TencentAds\Model\V3\ActionAggregationRule|mixed
     */
    public function getActionAggregationRule()
    {
        return $this->container['actionAggregationRule'];
    }

    /**
     * Sets actionAggregationRule
     *
     * @param \TencentAds\Model\V3\ActionAggregationRule|mixed $actionAggregationRule actionAggregationRule
     *
     * @return $this
     */
    public function setActionAggregationRule($actionAggregationRule)
    {
        $this->container['actionAggregationRule'] = $actionAggregationRule;

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


