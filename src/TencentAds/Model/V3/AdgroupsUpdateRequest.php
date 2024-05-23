<?php
/**
 * AdgroupsUpdateRequest
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
 * AdgroupsUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdgroupsUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdgroupsUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'adgroupId' => 'int',
        'adgroupName' => 'string',
        'beginDate' => 'string',
        'endDate' => 'string',
        'firstDayBeginTime' => 'string',
        'bidAmount' => 'int',
        'optimizationGoal' => '\TencentAds\Model\V3\OptimizationGoal',
        'timeSeries' => 'string',
        'dailyBudget' => 'int',
        'targeting' => '\TencentAds\Model\V3\WriteTargetingSetting',
        'sceneSpec' => '\TencentAds\Model\V3\SceneTargetingForWrite',
        'userActionSets' => '\TencentAds\Model\V3\UserActionSetStruct[]',
        'bidStrategy' => '\TencentAds\Model\V3\BidStrategy',
        'deepConversionSpec' => '\TencentAds\Model\V3\DeepConversionSpec',
        'conversionId' => 'int',
        'deepConversionBehaviorBid' => 'int',
        'deepConversionWorthRate' => 'double',
        'deepConversionWorthAdvancedRate' => 'double',
        'deepConversionBehaviorAdvancedBid' => 'int',
        'bidMode' => '\TencentAds\Model\V3\BidMode',
        'autoAcquisitionEnabled' => 'bool',
        'autoAcquisitionBudget' => 'int',
        'autoDerivedLandingPageSwitch' => 'bool',
        'autoDerivedCreativeEnabled' => 'bool',
        'configuredStatus' => '\TencentAds\Model\V3\ConfiguredStatus',
        'flowOptimizationEnabled' => 'bool',
        'poiList' => 'string[]',
        'ecomPkamSwitch' => '\TencentAds\Model\V3\EcomPkamSwitch',
        'rtaId' => 'int',
        'rtaTargetId' => 'string',
        'costConstraintScene' => '\TencentAds\Model\V3\CostConstraintScene',
        'customCostCap' => 'int',
        'feedbackId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'adgroupId' => 'int64',
        'adgroupName' => null,
        'beginDate' => null,
        'endDate' => null,
        'firstDayBeginTime' => null,
        'bidAmount' => 'int64',
        'optimizationGoal' => null,
        'timeSeries' => null,
        'dailyBudget' => 'int64',
        'targeting' => null,
        'sceneSpec' => null,
        'userActionSets' => null,
        'bidStrategy' => null,
        'deepConversionSpec' => null,
        'conversionId' => 'int64',
        'deepConversionBehaviorBid' => 'int64',
        'deepConversionWorthRate' => 'double',
        'deepConversionWorthAdvancedRate' => 'double',
        'deepConversionBehaviorAdvancedBid' => 'int64',
        'bidMode' => null,
        'autoAcquisitionEnabled' => null,
        'autoAcquisitionBudget' => 'int64',
        'autoDerivedLandingPageSwitch' => null,
        'autoDerivedCreativeEnabled' => null,
        'configuredStatus' => null,
        'flowOptimizationEnabled' => null,
        'poiList' => null,
        'ecomPkamSwitch' => null,
        'rtaId' => 'int64',
        'rtaTargetId' => null,
        'costConstraintScene' => null,
        'customCostCap' => 'int64',
        'feedbackId' => 'int64'
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
        'adgroupId' => 'adgroup_id',
        'adgroupName' => 'adgroup_name',
        'beginDate' => 'begin_date',
        'endDate' => 'end_date',
        'firstDayBeginTime' => 'first_day_begin_time',
        'bidAmount' => 'bid_amount',
        'optimizationGoal' => 'optimization_goal',
        'timeSeries' => 'time_series',
        'dailyBudget' => 'daily_budget',
        'targeting' => 'targeting',
        'sceneSpec' => 'scene_spec',
        'userActionSets' => 'user_action_sets',
        'bidStrategy' => 'bid_strategy',
        'deepConversionSpec' => 'deep_conversion_spec',
        'conversionId' => 'conversion_id',
        'deepConversionBehaviorBid' => 'deep_conversion_behavior_bid',
        'deepConversionWorthRate' => 'deep_conversion_worth_rate',
        'deepConversionWorthAdvancedRate' => 'deep_conversion_worth_advanced_rate',
        'deepConversionBehaviorAdvancedBid' => 'deep_conversion_behavior_advanced_bid',
        'bidMode' => 'bid_mode',
        'autoAcquisitionEnabled' => 'auto_acquisition_enabled',
        'autoAcquisitionBudget' => 'auto_acquisition_budget',
        'autoDerivedLandingPageSwitch' => 'auto_derived_landing_page_switch',
        'autoDerivedCreativeEnabled' => 'auto_derived_creative_enabled',
        'configuredStatus' => 'configured_status',
        'flowOptimizationEnabled' => 'flow_optimization_enabled',
        'poiList' => 'poi_list',
        'ecomPkamSwitch' => 'ecom_pkam_switch',
        'rtaId' => 'rta_id',
        'rtaTargetId' => 'rta_target_id',
        'costConstraintScene' => 'cost_constraint_scene',
        'customCostCap' => 'custom_cost_cap',
        'feedbackId' => 'feedback_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'adgroupId' => 'setAdgroupId',
        'adgroupName' => 'setAdgroupName',
        'beginDate' => 'setBeginDate',
        'endDate' => 'setEndDate',
        'firstDayBeginTime' => 'setFirstDayBeginTime',
        'bidAmount' => 'setBidAmount',
        'optimizationGoal' => 'setOptimizationGoal',
        'timeSeries' => 'setTimeSeries',
        'dailyBudget' => 'setDailyBudget',
        'targeting' => 'setTargeting',
        'sceneSpec' => 'setSceneSpec',
        'userActionSets' => 'setUserActionSets',
        'bidStrategy' => 'setBidStrategy',
        'deepConversionSpec' => 'setDeepConversionSpec',
        'conversionId' => 'setConversionId',
        'deepConversionBehaviorBid' => 'setDeepConversionBehaviorBid',
        'deepConversionWorthRate' => 'setDeepConversionWorthRate',
        'deepConversionWorthAdvancedRate' => 'setDeepConversionWorthAdvancedRate',
        'deepConversionBehaviorAdvancedBid' => 'setDeepConversionBehaviorAdvancedBid',
        'bidMode' => 'setBidMode',
        'autoAcquisitionEnabled' => 'setAutoAcquisitionEnabled',
        'autoAcquisitionBudget' => 'setAutoAcquisitionBudget',
        'autoDerivedLandingPageSwitch' => 'setAutoDerivedLandingPageSwitch',
        'autoDerivedCreativeEnabled' => 'setAutoDerivedCreativeEnabled',
        'configuredStatus' => 'setConfiguredStatus',
        'flowOptimizationEnabled' => 'setFlowOptimizationEnabled',
        'poiList' => 'setPoiList',
        'ecomPkamSwitch' => 'setEcomPkamSwitch',
        'rtaId' => 'setRtaId',
        'rtaTargetId' => 'setRtaTargetId',
        'costConstraintScene' => 'setCostConstraintScene',
        'customCostCap' => 'setCustomCostCap',
        'feedbackId' => 'setFeedbackId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'adgroupId' => 'getAdgroupId',
        'adgroupName' => 'getAdgroupName',
        'beginDate' => 'getBeginDate',
        'endDate' => 'getEndDate',
        'firstDayBeginTime' => 'getFirstDayBeginTime',
        'bidAmount' => 'getBidAmount',
        'optimizationGoal' => 'getOptimizationGoal',
        'timeSeries' => 'getTimeSeries',
        'dailyBudget' => 'getDailyBudget',
        'targeting' => 'getTargeting',
        'sceneSpec' => 'getSceneSpec',
        'userActionSets' => 'getUserActionSets',
        'bidStrategy' => 'getBidStrategy',
        'deepConversionSpec' => 'getDeepConversionSpec',
        'conversionId' => 'getConversionId',
        'deepConversionBehaviorBid' => 'getDeepConversionBehaviorBid',
        'deepConversionWorthRate' => 'getDeepConversionWorthRate',
        'deepConversionWorthAdvancedRate' => 'getDeepConversionWorthAdvancedRate',
        'deepConversionBehaviorAdvancedBid' => 'getDeepConversionBehaviorAdvancedBid',
        'bidMode' => 'getBidMode',
        'autoAcquisitionEnabled' => 'getAutoAcquisitionEnabled',
        'autoAcquisitionBudget' => 'getAutoAcquisitionBudget',
        'autoDerivedLandingPageSwitch' => 'getAutoDerivedLandingPageSwitch',
        'autoDerivedCreativeEnabled' => 'getAutoDerivedCreativeEnabled',
        'configuredStatus' => 'getConfiguredStatus',
        'flowOptimizationEnabled' => 'getFlowOptimizationEnabled',
        'poiList' => 'getPoiList',
        'ecomPkamSwitch' => 'getEcomPkamSwitch',
        'rtaId' => 'getRtaId',
        'rtaTargetId' => 'getRtaTargetId',
        'costConstraintScene' => 'getCostConstraintScene',
        'customCostCap' => 'getCustomCostCap',
        'feedbackId' => 'getFeedbackId'
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
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['adgroupName'] = isset($data['adgroupName']) ? $data['adgroupName'] : null;
        $this->container['beginDate'] = isset($data['beginDate']) ? $data['beginDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['firstDayBeginTime'] = isset($data['firstDayBeginTime']) ? $data['firstDayBeginTime'] : null;
        $this->container['bidAmount'] = isset($data['bidAmount']) ? $data['bidAmount'] : null;
        $this->container['optimizationGoal'] = isset($data['optimizationGoal']) ? $data['optimizationGoal'] : null;
        $this->container['timeSeries'] = isset($data['timeSeries']) ? $data['timeSeries'] : null;
        $this->container['dailyBudget'] = isset($data['dailyBudget']) ? $data['dailyBudget'] : null;
        $this->container['targeting'] = isset($data['targeting']) ? $data['targeting'] : null;
        $this->container['sceneSpec'] = isset($data['sceneSpec']) ? $data['sceneSpec'] : null;
        $this->container['userActionSets'] = isset($data['userActionSets']) ? $data['userActionSets'] : null;
        $this->container['bidStrategy'] = isset($data['bidStrategy']) ? $data['bidStrategy'] : null;
        $this->container['deepConversionSpec'] = isset($data['deepConversionSpec']) ? $data['deepConversionSpec'] : null;
        $this->container['conversionId'] = isset($data['conversionId']) ? $data['conversionId'] : null;
        $this->container['deepConversionBehaviorBid'] = isset($data['deepConversionBehaviorBid']) ? $data['deepConversionBehaviorBid'] : null;
        $this->container['deepConversionWorthRate'] = isset($data['deepConversionWorthRate']) ? $data['deepConversionWorthRate'] : null;
        $this->container['deepConversionWorthAdvancedRate'] = isset($data['deepConversionWorthAdvancedRate']) ? $data['deepConversionWorthAdvancedRate'] : null;
        $this->container['deepConversionBehaviorAdvancedBid'] = isset($data['deepConversionBehaviorAdvancedBid']) ? $data['deepConversionBehaviorAdvancedBid'] : null;
        $this->container['bidMode'] = isset($data['bidMode']) ? $data['bidMode'] : null;
        $this->container['autoAcquisitionEnabled'] = isset($data['autoAcquisitionEnabled']) ? $data['autoAcquisitionEnabled'] : null;
        $this->container['autoAcquisitionBudget'] = isset($data['autoAcquisitionBudget']) ? $data['autoAcquisitionBudget'] : null;
        $this->container['autoDerivedLandingPageSwitch'] = isset($data['autoDerivedLandingPageSwitch']) ? $data['autoDerivedLandingPageSwitch'] : null;
        $this->container['autoDerivedCreativeEnabled'] = isset($data['autoDerivedCreativeEnabled']) ? $data['autoDerivedCreativeEnabled'] : null;
        $this->container['configuredStatus'] = isset($data['configuredStatus']) ? $data['configuredStatus'] : null;
        $this->container['flowOptimizationEnabled'] = isset($data['flowOptimizationEnabled']) ? $data['flowOptimizationEnabled'] : null;
        $this->container['poiList'] = isset($data['poiList']) ? $data['poiList'] : null;
        $this->container['ecomPkamSwitch'] = isset($data['ecomPkamSwitch']) ? $data['ecomPkamSwitch'] : null;
        $this->container['rtaId'] = isset($data['rtaId']) ? $data['rtaId'] : null;
        $this->container['rtaTargetId'] = isset($data['rtaTargetId']) ? $data['rtaTargetId'] : null;
        $this->container['costConstraintScene'] = isset($data['costConstraintScene']) ? $data['costConstraintScene'] : null;
        $this->container['customCostCap'] = isset($data['customCostCap']) ? $data['customCostCap'] : null;
        $this->container['feedbackId'] = isset($data['feedbackId']) ? $data['feedbackId'] : null;
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
     * Gets adgroupId
     *
     * @return int|mixed
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int|mixed $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

        return $this;
    }

    /**
     * Gets adgroupName
     *
     * @return string|mixed
     */
    public function getAdgroupName()
    {
        return $this->container['adgroupName'];
    }

    /**
     * Sets adgroupName
     *
     * @param string|mixed $adgroupName adgroupName
     *
     * @return $this
     */
    public function setAdgroupName($adgroupName)
    {
        $this->container['adgroupName'] = $adgroupName;

        return $this;
    }

    /**
     * Gets beginDate
     *
     * @return string|mixed
     */
    public function getBeginDate()
    {
        return $this->container['beginDate'];
    }

    /**
     * Sets beginDate
     *
     * @param string|mixed $beginDate beginDate
     *
     * @return $this
     */
    public function setBeginDate($beginDate)
    {
        $this->container['beginDate'] = $beginDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string|mixed
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param string|mixed $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets firstDayBeginTime
     *
     * @return string|mixed
     */
    public function getFirstDayBeginTime()
    {
        return $this->container['firstDayBeginTime'];
    }

    /**
     * Sets firstDayBeginTime
     *
     * @param string|mixed $firstDayBeginTime firstDayBeginTime
     *
     * @return $this
     */
    public function setFirstDayBeginTime($firstDayBeginTime)
    {
        $this->container['firstDayBeginTime'] = $firstDayBeginTime;

        return $this;
    }

    /**
     * Gets bidAmount
     *
     * @return int|mixed
     */
    public function getBidAmount()
    {
        return $this->container['bidAmount'];
    }

    /**
     * Sets bidAmount
     *
     * @param int|mixed $bidAmount bidAmount
     *
     * @return $this
     */
    public function setBidAmount($bidAmount)
    {
        $this->container['bidAmount'] = $bidAmount;

        return $this;
    }

    /**
     * Gets optimizationGoal
     *
     * @return \TencentAds\Model\V3\OptimizationGoal|mixed
     */
    public function getOptimizationGoal()
    {
        return $this->container['optimizationGoal'];
    }

    /**
     * Sets optimizationGoal
     *
     * @param \TencentAds\Model\V3\OptimizationGoal|mixed $optimizationGoal optimizationGoal
     *
     * @return $this
     */
    public function setOptimizationGoal($optimizationGoal)
    {
        $this->container['optimizationGoal'] = $optimizationGoal;

        return $this;
    }

    /**
     * Gets timeSeries
     *
     * @return string|mixed
     */
    public function getTimeSeries()
    {
        return $this->container['timeSeries'];
    }

    /**
     * Sets timeSeries
     *
     * @param string|mixed $timeSeries timeSeries
     *
     * @return $this
     */
    public function setTimeSeries($timeSeries)
    {
        $this->container['timeSeries'] = $timeSeries;

        return $this;
    }

    /**
     * Gets dailyBudget
     *
     * @return int|mixed
     */
    public function getDailyBudget()
    {
        return $this->container['dailyBudget'];
    }

    /**
     * Sets dailyBudget
     *
     * @param int|mixed $dailyBudget dailyBudget
     *
     * @return $this
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->container['dailyBudget'] = $dailyBudget;

        return $this;
    }

    /**
     * Gets targeting
     *
     * @return \TencentAds\Model\V3\WriteTargetingSetting|mixed
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param \TencentAds\Model\V3\WriteTargetingSetting|mixed $targeting targeting
     *
     * @return $this
     */
    public function setTargeting($targeting)
    {
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets sceneSpec
     *
     * @return \TencentAds\Model\V3\SceneTargetingForWrite|mixed
     */
    public function getSceneSpec()
    {
        return $this->container['sceneSpec'];
    }

    /**
     * Sets sceneSpec
     *
     * @param \TencentAds\Model\V3\SceneTargetingForWrite|mixed $sceneSpec sceneSpec
     *
     * @return $this
     */
    public function setSceneSpec($sceneSpec)
    {
        $this->container['sceneSpec'] = $sceneSpec;

        return $this;
    }

    /**
     * Gets userActionSets
     *
     * @return \TencentAds\Model\V3\UserActionSetStruct[]|mixed
     */
    public function getUserActionSets()
    {
        return $this->container['userActionSets'];
    }

    /**
     * Sets userActionSets
     *
     * @param \TencentAds\Model\V3\UserActionSetStruct[]|mixed $userActionSets userActionSets
     *
     * @return $this
     */
    public function setUserActionSets($userActionSets)
    {
        $this->container['userActionSets'] = $userActionSets;

        return $this;
    }

    /**
     * Gets bidStrategy
     *
     * @return \TencentAds\Model\V3\BidStrategy|mixed
     */
    public function getBidStrategy()
    {
        return $this->container['bidStrategy'];
    }

    /**
     * Sets bidStrategy
     *
     * @param \TencentAds\Model\V3\BidStrategy|mixed $bidStrategy bidStrategy
     *
     * @return $this
     */
    public function setBidStrategy($bidStrategy)
    {
        $this->container['bidStrategy'] = $bidStrategy;

        return $this;
    }

    /**
     * Gets deepConversionSpec
     *
     * @return \TencentAds\Model\V3\DeepConversionSpec|mixed
     */
    public function getDeepConversionSpec()
    {
        return $this->container['deepConversionSpec'];
    }

    /**
     * Sets deepConversionSpec
     *
     * @param \TencentAds\Model\V3\DeepConversionSpec|mixed $deepConversionSpec deepConversionSpec
     *
     * @return $this
     */
    public function setDeepConversionSpec($deepConversionSpec)
    {
        $this->container['deepConversionSpec'] = $deepConversionSpec;

        return $this;
    }

    /**
     * Gets conversionId
     *
     * @return int|mixed
     */
    public function getConversionId()
    {
        return $this->container['conversionId'];
    }

    /**
     * Sets conversionId
     *
     * @param int|mixed $conversionId conversionId
     *
     * @return $this
     */
    public function setConversionId($conversionId)
    {
        $this->container['conversionId'] = $conversionId;

        return $this;
    }

    /**
     * Gets deepConversionBehaviorBid
     *
     * @return int|mixed
     */
    public function getDeepConversionBehaviorBid()
    {
        return $this->container['deepConversionBehaviorBid'];
    }

    /**
     * Sets deepConversionBehaviorBid
     *
     * @param int|mixed $deepConversionBehaviorBid deepConversionBehaviorBid
     *
     * @return $this
     */
    public function setDeepConversionBehaviorBid($deepConversionBehaviorBid)
    {
        $this->container['deepConversionBehaviorBid'] = $deepConversionBehaviorBid;

        return $this;
    }

    /**
     * Gets deepConversionWorthRate
     *
     * @return double|mixed
     */
    public function getDeepConversionWorthRate()
    {
        return $this->container['deepConversionWorthRate'];
    }

    /**
     * Sets deepConversionWorthRate
     *
     * @param double|mixed $deepConversionWorthRate deepConversionWorthRate
     *
     * @return $this
     */
    public function setDeepConversionWorthRate($deepConversionWorthRate)
    {
        $this->container['deepConversionWorthRate'] = $deepConversionWorthRate;

        return $this;
    }

    /**
     * Gets deepConversionWorthAdvancedRate
     *
     * @return double|mixed
     */
    public function getDeepConversionWorthAdvancedRate()
    {
        return $this->container['deepConversionWorthAdvancedRate'];
    }

    /**
     * Sets deepConversionWorthAdvancedRate
     *
     * @param double|mixed $deepConversionWorthAdvancedRate deepConversionWorthAdvancedRate
     *
     * @return $this
     */
    public function setDeepConversionWorthAdvancedRate($deepConversionWorthAdvancedRate)
    {
        $this->container['deepConversionWorthAdvancedRate'] = $deepConversionWorthAdvancedRate;

        return $this;
    }

    /**
     * Gets deepConversionBehaviorAdvancedBid
     *
     * @return int|mixed
     */
    public function getDeepConversionBehaviorAdvancedBid()
    {
        return $this->container['deepConversionBehaviorAdvancedBid'];
    }

    /**
     * Sets deepConversionBehaviorAdvancedBid
     *
     * @param int|mixed $deepConversionBehaviorAdvancedBid deepConversionBehaviorAdvancedBid
     *
     * @return $this
     */
    public function setDeepConversionBehaviorAdvancedBid($deepConversionBehaviorAdvancedBid)
    {
        $this->container['deepConversionBehaviorAdvancedBid'] = $deepConversionBehaviorAdvancedBid;

        return $this;
    }

    /**
     * Gets bidMode
     *
     * @return \TencentAds\Model\V3\BidMode|mixed
     */
    public function getBidMode()
    {
        return $this->container['bidMode'];
    }

    /**
     * Sets bidMode
     *
     * @param \TencentAds\Model\V3\BidMode|mixed $bidMode bidMode
     *
     * @return $this
     */
    public function setBidMode($bidMode)
    {
        $this->container['bidMode'] = $bidMode;

        return $this;
    }

    /**
     * Gets autoAcquisitionEnabled
     *
     * @return bool|mixed
     */
    public function getAutoAcquisitionEnabled()
    {
        return $this->container['autoAcquisitionEnabled'];
    }

    /**
     * Sets autoAcquisitionEnabled
     *
     * @param bool|mixed $autoAcquisitionEnabled autoAcquisitionEnabled
     *
     * @return $this
     */
    public function setAutoAcquisitionEnabled($autoAcquisitionEnabled)
    {
        $this->container['autoAcquisitionEnabled'] = $autoAcquisitionEnabled;

        return $this;
    }

    /**
     * Gets autoAcquisitionBudget
     *
     * @return int|mixed
     */
    public function getAutoAcquisitionBudget()
    {
        return $this->container['autoAcquisitionBudget'];
    }

    /**
     * Sets autoAcquisitionBudget
     *
     * @param int|mixed $autoAcquisitionBudget autoAcquisitionBudget
     *
     * @return $this
     */
    public function setAutoAcquisitionBudget($autoAcquisitionBudget)
    {
        $this->container['autoAcquisitionBudget'] = $autoAcquisitionBudget;

        return $this;
    }

    /**
     * Gets autoDerivedLandingPageSwitch
     *
     * @return bool|mixed
     */
    public function getAutoDerivedLandingPageSwitch()
    {
        return $this->container['autoDerivedLandingPageSwitch'];
    }

    /**
     * Sets autoDerivedLandingPageSwitch
     *
     * @param bool|mixed $autoDerivedLandingPageSwitch autoDerivedLandingPageSwitch
     *
     * @return $this
     */
    public function setAutoDerivedLandingPageSwitch($autoDerivedLandingPageSwitch)
    {
        $this->container['autoDerivedLandingPageSwitch'] = $autoDerivedLandingPageSwitch;

        return $this;
    }

    /**
     * Gets autoDerivedCreativeEnabled
     *
     * @return bool|mixed
     */
    public function getAutoDerivedCreativeEnabled()
    {
        return $this->container['autoDerivedCreativeEnabled'];
    }

    /**
     * Sets autoDerivedCreativeEnabled
     *
     * @param bool|mixed $autoDerivedCreativeEnabled autoDerivedCreativeEnabled
     *
     * @return $this
     */
    public function setAutoDerivedCreativeEnabled($autoDerivedCreativeEnabled)
    {
        $this->container['autoDerivedCreativeEnabled'] = $autoDerivedCreativeEnabled;

        return $this;
    }

    /**
     * Gets configuredStatus
     *
     * @return \TencentAds\Model\V3\ConfiguredStatus|mixed
     */
    public function getConfiguredStatus()
    {
        return $this->container['configuredStatus'];
    }

    /**
     * Sets configuredStatus
     *
     * @param \TencentAds\Model\V3\ConfiguredStatus|mixed $configuredStatus configuredStatus
     *
     * @return $this
     */
    public function setConfiguredStatus($configuredStatus)
    {
        $this->container['configuredStatus'] = $configuredStatus;

        return $this;
    }

    /**
     * Gets flowOptimizationEnabled
     *
     * @return bool|mixed
     */
    public function getFlowOptimizationEnabled()
    {
        return $this->container['flowOptimizationEnabled'];
    }

    /**
     * Sets flowOptimizationEnabled
     *
     * @param bool|mixed $flowOptimizationEnabled flowOptimizationEnabled
     *
     * @return $this
     */
    public function setFlowOptimizationEnabled($flowOptimizationEnabled)
    {
        $this->container['flowOptimizationEnabled'] = $flowOptimizationEnabled;

        return $this;
    }

    /**
     * Gets poiList
     *
     * @return string[]|mixed
     */
    public function getPoiList()
    {
        return $this->container['poiList'];
    }

    /**
     * Sets poiList
     *
     * @param string[]|mixed $poiList poiList
     *
     * @return $this
     */
    public function setPoiList($poiList)
    {
        $this->container['poiList'] = $poiList;

        return $this;
    }

    /**
     * Gets ecomPkamSwitch
     *
     * @return \TencentAds\Model\V3\EcomPkamSwitch|mixed
     */
    public function getEcomPkamSwitch()
    {
        return $this->container['ecomPkamSwitch'];
    }

    /**
     * Sets ecomPkamSwitch
     *
     * @param \TencentAds\Model\V3\EcomPkamSwitch|mixed $ecomPkamSwitch ecomPkamSwitch
     *
     * @return $this
     */
    public function setEcomPkamSwitch($ecomPkamSwitch)
    {
        $this->container['ecomPkamSwitch'] = $ecomPkamSwitch;

        return $this;
    }

    /**
     * Gets rtaId
     *
     * @return int|mixed
     */
    public function getRtaId()
    {
        return $this->container['rtaId'];
    }

    /**
     * Sets rtaId
     *
     * @param int|mixed $rtaId rtaId
     *
     * @return $this
     */
    public function setRtaId($rtaId)
    {
        $this->container['rtaId'] = $rtaId;

        return $this;
    }

    /**
     * Gets rtaTargetId
     *
     * @return string|mixed
     */
    public function getRtaTargetId()
    {
        return $this->container['rtaTargetId'];
    }

    /**
     * Sets rtaTargetId
     *
     * @param string|mixed $rtaTargetId rtaTargetId
     *
     * @return $this
     */
    public function setRtaTargetId($rtaTargetId)
    {
        $this->container['rtaTargetId'] = $rtaTargetId;

        return $this;
    }

    /**
     * Gets costConstraintScene
     *
     * @return \TencentAds\Model\V3\CostConstraintScene|mixed
     */
    public function getCostConstraintScene()
    {
        return $this->container['costConstraintScene'];
    }

    /**
     * Sets costConstraintScene
     *
     * @param \TencentAds\Model\V3\CostConstraintScene|mixed $costConstraintScene costConstraintScene
     *
     * @return $this
     */
    public function setCostConstraintScene($costConstraintScene)
    {
        $this->container['costConstraintScene'] = $costConstraintScene;

        return $this;
    }

    /**
     * Gets customCostCap
     *
     * @return int|mixed
     */
    public function getCustomCostCap()
    {
        return $this->container['customCostCap'];
    }

    /**
     * Sets customCostCap
     *
     * @param int|mixed $customCostCap customCostCap
     *
     * @return $this
     */
    public function setCustomCostCap($customCostCap)
    {
        $this->container['customCostCap'] = $customCostCap;

        return $this;
    }

    /**
     * Gets feedbackId
     *
     * @return int|mixed
     */
    public function getFeedbackId()
    {
        return $this->container['feedbackId'];
    }

    /**
     * Sets feedbackId
     *
     * @param int|mixed $feedbackId feedbackId
     *
     * @return $this
     */
    public function setFeedbackId($feedbackId)
    {
        $this->container['feedbackId'] = $feedbackId;

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


