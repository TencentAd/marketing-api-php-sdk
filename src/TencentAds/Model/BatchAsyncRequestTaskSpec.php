<?php
/**
 * BatchAsyncRequestTaskSpec
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
 * BatchAsyncRequestTaskSpec Class Doc Comment
 *
 * @category Class
 * @description 任务所需条件
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchAsyncRequestTaskSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'batch_async_request_task_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'updateUnionPositionPackageSpec' => '\TencentAds\Model\UpdateUnionPositionPackageItem[]',
        'updateExcludeUnionPositionPackageSpec' => '\TencentAds\Model\UpdateExcludeUnionPositionPackageItem[]',
        'updateTargetingIdSpec' => '\TencentAds\Model\UpdateTargetingIdItem[]',
        'updateBidStrategySpec' => '\TencentAds\Model\UpdateBidStrategyItem[]',
        'updateDeepConversionBehaviorBidSpec' => '\TencentAds\Model\UpdateDeepConversionBehaviorBidItem[]',
        'updateAdgroupAppAndroidChannelPackageIdSpec' => '\TencentAds\Model\UpdateAdgroupAppAndroidChannelPackageIdItem[]',
        'updateCampaignSpeedModeSpec' => '\TencentAds\Model\UpdateCampaignSpeedModeItem[]',
        'deleteCampaignSpec' => '\TencentAds\Model\DeleteCampaignItem[]',
        'deleteAdgroupSpec' => '\TencentAds\Model\DeleteAdgroupItem[]',
        'deleteAdSpec' => '\TencentAds\Model\DeleteAdItem[]',
        'updateAdgroupDeepConversionWorthRateSpec' => '\TencentAds\Model\UpdateAdgroupDeepConversionWorthRateItem[]',
        'updateAdcreativeDeepLinkUrlSpec' => '\TencentAds\Model\UpdateAdcreativeDeepLinkUrlItem[]',
        'targetingsShareSpec' => '\TencentAds\Model\TargetingsShareItem[]',
        'updateCampaignConfiguredStatusSpec' => '\TencentAds\Model\UpdateCampaignConfiguredStatusItem[]',
        'updateCampaignDailyBudgetSpec' => '\TencentAds\Model\UpdateCampaignDailyBudgetItem[]',
        'updateAdgroupConfiguredStatusSpec' => '\TencentAds\Model\UpdateAdgroupConfiguredStatusItem[]',
        'updateAdgroupDailyBudgetSpec' => '\TencentAds\Model\UpdateAdgroupDailyBudgetItem[]',
        'updateAdConfiguredStatusSpec' => '\TencentAds\Model\UpdateAdConfiguredStatusItem[]',
        'updateAdgroupAutoAcquisitionSpec' => '\TencentAds\Model\UpdateAdgroupAutoAcquisitionItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'updateUnionPositionPackageSpec' => null,
        'updateExcludeUnionPositionPackageSpec' => null,
        'updateTargetingIdSpec' => null,
        'updateBidStrategySpec' => null,
        'updateDeepConversionBehaviorBidSpec' => null,
        'updateAdgroupAppAndroidChannelPackageIdSpec' => null,
        'updateCampaignSpeedModeSpec' => null,
        'deleteCampaignSpec' => null,
        'deleteAdgroupSpec' => null,
        'deleteAdSpec' => null,
        'updateAdgroupDeepConversionWorthRateSpec' => null,
        'updateAdcreativeDeepLinkUrlSpec' => null,
        'targetingsShareSpec' => null,
        'updateCampaignConfiguredStatusSpec' => null,
        'updateCampaignDailyBudgetSpec' => null,
        'updateAdgroupConfiguredStatusSpec' => null,
        'updateAdgroupDailyBudgetSpec' => null,
        'updateAdConfiguredStatusSpec' => null,
        'updateAdgroupAutoAcquisitionSpec' => null
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
        'updateTargetingIdSpec' => 'update_targeting_id_spec',
        'updateBidStrategySpec' => 'update_bid_strategy_spec',
        'updateDeepConversionBehaviorBidSpec' => 'update_deep_conversion_behavior_bid_spec',
        'updateAdgroupAppAndroidChannelPackageIdSpec' => 'update_adgroup_app_android_channel_package_id_spec',
        'updateCampaignSpeedModeSpec' => 'update_campaign_speed_mode_spec',
        'deleteCampaignSpec' => 'delete_campaign_spec',
        'deleteAdgroupSpec' => 'delete_adgroup_spec',
        'deleteAdSpec' => 'delete_ad_spec',
        'updateAdgroupDeepConversionWorthRateSpec' => 'update_adgroup_deep_conversion_worth_rate_spec',
        'updateAdcreativeDeepLinkUrlSpec' => 'update_adcreative_deep_link_url_spec',
        'targetingsShareSpec' => 'targetings_share_spec',
        'updateCampaignConfiguredStatusSpec' => 'update_campaign_configured_status_spec',
        'updateCampaignDailyBudgetSpec' => 'update_campaign_daily_budget_spec',
        'updateAdgroupConfiguredStatusSpec' => 'update_adgroup_configured_status_spec',
        'updateAdgroupDailyBudgetSpec' => 'update_adgroup_daily_budget_spec',
        'updateAdConfiguredStatusSpec' => 'update_ad_configured_status_spec',
        'updateAdgroupAutoAcquisitionSpec' => 'update_adgroup_auto_acquisition_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'updateUnionPositionPackageSpec' => 'setUpdateUnionPositionPackageSpec',
        'updateExcludeUnionPositionPackageSpec' => 'setUpdateExcludeUnionPositionPackageSpec',
        'updateTargetingIdSpec' => 'setUpdateTargetingIdSpec',
        'updateBidStrategySpec' => 'setUpdateBidStrategySpec',
        'updateDeepConversionBehaviorBidSpec' => 'setUpdateDeepConversionBehaviorBidSpec',
        'updateAdgroupAppAndroidChannelPackageIdSpec' => 'setUpdateAdgroupAppAndroidChannelPackageIdSpec',
        'updateCampaignSpeedModeSpec' => 'setUpdateCampaignSpeedModeSpec',
        'deleteCampaignSpec' => 'setDeleteCampaignSpec',
        'deleteAdgroupSpec' => 'setDeleteAdgroupSpec',
        'deleteAdSpec' => 'setDeleteAdSpec',
        'updateAdgroupDeepConversionWorthRateSpec' => 'setUpdateAdgroupDeepConversionWorthRateSpec',
        'updateAdcreativeDeepLinkUrlSpec' => 'setUpdateAdcreativeDeepLinkUrlSpec',
        'targetingsShareSpec' => 'setTargetingsShareSpec',
        'updateCampaignConfiguredStatusSpec' => 'setUpdateCampaignConfiguredStatusSpec',
        'updateCampaignDailyBudgetSpec' => 'setUpdateCampaignDailyBudgetSpec',
        'updateAdgroupConfiguredStatusSpec' => 'setUpdateAdgroupConfiguredStatusSpec',
        'updateAdgroupDailyBudgetSpec' => 'setUpdateAdgroupDailyBudgetSpec',
        'updateAdConfiguredStatusSpec' => 'setUpdateAdConfiguredStatusSpec',
        'updateAdgroupAutoAcquisitionSpec' => 'setUpdateAdgroupAutoAcquisitionSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'updateUnionPositionPackageSpec' => 'getUpdateUnionPositionPackageSpec',
        'updateExcludeUnionPositionPackageSpec' => 'getUpdateExcludeUnionPositionPackageSpec',
        'updateTargetingIdSpec' => 'getUpdateTargetingIdSpec',
        'updateBidStrategySpec' => 'getUpdateBidStrategySpec',
        'updateDeepConversionBehaviorBidSpec' => 'getUpdateDeepConversionBehaviorBidSpec',
        'updateAdgroupAppAndroidChannelPackageIdSpec' => 'getUpdateAdgroupAppAndroidChannelPackageIdSpec',
        'updateCampaignSpeedModeSpec' => 'getUpdateCampaignSpeedModeSpec',
        'deleteCampaignSpec' => 'getDeleteCampaignSpec',
        'deleteAdgroupSpec' => 'getDeleteAdgroupSpec',
        'deleteAdSpec' => 'getDeleteAdSpec',
        'updateAdgroupDeepConversionWorthRateSpec' => 'getUpdateAdgroupDeepConversionWorthRateSpec',
        'updateAdcreativeDeepLinkUrlSpec' => 'getUpdateAdcreativeDeepLinkUrlSpec',
        'targetingsShareSpec' => 'getTargetingsShareSpec',
        'updateCampaignConfiguredStatusSpec' => 'getUpdateCampaignConfiguredStatusSpec',
        'updateCampaignDailyBudgetSpec' => 'getUpdateCampaignDailyBudgetSpec',
        'updateAdgroupConfiguredStatusSpec' => 'getUpdateAdgroupConfiguredStatusSpec',
        'updateAdgroupDailyBudgetSpec' => 'getUpdateAdgroupDailyBudgetSpec',
        'updateAdConfiguredStatusSpec' => 'getUpdateAdConfiguredStatusSpec',
        'updateAdgroupAutoAcquisitionSpec' => 'getUpdateAdgroupAutoAcquisitionSpec'
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
        $this->container['updateTargetingIdSpec'] = isset($data['updateTargetingIdSpec']) ? $data['updateTargetingIdSpec'] : null;
        $this->container['updateBidStrategySpec'] = isset($data['updateBidStrategySpec']) ? $data['updateBidStrategySpec'] : null;
        $this->container['updateDeepConversionBehaviorBidSpec'] = isset($data['updateDeepConversionBehaviorBidSpec']) ? $data['updateDeepConversionBehaviorBidSpec'] : null;
        $this->container['updateAdgroupAppAndroidChannelPackageIdSpec'] = isset($data['updateAdgroupAppAndroidChannelPackageIdSpec']) ? $data['updateAdgroupAppAndroidChannelPackageIdSpec'] : null;
        $this->container['updateCampaignSpeedModeSpec'] = isset($data['updateCampaignSpeedModeSpec']) ? $data['updateCampaignSpeedModeSpec'] : null;
        $this->container['deleteCampaignSpec'] = isset($data['deleteCampaignSpec']) ? $data['deleteCampaignSpec'] : null;
        $this->container['deleteAdgroupSpec'] = isset($data['deleteAdgroupSpec']) ? $data['deleteAdgroupSpec'] : null;
        $this->container['deleteAdSpec'] = isset($data['deleteAdSpec']) ? $data['deleteAdSpec'] : null;
        $this->container['updateAdgroupDeepConversionWorthRateSpec'] = isset($data['updateAdgroupDeepConversionWorthRateSpec']) ? $data['updateAdgroupDeepConversionWorthRateSpec'] : null;
        $this->container['updateAdcreativeDeepLinkUrlSpec'] = isset($data['updateAdcreativeDeepLinkUrlSpec']) ? $data['updateAdcreativeDeepLinkUrlSpec'] : null;
        $this->container['targetingsShareSpec'] = isset($data['targetingsShareSpec']) ? $data['targetingsShareSpec'] : null;
        $this->container['updateCampaignConfiguredStatusSpec'] = isset($data['updateCampaignConfiguredStatusSpec']) ? $data['updateCampaignConfiguredStatusSpec'] : null;
        $this->container['updateCampaignDailyBudgetSpec'] = isset($data['updateCampaignDailyBudgetSpec']) ? $data['updateCampaignDailyBudgetSpec'] : null;
        $this->container['updateAdgroupConfiguredStatusSpec'] = isset($data['updateAdgroupConfiguredStatusSpec']) ? $data['updateAdgroupConfiguredStatusSpec'] : null;
        $this->container['updateAdgroupDailyBudgetSpec'] = isset($data['updateAdgroupDailyBudgetSpec']) ? $data['updateAdgroupDailyBudgetSpec'] : null;
        $this->container['updateAdConfiguredStatusSpec'] = isset($data['updateAdConfiguredStatusSpec']) ? $data['updateAdConfiguredStatusSpec'] : null;
        $this->container['updateAdgroupAutoAcquisitionSpec'] = isset($data['updateAdgroupAutoAcquisitionSpec']) ? $data['updateAdgroupAutoAcquisitionSpec'] : null;
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
     * @return \TencentAds\Model\UpdateUnionPositionPackageItem[]
     */
    public function getUpdateUnionPositionPackageSpec()
    {
        return $this->container['updateUnionPositionPackageSpec'];
    }

    /**
     * Sets updateUnionPositionPackageSpec
     *
     * @param \TencentAds\Model\UpdateUnionPositionPackageItem[] $updateUnionPositionPackageSpec updateUnionPositionPackageSpec
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
     * @return \TencentAds\Model\UpdateExcludeUnionPositionPackageItem[]
     */
    public function getUpdateExcludeUnionPositionPackageSpec()
    {
        return $this->container['updateExcludeUnionPositionPackageSpec'];
    }

    /**
     * Sets updateExcludeUnionPositionPackageSpec
     *
     * @param \TencentAds\Model\UpdateExcludeUnionPositionPackageItem[] $updateExcludeUnionPositionPackageSpec updateExcludeUnionPositionPackageSpec
     *
     * @return $this
     */
    public function setUpdateExcludeUnionPositionPackageSpec($updateExcludeUnionPositionPackageSpec)
    {
        $this->container['updateExcludeUnionPositionPackageSpec'] = $updateExcludeUnionPositionPackageSpec;

        return $this;
    }

    /**
     * Gets updateTargetingIdSpec
     *
     * @return \TencentAds\Model\UpdateTargetingIdItem[]
     */
    public function getUpdateTargetingIdSpec()
    {
        return $this->container['updateTargetingIdSpec'];
    }

    /**
     * Sets updateTargetingIdSpec
     *
     * @param \TencentAds\Model\UpdateTargetingIdItem[] $updateTargetingIdSpec updateTargetingIdSpec
     *
     * @return $this
     */
    public function setUpdateTargetingIdSpec($updateTargetingIdSpec)
    {
        $this->container['updateTargetingIdSpec'] = $updateTargetingIdSpec;

        return $this;
    }

    /**
     * Gets updateBidStrategySpec
     *
     * @return \TencentAds\Model\UpdateBidStrategyItem[]
     */
    public function getUpdateBidStrategySpec()
    {
        return $this->container['updateBidStrategySpec'];
    }

    /**
     * Sets updateBidStrategySpec
     *
     * @param \TencentAds\Model\UpdateBidStrategyItem[] $updateBidStrategySpec updateBidStrategySpec
     *
     * @return $this
     */
    public function setUpdateBidStrategySpec($updateBidStrategySpec)
    {
        $this->container['updateBidStrategySpec'] = $updateBidStrategySpec;

        return $this;
    }

    /**
     * Gets updateDeepConversionBehaviorBidSpec
     *
     * @return \TencentAds\Model\UpdateDeepConversionBehaviorBidItem[]
     */
    public function getUpdateDeepConversionBehaviorBidSpec()
    {
        return $this->container['updateDeepConversionBehaviorBidSpec'];
    }

    /**
     * Sets updateDeepConversionBehaviorBidSpec
     *
     * @param \TencentAds\Model\UpdateDeepConversionBehaviorBidItem[] $updateDeepConversionBehaviorBidSpec updateDeepConversionBehaviorBidSpec
     *
     * @return $this
     */
    public function setUpdateDeepConversionBehaviorBidSpec($updateDeepConversionBehaviorBidSpec)
    {
        $this->container['updateDeepConversionBehaviorBidSpec'] = $updateDeepConversionBehaviorBidSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupAppAndroidChannelPackageIdSpec
     *
     * @return \TencentAds\Model\UpdateAdgroupAppAndroidChannelPackageIdItem[]
     */
    public function getUpdateAdgroupAppAndroidChannelPackageIdSpec()
    {
        return $this->container['updateAdgroupAppAndroidChannelPackageIdSpec'];
    }

    /**
     * Sets updateAdgroupAppAndroidChannelPackageIdSpec
     *
     * @param \TencentAds\Model\UpdateAdgroupAppAndroidChannelPackageIdItem[] $updateAdgroupAppAndroidChannelPackageIdSpec updateAdgroupAppAndroidChannelPackageIdSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupAppAndroidChannelPackageIdSpec($updateAdgroupAppAndroidChannelPackageIdSpec)
    {
        $this->container['updateAdgroupAppAndroidChannelPackageIdSpec'] = $updateAdgroupAppAndroidChannelPackageIdSpec;

        return $this;
    }

    /**
     * Gets updateCampaignSpeedModeSpec
     *
     * @return \TencentAds\Model\UpdateCampaignSpeedModeItem[]
     */
    public function getUpdateCampaignSpeedModeSpec()
    {
        return $this->container['updateCampaignSpeedModeSpec'];
    }

    /**
     * Sets updateCampaignSpeedModeSpec
     *
     * @param \TencentAds\Model\UpdateCampaignSpeedModeItem[] $updateCampaignSpeedModeSpec updateCampaignSpeedModeSpec
     *
     * @return $this
     */
    public function setUpdateCampaignSpeedModeSpec($updateCampaignSpeedModeSpec)
    {
        $this->container['updateCampaignSpeedModeSpec'] = $updateCampaignSpeedModeSpec;

        return $this;
    }

    /**
     * Gets deleteCampaignSpec
     *
     * @return \TencentAds\Model\DeleteCampaignItem[]
     */
    public function getDeleteCampaignSpec()
    {
        return $this->container['deleteCampaignSpec'];
    }

    /**
     * Sets deleteCampaignSpec
     *
     * @param \TencentAds\Model\DeleteCampaignItem[] $deleteCampaignSpec deleteCampaignSpec
     *
     * @return $this
     */
    public function setDeleteCampaignSpec($deleteCampaignSpec)
    {
        $this->container['deleteCampaignSpec'] = $deleteCampaignSpec;

        return $this;
    }

    /**
     * Gets deleteAdgroupSpec
     *
     * @return \TencentAds\Model\DeleteAdgroupItem[]
     */
    public function getDeleteAdgroupSpec()
    {
        return $this->container['deleteAdgroupSpec'];
    }

    /**
     * Sets deleteAdgroupSpec
     *
     * @param \TencentAds\Model\DeleteAdgroupItem[] $deleteAdgroupSpec deleteAdgroupSpec
     *
     * @return $this
     */
    public function setDeleteAdgroupSpec($deleteAdgroupSpec)
    {
        $this->container['deleteAdgroupSpec'] = $deleteAdgroupSpec;

        return $this;
    }

    /**
     * Gets deleteAdSpec
     *
     * @return \TencentAds\Model\DeleteAdItem[]
     */
    public function getDeleteAdSpec()
    {
        return $this->container['deleteAdSpec'];
    }

    /**
     * Sets deleteAdSpec
     *
     * @param \TencentAds\Model\DeleteAdItem[] $deleteAdSpec deleteAdSpec
     *
     * @return $this
     */
    public function setDeleteAdSpec($deleteAdSpec)
    {
        $this->container['deleteAdSpec'] = $deleteAdSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupDeepConversionWorthRateSpec
     *
     * @return \TencentAds\Model\UpdateAdgroupDeepConversionWorthRateItem[]
     */
    public function getUpdateAdgroupDeepConversionWorthRateSpec()
    {
        return $this->container['updateAdgroupDeepConversionWorthRateSpec'];
    }

    /**
     * Sets updateAdgroupDeepConversionWorthRateSpec
     *
     * @param \TencentAds\Model\UpdateAdgroupDeepConversionWorthRateItem[] $updateAdgroupDeepConversionWorthRateSpec updateAdgroupDeepConversionWorthRateSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupDeepConversionWorthRateSpec($updateAdgroupDeepConversionWorthRateSpec)
    {
        $this->container['updateAdgroupDeepConversionWorthRateSpec'] = $updateAdgroupDeepConversionWorthRateSpec;

        return $this;
    }

    /**
     * Gets updateAdcreativeDeepLinkUrlSpec
     *
     * @return \TencentAds\Model\UpdateAdcreativeDeepLinkUrlItem[]
     */
    public function getUpdateAdcreativeDeepLinkUrlSpec()
    {
        return $this->container['updateAdcreativeDeepLinkUrlSpec'];
    }

    /**
     * Sets updateAdcreativeDeepLinkUrlSpec
     *
     * @param \TencentAds\Model\UpdateAdcreativeDeepLinkUrlItem[] $updateAdcreativeDeepLinkUrlSpec updateAdcreativeDeepLinkUrlSpec
     *
     * @return $this
     */
    public function setUpdateAdcreativeDeepLinkUrlSpec($updateAdcreativeDeepLinkUrlSpec)
    {
        $this->container['updateAdcreativeDeepLinkUrlSpec'] = $updateAdcreativeDeepLinkUrlSpec;

        return $this;
    }

    /**
     * Gets targetingsShareSpec
     *
     * @return \TencentAds\Model\TargetingsShareItem[]
     */
    public function getTargetingsShareSpec()
    {
        return $this->container['targetingsShareSpec'];
    }

    /**
     * Sets targetingsShareSpec
     *
     * @param \TencentAds\Model\TargetingsShareItem[] $targetingsShareSpec targetingsShareSpec
     *
     * @return $this
     */
    public function setTargetingsShareSpec($targetingsShareSpec)
    {
        $this->container['targetingsShareSpec'] = $targetingsShareSpec;

        return $this;
    }

    /**
     * Gets updateCampaignConfiguredStatusSpec
     *
     * @return \TencentAds\Model\UpdateCampaignConfiguredStatusItem[]
     */
    public function getUpdateCampaignConfiguredStatusSpec()
    {
        return $this->container['updateCampaignConfiguredStatusSpec'];
    }

    /**
     * Sets updateCampaignConfiguredStatusSpec
     *
     * @param \TencentAds\Model\UpdateCampaignConfiguredStatusItem[] $updateCampaignConfiguredStatusSpec updateCampaignConfiguredStatusSpec
     *
     * @return $this
     */
    public function setUpdateCampaignConfiguredStatusSpec($updateCampaignConfiguredStatusSpec)
    {
        $this->container['updateCampaignConfiguredStatusSpec'] = $updateCampaignConfiguredStatusSpec;

        return $this;
    }

    /**
     * Gets updateCampaignDailyBudgetSpec
     *
     * @return \TencentAds\Model\UpdateCampaignDailyBudgetItem[]
     */
    public function getUpdateCampaignDailyBudgetSpec()
    {
        return $this->container['updateCampaignDailyBudgetSpec'];
    }

    /**
     * Sets updateCampaignDailyBudgetSpec
     *
     * @param \TencentAds\Model\UpdateCampaignDailyBudgetItem[] $updateCampaignDailyBudgetSpec updateCampaignDailyBudgetSpec
     *
     * @return $this
     */
    public function setUpdateCampaignDailyBudgetSpec($updateCampaignDailyBudgetSpec)
    {
        $this->container['updateCampaignDailyBudgetSpec'] = $updateCampaignDailyBudgetSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupConfiguredStatusSpec
     *
     * @return \TencentAds\Model\UpdateAdgroupConfiguredStatusItem[]
     */
    public function getUpdateAdgroupConfiguredStatusSpec()
    {
        return $this->container['updateAdgroupConfiguredStatusSpec'];
    }

    /**
     * Sets updateAdgroupConfiguredStatusSpec
     *
     * @param \TencentAds\Model\UpdateAdgroupConfiguredStatusItem[] $updateAdgroupConfiguredStatusSpec updateAdgroupConfiguredStatusSpec
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
     * @return \TencentAds\Model\UpdateAdgroupDailyBudgetItem[]
     */
    public function getUpdateAdgroupDailyBudgetSpec()
    {
        return $this->container['updateAdgroupDailyBudgetSpec'];
    }

    /**
     * Sets updateAdgroupDailyBudgetSpec
     *
     * @param \TencentAds\Model\UpdateAdgroupDailyBudgetItem[] $updateAdgroupDailyBudgetSpec updateAdgroupDailyBudgetSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupDailyBudgetSpec($updateAdgroupDailyBudgetSpec)
    {
        $this->container['updateAdgroupDailyBudgetSpec'] = $updateAdgroupDailyBudgetSpec;

        return $this;
    }

    /**
     * Gets updateAdConfiguredStatusSpec
     *
     * @return \TencentAds\Model\UpdateAdConfiguredStatusItem[]
     */
    public function getUpdateAdConfiguredStatusSpec()
    {
        return $this->container['updateAdConfiguredStatusSpec'];
    }

    /**
     * Sets updateAdConfiguredStatusSpec
     *
     * @param \TencentAds\Model\UpdateAdConfiguredStatusItem[] $updateAdConfiguredStatusSpec updateAdConfiguredStatusSpec
     *
     * @return $this
     */
    public function setUpdateAdConfiguredStatusSpec($updateAdConfiguredStatusSpec)
    {
        $this->container['updateAdConfiguredStatusSpec'] = $updateAdConfiguredStatusSpec;

        return $this;
    }

    /**
     * Gets updateAdgroupAutoAcquisitionSpec
     *
     * @return \TencentAds\Model\UpdateAdgroupAutoAcquisitionItem[]
     */
    public function getUpdateAdgroupAutoAcquisitionSpec()
    {
        return $this->container['updateAdgroupAutoAcquisitionSpec'];
    }

    /**
     * Sets updateAdgroupAutoAcquisitionSpec
     *
     * @param \TencentAds\Model\UpdateAdgroupAutoAcquisitionItem[] $updateAdgroupAutoAcquisitionSpec updateAdgroupAutoAcquisitionSpec
     *
     * @return $this
     */
    public function setUpdateAdgroupAutoAcquisitionSpec($updateAdgroupAutoAcquisitionSpec)
    {
        $this->container['updateAdgroupAutoAcquisitionSpec'] = $updateAdgroupAutoAcquisitionSpec;

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


