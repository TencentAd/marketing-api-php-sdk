<?php
/**
 * TaskSpec
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
 * TaskSpec Class Doc Comment
 *
 * @category Class
 * @description 任务所需条件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'task_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'updateUnionPositionPackageSpec' => '\TencentAds\Model\V3\UpdateUnionPositionPackageItem[]',
        'updateExcludeUnionPositionPackageSpec' => '\TencentAds\Model\V3\UpdateExcludeUnionPositionPackageItem[]',
        'updateDeepConversionBehaviorBidSpec' => '\TencentAds\Model\V3\UpdateDeepConversionBehaviorBidItem[]',
        'deleteAdgroupSpec' => '\TencentAds\Model\V3\DeleteAdgroupItem[]',
        'updateAdgroupDeepConversionWorthRateSpec' => '\TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthRateItem[]',
        'targetingsShareSpec' => '\TencentAds\Model\V3\TargetingsShareItem[]',
        'updateAdgroupConfiguredStatusSpec' => '\TencentAds\Model\V3\UpdateAdgroupConfiguredStatusItem[]',
        'updateAdgroupDailyBudgetSpec' => '\TencentAds\Model\V3\UpdateAdgroupDailyBudgetItem[]',
        'updateAdgroupAutoAcquisitionSpec' => '\TencentAds\Model\V3\UpdateAdgroupAutoAcquisitionItem[]',
        'updateAdgroupDeepConversionWorthAdvancedRateSpec' => '\TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthAdvancedRateItem[]',
        'updateDeepConversionBehaviorAdvancedBidSpec' => '\TencentAds\Model\V3\UpdateDeepConversionBehaviorAdvancedBidItem[]',
        'replyFinderObjectCommentSpec' => '\TencentAds\Model\V3\ReplyFinderObjectCommentItem[]',
        'deleteFinderObjectCommentSpec' => '\TencentAds\Model\V3\DeleteFinderObjectCommentItem[]',
        'updateFinderObjectCommentFlagSpec' => '\TencentAds\Model\V3\UpdateFinderObjectCommentFlagItem[]',
        'updateAdgroupTimeSpec' => '\TencentAds\Model\V3\UpdateAdgroupTimeItem[]',
        'updateAdgroupDateSpec' => '\TencentAds\Model\V3\UpdateAdgroupDateItem[]',
        'updateAdgroupBidAmountSpec' => '\TencentAds\Model\V3\UpdateAdgroupBidAmountItem[]',
        'updateAdgroupBindRtaPolicySpec' => '\TencentAds\Model\V3\UpdateAdgroupBindRtaPolicyItem[]',
        'updateAdcreativeObjectCommentFlagSpec' => '\TencentAds\Model\V3\UpdateAdcreativeObjectCommentFlagItem[]',
        'updateDynamicCreativeConfiguredStatusSpec' => '\TencentAds\Model\V3\UpdateDynamicCreativeConfiguredStatusItem[]',
        'deleteDynamicCreativeSpec' => '\TencentAds\Model\V3\DeleteDynamicCreativeItem[]',
        'processUserPageObjectSpec' => '\TencentAds\Model\V3\ProcessUserPageObjectItem[]',
        'createScheduledUpdateAdgroupDailyBudgetSpec' => '\TencentAds\Model\V3\CreateScheduledUpdateAdgroupDailyBudgetItem[]',
        'deleteScheduledTaskSpec' => '\TencentAds\Model\V3\DeleteScheduledTaskItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'updateUnionPositionPackageSpec' => null,
        'updateExcludeUnionPositionPackageSpec' => null,
        'updateDeepConversionBehaviorBidSpec' => null,
        'deleteAdgroupSpec' => null,
        'updateAdgroupDeepConversionWorthRateSpec' => null,
        'targetingsShareSpec' => null,
        'updateAdgroupConfiguredStatusSpec' => null,
        'updateAdgroupDailyBudgetSpec' => null,
        'updateAdgroupAutoAcquisitionSpec' => null,
        'updateAdgroupDeepConversionWorthAdvancedRateSpec' => null,
        'updateDeepConversionBehaviorAdvancedBidSpec' => null,
        'replyFinderObjectCommentSpec' => null,
        'deleteFinderObjectCommentSpec' => null,
        'updateFinderObjectCommentFlagSpec' => null,
        'updateAdgroupTimeSpec' => null,
        'updateAdgroupDateSpec' => null,
        'updateAdgroupBidAmountSpec' => null,
        'updateAdgroupBindRtaPolicySpec' => null,
        'updateAdcreativeObjectCommentFlagSpec' => null,
        'updateDynamicCreativeConfiguredStatusSpec' => null,
        'deleteDynamicCreativeSpec' => null,
        'processUserPageObjectSpec' => null,
        'createScheduledUpdateAdgroupDailyBudgetSpec' => null,
        'deleteScheduledTaskSpec' => null
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
        'updateUnionPositionPackageSpec' => 'update_union_position_package_spec',
        'updateExcludeUnionPositionPackageSpec' => 'update_exclude_union_position_package_spec',
        'updateDeepConversionBehaviorBidSpec' => 'update_deep_conversion_behavior_bid_spec',
        'deleteAdgroupSpec' => 'delete_adgroup_spec',
        'updateAdgroupDeepConversionWorthRateSpec' => 'update_adgroup_deep_conversion_worth_rate_spec',
        'targetingsShareSpec' => 'targetings_share_spec',
        'updateAdgroupConfiguredStatusSpec' => 'update_adgroup_configured_status_spec',
        'updateAdgroupDailyBudgetSpec' => 'update_adgroup_daily_budget_spec',
        'updateAdgroupAutoAcquisitionSpec' => 'update_adgroup_auto_acquisition_spec',
        'updateAdgroupDeepConversionWorthAdvancedRateSpec' => 'update_adgroup_deep_conversion_worth_advanced_rate_spec',
        'updateDeepConversionBehaviorAdvancedBidSpec' => 'update_deep_conversion_behavior_advanced_bid_spec',
        'replyFinderObjectCommentSpec' => 'reply_finder_object_comment_spec',
        'deleteFinderObjectCommentSpec' => 'delete_finder_object_comment_spec',
        'updateFinderObjectCommentFlagSpec' => 'update_finder_object_comment_flag_spec',
        'updateAdgroupTimeSpec' => 'update_adgroup_time_spec',
        'updateAdgroupDateSpec' => 'update_adgroup_date_spec',
        'updateAdgroupBidAmountSpec' => 'update_adgroup_bid_amount_spec',
        'updateAdgroupBindRtaPolicySpec' => 'update_adgroup_bind_rta_policy_spec',
        'updateAdcreativeObjectCommentFlagSpec' => 'update_adcreative_object_comment_flag_spec',
        'updateDynamicCreativeConfiguredStatusSpec' => 'update_dynamic_creative_configured_status_spec',
        'deleteDynamicCreativeSpec' => 'delete_dynamic_creative_spec',
        'processUserPageObjectSpec' => 'process_user_page_object_spec',
        'createScheduledUpdateAdgroupDailyBudgetSpec' => 'create_scheduled_update_adgroup_daily_budget_spec',
        'deleteScheduledTaskSpec' => 'delete_scheduled_task_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'updateUnionPositionPackageSpec' => 'setUpdateUnionPositionPackageSpec',
        'updateExcludeUnionPositionPackageSpec' => 'setUpdateExcludeUnionPositionPackageSpec',
        'updateDeepConversionBehaviorBidSpec' => 'setUpdateDeepConversionBehaviorBidSpec',
        'deleteAdgroupSpec' => 'setDeleteAdgroupSpec',
        'updateAdgroupDeepConversionWorthRateSpec' => 'setUpdateAdgroupDeepConversionWorthRateSpec',
        'targetingsShareSpec' => 'setTargetingsShareSpec',
        'updateAdgroupConfiguredStatusSpec' => 'setUpdateAdgroupConfiguredStatusSpec',
        'updateAdgroupDailyBudgetSpec' => 'setUpdateAdgroupDailyBudgetSpec',
        'updateAdgroupAutoAcquisitionSpec' => 'setUpdateAdgroupAutoAcquisitionSpec',
        'updateAdgroupDeepConversionWorthAdvancedRateSpec' => 'setUpdateAdgroupDeepConversionWorthAdvancedRateSpec',
        'updateDeepConversionBehaviorAdvancedBidSpec' => 'setUpdateDeepConversionBehaviorAdvancedBidSpec',
        'replyFinderObjectCommentSpec' => 'setReplyFinderObjectCommentSpec',
        'deleteFinderObjectCommentSpec' => 'setDeleteFinderObjectCommentSpec',
        'updateFinderObjectCommentFlagSpec' => 'setUpdateFinderObjectCommentFlagSpec',
        'updateAdgroupTimeSpec' => 'setUpdateAdgroupTimeSpec',
        'updateAdgroupDateSpec' => 'setUpdateAdgroupDateSpec',
        'updateAdgroupBidAmountSpec' => 'setUpdateAdgroupBidAmountSpec',
        'updateAdgroupBindRtaPolicySpec' => 'setUpdateAdgroupBindRtaPolicySpec',
        'updateAdcreativeObjectCommentFlagSpec' => 'setUpdateAdcreativeObjectCommentFlagSpec',
        'updateDynamicCreativeConfiguredStatusSpec' => 'setUpdateDynamicCreativeConfiguredStatusSpec',
        'deleteDynamicCreativeSpec' => 'setDeleteDynamicCreativeSpec',
        'processUserPageObjectSpec' => 'setProcessUserPageObjectSpec',
        'createScheduledUpdateAdgroupDailyBudgetSpec' => 'setCreateScheduledUpdateAdgroupDailyBudgetSpec',
        'deleteScheduledTaskSpec' => 'setDeleteScheduledTaskSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'updateUnionPositionPackageSpec' => 'getUpdateUnionPositionPackageSpec',
        'updateExcludeUnionPositionPackageSpec' => 'getUpdateExcludeUnionPositionPackageSpec',
        'updateDeepConversionBehaviorBidSpec' => 'getUpdateDeepConversionBehaviorBidSpec',
        'deleteAdgroupSpec' => 'getDeleteAdgroupSpec',
        'updateAdgroupDeepConversionWorthRateSpec' => 'getUpdateAdgroupDeepConversionWorthRateSpec',
        'targetingsShareSpec' => 'getTargetingsShareSpec',
        'updateAdgroupConfiguredStatusSpec' => 'getUpdateAdgroupConfiguredStatusSpec',
        'updateAdgroupDailyBudgetSpec' => 'getUpdateAdgroupDailyBudgetSpec',
        'updateAdgroupAutoAcquisitionSpec' => 'getUpdateAdgroupAutoAcquisitionSpec',
        'updateAdgroupDeepConversionWorthAdvancedRateSpec' => 'getUpdateAdgroupDeepConversionWorthAdvancedRateSpec',
        'updateDeepConversionBehaviorAdvancedBidSpec' => 'getUpdateDeepConversionBehaviorAdvancedBidSpec',
        'replyFinderObjectCommentSpec' => 'getReplyFinderObjectCommentSpec',
        'deleteFinderObjectCommentSpec' => 'getDeleteFinderObjectCommentSpec',
        'updateFinderObjectCommentFlagSpec' => 'getUpdateFinderObjectCommentFlagSpec',
        'updateAdgroupTimeSpec' => 'getUpdateAdgroupTimeSpec',
        'updateAdgroupDateSpec' => 'getUpdateAdgroupDateSpec',
        'updateAdgroupBidAmountSpec' => 'getUpdateAdgroupBidAmountSpec',
        'updateAdgroupBindRtaPolicySpec' => 'getUpdateAdgroupBindRtaPolicySpec',
        'updateAdcreativeObjectCommentFlagSpec' => 'getUpdateAdcreativeObjectCommentFlagSpec',
        'updateDynamicCreativeConfiguredStatusSpec' => 'getUpdateDynamicCreativeConfiguredStatusSpec',
        'deleteDynamicCreativeSpec' => 'getDeleteDynamicCreativeSpec',
        'processUserPageObjectSpec' => 'getProcessUserPageObjectSpec',
        'createScheduledUpdateAdgroupDailyBudgetSpec' => 'getCreateScheduledUpdateAdgroupDailyBudgetSpec',
        'deleteScheduledTaskSpec' => 'getDeleteScheduledTaskSpec'
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
        $this->container['updateUnionPositionPackageSpec'] = isset($data['updateUnionPositionPackageSpec']) ? $data['updateUnionPositionPackageSpec'] : null;
        $this->container['updateExcludeUnionPositionPackageSpec'] = isset($data['updateExcludeUnionPositionPackageSpec']) ? $data['updateExcludeUnionPositionPackageSpec'] : null;
        $this->container['updateDeepConversionBehaviorBidSpec'] = isset($data['updateDeepConversionBehaviorBidSpec']) ? $data['updateDeepConversionBehaviorBidSpec'] : null;
        $this->container['deleteAdgroupSpec'] = isset($data['deleteAdgroupSpec']) ? $data['deleteAdgroupSpec'] : null;
        $this->container['updateAdgroupDeepConversionWorthRateSpec'] = isset($data['updateAdgroupDeepConversionWorthRateSpec']) ? $data['updateAdgroupDeepConversionWorthRateSpec'] : null;
        $this->container['targetingsShareSpec'] = isset($data['targetingsShareSpec']) ? $data['targetingsShareSpec'] : null;
        $this->container['updateAdgroupConfiguredStatusSpec'] = isset($data['updateAdgroupConfiguredStatusSpec']) ? $data['updateAdgroupConfiguredStatusSpec'] : null;
        $this->container['updateAdgroupDailyBudgetSpec'] = isset($data['updateAdgroupDailyBudgetSpec']) ? $data['updateAdgroupDailyBudgetSpec'] : null;
        $this->container['updateAdgroupAutoAcquisitionSpec'] = isset($data['updateAdgroupAutoAcquisitionSpec']) ? $data['updateAdgroupAutoAcquisitionSpec'] : null;
        $this->container['updateAdgroupDeepConversionWorthAdvancedRateSpec'] = isset($data['updateAdgroupDeepConversionWorthAdvancedRateSpec']) ? $data['updateAdgroupDeepConversionWorthAdvancedRateSpec'] : null;
        $this->container['updateDeepConversionBehaviorAdvancedBidSpec'] = isset($data['updateDeepConversionBehaviorAdvancedBidSpec']) ? $data['updateDeepConversionBehaviorAdvancedBidSpec'] : null;
        $this->container['replyFinderObjectCommentSpec'] = isset($data['replyFinderObjectCommentSpec']) ? $data['replyFinderObjectCommentSpec'] : null;
        $this->container['deleteFinderObjectCommentSpec'] = isset($data['deleteFinderObjectCommentSpec']) ? $data['deleteFinderObjectCommentSpec'] : null;
        $this->container['updateFinderObjectCommentFlagSpec'] = isset($data['updateFinderObjectCommentFlagSpec']) ? $data['updateFinderObjectCommentFlagSpec'] : null;
        $this->container['updateAdgroupTimeSpec'] = isset($data['updateAdgroupTimeSpec']) ? $data['updateAdgroupTimeSpec'] : null;
        $this->container['updateAdgroupDateSpec'] = isset($data['updateAdgroupDateSpec']) ? $data['updateAdgroupDateSpec'] : null;
        $this->container['updateAdgroupBidAmountSpec'] = isset($data['updateAdgroupBidAmountSpec']) ? $data['updateAdgroupBidAmountSpec'] : null;
        $this->container['updateAdgroupBindRtaPolicySpec'] = isset($data['updateAdgroupBindRtaPolicySpec']) ? $data['updateAdgroupBindRtaPolicySpec'] : null;
        $this->container['updateAdcreativeObjectCommentFlagSpec'] = isset($data['updateAdcreativeObjectCommentFlagSpec']) ? $data['updateAdcreativeObjectCommentFlagSpec'] : null;
        $this->container['updateDynamicCreativeConfiguredStatusSpec'] = isset($data['updateDynamicCreativeConfiguredStatusSpec']) ? $data['updateDynamicCreativeConfiguredStatusSpec'] : null;
        $this->container['deleteDynamicCreativeSpec'] = isset($data['deleteDynamicCreativeSpec']) ? $data['deleteDynamicCreativeSpec'] : null;
        $this->container['processUserPageObjectSpec'] = isset($data['processUserPageObjectSpec']) ? $data['processUserPageObjectSpec'] : null;
        $this->container['createScheduledUpdateAdgroupDailyBudgetSpec'] = isset($data['createScheduledUpdateAdgroupDailyBudgetSpec']) ? $data['createScheduledUpdateAdgroupDailyBudgetSpec'] : null;
        $this->container['deleteScheduledTaskSpec'] = isset($data['deleteScheduledTaskSpec']) ? $data['deleteScheduledTaskSpec'] : null;
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
     * Gets updateUnionPositionPackageSpec
     *
     * @return \TencentAds\Model\V3\UpdateUnionPositionPackageItem[]|mixed
     */
    public function getUpdateUnionPositionPackageSpec()
    {
        return $this->container['updateUnionPositionPackageSpec'];
    }

    /**
     * Sets updateUnionPositionPackageSpec
     *
     * @param \TencentAds\Model\V3\UpdateUnionPositionPackageItem[]|mixed $updateUnionPositionPackageSpec updateUnionPositionPackageSpec
     *
     * @return $this
     */
    public function setUpdateUnionPositionPackageSpec($updateUnionPositionPackageSpec)
    {
        $this->container['updateUnionPositionPackageSpec'] = $updateUnionPositionPackageSpec;

        return $this;
    }

    /**
     * Gets updateExcludeUnionPositionPackageSpec
     *
     * @return \TencentAds\Model\V3\UpdateExcludeUnionPositionPackageItem[]|mixed
     */
    public function getUpdateExcludeUnionPositionPackageSpec()
    {
        return $this->container['updateExcludeUnionPositionPackageSpec'];
    }

    /**
     * Sets updateExcludeUnionPositionPackageSpec
     *
     * @param \TencentAds\Model\V3\UpdateExcludeUnionPositionPackageItem[]|mixed $updateExcludeUnionPositionPackageSpec updateExcludeUnionPositionPackageSpec
     *
     * @return $this
     */
    public function setUpdateExcludeUnionPositionPackageSpec($updateExcludeUnionPositionPackageSpec)
    {
        $this->container['updateExcludeUnionPositionPackageSpec'] = $updateExcludeUnionPositionPackageSpec;

        return $this;
    }

    /**
     * Gets updateDeepConversionBehaviorBidSpec
     *
     * @return \TencentAds\Model\V3\UpdateDeepConversionBehaviorBidItem[]|mixed
     */
    public function getUpdateDeepConversionBehaviorBidSpec()
    {
        return $this->container['updateDeepConversionBehaviorBidSpec'];
    }

    /**
     * Sets updateDeepConversionBehaviorBidSpec
     *
     * @param \TencentAds\Model\V3\UpdateDeepConversionBehaviorBidItem[]|mixed $updateDeepConversionBehaviorBidSpec updateDeepConversionBehaviorBidSpec
     *
     * @return $this
     */
    public function setUpdateDeepConversionBehaviorBidSpec($updateDeepConversionBehaviorBidSpec)
    {
        $this->container['updateDeepConversionBehaviorBidSpec'] = $updateDeepConversionBehaviorBidSpec;

        return $this;
    }

    /**
     * Gets deleteAdgroupSpec
     *
     * @return \TencentAds\Model\V3\DeleteAdgroupItem[]|mixed
     */
    public function getDeleteAdgroupSpec()
    {
        return $this->container['deleteAdgroupSpec'];
    }

    /**
     * Sets deleteAdgroupSpec
     *
     * @param \TencentAds\Model\V3\DeleteAdgroupItem[]|mixed $deleteAdgroupSpec deleteAdgroupSpec
     *
     * @return $this
     */
    public function setDeleteAdgroupSpec($deleteAdgroupSpec)
    {
        $this->container['deleteAdgroupSpec'] = $deleteAdgroupSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupDeepConversionWorthRateSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthRateItem[]|mixed
     */
    public function getUpdateAdgroupDeepConversionWorthRateSpec()
    {
        return $this->container['updateAdgroupDeepConversionWorthRateSpec'];
    }

    /**
     * Sets updateAdgroupDeepConversionWorthRateSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthRateItem[]|mixed $updateAdgroupDeepConversionWorthRateSpec updateAdgroupDeepConversionWorthRateSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupDeepConversionWorthRateSpec($updateAdgroupDeepConversionWorthRateSpec)
    {
        $this->container['updateAdgroupDeepConversionWorthRateSpec'] = $updateAdgroupDeepConversionWorthRateSpec;

        return $this;
    }

    /**
     * Gets targetingsShareSpec
     *
     * @return \TencentAds\Model\V3\TargetingsShareItem[]|mixed
     */
    public function getTargetingsShareSpec()
    {
        return $this->container['targetingsShareSpec'];
    }

    /**
     * Sets targetingsShareSpec
     *
     * @param \TencentAds\Model\V3\TargetingsShareItem[]|mixed $targetingsShareSpec targetingsShareSpec
     *
     * @return $this
     */
    public function setTargetingsShareSpec($targetingsShareSpec)
    {
        $this->container['targetingsShareSpec'] = $targetingsShareSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupConfiguredStatusSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupConfiguredStatusItem[]|mixed
     */
    public function getUpdateAdgroupConfiguredStatusSpec()
    {
        return $this->container['updateAdgroupConfiguredStatusSpec'];
    }

    /**
     * Sets updateAdgroupConfiguredStatusSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupConfiguredStatusItem[]|mixed $updateAdgroupConfiguredStatusSpec updateAdgroupConfiguredStatusSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupConfiguredStatusSpec($updateAdgroupConfiguredStatusSpec)
    {
        $this->container['updateAdgroupConfiguredStatusSpec'] = $updateAdgroupConfiguredStatusSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupDailyBudgetSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupDailyBudgetItem[]|mixed
     */
    public function getUpdateAdgroupDailyBudgetSpec()
    {
        return $this->container['updateAdgroupDailyBudgetSpec'];
    }

    /**
     * Sets updateAdgroupDailyBudgetSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupDailyBudgetItem[]|mixed $updateAdgroupDailyBudgetSpec updateAdgroupDailyBudgetSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupDailyBudgetSpec($updateAdgroupDailyBudgetSpec)
    {
        $this->container['updateAdgroupDailyBudgetSpec'] = $updateAdgroupDailyBudgetSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupAutoAcquisitionSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupAutoAcquisitionItem[]|mixed
     */
    public function getUpdateAdgroupAutoAcquisitionSpec()
    {
        return $this->container['updateAdgroupAutoAcquisitionSpec'];
    }

    /**
     * Sets updateAdgroupAutoAcquisitionSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupAutoAcquisitionItem[]|mixed $updateAdgroupAutoAcquisitionSpec updateAdgroupAutoAcquisitionSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupAutoAcquisitionSpec($updateAdgroupAutoAcquisitionSpec)
    {
        $this->container['updateAdgroupAutoAcquisitionSpec'] = $updateAdgroupAutoAcquisitionSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupDeepConversionWorthAdvancedRateSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthAdvancedRateItem[]|mixed
     */
    public function getUpdateAdgroupDeepConversionWorthAdvancedRateSpec()
    {
        return $this->container['updateAdgroupDeepConversionWorthAdvancedRateSpec'];
    }

    /**
     * Sets updateAdgroupDeepConversionWorthAdvancedRateSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupDeepConversionWorthAdvancedRateItem[]|mixed $updateAdgroupDeepConversionWorthAdvancedRateSpec updateAdgroupDeepConversionWorthAdvancedRateSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupDeepConversionWorthAdvancedRateSpec($updateAdgroupDeepConversionWorthAdvancedRateSpec)
    {
        $this->container['updateAdgroupDeepConversionWorthAdvancedRateSpec'] = $updateAdgroupDeepConversionWorthAdvancedRateSpec;

        return $this;
    }

    /**
     * Gets updateDeepConversionBehaviorAdvancedBidSpec
     *
     * @return \TencentAds\Model\V3\UpdateDeepConversionBehaviorAdvancedBidItem[]|mixed
     */
    public function getUpdateDeepConversionBehaviorAdvancedBidSpec()
    {
        return $this->container['updateDeepConversionBehaviorAdvancedBidSpec'];
    }

    /**
     * Sets updateDeepConversionBehaviorAdvancedBidSpec
     *
     * @param \TencentAds\Model\V3\UpdateDeepConversionBehaviorAdvancedBidItem[]|mixed $updateDeepConversionBehaviorAdvancedBidSpec updateDeepConversionBehaviorAdvancedBidSpec
     *
     * @return $this
     */
    public function setUpdateDeepConversionBehaviorAdvancedBidSpec($updateDeepConversionBehaviorAdvancedBidSpec)
    {
        $this->container['updateDeepConversionBehaviorAdvancedBidSpec'] = $updateDeepConversionBehaviorAdvancedBidSpec;

        return $this;
    }

    /**
     * Gets replyFinderObjectCommentSpec
     *
     * @return \TencentAds\Model\V3\ReplyFinderObjectCommentItem[]|mixed
     */
    public function getReplyFinderObjectCommentSpec()
    {
        return $this->container['replyFinderObjectCommentSpec'];
    }

    /**
     * Sets replyFinderObjectCommentSpec
     *
     * @param \TencentAds\Model\V3\ReplyFinderObjectCommentItem[]|mixed $replyFinderObjectCommentSpec replyFinderObjectCommentSpec
     *
     * @return $this
     */
    public function setReplyFinderObjectCommentSpec($replyFinderObjectCommentSpec)
    {
        $this->container['replyFinderObjectCommentSpec'] = $replyFinderObjectCommentSpec;

        return $this;
    }

    /**
     * Gets deleteFinderObjectCommentSpec
     *
     * @return \TencentAds\Model\V3\DeleteFinderObjectCommentItem[]|mixed
     */
    public function getDeleteFinderObjectCommentSpec()
    {
        return $this->container['deleteFinderObjectCommentSpec'];
    }

    /**
     * Sets deleteFinderObjectCommentSpec
     *
     * @param \TencentAds\Model\V3\DeleteFinderObjectCommentItem[]|mixed $deleteFinderObjectCommentSpec deleteFinderObjectCommentSpec
     *
     * @return $this
     */
    public function setDeleteFinderObjectCommentSpec($deleteFinderObjectCommentSpec)
    {
        $this->container['deleteFinderObjectCommentSpec'] = $deleteFinderObjectCommentSpec;

        return $this;
    }

    /**
     * Gets updateFinderObjectCommentFlagSpec
     *
     * @return \TencentAds\Model\V3\UpdateFinderObjectCommentFlagItem[]|mixed
     */
    public function getUpdateFinderObjectCommentFlagSpec()
    {
        return $this->container['updateFinderObjectCommentFlagSpec'];
    }

    /**
     * Sets updateFinderObjectCommentFlagSpec
     *
     * @param \TencentAds\Model\V3\UpdateFinderObjectCommentFlagItem[]|mixed $updateFinderObjectCommentFlagSpec updateFinderObjectCommentFlagSpec
     *
     * @return $this
     */
    public function setUpdateFinderObjectCommentFlagSpec($updateFinderObjectCommentFlagSpec)
    {
        $this->container['updateFinderObjectCommentFlagSpec'] = $updateFinderObjectCommentFlagSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupTimeSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupTimeItem[]|mixed
     */
    public function getUpdateAdgroupTimeSpec()
    {
        return $this->container['updateAdgroupTimeSpec'];
    }

    /**
     * Sets updateAdgroupTimeSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupTimeItem[]|mixed $updateAdgroupTimeSpec updateAdgroupTimeSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupTimeSpec($updateAdgroupTimeSpec)
    {
        $this->container['updateAdgroupTimeSpec'] = $updateAdgroupTimeSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupDateSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupDateItem[]|mixed
     */
    public function getUpdateAdgroupDateSpec()
    {
        return $this->container['updateAdgroupDateSpec'];
    }

    /**
     * Sets updateAdgroupDateSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupDateItem[]|mixed $updateAdgroupDateSpec updateAdgroupDateSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupDateSpec($updateAdgroupDateSpec)
    {
        $this->container['updateAdgroupDateSpec'] = $updateAdgroupDateSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupBidAmountSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupBidAmountItem[]|mixed
     */
    public function getUpdateAdgroupBidAmountSpec()
    {
        return $this->container['updateAdgroupBidAmountSpec'];
    }

    /**
     * Sets updateAdgroupBidAmountSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupBidAmountItem[]|mixed $updateAdgroupBidAmountSpec updateAdgroupBidAmountSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupBidAmountSpec($updateAdgroupBidAmountSpec)
    {
        $this->container['updateAdgroupBidAmountSpec'] = $updateAdgroupBidAmountSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupBindRtaPolicySpec
     *
     * @return \TencentAds\Model\V3\UpdateAdgroupBindRtaPolicyItem[]|mixed
     */
    public function getUpdateAdgroupBindRtaPolicySpec()
    {
        return $this->container['updateAdgroupBindRtaPolicySpec'];
    }

    /**
     * Sets updateAdgroupBindRtaPolicySpec
     *
     * @param \TencentAds\Model\V3\UpdateAdgroupBindRtaPolicyItem[]|mixed $updateAdgroupBindRtaPolicySpec updateAdgroupBindRtaPolicySpec
     *
     * @return $this
     */
    public function setUpdateAdgroupBindRtaPolicySpec($updateAdgroupBindRtaPolicySpec)
    {
        $this->container['updateAdgroupBindRtaPolicySpec'] = $updateAdgroupBindRtaPolicySpec;

        return $this;
    }

    /**
     * Gets updateAdcreativeObjectCommentFlagSpec
     *
     * @return \TencentAds\Model\V3\UpdateAdcreativeObjectCommentFlagItem[]|mixed
     */
    public function getUpdateAdcreativeObjectCommentFlagSpec()
    {
        return $this->container['updateAdcreativeObjectCommentFlagSpec'];
    }

    /**
     * Sets updateAdcreativeObjectCommentFlagSpec
     *
     * @param \TencentAds\Model\V3\UpdateAdcreativeObjectCommentFlagItem[]|mixed $updateAdcreativeObjectCommentFlagSpec updateAdcreativeObjectCommentFlagSpec
     *
     * @return $this
     */
    public function setUpdateAdcreativeObjectCommentFlagSpec($updateAdcreativeObjectCommentFlagSpec)
    {
        $this->container['updateAdcreativeObjectCommentFlagSpec'] = $updateAdcreativeObjectCommentFlagSpec;

        return $this;
    }

    /**
     * Gets updateDynamicCreativeConfiguredStatusSpec
     *
     * @return \TencentAds\Model\V3\UpdateDynamicCreativeConfiguredStatusItem[]|mixed
     */
    public function getUpdateDynamicCreativeConfiguredStatusSpec()
    {
        return $this->container['updateDynamicCreativeConfiguredStatusSpec'];
    }

    /**
     * Sets updateDynamicCreativeConfiguredStatusSpec
     *
     * @param \TencentAds\Model\V3\UpdateDynamicCreativeConfiguredStatusItem[]|mixed $updateDynamicCreativeConfiguredStatusSpec updateDynamicCreativeConfiguredStatusSpec
     *
     * @return $this
     */
    public function setUpdateDynamicCreativeConfiguredStatusSpec($updateDynamicCreativeConfiguredStatusSpec)
    {
        $this->container['updateDynamicCreativeConfiguredStatusSpec'] = $updateDynamicCreativeConfiguredStatusSpec;

        return $this;
    }

    /**
     * Gets deleteDynamicCreativeSpec
     *
     * @return \TencentAds\Model\V3\DeleteDynamicCreativeItem[]|mixed
     */
    public function getDeleteDynamicCreativeSpec()
    {
        return $this->container['deleteDynamicCreativeSpec'];
    }

    /**
     * Sets deleteDynamicCreativeSpec
     *
     * @param \TencentAds\Model\V3\DeleteDynamicCreativeItem[]|mixed $deleteDynamicCreativeSpec deleteDynamicCreativeSpec
     *
     * @return $this
     */
    public function setDeleteDynamicCreativeSpec($deleteDynamicCreativeSpec)
    {
        $this->container['deleteDynamicCreativeSpec'] = $deleteDynamicCreativeSpec;

        return $this;
    }

    /**
     * Gets processUserPageObjectSpec
     *
     * @return \TencentAds\Model\V3\ProcessUserPageObjectItem[]|mixed
     */
    public function getProcessUserPageObjectSpec()
    {
        return $this->container['processUserPageObjectSpec'];
    }

    /**
     * Sets processUserPageObjectSpec
     *
     * @param \TencentAds\Model\V3\ProcessUserPageObjectItem[]|mixed $processUserPageObjectSpec processUserPageObjectSpec
     *
     * @return $this
     */
    public function setProcessUserPageObjectSpec($processUserPageObjectSpec)
    {
        $this->container['processUserPageObjectSpec'] = $processUserPageObjectSpec;

        return $this;
    }

    /**
     * Gets createScheduledUpdateAdgroupDailyBudgetSpec
     *
     * @return \TencentAds\Model\V3\CreateScheduledUpdateAdgroupDailyBudgetItem[]|mixed
     */
    public function getCreateScheduledUpdateAdgroupDailyBudgetSpec()
    {
        return $this->container['createScheduledUpdateAdgroupDailyBudgetSpec'];
    }

    /**
     * Sets createScheduledUpdateAdgroupDailyBudgetSpec
     *
     * @param \TencentAds\Model\V3\CreateScheduledUpdateAdgroupDailyBudgetItem[]|mixed $createScheduledUpdateAdgroupDailyBudgetSpec createScheduledUpdateAdgroupDailyBudgetSpec
     *
     * @return $this
     */
    public function setCreateScheduledUpdateAdgroupDailyBudgetSpec($createScheduledUpdateAdgroupDailyBudgetSpec)
    {
        $this->container['createScheduledUpdateAdgroupDailyBudgetSpec'] = $createScheduledUpdateAdgroupDailyBudgetSpec;

        return $this;
    }

    /**
     * Gets deleteScheduledTaskSpec
     *
     * @return \TencentAds\Model\V3\DeleteScheduledTaskItem[]|mixed
     */
    public function getDeleteScheduledTaskSpec()
    {
        return $this->container['deleteScheduledTaskSpec'];
    }

    /**
     * Sets deleteScheduledTaskSpec
     *
     * @param \TencentAds\Model\V3\DeleteScheduledTaskItem[]|mixed $deleteScheduledTaskSpec deleteScheduledTaskSpec
     *
     * @return $this
     */
    public function setDeleteScheduledTaskSpec($deleteScheduledTaskSpec)
    {
        $this->container['deleteScheduledTaskSpec'] = $deleteScheduledTaskSpec;

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


