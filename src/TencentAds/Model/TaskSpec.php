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
        'reportTaskSpec' => '\TencentAds\Model\ReportTaskSpec',
        'taskTypeAdHourlyReportSpec' => '\TencentAds\Model\TaskTypeAdHourlyReportSpec',
        'taskTypeWechatMomentsAdgroupHourlyReportSpec' => '\TencentAds\Model\TaskTypeWechatMomentsAdgroupHourlyReportSpec',
        'taskTypeWechatAdgroupHourlyReportSpec' => '\TencentAds\Model\TaskTypeWechatAdgroupHourlyReportSpec',
        'taskTypeWechatAdgroupDailyReportSpec' => '\TencentAds\Model\TaskTypeWechatAdgroupDailyReportSpec',
        'taskTypeWechatAdHourlyReportSpec' => '\TencentAds\Model\TaskTypeWechatAdHourlyReportSpec',
        'taskTypeWechatAdDailyReportSpec' => '\TencentAds\Model\TaskTypeWechatAdDailyReportSpec',
        'taskTypeWechatAdvertisingDataSpec' => '\TencentAds\Model\TaskTypeWechatAdvertisingDataSpec',
        'taskTypeWechatPoiHourlyReportSpec' => '\TencentAds\Model\TaskTypeWechatPoiHourlyReportSpec',
        'taskTypeCreateAndroidChannelPackageSpec' => '\TencentAds\Model\TaskTypeCreateAndroidChannelPackageSpec',
        'taskTypeUpdateAndroidChannelPackageSpec' => '\TencentAds\Model\TaskTypeUpdateAndroidChannelPackageSpec',
        'taskTypeCreateAndroidUnionChannelPackageSpec' => '\TencentAds\Model\TaskTypeCreateAndroidUnionChannelPackageSpec',
        'taskTypeUpdateAndroidUnionChannelPackageSpec' => '\TencentAds\Model\TaskTypeUpdateAndroidUnionChannelPackageSpec',
        'taskTypeUnionPositionReportSpec' => '\TencentAds\Model\TaskTypeUnionPositionReportSpec',
        'taskTypeReviewElementPrereviewResultSpec' => '\TencentAds\Model\TaskTypeReviewElementPrereviewResultSpec',
        'taskTypeMassiveKeywordRecommendSpec' => '\TencentAds\Model\TaskTypeMassiveKeywordRecommendSpec',
        'taskTypeSearchDownloadAllSpec' => '\TencentAds\Model\TaskTypeSearchDownloadAllSpec',
        'adcleanerUpdateAdgroupConfiguredStatusSpec' => '\TencentAds\Model\AdcleanerUpdateAdgroupConfiguredStatusSpec',
        'adcleanerDeleteAdgroupSpec' => '\TencentAds\Model\AdcleanerDeleteAdgroupSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reportTaskSpec' => null,
        'taskTypeAdHourlyReportSpec' => null,
        'taskTypeWechatMomentsAdgroupHourlyReportSpec' => null,
        'taskTypeWechatAdgroupHourlyReportSpec' => null,
        'taskTypeWechatAdgroupDailyReportSpec' => null,
        'taskTypeWechatAdHourlyReportSpec' => null,
        'taskTypeWechatAdDailyReportSpec' => null,
        'taskTypeWechatAdvertisingDataSpec' => null,
        'taskTypeWechatPoiHourlyReportSpec' => null,
        'taskTypeCreateAndroidChannelPackageSpec' => null,
        'taskTypeUpdateAndroidChannelPackageSpec' => null,
        'taskTypeCreateAndroidUnionChannelPackageSpec' => null,
        'taskTypeUpdateAndroidUnionChannelPackageSpec' => null,
        'taskTypeUnionPositionReportSpec' => null,
        'taskTypeReviewElementPrereviewResultSpec' => null,
        'taskTypeMassiveKeywordRecommendSpec' => null,
        'taskTypeSearchDownloadAllSpec' => null,
        'adcleanerUpdateAdgroupConfiguredStatusSpec' => null,
        'adcleanerDeleteAdgroupSpec' => null
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
        'reportTaskSpec' => 'report_task_spec',
        'taskTypeAdHourlyReportSpec' => 'task_type_ad_hourly_report_spec',
        'taskTypeWechatMomentsAdgroupHourlyReportSpec' => 'task_type_wechat_moments_adgroup_hourly_report_spec',
        'taskTypeWechatAdgroupHourlyReportSpec' => 'task_type_wechat_adgroup_hourly_report_spec',
        'taskTypeWechatAdgroupDailyReportSpec' => 'task_type_wechat_adgroup_daily_report_spec',
        'taskTypeWechatAdHourlyReportSpec' => 'task_type_wechat_ad_hourly_report_spec',
        'taskTypeWechatAdDailyReportSpec' => 'task_type_wechat_ad_daily_report_spec',
        'taskTypeWechatAdvertisingDataSpec' => 'task_type_wechat_advertising_data_spec',
        'taskTypeWechatPoiHourlyReportSpec' => 'task_type_wechat_poi_hourly_report_spec',
        'taskTypeCreateAndroidChannelPackageSpec' => 'task_type_create_android_channel_package_spec',
        'taskTypeUpdateAndroidChannelPackageSpec' => 'task_type_update_android_channel_package_spec',
        'taskTypeCreateAndroidUnionChannelPackageSpec' => 'task_type_create_android_union_channel_package_spec',
        'taskTypeUpdateAndroidUnionChannelPackageSpec' => 'task_type_update_android_union_channel_package_spec',
        'taskTypeUnionPositionReportSpec' => 'task_type_union_position_report_spec',
        'taskTypeReviewElementPrereviewResultSpec' => 'task_type_review_element_prereview_result_spec',
        'taskTypeMassiveKeywordRecommendSpec' => 'task_type_massive_keyword_recommend_spec',
        'taskTypeSearchDownloadAllSpec' => 'task_type_search_download_all_spec',
        'adcleanerUpdateAdgroupConfiguredStatusSpec' => 'adcleaner_update_adgroup_configured_status_spec',
        'adcleanerDeleteAdgroupSpec' => 'adcleaner_delete_adgroup_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reportTaskSpec' => 'setReportTaskSpec',
        'taskTypeAdHourlyReportSpec' => 'setTaskTypeAdHourlyReportSpec',
        'taskTypeWechatMomentsAdgroupHourlyReportSpec' => 'setTaskTypeWechatMomentsAdgroupHourlyReportSpec',
        'taskTypeWechatAdgroupHourlyReportSpec' => 'setTaskTypeWechatAdgroupHourlyReportSpec',
        'taskTypeWechatAdgroupDailyReportSpec' => 'setTaskTypeWechatAdgroupDailyReportSpec',
        'taskTypeWechatAdHourlyReportSpec' => 'setTaskTypeWechatAdHourlyReportSpec',
        'taskTypeWechatAdDailyReportSpec' => 'setTaskTypeWechatAdDailyReportSpec',
        'taskTypeWechatAdvertisingDataSpec' => 'setTaskTypeWechatAdvertisingDataSpec',
        'taskTypeWechatPoiHourlyReportSpec' => 'setTaskTypeWechatPoiHourlyReportSpec',
        'taskTypeCreateAndroidChannelPackageSpec' => 'setTaskTypeCreateAndroidChannelPackageSpec',
        'taskTypeUpdateAndroidChannelPackageSpec' => 'setTaskTypeUpdateAndroidChannelPackageSpec',
        'taskTypeCreateAndroidUnionChannelPackageSpec' => 'setTaskTypeCreateAndroidUnionChannelPackageSpec',
        'taskTypeUpdateAndroidUnionChannelPackageSpec' => 'setTaskTypeUpdateAndroidUnionChannelPackageSpec',
        'taskTypeUnionPositionReportSpec' => 'setTaskTypeUnionPositionReportSpec',
        'taskTypeReviewElementPrereviewResultSpec' => 'setTaskTypeReviewElementPrereviewResultSpec',
        'taskTypeMassiveKeywordRecommendSpec' => 'setTaskTypeMassiveKeywordRecommendSpec',
        'taskTypeSearchDownloadAllSpec' => 'setTaskTypeSearchDownloadAllSpec',
        'adcleanerUpdateAdgroupConfiguredStatusSpec' => 'setAdcleanerUpdateAdgroupConfiguredStatusSpec',
        'adcleanerDeleteAdgroupSpec' => 'setAdcleanerDeleteAdgroupSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reportTaskSpec' => 'getReportTaskSpec',
        'taskTypeAdHourlyReportSpec' => 'getTaskTypeAdHourlyReportSpec',
        'taskTypeWechatMomentsAdgroupHourlyReportSpec' => 'getTaskTypeWechatMomentsAdgroupHourlyReportSpec',
        'taskTypeWechatAdgroupHourlyReportSpec' => 'getTaskTypeWechatAdgroupHourlyReportSpec',
        'taskTypeWechatAdgroupDailyReportSpec' => 'getTaskTypeWechatAdgroupDailyReportSpec',
        'taskTypeWechatAdHourlyReportSpec' => 'getTaskTypeWechatAdHourlyReportSpec',
        'taskTypeWechatAdDailyReportSpec' => 'getTaskTypeWechatAdDailyReportSpec',
        'taskTypeWechatAdvertisingDataSpec' => 'getTaskTypeWechatAdvertisingDataSpec',
        'taskTypeWechatPoiHourlyReportSpec' => 'getTaskTypeWechatPoiHourlyReportSpec',
        'taskTypeCreateAndroidChannelPackageSpec' => 'getTaskTypeCreateAndroidChannelPackageSpec',
        'taskTypeUpdateAndroidChannelPackageSpec' => 'getTaskTypeUpdateAndroidChannelPackageSpec',
        'taskTypeCreateAndroidUnionChannelPackageSpec' => 'getTaskTypeCreateAndroidUnionChannelPackageSpec',
        'taskTypeUpdateAndroidUnionChannelPackageSpec' => 'getTaskTypeUpdateAndroidUnionChannelPackageSpec',
        'taskTypeUnionPositionReportSpec' => 'getTaskTypeUnionPositionReportSpec',
        'taskTypeReviewElementPrereviewResultSpec' => 'getTaskTypeReviewElementPrereviewResultSpec',
        'taskTypeMassiveKeywordRecommendSpec' => 'getTaskTypeMassiveKeywordRecommendSpec',
        'taskTypeSearchDownloadAllSpec' => 'getTaskTypeSearchDownloadAllSpec',
        'adcleanerUpdateAdgroupConfiguredStatusSpec' => 'getAdcleanerUpdateAdgroupConfiguredStatusSpec',
        'adcleanerDeleteAdgroupSpec' => 'getAdcleanerDeleteAdgroupSpec'
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
        $this->container['reportTaskSpec'] = isset($data['reportTaskSpec']) ? $data['reportTaskSpec'] : null;
        $this->container['taskTypeAdHourlyReportSpec'] = isset($data['taskTypeAdHourlyReportSpec']) ? $data['taskTypeAdHourlyReportSpec'] : null;
        $this->container['taskTypeWechatMomentsAdgroupHourlyReportSpec'] = isset($data['taskTypeWechatMomentsAdgroupHourlyReportSpec']) ? $data['taskTypeWechatMomentsAdgroupHourlyReportSpec'] : null;
        $this->container['taskTypeWechatAdgroupHourlyReportSpec'] = isset($data['taskTypeWechatAdgroupHourlyReportSpec']) ? $data['taskTypeWechatAdgroupHourlyReportSpec'] : null;
        $this->container['taskTypeWechatAdgroupDailyReportSpec'] = isset($data['taskTypeWechatAdgroupDailyReportSpec']) ? $data['taskTypeWechatAdgroupDailyReportSpec'] : null;
        $this->container['taskTypeWechatAdHourlyReportSpec'] = isset($data['taskTypeWechatAdHourlyReportSpec']) ? $data['taskTypeWechatAdHourlyReportSpec'] : null;
        $this->container['taskTypeWechatAdDailyReportSpec'] = isset($data['taskTypeWechatAdDailyReportSpec']) ? $data['taskTypeWechatAdDailyReportSpec'] : null;
        $this->container['taskTypeWechatAdvertisingDataSpec'] = isset($data['taskTypeWechatAdvertisingDataSpec']) ? $data['taskTypeWechatAdvertisingDataSpec'] : null;
        $this->container['taskTypeWechatPoiHourlyReportSpec'] = isset($data['taskTypeWechatPoiHourlyReportSpec']) ? $data['taskTypeWechatPoiHourlyReportSpec'] : null;
        $this->container['taskTypeCreateAndroidChannelPackageSpec'] = isset($data['taskTypeCreateAndroidChannelPackageSpec']) ? $data['taskTypeCreateAndroidChannelPackageSpec'] : null;
        $this->container['taskTypeUpdateAndroidChannelPackageSpec'] = isset($data['taskTypeUpdateAndroidChannelPackageSpec']) ? $data['taskTypeUpdateAndroidChannelPackageSpec'] : null;
        $this->container['taskTypeCreateAndroidUnionChannelPackageSpec'] = isset($data['taskTypeCreateAndroidUnionChannelPackageSpec']) ? $data['taskTypeCreateAndroidUnionChannelPackageSpec'] : null;
        $this->container['taskTypeUpdateAndroidUnionChannelPackageSpec'] = isset($data['taskTypeUpdateAndroidUnionChannelPackageSpec']) ? $data['taskTypeUpdateAndroidUnionChannelPackageSpec'] : null;
        $this->container['taskTypeUnionPositionReportSpec'] = isset($data['taskTypeUnionPositionReportSpec']) ? $data['taskTypeUnionPositionReportSpec'] : null;
        $this->container['taskTypeReviewElementPrereviewResultSpec'] = isset($data['taskTypeReviewElementPrereviewResultSpec']) ? $data['taskTypeReviewElementPrereviewResultSpec'] : null;
        $this->container['taskTypeMassiveKeywordRecommendSpec'] = isset($data['taskTypeMassiveKeywordRecommendSpec']) ? $data['taskTypeMassiveKeywordRecommendSpec'] : null;
        $this->container['taskTypeSearchDownloadAllSpec'] = isset($data['taskTypeSearchDownloadAllSpec']) ? $data['taskTypeSearchDownloadAllSpec'] : null;
        $this->container['adcleanerUpdateAdgroupConfiguredStatusSpec'] = isset($data['adcleanerUpdateAdgroupConfiguredStatusSpec']) ? $data['adcleanerUpdateAdgroupConfiguredStatusSpec'] : null;
        $this->container['adcleanerDeleteAdgroupSpec'] = isset($data['adcleanerDeleteAdgroupSpec']) ? $data['adcleanerDeleteAdgroupSpec'] : null;
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
     * Gets reportTaskSpec
     *
     * @return \TencentAds\Model\ReportTaskSpec|mixed
     */
    public function getReportTaskSpec()
    {
        return $this->container['reportTaskSpec'];
    }

    /**
     * Sets reportTaskSpec
     *
     * @param \TencentAds\Model\ReportTaskSpec|mixed $reportTaskSpec reportTaskSpec
     *
     * @return $this
     */
    public function setReportTaskSpec($reportTaskSpec)
    {
        $this->container['reportTaskSpec'] = $reportTaskSpec;

        return $this;
    }

    /**
     * Gets taskTypeAdHourlyReportSpec
     *
     * @return \TencentAds\Model\TaskTypeAdHourlyReportSpec|mixed
     */
    public function getTaskTypeAdHourlyReportSpec()
    {
        return $this->container['taskTypeAdHourlyReportSpec'];
    }

    /**
     * Sets taskTypeAdHourlyReportSpec
     *
     * @param \TencentAds\Model\TaskTypeAdHourlyReportSpec|mixed $taskTypeAdHourlyReportSpec taskTypeAdHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeAdHourlyReportSpec($taskTypeAdHourlyReportSpec)
    {
        $this->container['taskTypeAdHourlyReportSpec'] = $taskTypeAdHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatMomentsAdgroupHourlyReportSpec
     *
     * @return \TencentAds\Model\TaskTypeWechatMomentsAdgroupHourlyReportSpec|mixed
     */
    public function getTaskTypeWechatMomentsAdgroupHourlyReportSpec()
    {
        return $this->container['taskTypeWechatMomentsAdgroupHourlyReportSpec'];
    }

    /**
     * Sets taskTypeWechatMomentsAdgroupHourlyReportSpec
     *
     * @param \TencentAds\Model\TaskTypeWechatMomentsAdgroupHourlyReportSpec|mixed $taskTypeWechatMomentsAdgroupHourlyReportSpec taskTypeWechatMomentsAdgroupHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatMomentsAdgroupHourlyReportSpec($taskTypeWechatMomentsAdgroupHourlyReportSpec)
    {
        $this->container['taskTypeWechatMomentsAdgroupHourlyReportSpec'] = $taskTypeWechatMomentsAdgroupHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatAdgroupHourlyReportSpec
     *
     * @return \TencentAds\Model\TaskTypeWechatAdgroupHourlyReportSpec|mixed
     */
    public function getTaskTypeWechatAdgroupHourlyReportSpec()
    {
        return $this->container['taskTypeWechatAdgroupHourlyReportSpec'];
    }

    /**
     * Sets taskTypeWechatAdgroupHourlyReportSpec
     *
     * @param \TencentAds\Model\TaskTypeWechatAdgroupHourlyReportSpec|mixed $taskTypeWechatAdgroupHourlyReportSpec taskTypeWechatAdgroupHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatAdgroupHourlyReportSpec($taskTypeWechatAdgroupHourlyReportSpec)
    {
        $this->container['taskTypeWechatAdgroupHourlyReportSpec'] = $taskTypeWechatAdgroupHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatAdgroupDailyReportSpec
     *
     * @return \TencentAds\Model\TaskTypeWechatAdgroupDailyReportSpec|mixed
     */
    public function getTaskTypeWechatAdgroupDailyReportSpec()
    {
        return $this->container['taskTypeWechatAdgroupDailyReportSpec'];
    }

    /**
     * Sets taskTypeWechatAdgroupDailyReportSpec
     *
     * @param \TencentAds\Model\TaskTypeWechatAdgroupDailyReportSpec|mixed $taskTypeWechatAdgroupDailyReportSpec taskTypeWechatAdgroupDailyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatAdgroupDailyReportSpec($taskTypeWechatAdgroupDailyReportSpec)
    {
        $this->container['taskTypeWechatAdgroupDailyReportSpec'] = $taskTypeWechatAdgroupDailyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatAdHourlyReportSpec
     *
     * @return \TencentAds\Model\TaskTypeWechatAdHourlyReportSpec|mixed
     */
    public function getTaskTypeWechatAdHourlyReportSpec()
    {
        return $this->container['taskTypeWechatAdHourlyReportSpec'];
    }

    /**
     * Sets taskTypeWechatAdHourlyReportSpec
     *
     * @param \TencentAds\Model\TaskTypeWechatAdHourlyReportSpec|mixed $taskTypeWechatAdHourlyReportSpec taskTypeWechatAdHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatAdHourlyReportSpec($taskTypeWechatAdHourlyReportSpec)
    {
        $this->container['taskTypeWechatAdHourlyReportSpec'] = $taskTypeWechatAdHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatAdDailyReportSpec
     *
     * @return \TencentAds\Model\TaskTypeWechatAdDailyReportSpec|mixed
     */
    public function getTaskTypeWechatAdDailyReportSpec()
    {
        return $this->container['taskTypeWechatAdDailyReportSpec'];
    }

    /**
     * Sets taskTypeWechatAdDailyReportSpec
     *
     * @param \TencentAds\Model\TaskTypeWechatAdDailyReportSpec|mixed $taskTypeWechatAdDailyReportSpec taskTypeWechatAdDailyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatAdDailyReportSpec($taskTypeWechatAdDailyReportSpec)
    {
        $this->container['taskTypeWechatAdDailyReportSpec'] = $taskTypeWechatAdDailyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatAdvertisingDataSpec
     *
     * @return \TencentAds\Model\TaskTypeWechatAdvertisingDataSpec|mixed
     */
    public function getTaskTypeWechatAdvertisingDataSpec()
    {
        return $this->container['taskTypeWechatAdvertisingDataSpec'];
    }

    /**
     * Sets taskTypeWechatAdvertisingDataSpec
     *
     * @param \TencentAds\Model\TaskTypeWechatAdvertisingDataSpec|mixed $taskTypeWechatAdvertisingDataSpec taskTypeWechatAdvertisingDataSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatAdvertisingDataSpec($taskTypeWechatAdvertisingDataSpec)
    {
        $this->container['taskTypeWechatAdvertisingDataSpec'] = $taskTypeWechatAdvertisingDataSpec;

        return $this;
    }

    /**
     * Gets taskTypeWechatPoiHourlyReportSpec
     *
     * @return \TencentAds\Model\TaskTypeWechatPoiHourlyReportSpec|mixed
     */
    public function getTaskTypeWechatPoiHourlyReportSpec()
    {
        return $this->container['taskTypeWechatPoiHourlyReportSpec'];
    }

    /**
     * Sets taskTypeWechatPoiHourlyReportSpec
     *
     * @param \TencentAds\Model\TaskTypeWechatPoiHourlyReportSpec|mixed $taskTypeWechatPoiHourlyReportSpec taskTypeWechatPoiHourlyReportSpec
     *
     * @return $this
     */
    public function setTaskTypeWechatPoiHourlyReportSpec($taskTypeWechatPoiHourlyReportSpec)
    {
        $this->container['taskTypeWechatPoiHourlyReportSpec'] = $taskTypeWechatPoiHourlyReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeCreateAndroidChannelPackageSpec
     *
     * @return \TencentAds\Model\TaskTypeCreateAndroidChannelPackageSpec|mixed
     */
    public function getTaskTypeCreateAndroidChannelPackageSpec()
    {
        return $this->container['taskTypeCreateAndroidChannelPackageSpec'];
    }

    /**
     * Sets taskTypeCreateAndroidChannelPackageSpec
     *
     * @param \TencentAds\Model\TaskTypeCreateAndroidChannelPackageSpec|mixed $taskTypeCreateAndroidChannelPackageSpec taskTypeCreateAndroidChannelPackageSpec
     *
     * @return $this
     */
    public function setTaskTypeCreateAndroidChannelPackageSpec($taskTypeCreateAndroidChannelPackageSpec)
    {
        $this->container['taskTypeCreateAndroidChannelPackageSpec'] = $taskTypeCreateAndroidChannelPackageSpec;

        return $this;
    }

    /**
     * Gets taskTypeUpdateAndroidChannelPackageSpec
     *
     * @return \TencentAds\Model\TaskTypeUpdateAndroidChannelPackageSpec|mixed
     */
    public function getTaskTypeUpdateAndroidChannelPackageSpec()
    {
        return $this->container['taskTypeUpdateAndroidChannelPackageSpec'];
    }

    /**
     * Sets taskTypeUpdateAndroidChannelPackageSpec
     *
     * @param \TencentAds\Model\TaskTypeUpdateAndroidChannelPackageSpec|mixed $taskTypeUpdateAndroidChannelPackageSpec taskTypeUpdateAndroidChannelPackageSpec
     *
     * @return $this
     */
    public function setTaskTypeUpdateAndroidChannelPackageSpec($taskTypeUpdateAndroidChannelPackageSpec)
    {
        $this->container['taskTypeUpdateAndroidChannelPackageSpec'] = $taskTypeUpdateAndroidChannelPackageSpec;

        return $this;
    }

    /**
     * Gets taskTypeCreateAndroidUnionChannelPackageSpec
     *
     * @return \TencentAds\Model\TaskTypeCreateAndroidUnionChannelPackageSpec|mixed
     */
    public function getTaskTypeCreateAndroidUnionChannelPackageSpec()
    {
        return $this->container['taskTypeCreateAndroidUnionChannelPackageSpec'];
    }

    /**
     * Sets taskTypeCreateAndroidUnionChannelPackageSpec
     *
     * @param \TencentAds\Model\TaskTypeCreateAndroidUnionChannelPackageSpec|mixed $taskTypeCreateAndroidUnionChannelPackageSpec taskTypeCreateAndroidUnionChannelPackageSpec
     *
     * @return $this
     */
    public function setTaskTypeCreateAndroidUnionChannelPackageSpec($taskTypeCreateAndroidUnionChannelPackageSpec)
    {
        $this->container['taskTypeCreateAndroidUnionChannelPackageSpec'] = $taskTypeCreateAndroidUnionChannelPackageSpec;

        return $this;
    }

    /**
     * Gets taskTypeUpdateAndroidUnionChannelPackageSpec
     *
     * @return \TencentAds\Model\TaskTypeUpdateAndroidUnionChannelPackageSpec|mixed
     */
    public function getTaskTypeUpdateAndroidUnionChannelPackageSpec()
    {
        return $this->container['taskTypeUpdateAndroidUnionChannelPackageSpec'];
    }

    /**
     * Sets taskTypeUpdateAndroidUnionChannelPackageSpec
     *
     * @param \TencentAds\Model\TaskTypeUpdateAndroidUnionChannelPackageSpec|mixed $taskTypeUpdateAndroidUnionChannelPackageSpec taskTypeUpdateAndroidUnionChannelPackageSpec
     *
     * @return $this
     */
    public function setTaskTypeUpdateAndroidUnionChannelPackageSpec($taskTypeUpdateAndroidUnionChannelPackageSpec)
    {
        $this->container['taskTypeUpdateAndroidUnionChannelPackageSpec'] = $taskTypeUpdateAndroidUnionChannelPackageSpec;

        return $this;
    }

    /**
     * Gets taskTypeUnionPositionReportSpec
     *
     * @return \TencentAds\Model\TaskTypeUnionPositionReportSpec|mixed
     */
    public function getTaskTypeUnionPositionReportSpec()
    {
        return $this->container['taskTypeUnionPositionReportSpec'];
    }

    /**
     * Sets taskTypeUnionPositionReportSpec
     *
     * @param \TencentAds\Model\TaskTypeUnionPositionReportSpec|mixed $taskTypeUnionPositionReportSpec taskTypeUnionPositionReportSpec
     *
     * @return $this
     */
    public function setTaskTypeUnionPositionReportSpec($taskTypeUnionPositionReportSpec)
    {
        $this->container['taskTypeUnionPositionReportSpec'] = $taskTypeUnionPositionReportSpec;

        return $this;
    }

    /**
     * Gets taskTypeReviewElementPrereviewResultSpec
     *
     * @return \TencentAds\Model\TaskTypeReviewElementPrereviewResultSpec|mixed
     */
    public function getTaskTypeReviewElementPrereviewResultSpec()
    {
        return $this->container['taskTypeReviewElementPrereviewResultSpec'];
    }

    /**
     * Sets taskTypeReviewElementPrereviewResultSpec
     *
     * @param \TencentAds\Model\TaskTypeReviewElementPrereviewResultSpec|mixed $taskTypeReviewElementPrereviewResultSpec taskTypeReviewElementPrereviewResultSpec
     *
     * @return $this
     */
    public function setTaskTypeReviewElementPrereviewResultSpec($taskTypeReviewElementPrereviewResultSpec)
    {
        $this->container['taskTypeReviewElementPrereviewResultSpec'] = $taskTypeReviewElementPrereviewResultSpec;

        return $this;
    }

    /**
     * Gets taskTypeMassiveKeywordRecommendSpec
     *
     * @return \TencentAds\Model\TaskTypeMassiveKeywordRecommendSpec|mixed
     */
    public function getTaskTypeMassiveKeywordRecommendSpec()
    {
        return $this->container['taskTypeMassiveKeywordRecommendSpec'];
    }

    /**
     * Sets taskTypeMassiveKeywordRecommendSpec
     *
     * @param \TencentAds\Model\TaskTypeMassiveKeywordRecommendSpec|mixed $taskTypeMassiveKeywordRecommendSpec taskTypeMassiveKeywordRecommendSpec
     *
     * @return $this
     */
    public function setTaskTypeMassiveKeywordRecommendSpec($taskTypeMassiveKeywordRecommendSpec)
    {
        $this->container['taskTypeMassiveKeywordRecommendSpec'] = $taskTypeMassiveKeywordRecommendSpec;

        return $this;
    }

    /**
     * Gets taskTypeSearchDownloadAllSpec
     *
     * @return \TencentAds\Model\TaskTypeSearchDownloadAllSpec|mixed
     */
    public function getTaskTypeSearchDownloadAllSpec()
    {
        return $this->container['taskTypeSearchDownloadAllSpec'];
    }

    /**
     * Sets taskTypeSearchDownloadAllSpec
     *
     * @param \TencentAds\Model\TaskTypeSearchDownloadAllSpec|mixed $taskTypeSearchDownloadAllSpec taskTypeSearchDownloadAllSpec
     *
     * @return $this
     */
    public function setTaskTypeSearchDownloadAllSpec($taskTypeSearchDownloadAllSpec)
    {
        $this->container['taskTypeSearchDownloadAllSpec'] = $taskTypeSearchDownloadAllSpec;

        return $this;
    }

    /**
     * Gets adcleanerUpdateAdgroupConfiguredStatusSpec
     *
     * @return \TencentAds\Model\AdcleanerUpdateAdgroupConfiguredStatusSpec|mixed
     */
    public function getAdcleanerUpdateAdgroupConfiguredStatusSpec()
    {
        return $this->container['adcleanerUpdateAdgroupConfiguredStatusSpec'];
    }

    /**
     * Sets adcleanerUpdateAdgroupConfiguredStatusSpec
     *
     * @param \TencentAds\Model\AdcleanerUpdateAdgroupConfiguredStatusSpec|mixed $adcleanerUpdateAdgroupConfiguredStatusSpec adcleanerUpdateAdgroupConfiguredStatusSpec
     *
     * @return $this
     */
    public function setAdcleanerUpdateAdgroupConfiguredStatusSpec($adcleanerUpdateAdgroupConfiguredStatusSpec)
    {
        $this->container['adcleanerUpdateAdgroupConfiguredStatusSpec'] = $adcleanerUpdateAdgroupConfiguredStatusSpec;

        return $this;
    }

    /**
     * Gets adcleanerDeleteAdgroupSpec
     *
     * @return \TencentAds\Model\AdcleanerDeleteAdgroupSpec|mixed
     */
    public function getAdcleanerDeleteAdgroupSpec()
    {
        return $this->container['adcleanerDeleteAdgroupSpec'];
    }

    /**
     * Sets adcleanerDeleteAdgroupSpec
     *
     * @param \TencentAds\Model\AdcleanerDeleteAdgroupSpec|mixed $adcleanerDeleteAdgroupSpec adcleanerDeleteAdgroupSpec
     *
     * @return $this
     */
    public function setAdcleanerDeleteAdgroupSpec($adcleanerDeleteAdgroupSpec)
    {
        $this->container['adcleanerDeleteAdgroupSpec'] = $adcleanerDeleteAdgroupSpec;

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


