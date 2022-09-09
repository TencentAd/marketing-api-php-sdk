<?php
/**
 * ConversionsGetListStruct
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
 * ConversionsGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversionsGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversionsGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conversionId' => 'int',
        'conversionName' => 'string',
        'accessType' => '\TencentAds\Model\AccessType',
        'claimType' => '\TencentAds\Model\ClaimType',
        'feedbackUrl' => 'string',
        'selfAttributed' => 'bool',
        'optimizationGoal' => '\TencentAds\Model\IntOptimizationGoal',
        'deepBehaviorOptimizationGoal' => '\TencentAds\Model\IntOptimizationGoal',
        'deepWorthOptimizationGoal' => '\TencentAds\Model\ConversionOptimizationGoal',
        'userActionSetId' => 'int',
        'userActionSetKey' => 'string',
        'siteSetEnable' => 'bool',
        'isDeleted' => 'bool',
        'accessStatus' => '\TencentAds\Model\AccessStatus',
        'createSourceType' => '\TencentAds\Model\CreateSourceType',
        'appAndroidChannelPackageId' => 'string',
        'promotedObjectId' => 'string',
        'conversionScene' => '\TencentAds\Model\ConversionScene',
        'ownerId' => 'int',
        'deepWorthAdvancedGoal' => '\TencentAds\Model\ConversionOptimizationGoal',
        'conversionLinkId' => 'int',
        'impressionFeedbackUrl' => 'string',
        'attributionWindow' => 'int',
        'deepBehaviorAdvancedGoal' => '\TencentAds\Model\IntOptimizationGoal',
        'deepBehaviorAdvancedGoalMinPrice' => 'int',
        'deepBehaviorAdvancedGoalMaxPrice' => 'int',
        'deepOptimizationGoalType' => '\TencentAds\Model\DeepOptimizationGoalType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conversionId' => 'int64',
        'conversionName' => null,
        'accessType' => null,
        'claimType' => null,
        'feedbackUrl' => null,
        'selfAttributed' => null,
        'optimizationGoal' => null,
        'deepBehaviorOptimizationGoal' => null,
        'deepWorthOptimizationGoal' => null,
        'userActionSetId' => 'int64',
        'userActionSetKey' => null,
        'siteSetEnable' => null,
        'isDeleted' => null,
        'accessStatus' => null,
        'createSourceType' => null,
        'appAndroidChannelPackageId' => null,
        'promotedObjectId' => null,
        'conversionScene' => null,
        'ownerId' => 'int64',
        'deepWorthAdvancedGoal' => null,
        'conversionLinkId' => 'int64',
        'impressionFeedbackUrl' => null,
        'attributionWindow' => 'int64',
        'deepBehaviorAdvancedGoal' => null,
        'deepBehaviorAdvancedGoalMinPrice' => 'int64',
        'deepBehaviorAdvancedGoalMaxPrice' => 'int64',
        'deepOptimizationGoalType' => null
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
        'conversionId' => 'conversion_id',
        'conversionName' => 'conversion_name',
        'accessType' => 'access_type',
        'claimType' => 'claim_type',
        'feedbackUrl' => 'feedback_url',
        'selfAttributed' => 'self_attributed',
        'optimizationGoal' => 'optimization_goal',
        'deepBehaviorOptimizationGoal' => 'deep_behavior_optimization_goal',
        'deepWorthOptimizationGoal' => 'deep_worth_optimization_goal',
        'userActionSetId' => 'user_action_set_id',
        'userActionSetKey' => 'user_action_set_key',
        'siteSetEnable' => 'site_set_enable',
        'isDeleted' => 'is_deleted',
        'accessStatus' => 'access_status',
        'createSourceType' => 'create_source_type',
        'appAndroidChannelPackageId' => 'app_android_channel_package_id',
        'promotedObjectId' => 'promoted_object_id',
        'conversionScene' => 'conversion_scene',
        'ownerId' => 'owner_id',
        'deepWorthAdvancedGoal' => 'deep_worth_advanced_goal',
        'conversionLinkId' => 'conversion_link_id',
        'impressionFeedbackUrl' => 'impression_feedback_url',
        'attributionWindow' => 'attribution_window',
        'deepBehaviorAdvancedGoal' => 'deep_behavior_advanced_goal',
        'deepBehaviorAdvancedGoalMinPrice' => 'deep_behavior_advanced_goal_min_price',
        'deepBehaviorAdvancedGoalMaxPrice' => 'deep_behavior_advanced_goal_max_price',
        'deepOptimizationGoalType' => 'deep_optimization_goal_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversionId' => 'setConversionId',
        'conversionName' => 'setConversionName',
        'accessType' => 'setAccessType',
        'claimType' => 'setClaimType',
        'feedbackUrl' => 'setFeedbackUrl',
        'selfAttributed' => 'setSelfAttributed',
        'optimizationGoal' => 'setOptimizationGoal',
        'deepBehaviorOptimizationGoal' => 'setDeepBehaviorOptimizationGoal',
        'deepWorthOptimizationGoal' => 'setDeepWorthOptimizationGoal',
        'userActionSetId' => 'setUserActionSetId',
        'userActionSetKey' => 'setUserActionSetKey',
        'siteSetEnable' => 'setSiteSetEnable',
        'isDeleted' => 'setIsDeleted',
        'accessStatus' => 'setAccessStatus',
        'createSourceType' => 'setCreateSourceType',
        'appAndroidChannelPackageId' => 'setAppAndroidChannelPackageId',
        'promotedObjectId' => 'setPromotedObjectId',
        'conversionScene' => 'setConversionScene',
        'ownerId' => 'setOwnerId',
        'deepWorthAdvancedGoal' => 'setDeepWorthAdvancedGoal',
        'conversionLinkId' => 'setConversionLinkId',
        'impressionFeedbackUrl' => 'setImpressionFeedbackUrl',
        'attributionWindow' => 'setAttributionWindow',
        'deepBehaviorAdvancedGoal' => 'setDeepBehaviorAdvancedGoal',
        'deepBehaviorAdvancedGoalMinPrice' => 'setDeepBehaviorAdvancedGoalMinPrice',
        'deepBehaviorAdvancedGoalMaxPrice' => 'setDeepBehaviorAdvancedGoalMaxPrice',
        'deepOptimizationGoalType' => 'setDeepOptimizationGoalType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversionId' => 'getConversionId',
        'conversionName' => 'getConversionName',
        'accessType' => 'getAccessType',
        'claimType' => 'getClaimType',
        'feedbackUrl' => 'getFeedbackUrl',
        'selfAttributed' => 'getSelfAttributed',
        'optimizationGoal' => 'getOptimizationGoal',
        'deepBehaviorOptimizationGoal' => 'getDeepBehaviorOptimizationGoal',
        'deepWorthOptimizationGoal' => 'getDeepWorthOptimizationGoal',
        'userActionSetId' => 'getUserActionSetId',
        'userActionSetKey' => 'getUserActionSetKey',
        'siteSetEnable' => 'getSiteSetEnable',
        'isDeleted' => 'getIsDeleted',
        'accessStatus' => 'getAccessStatus',
        'createSourceType' => 'getCreateSourceType',
        'appAndroidChannelPackageId' => 'getAppAndroidChannelPackageId',
        'promotedObjectId' => 'getPromotedObjectId',
        'conversionScene' => 'getConversionScene',
        'ownerId' => 'getOwnerId',
        'deepWorthAdvancedGoal' => 'getDeepWorthAdvancedGoal',
        'conversionLinkId' => 'getConversionLinkId',
        'impressionFeedbackUrl' => 'getImpressionFeedbackUrl',
        'attributionWindow' => 'getAttributionWindow',
        'deepBehaviorAdvancedGoal' => 'getDeepBehaviorAdvancedGoal',
        'deepBehaviorAdvancedGoalMinPrice' => 'getDeepBehaviorAdvancedGoalMinPrice',
        'deepBehaviorAdvancedGoalMaxPrice' => 'getDeepBehaviorAdvancedGoalMaxPrice',
        'deepOptimizationGoalType' => 'getDeepOptimizationGoalType'
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
        $this->container['conversionId'] = isset($data['conversionId']) ? $data['conversionId'] : null;
        $this->container['conversionName'] = isset($data['conversionName']) ? $data['conversionName'] : null;
        $this->container['accessType'] = isset($data['accessType']) ? $data['accessType'] : null;
        $this->container['claimType'] = isset($data['claimType']) ? $data['claimType'] : null;
        $this->container['feedbackUrl'] = isset($data['feedbackUrl']) ? $data['feedbackUrl'] : null;
        $this->container['selfAttributed'] = isset($data['selfAttributed']) ? $data['selfAttributed'] : null;
        $this->container['optimizationGoal'] = isset($data['optimizationGoal']) ? $data['optimizationGoal'] : null;
        $this->container['deepBehaviorOptimizationGoal'] = isset($data['deepBehaviorOptimizationGoal']) ? $data['deepBehaviorOptimizationGoal'] : null;
        $this->container['deepWorthOptimizationGoal'] = isset($data['deepWorthOptimizationGoal']) ? $data['deepWorthOptimizationGoal'] : null;
        $this->container['userActionSetId'] = isset($data['userActionSetId']) ? $data['userActionSetId'] : null;
        $this->container['userActionSetKey'] = isset($data['userActionSetKey']) ? $data['userActionSetKey'] : null;
        $this->container['siteSetEnable'] = isset($data['siteSetEnable']) ? $data['siteSetEnable'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['createSourceType'] = isset($data['createSourceType']) ? $data['createSourceType'] : null;
        $this->container['appAndroidChannelPackageId'] = isset($data['appAndroidChannelPackageId']) ? $data['appAndroidChannelPackageId'] : null;
        $this->container['promotedObjectId'] = isset($data['promotedObjectId']) ? $data['promotedObjectId'] : null;
        $this->container['conversionScene'] = isset($data['conversionScene']) ? $data['conversionScene'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['deepWorthAdvancedGoal'] = isset($data['deepWorthAdvancedGoal']) ? $data['deepWorthAdvancedGoal'] : null;
        $this->container['conversionLinkId'] = isset($data['conversionLinkId']) ? $data['conversionLinkId'] : null;
        $this->container['impressionFeedbackUrl'] = isset($data['impressionFeedbackUrl']) ? $data['impressionFeedbackUrl'] : null;
        $this->container['attributionWindow'] = isset($data['attributionWindow']) ? $data['attributionWindow'] : null;
        $this->container['deepBehaviorAdvancedGoal'] = isset($data['deepBehaviorAdvancedGoal']) ? $data['deepBehaviorAdvancedGoal'] : null;
        $this->container['deepBehaviorAdvancedGoalMinPrice'] = isset($data['deepBehaviorAdvancedGoalMinPrice']) ? $data['deepBehaviorAdvancedGoalMinPrice'] : null;
        $this->container['deepBehaviorAdvancedGoalMaxPrice'] = isset($data['deepBehaviorAdvancedGoalMaxPrice']) ? $data['deepBehaviorAdvancedGoalMaxPrice'] : null;
        $this->container['deepOptimizationGoalType'] = isset($data['deepOptimizationGoalType']) ? $data['deepOptimizationGoalType'] : null;
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
     * Gets conversionName
     *
     * @return string|mixed
     */
    public function getConversionName()
    {
        return $this->container['conversionName'];
    }

    /**
     * Sets conversionName
     *
     * @param string|mixed $conversionName conversionName
     *
     * @return $this
     */
    public function setConversionName($conversionName)
    {
        $this->container['conversionName'] = $conversionName;

        return $this;
    }

    /**
     * Gets accessType
     *
     * @return \TencentAds\Model\AccessType|mixed
     */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
     * Sets accessType
     *
     * @param \TencentAds\Model\AccessType|mixed $accessType accessType
     *
     * @return $this
     */
    public function setAccessType($accessType)
    {
        $this->container['accessType'] = $accessType;

        return $this;
    }

    /**
     * Gets claimType
     *
     * @return \TencentAds\Model\ClaimType|mixed
     */
    public function getClaimType()
    {
        return $this->container['claimType'];
    }

    /**
     * Sets claimType
     *
     * @param \TencentAds\Model\ClaimType|mixed $claimType claimType
     *
     * @return $this
     */
    public function setClaimType($claimType)
    {
        $this->container['claimType'] = $claimType;

        return $this;
    }

    /**
     * Gets feedbackUrl
     *
     * @return string|mixed
     */
    public function getFeedbackUrl()
    {
        return $this->container['feedbackUrl'];
    }

    /**
     * Sets feedbackUrl
     *
     * @param string|mixed $feedbackUrl feedbackUrl
     *
     * @return $this
     */
    public function setFeedbackUrl($feedbackUrl)
    {
        $this->container['feedbackUrl'] = $feedbackUrl;

        return $this;
    }

    /**
     * Gets selfAttributed
     *
     * @return bool|mixed
     */
    public function getSelfAttributed()
    {
        return $this->container['selfAttributed'];
    }

    /**
     * Sets selfAttributed
     *
     * @param bool|mixed $selfAttributed selfAttributed
     *
     * @return $this
     */
    public function setSelfAttributed($selfAttributed)
    {
        $this->container['selfAttributed'] = $selfAttributed;

        return $this;
    }

    /**
     * Gets optimizationGoal
     *
     * @return \TencentAds\Model\IntOptimizationGoal|mixed
     */
    public function getOptimizationGoal()
    {
        return $this->container['optimizationGoal'];
    }

    /**
     * Sets optimizationGoal
     *
     * @param \TencentAds\Model\IntOptimizationGoal|mixed $optimizationGoal optimizationGoal
     *
     * @return $this
     */
    public function setOptimizationGoal($optimizationGoal)
    {
        $this->container['optimizationGoal'] = $optimizationGoal;

        return $this;
    }

    /**
     * Gets deepBehaviorOptimizationGoal
     *
     * @return \TencentAds\Model\IntOptimizationGoal|mixed
     */
    public function getDeepBehaviorOptimizationGoal()
    {
        return $this->container['deepBehaviorOptimizationGoal'];
    }

    /**
     * Sets deepBehaviorOptimizationGoal
     *
     * @param \TencentAds\Model\IntOptimizationGoal|mixed $deepBehaviorOptimizationGoal deepBehaviorOptimizationGoal
     *
     * @return $this
     */
    public function setDeepBehaviorOptimizationGoal($deepBehaviorOptimizationGoal)
    {
        $this->container['deepBehaviorOptimizationGoal'] = $deepBehaviorOptimizationGoal;

        return $this;
    }

    /**
     * Gets deepWorthOptimizationGoal
     *
     * @return \TencentAds\Model\ConversionOptimizationGoal|mixed
     */
    public function getDeepWorthOptimizationGoal()
    {
        return $this->container['deepWorthOptimizationGoal'];
    }

    /**
     * Sets deepWorthOptimizationGoal
     *
     * @param \TencentAds\Model\ConversionOptimizationGoal|mixed $deepWorthOptimizationGoal deepWorthOptimizationGoal
     *
     * @return $this
     */
    public function setDeepWorthOptimizationGoal($deepWorthOptimizationGoal)
    {
        $this->container['deepWorthOptimizationGoal'] = $deepWorthOptimizationGoal;

        return $this;
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
     * Gets userActionSetKey
     *
     * @return string|mixed
     */
    public function getUserActionSetKey()
    {
        return $this->container['userActionSetKey'];
    }

    /**
     * Sets userActionSetKey
     *
     * @param string|mixed $userActionSetKey userActionSetKey
     *
     * @return $this
     */
    public function setUserActionSetKey($userActionSetKey)
    {
        $this->container['userActionSetKey'] = $userActionSetKey;

        return $this;
    }

    /**
     * Gets siteSetEnable
     *
     * @return bool|mixed
     */
    public function getSiteSetEnable()
    {
        return $this->container['siteSetEnable'];
    }

    /**
     * Sets siteSetEnable
     *
     * @param bool|mixed $siteSetEnable siteSetEnable
     *
     * @return $this
     */
    public function setSiteSetEnable($siteSetEnable)
    {
        $this->container['siteSetEnable'] = $siteSetEnable;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool|mixed
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool|mixed $isDeleted isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

        return $this;
    }

    /**
     * Gets accessStatus
     *
     * @return \TencentAds\Model\AccessStatus|mixed
     */
    public function getAccessStatus()
    {
        return $this->container['accessStatus'];
    }

    /**
     * Sets accessStatus
     *
     * @param \TencentAds\Model\AccessStatus|mixed $accessStatus accessStatus
     *
     * @return $this
     */
    public function setAccessStatus($accessStatus)
    {
        $this->container['accessStatus'] = $accessStatus;

        return $this;
    }

    /**
     * Gets createSourceType
     *
     * @return \TencentAds\Model\CreateSourceType|mixed
     */
    public function getCreateSourceType()
    {
        return $this->container['createSourceType'];
    }

    /**
     * Sets createSourceType
     *
     * @param \TencentAds\Model\CreateSourceType|mixed $createSourceType createSourceType
     *
     * @return $this
     */
    public function setCreateSourceType($createSourceType)
    {
        $this->container['createSourceType'] = $createSourceType;

        return $this;
    }

    /**
     * Gets appAndroidChannelPackageId
     *
     * @return string|mixed
     */
    public function getAppAndroidChannelPackageId()
    {
        return $this->container['appAndroidChannelPackageId'];
    }

    /**
     * Sets appAndroidChannelPackageId
     *
     * @param string|mixed $appAndroidChannelPackageId appAndroidChannelPackageId
     *
     * @return $this
     */
    public function setAppAndroidChannelPackageId($appAndroidChannelPackageId)
    {
        $this->container['appAndroidChannelPackageId'] = $appAndroidChannelPackageId;

        return $this;
    }

    /**
     * Gets promotedObjectId
     *
     * @return string|mixed
     */
    public function getPromotedObjectId()
    {
        return $this->container['promotedObjectId'];
    }

    /**
     * Sets promotedObjectId
     *
     * @param string|mixed $promotedObjectId promotedObjectId
     *
     * @return $this
     */
    public function setPromotedObjectId($promotedObjectId)
    {
        $this->container['promotedObjectId'] = $promotedObjectId;

        return $this;
    }

    /**
     * Gets conversionScene
     *
     * @return \TencentAds\Model\ConversionScene|mixed
     */
    public function getConversionScene()
    {
        return $this->container['conversionScene'];
    }

    /**
     * Sets conversionScene
     *
     * @param \TencentAds\Model\ConversionScene|mixed $conversionScene conversionScene
     *
     * @return $this
     */
    public function setConversionScene($conversionScene)
    {
        $this->container['conversionScene'] = $conversionScene;

        return $this;
    }

    /**
     * Gets ownerId
     *
     * @return int|mixed
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     *
     * @param int|mixed $ownerId ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets deepWorthAdvancedGoal
     *
     * @return \TencentAds\Model\ConversionOptimizationGoal|mixed
     */
    public function getDeepWorthAdvancedGoal()
    {
        return $this->container['deepWorthAdvancedGoal'];
    }

    /**
     * Sets deepWorthAdvancedGoal
     *
     * @param \TencentAds\Model\ConversionOptimizationGoal|mixed $deepWorthAdvancedGoal deepWorthAdvancedGoal
     *
     * @return $this
     */
    public function setDeepWorthAdvancedGoal($deepWorthAdvancedGoal)
    {
        $this->container['deepWorthAdvancedGoal'] = $deepWorthAdvancedGoal;

        return $this;
    }

    /**
     * Gets conversionLinkId
     *
     * @return int|mixed
     */
    public function getConversionLinkId()
    {
        return $this->container['conversionLinkId'];
    }

    /**
     * Sets conversionLinkId
     *
     * @param int|mixed $conversionLinkId conversionLinkId
     *
     * @return $this
     */
    public function setConversionLinkId($conversionLinkId)
    {
        $this->container['conversionLinkId'] = $conversionLinkId;

        return $this;
    }

    /**
     * Gets impressionFeedbackUrl
     *
     * @return string|mixed
     */
    public function getImpressionFeedbackUrl()
    {
        return $this->container['impressionFeedbackUrl'];
    }

    /**
     * Sets impressionFeedbackUrl
     *
     * @param string|mixed $impressionFeedbackUrl impressionFeedbackUrl
     *
     * @return $this
     */
    public function setImpressionFeedbackUrl($impressionFeedbackUrl)
    {
        $this->container['impressionFeedbackUrl'] = $impressionFeedbackUrl;

        return $this;
    }

    /**
     * Gets attributionWindow
     *
     * @return int|mixed
     */
    public function getAttributionWindow()
    {
        return $this->container['attributionWindow'];
    }

    /**
     * Sets attributionWindow
     *
     * @param int|mixed $attributionWindow attributionWindow
     *
     * @return $this
     */
    public function setAttributionWindow($attributionWindow)
    {
        $this->container['attributionWindow'] = $attributionWindow;

        return $this;
    }

    /**
     * Gets deepBehaviorAdvancedGoal
     *
     * @return \TencentAds\Model\IntOptimizationGoal|mixed
     */
    public function getDeepBehaviorAdvancedGoal()
    {
        return $this->container['deepBehaviorAdvancedGoal'];
    }

    /**
     * Sets deepBehaviorAdvancedGoal
     *
     * @param \TencentAds\Model\IntOptimizationGoal|mixed $deepBehaviorAdvancedGoal deepBehaviorAdvancedGoal
     *
     * @return $this
     */
    public function setDeepBehaviorAdvancedGoal($deepBehaviorAdvancedGoal)
    {
        $this->container['deepBehaviorAdvancedGoal'] = $deepBehaviorAdvancedGoal;

        return $this;
    }

    /**
     * Gets deepBehaviorAdvancedGoalMinPrice
     *
     * @return int|mixed
     */
    public function getDeepBehaviorAdvancedGoalMinPrice()
    {
        return $this->container['deepBehaviorAdvancedGoalMinPrice'];
    }

    /**
     * Sets deepBehaviorAdvancedGoalMinPrice
     *
     * @param int|mixed $deepBehaviorAdvancedGoalMinPrice deepBehaviorAdvancedGoalMinPrice
     *
     * @return $this
     */
    public function setDeepBehaviorAdvancedGoalMinPrice($deepBehaviorAdvancedGoalMinPrice)
    {
        $this->container['deepBehaviorAdvancedGoalMinPrice'] = $deepBehaviorAdvancedGoalMinPrice;

        return $this;
    }

    /**
     * Gets deepBehaviorAdvancedGoalMaxPrice
     *
     * @return int|mixed
     */
    public function getDeepBehaviorAdvancedGoalMaxPrice()
    {
        return $this->container['deepBehaviorAdvancedGoalMaxPrice'];
    }

    /**
     * Sets deepBehaviorAdvancedGoalMaxPrice
     *
     * @param int|mixed $deepBehaviorAdvancedGoalMaxPrice deepBehaviorAdvancedGoalMaxPrice
     *
     * @return $this
     */
    public function setDeepBehaviorAdvancedGoalMaxPrice($deepBehaviorAdvancedGoalMaxPrice)
    {
        $this->container['deepBehaviorAdvancedGoalMaxPrice'] = $deepBehaviorAdvancedGoalMaxPrice;

        return $this;
    }

    /**
     * Gets deepOptimizationGoalType
     *
     * @return \TencentAds\Model\DeepOptimizationGoalType|mixed
     */
    public function getDeepOptimizationGoalType()
    {
        return $this->container['deepOptimizationGoalType'];
    }

    /**
     * Sets deepOptimizationGoalType
     *
     * @param \TencentAds\Model\DeepOptimizationGoalType|mixed $deepOptimizationGoalType deepOptimizationGoalType
     *
     * @return $this
     */
    public function setDeepOptimizationGoalType($deepOptimizationGoalType)
    {
        $this->container['deepOptimizationGoalType'] = $deepOptimizationGoalType;

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


