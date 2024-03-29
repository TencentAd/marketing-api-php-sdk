<?php
namespace TencentAds\Kernel\V3;

use GuzzleHttp\Client;
use TencentAds\Container\V3\AdDiagnosisApiContainer;
use TencentAds\Container\V3\AdParamApiContainer;
use TencentAds\Container\V3\AdUnionReportsApiContainer;
use TencentAds\Container\V3\AdcreativePreviewsApiContainer;
use TencentAds\Container\V3\AdcreativePreviewsQrcodeApiContainer;
use TencentAds\Container\V3\AdgroupNegativewordsApiContainer;
use TencentAds\Container\V3\AdgroupsApiContainer;
use TencentAds\Container\V3\AdvertiserApiContainer;
use TencentAds\Container\V3\AdvertiserDailyBudgetApiContainer;
use TencentAds\Container\V3\AgencyApiContainer;
use TencentAds\Container\V3\AgencyRealtimeCostApiContainer;
use TencentAds\Container\V3\AndroidChannelApiContainer;
use TencentAds\Container\V3\AsyncReportFilesApiContainer;
use TencentAds\Container\V3\AsyncReportsApiContainer;
use TencentAds\Container\V3\AsyncTasksApiContainer;
use TencentAds\Container\V3\AudienceGrantRelationsApiContainer;
use TencentAds\Container\V3\BatchAsyncRequestSpecificationApiContainer;
use TencentAds\Container\V3\BatchAsyncRequestsApiContainer;
use TencentAds\Container\V3\BatchRequestsApiContainer;
use TencentAds\Container\V3\BidSimulationApiContainer;
use TencentAds\Container\V3\BidwordApiContainer;
use TencentAds\Container\V3\BidwordFlowApiContainer;
use TencentAds\Container\V3\BrandApiContainer;
use TencentAds\Container\V3\BusinessPointApiContainer;
use TencentAds\Container\V3\ComponentReviewResultsApiContainer;
use TencentAds\Container\V3\ConversionsApiContainer;
use TencentAds\Container\V3\CreativeTemplateApiContainer;
use TencentAds\Container\V3\CreativeTemplateListApiContainer;
use TencentAds\Container\V3\CreativeTemplatePreviewsApiContainer;
use TencentAds\Container\V3\CreativetoolsTextApiContainer;
use TencentAds\Container\V3\CustomAudienceEstimationsApiContainer;
use TencentAds\Container\V3\CustomAudienceFilesApiContainer;
use TencentAds\Container\V3\CustomAudiencesApiContainer;
use TencentAds\Container\V3\DailyBalanceReportApiContainer;
use TencentAds\Container\V3\DailyReportsApiContainer;
use TencentAds\Container\V3\DataSourceDispatchApiContainer;
use TencentAds\Container\V3\DynamicAdImageTemplatesApiContainer;
use TencentAds\Container\V3\DynamicAdImagesApiContainer;
use TencentAds\Container\V3\DynamicAdVideoApiContainer;
use TencentAds\Container\V3\DynamicAdVideoTemplatesApiContainer;
use TencentAds\Container\V3\DynamicCreativeReviewResultsApiContainer;
use TencentAds\Container\V3\DynamicCreativesApiContainer;
use TencentAds\Container\V3\EcommerceOrderApiContainer;
use TencentAds\Container\V3\EstimationApiContainer;
use TencentAds\Container\V3\ExtendPackageApiContainer;
use TencentAds\Container\V3\FundStatementsDetailedApiContainer;
use TencentAds\Container\V3\FundTransferApiContainer;
use TencentAds\Container\V3\FundsApiContainer;
use TencentAds\Container\V3\GameFeatureApiContainer;
use TencentAds\Container\V3\GameFeatureTagsApiContainer;
use TencentAds\Container\V3\HourlyReportsApiContainer;
use TencentAds\Container\V3\ImagesApiContainer;
use TencentAds\Container\V3\KeywordRecommendApiContainer;
use TencentAds\Container\V3\LabelsApiContainer;
use TencentAds\Container\V3\LandingPageSellStrategyApiContainer;
use TencentAds\Container\V3\LeadsActionTypeReportApiContainer;
use TencentAds\Container\V3\LeadsApiContainer;
use TencentAds\Container\V3\LeadsCallRecordApiContainer;
use TencentAds\Container\V3\LeadsCallRecordsApiContainer;
use TencentAds\Container\V3\LeadsCallVirtualNumberApiContainer;
use TencentAds\Container\V3\LeadsClaimApiContainer;
use TencentAds\Container\V3\LeadsInvalidPayApiContainer;
use TencentAds\Container\V3\LeadsListApiContainer;
use TencentAds\Container\V3\LeadsStatusApiContainer;
use TencentAds\Container\V3\LeadsVoipCallApiContainer;
use TencentAds\Container\V3\LeadsVoipCallTokenApiContainer;
use TencentAds\Container\V3\LiveRoomComponentStatusApiContainer;
use TencentAds\Container\V3\LiveRoomComponentsApiContainer;
use TencentAds\Container\V3\LocalStoresAddressParsingResultApiContainer;
use TencentAds\Container\V3\LocalStoresApiContainer;
use TencentAds\Container\V3\LocalStoresCategoriesApiContainer;
use TencentAds\Container\V3\LocalStoresSearchInfoApiContainer;
use TencentAds\Container\V3\LocalStoresWxpayMerchantsApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetCategoriesApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetDetailApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetPropertiesApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetPropertyValuesApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetsApiContainer;
use TencentAds\Container\V3\MarketingTargetTypesApiContainer;
use TencentAds\Container\V3\MaterialDcatagApiContainer;
use TencentAds\Container\V3\MaterialLabelsApiContainer;
use TencentAds\Container\V3\MergeFundTypeDailyBalanceReportApiContainer;
use TencentAds\Container\V3\MergeFundTypeFundStatementsDetailedApiContainer;
use TencentAds\Container\V3\MergeFundTypeFundsApiContainer;
use TencentAds\Container\V3\MergeFundTypeSubcustomerTransferApiContainer;
use TencentAds\Container\V3\OauthApiContainer;
use TencentAds\Container\V3\OptimizationGoalPermissionsApiContainer;
use TencentAds\Container\V3\OrganizationAccountRelationApiContainer;
use TencentAds\Container\V3\PagesApiContainer;
use TencentAds\Container\V3\ProductCatalogsApiContainer;
use TencentAds\Container\V3\ProductItemsApiContainer;
use TencentAds\Container\V3\ProductSeriesApiContainer;
use TencentAds\Container\V3\ProfilesApiContainer;
use TencentAds\Container\V3\ProgrammedApiContainer;
use TencentAds\Container\V3\ProgrammedTemplateApiContainer;
use TencentAds\Container\V3\QualificationsApiContainer;
use TencentAds\Container\V3\RealtimeCostApiContainer;
use TencentAds\Container\V3\ReviewElementPrereviewResultsApiContainer;
use TencentAds\Container\V3\SceneSpecTagsApiContainer;
use TencentAds\Container\V3\SubcustomerTransferApiContainer;
use TencentAds\Container\V3\TargetingTagReportsApiContainer;
use TencentAds\Container\V3\TargetingTagsApiContainer;
use TencentAds\Container\V3\TargetingTagsUvApiContainer;
use TencentAds\Container\V3\UnionPositionPackagesApiContainer;
use TencentAds\Container\V3\UserActionSetReportsApiContainer;
use TencentAds\Container\V3\UserActionSetsApiContainer;
use TencentAds\Container\V3\UserActionsApiContainer;
use TencentAds\Container\V3\VideoChannelDealerDataApiContainer;
use TencentAds\Container\V3\VideoChannelFansDataApiContainer;
use TencentAds\Container\V3\VideoChannelLeadsDataApiContainer;
use TencentAds\Container\V3\VideoChannelLiveDataApiContainer;
use TencentAds\Container\V3\VideosApiContainer;
use TencentAds\Container\V3\WechatPagesApiContainer;
use TencentAds\Container\V3\WechatPagesCustomApiContainer;
use TencentAds\Container\V3\WechatPagesGrantinfoApiContainer;
use TencentAds\Container\V3\WildcardsApiContainer;
use TencentAds\Container\V3\WxPackageAccountApiContainer;
use TencentAds\Container\V3\WxPackagePackageApiContainer;
use TencentAds\Container\V3\XijingComplexTemplateApiContainer;
use TencentAds\Container\V3\XijingPageApiContainer;
use TencentAds\Container\V3\XijingPageByComponentsApiContainer;
use TencentAds\Container\V3\XijingPageListApiContainer;
use TencentAds\Container\V3\XijingTemplateApiContainer;
use TencentAds\Container\V3\XijingTemplateListApiContainer;

class App
{
    /** @var Client */
    public $client;

    /** @var AdDiagnosisApiContainer */
    public $adDiagnosisApiContainer;

    /** @var AdParamApiContainer */
    public $adParamApiContainer;

    /** @var AdUnionReportsApiContainer */
    public $adUnionReportsApiContainer;

    /** @var AdcreativePreviewsApiContainer */
    public $adcreativePreviewsApiContainer;

    /** @var AdcreativePreviewsQrcodeApiContainer */
    public $adcreativePreviewsQrcodeApiContainer;

    /** @var AdgroupNegativewordsApiContainer */
    public $adgroupNegativewordsApiContainer;

    /** @var AdgroupsApiContainer */
    public $adgroupsApiContainer;

    /** @var AdvertiserApiContainer */
    public $advertiserApiContainer;

    /** @var AdvertiserDailyBudgetApiContainer */
    public $advertiserDailyBudgetApiContainer;

    /** @var AgencyApiContainer */
    public $agencyApiContainer;

    /** @var AgencyRealtimeCostApiContainer */
    public $agencyRealtimeCostApiContainer;

    /** @var AndroidChannelApiContainer */
    public $androidChannelApiContainer;

    /** @var AsyncReportFilesApiContainer */
    public $asyncReportFilesApiContainer;

    /** @var AsyncReportsApiContainer */
    public $asyncReportsApiContainer;

    /** @var AsyncTasksApiContainer */
    public $asyncTasksApiContainer;

    /** @var AudienceGrantRelationsApiContainer */
    public $audienceGrantRelationsApiContainer;

    /** @var BatchAsyncRequestSpecificationApiContainer */
    public $batchAsyncRequestSpecificationApiContainer;

    /** @var BatchAsyncRequestsApiContainer */
    public $batchAsyncRequestsApiContainer;

    /** @var BatchRequestsApiContainer */
    public $batchRequestsApiContainer;

    /** @var BidSimulationApiContainer */
    public $bidSimulationApiContainer;

    /** @var BidwordApiContainer */
    public $bidwordApiContainer;

    /** @var BidwordFlowApiContainer */
    public $bidwordFlowApiContainer;

    /** @var BrandApiContainer */
    public $brandApiContainer;

    /** @var BusinessPointApiContainer */
    public $businessPointApiContainer;

    /** @var ComponentReviewResultsApiContainer */
    public $componentReviewResultsApiContainer;

    /** @var ConversionsApiContainer */
    public $conversionsApiContainer;

    /** @var CreativeTemplateApiContainer */
    public $creativeTemplateApiContainer;

    /** @var CreativeTemplateListApiContainer */
    public $creativeTemplateListApiContainer;

    /** @var CreativeTemplatePreviewsApiContainer */
    public $creativeTemplatePreviewsApiContainer;

    /** @var CreativetoolsTextApiContainer */
    public $creativetoolsTextApiContainer;

    /** @var CustomAudienceEstimationsApiContainer */
    public $customAudienceEstimationsApiContainer;

    /** @var CustomAudienceFilesApiContainer */
    public $customAudienceFilesApiContainer;

    /** @var CustomAudiencesApiContainer */
    public $customAudiencesApiContainer;

    /** @var DailyBalanceReportApiContainer */
    public $dailyBalanceReportApiContainer;

    /** @var DailyReportsApiContainer */
    public $dailyReportsApiContainer;

    /** @var DataSourceDispatchApiContainer */
    public $dataSourceDispatchApiContainer;

    /** @var DynamicAdImageTemplatesApiContainer */
    public $dynamicAdImageTemplatesApiContainer;

    /** @var DynamicAdImagesApiContainer */
    public $dynamicAdImagesApiContainer;

    /** @var DynamicAdVideoApiContainer */
    public $dynamicAdVideoApiContainer;

    /** @var DynamicAdVideoTemplatesApiContainer */
    public $dynamicAdVideoTemplatesApiContainer;

    /** @var DynamicCreativeReviewResultsApiContainer */
    public $dynamicCreativeReviewResultsApiContainer;

    /** @var DynamicCreativesApiContainer */
    public $dynamicCreativesApiContainer;

    /** @var EcommerceOrderApiContainer */
    public $ecommerceOrderApiContainer;

    /** @var EstimationApiContainer */
    public $estimationApiContainer;

    /** @var ExtendPackageApiContainer */
    public $extendPackageApiContainer;

    /** @var FundStatementsDetailedApiContainer */
    public $fundStatementsDetailedApiContainer;

    /** @var FundTransferApiContainer */
    public $fundTransferApiContainer;

    /** @var FundsApiContainer */
    public $fundsApiContainer;

    /** @var GameFeatureApiContainer */
    public $gameFeatureApiContainer;

    /** @var GameFeatureTagsApiContainer */
    public $gameFeatureTagsApiContainer;

    /** @var HourlyReportsApiContainer */
    public $hourlyReportsApiContainer;

    /** @var ImagesApiContainer */
    public $imagesApiContainer;

    /** @var KeywordRecommendApiContainer */
    public $keywordRecommendApiContainer;

    /** @var LabelsApiContainer */
    public $labelsApiContainer;

    /** @var LandingPageSellStrategyApiContainer */
    public $landingPageSellStrategyApiContainer;

    /** @var LeadsActionTypeReportApiContainer */
    public $leadsActionTypeReportApiContainer;

    /** @var LeadsApiContainer */
    public $leadsApiContainer;

    /** @var LeadsCallRecordApiContainer */
    public $leadsCallRecordApiContainer;

    /** @var LeadsCallRecordsApiContainer */
    public $leadsCallRecordsApiContainer;

    /** @var LeadsCallVirtualNumberApiContainer */
    public $leadsCallVirtualNumberApiContainer;

    /** @var LeadsClaimApiContainer */
    public $leadsClaimApiContainer;

    /** @var LeadsInvalidPayApiContainer */
    public $leadsInvalidPayApiContainer;

    /** @var LeadsListApiContainer */
    public $leadsListApiContainer;

    /** @var LeadsStatusApiContainer */
    public $leadsStatusApiContainer;

    /** @var LeadsVoipCallApiContainer */
    public $leadsVoipCallApiContainer;

    /** @var LeadsVoipCallTokenApiContainer */
    public $leadsVoipCallTokenApiContainer;

    /** @var LiveRoomComponentStatusApiContainer */
    public $liveRoomComponentStatusApiContainer;

    /** @var LiveRoomComponentsApiContainer */
    public $liveRoomComponentsApiContainer;

    /** @var LocalStoresAddressParsingResultApiContainer */
    public $localStoresAddressParsingResultApiContainer;

    /** @var LocalStoresApiContainer */
    public $localStoresApiContainer;

    /** @var LocalStoresCategoriesApiContainer */
    public $localStoresCategoriesApiContainer;

    /** @var LocalStoresSearchInfoApiContainer */
    public $localStoresSearchInfoApiContainer;

    /** @var LocalStoresWxpayMerchantsApiContainer */
    public $localStoresWxpayMerchantsApiContainer;

    /** @var MarketingTargetAssetCategoriesApiContainer */
    public $marketingTargetAssetCategoriesApiContainer;

    /** @var MarketingTargetAssetDetailApiContainer */
    public $marketingTargetAssetDetailApiContainer;

    /** @var MarketingTargetAssetPropertiesApiContainer */
    public $marketingTargetAssetPropertiesApiContainer;

    /** @var MarketingTargetAssetPropertyValuesApiContainer */
    public $marketingTargetAssetPropertyValuesApiContainer;

    /** @var MarketingTargetAssetsApiContainer */
    public $marketingTargetAssetsApiContainer;

    /** @var MarketingTargetTypesApiContainer */
    public $marketingTargetTypesApiContainer;

    /** @var MaterialDcatagApiContainer */
    public $materialDcatagApiContainer;

    /** @var MaterialLabelsApiContainer */
    public $materialLabelsApiContainer;

    /** @var MergeFundTypeDailyBalanceReportApiContainer */
    public $mergeFundTypeDailyBalanceReportApiContainer;

    /** @var MergeFundTypeFundStatementsDetailedApiContainer */
    public $mergeFundTypeFundStatementsDetailedApiContainer;

    /** @var MergeFundTypeFundsApiContainer */
    public $mergeFundTypeFundsApiContainer;

    /** @var MergeFundTypeSubcustomerTransferApiContainer */
    public $mergeFundTypeSubcustomerTransferApiContainer;

    /** @var OauthApiContainer */
    public $oauthApiContainer;

    /** @var OptimizationGoalPermissionsApiContainer */
    public $optimizationGoalPermissionsApiContainer;

    /** @var OrganizationAccountRelationApiContainer */
    public $organizationAccountRelationApiContainer;

    /** @var PagesApiContainer */
    public $pagesApiContainer;

    /** @var ProductCatalogsApiContainer */
    public $productCatalogsApiContainer;

    /** @var ProductItemsApiContainer */
    public $productItemsApiContainer;

    /** @var ProductSeriesApiContainer */
    public $productSeriesApiContainer;

    /** @var ProfilesApiContainer */
    public $profilesApiContainer;

    /** @var ProgrammedApiContainer */
    public $programmedApiContainer;

    /** @var ProgrammedTemplateApiContainer */
    public $programmedTemplateApiContainer;

    /** @var QualificationsApiContainer */
    public $qualificationsApiContainer;

    /** @var RealtimeCostApiContainer */
    public $realtimeCostApiContainer;

    /** @var ReviewElementPrereviewResultsApiContainer */
    public $reviewElementPrereviewResultsApiContainer;

    /** @var SceneSpecTagsApiContainer */
    public $sceneSpecTagsApiContainer;

    /** @var SubcustomerTransferApiContainer */
    public $subcustomerTransferApiContainer;

    /** @var TargetingTagReportsApiContainer */
    public $targetingTagReportsApiContainer;

    /** @var TargetingTagsApiContainer */
    public $targetingTagsApiContainer;

    /** @var TargetingTagsUvApiContainer */
    public $targetingTagsUvApiContainer;

    /** @var UnionPositionPackagesApiContainer */
    public $unionPositionPackagesApiContainer;

    /** @var UserActionSetReportsApiContainer */
    public $userActionSetReportsApiContainer;

    /** @var UserActionSetsApiContainer */
    public $userActionSetsApiContainer;

    /** @var UserActionsApiContainer */
    public $userActionsApiContainer;

    /** @var VideoChannelDealerDataApiContainer */
    public $videoChannelDealerDataApiContainer;

    /** @var VideoChannelFansDataApiContainer */
    public $videoChannelFansDataApiContainer;

    /** @var VideoChannelLeadsDataApiContainer */
    public $videoChannelLeadsDataApiContainer;

    /** @var VideoChannelLiveDataApiContainer */
    public $videoChannelLiveDataApiContainer;

    /** @var VideosApiContainer */
    public $videosApiContainer;

    /** @var WechatPagesApiContainer */
    public $wechatPagesApiContainer;

    /** @var WechatPagesCustomApiContainer */
    public $wechatPagesCustomApiContainer;

    /** @var WechatPagesGrantinfoApiContainer */
    public $wechatPagesGrantinfoApiContainer;

    /** @var WildcardsApiContainer */
    public $wildcardsApiContainer;

    /** @var WxPackageAccountApiContainer */
    public $wxPackageAccountApiContainer;

    /** @var WxPackagePackageApiContainer */
    public $wxPackagePackageApiContainer;

    /** @var XijingComplexTemplateApiContainer */
    public $xijingComplexTemplateApiContainer;

    /** @var XijingPageApiContainer */
    public $xijingPageApiContainer;

    /** @var XijingPageByComponentsApiContainer */
    public $xijingPageByComponentsApiContainer;

    /** @var XijingPageListApiContainer */
    public $xijingPageListApiContainer;

    /** @var XijingTemplateApiContainer */
    public $xijingTemplateApiContainer;

    /** @var XijingTemplateListApiContainer */
    public $xijingTemplateListApiContainer;


    /**
     * @return Client
     */
    public function getClient()
    {
        if (empty($this->client)) {
            $this->client = new Client();
        }
        return $this->client;
    }


    /**
     * @return AdDiagnosisApiContainer
     */
    public function adDiagnosis()
    {
        if (empty($this->adDiagnosisApiContainer)) {
            $container = new AdDiagnosisApiContainer();
            $container->init($this, $this->getClient());
            $this->adDiagnosisApiContainer = $container;
        }
        return $this->adDiagnosisApiContainer;
    }


    /**
     * @return AdParamApiContainer
     */
    public function adParam()
    {
        if (empty($this->adParamApiContainer)) {
            $container = new AdParamApiContainer();
            $container->init($this, $this->getClient());
            $this->adParamApiContainer = $container;
        }
        return $this->adParamApiContainer;
    }


    /**
     * @return AdUnionReportsApiContainer
     */
    public function adUnionReports()
    {
        if (empty($this->adUnionReportsApiContainer)) {
            $container = new AdUnionReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->adUnionReportsApiContainer = $container;
        }
        return $this->adUnionReportsApiContainer;
    }


    /**
     * @return AdcreativePreviewsApiContainer
     */
    public function adcreativePreviews()
    {
        if (empty($this->adcreativePreviewsApiContainer)) {
            $container = new AdcreativePreviewsApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativePreviewsApiContainer = $container;
        }
        return $this->adcreativePreviewsApiContainer;
    }


    /**
     * @return AdcreativePreviewsQrcodeApiContainer
     */
    public function adcreativePreviewsQrcode()
    {
        if (empty($this->adcreativePreviewsQrcodeApiContainer)) {
            $container = new AdcreativePreviewsQrcodeApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativePreviewsQrcodeApiContainer = $container;
        }
        return $this->adcreativePreviewsQrcodeApiContainer;
    }


    /**
     * @return AdgroupNegativewordsApiContainer
     */
    public function adgroupNegativewords()
    {
        if (empty($this->adgroupNegativewordsApiContainer)) {
            $container = new AdgroupNegativewordsApiContainer();
            $container->init($this, $this->getClient());
            $this->adgroupNegativewordsApiContainer = $container;
        }
        return $this->adgroupNegativewordsApiContainer;
    }


    /**
     * @return AdgroupsApiContainer
     */
    public function adgroups()
    {
        if (empty($this->adgroupsApiContainer)) {
            $container = new AdgroupsApiContainer();
            $container->init($this, $this->getClient());
            $this->adgroupsApiContainer = $container;
        }
        return $this->adgroupsApiContainer;
    }


    /**
     * @return AdvertiserApiContainer
     */
    public function advertiser()
    {
        if (empty($this->advertiserApiContainer)) {
            $container = new AdvertiserApiContainer();
            $container->init($this, $this->getClient());
            $this->advertiserApiContainer = $container;
        }
        return $this->advertiserApiContainer;
    }


    /**
     * @return AdvertiserDailyBudgetApiContainer
     */
    public function advertiserDailyBudget()
    {
        if (empty($this->advertiserDailyBudgetApiContainer)) {
            $container = new AdvertiserDailyBudgetApiContainer();
            $container->init($this, $this->getClient());
            $this->advertiserDailyBudgetApiContainer = $container;
        }
        return $this->advertiserDailyBudgetApiContainer;
    }


    /**
     * @return AgencyApiContainer
     */
    public function agency()
    {
        if (empty($this->agencyApiContainer)) {
            $container = new AgencyApiContainer();
            $container->init($this, $this->getClient());
            $this->agencyApiContainer = $container;
        }
        return $this->agencyApiContainer;
    }


    /**
     * @return AgencyRealtimeCostApiContainer
     */
    public function agencyRealtimeCost()
    {
        if (empty($this->agencyRealtimeCostApiContainer)) {
            $container = new AgencyRealtimeCostApiContainer();
            $container->init($this, $this->getClient());
            $this->agencyRealtimeCostApiContainer = $container;
        }
        return $this->agencyRealtimeCostApiContainer;
    }


    /**
     * @return AndroidChannelApiContainer
     */
    public function androidChannel()
    {
        if (empty($this->androidChannelApiContainer)) {
            $container = new AndroidChannelApiContainer();
            $container->init($this, $this->getClient());
            $this->androidChannelApiContainer = $container;
        }
        return $this->androidChannelApiContainer;
    }


    /**
     * @return AsyncReportFilesApiContainer
     */
    public function asyncReportFiles()
    {
        if (empty($this->asyncReportFilesApiContainer)) {
            $container = new AsyncReportFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->asyncReportFilesApiContainer = $container;
        }
        return $this->asyncReportFilesApiContainer;
    }


    /**
     * @return AsyncReportsApiContainer
     */
    public function asyncReports()
    {
        if (empty($this->asyncReportsApiContainer)) {
            $container = new AsyncReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->asyncReportsApiContainer = $container;
        }
        return $this->asyncReportsApiContainer;
    }


    /**
     * @return AsyncTasksApiContainer
     */
    public function asyncTasks()
    {
        if (empty($this->asyncTasksApiContainer)) {
            $container = new AsyncTasksApiContainer();
            $container->init($this, $this->getClient());
            $this->asyncTasksApiContainer = $container;
        }
        return $this->asyncTasksApiContainer;
    }


    /**
     * @return AudienceGrantRelationsApiContainer
     */
    public function audienceGrantRelations()
    {
        if (empty($this->audienceGrantRelationsApiContainer)) {
            $container = new AudienceGrantRelationsApiContainer();
            $container->init($this, $this->getClient());
            $this->audienceGrantRelationsApiContainer = $container;
        }
        return $this->audienceGrantRelationsApiContainer;
    }


    /**
     * @return BatchAsyncRequestSpecificationApiContainer
     */
    public function batchAsyncRequestSpecification()
    {
        if (empty($this->batchAsyncRequestSpecificationApiContainer)) {
            $container = new BatchAsyncRequestSpecificationApiContainer();
            $container->init($this, $this->getClient());
            $this->batchAsyncRequestSpecificationApiContainer = $container;
        }
        return $this->batchAsyncRequestSpecificationApiContainer;
    }


    /**
     * @return BatchAsyncRequestsApiContainer
     */
    public function batchAsyncRequests()
    {
        if (empty($this->batchAsyncRequestsApiContainer)) {
            $container = new BatchAsyncRequestsApiContainer();
            $container->init($this, $this->getClient());
            $this->batchAsyncRequestsApiContainer = $container;
        }
        return $this->batchAsyncRequestsApiContainer;
    }


    /**
     * @return BatchRequestsApiContainer
     */
    public function batchRequests()
    {
        if (empty($this->batchRequestsApiContainer)) {
            $container = new BatchRequestsApiContainer();
            $container->init($this, $this->getClient());
            $this->batchRequestsApiContainer = $container;
        }
        return $this->batchRequestsApiContainer;
    }


    /**
     * @return BidSimulationApiContainer
     */
    public function bidSimulation()
    {
        if (empty($this->bidSimulationApiContainer)) {
            $container = new BidSimulationApiContainer();
            $container->init($this, $this->getClient());
            $this->bidSimulationApiContainer = $container;
        }
        return $this->bidSimulationApiContainer;
    }


    /**
     * @return BidwordApiContainer
     */
    public function bidword()
    {
        if (empty($this->bidwordApiContainer)) {
            $container = new BidwordApiContainer();
            $container->init($this, $this->getClient());
            $this->bidwordApiContainer = $container;
        }
        return $this->bidwordApiContainer;
    }


    /**
     * @return BidwordFlowApiContainer
     */
    public function bidwordFlow()
    {
        if (empty($this->bidwordFlowApiContainer)) {
            $container = new BidwordFlowApiContainer();
            $container->init($this, $this->getClient());
            $this->bidwordFlowApiContainer = $container;
        }
        return $this->bidwordFlowApiContainer;
    }


    /**
     * @return BrandApiContainer
     */
    public function brand()
    {
        if (empty($this->brandApiContainer)) {
            $container = new BrandApiContainer();
            $container->init($this, $this->getClient());
            $this->brandApiContainer = $container;
        }
        return $this->brandApiContainer;
    }


    /**
     * @return BusinessPointApiContainer
     */
    public function businessPoint()
    {
        if (empty($this->businessPointApiContainer)) {
            $container = new BusinessPointApiContainer();
            $container->init($this, $this->getClient());
            $this->businessPointApiContainer = $container;
        }
        return $this->businessPointApiContainer;
    }


    /**
     * @return ComponentReviewResultsApiContainer
     */
    public function componentReviewResults()
    {
        if (empty($this->componentReviewResultsApiContainer)) {
            $container = new ComponentReviewResultsApiContainer();
            $container->init($this, $this->getClient());
            $this->componentReviewResultsApiContainer = $container;
        }
        return $this->componentReviewResultsApiContainer;
    }


    /**
     * @return ConversionsApiContainer
     */
    public function conversions()
    {
        if (empty($this->conversionsApiContainer)) {
            $container = new ConversionsApiContainer();
            $container->init($this, $this->getClient());
            $this->conversionsApiContainer = $container;
        }
        return $this->conversionsApiContainer;
    }


    /**
     * @return CreativeTemplateApiContainer
     */
    public function creativeTemplate()
    {
        if (empty($this->creativeTemplateApiContainer)) {
            $container = new CreativeTemplateApiContainer();
            $container->init($this, $this->getClient());
            $this->creativeTemplateApiContainer = $container;
        }
        return $this->creativeTemplateApiContainer;
    }


    /**
     * @return CreativeTemplateListApiContainer
     */
    public function creativeTemplateList()
    {
        if (empty($this->creativeTemplateListApiContainer)) {
            $container = new CreativeTemplateListApiContainer();
            $container->init($this, $this->getClient());
            $this->creativeTemplateListApiContainer = $container;
        }
        return $this->creativeTemplateListApiContainer;
    }


    /**
     * @return CreativeTemplatePreviewsApiContainer
     */
    public function creativeTemplatePreviews()
    {
        if (empty($this->creativeTemplatePreviewsApiContainer)) {
            $container = new CreativeTemplatePreviewsApiContainer();
            $container->init($this, $this->getClient());
            $this->creativeTemplatePreviewsApiContainer = $container;
        }
        return $this->creativeTemplatePreviewsApiContainer;
    }


    /**
     * @return CreativetoolsTextApiContainer
     */
    public function creativetoolsText()
    {
        if (empty($this->creativetoolsTextApiContainer)) {
            $container = new CreativetoolsTextApiContainer();
            $container->init($this, $this->getClient());
            $this->creativetoolsTextApiContainer = $container;
        }
        return $this->creativetoolsTextApiContainer;
    }


    /**
     * @return CustomAudienceEstimationsApiContainer
     */
    public function customAudienceEstimations()
    {
        if (empty($this->customAudienceEstimationsApiContainer)) {
            $container = new CustomAudienceEstimationsApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudienceEstimationsApiContainer = $container;
        }
        return $this->customAudienceEstimationsApiContainer;
    }


    /**
     * @return CustomAudienceFilesApiContainer
     */
    public function customAudienceFiles()
    {
        if (empty($this->customAudienceFilesApiContainer)) {
            $container = new CustomAudienceFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudienceFilesApiContainer = $container;
        }
        return $this->customAudienceFilesApiContainer;
    }


    /**
     * @return CustomAudiencesApiContainer
     */
    public function customAudiences()
    {
        if (empty($this->customAudiencesApiContainer)) {
            $container = new CustomAudiencesApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudiencesApiContainer = $container;
        }
        return $this->customAudiencesApiContainer;
    }


    /**
     * @return DailyBalanceReportApiContainer
     */
    public function dailyBalanceReport()
    {
        if (empty($this->dailyBalanceReportApiContainer)) {
            $container = new DailyBalanceReportApiContainer();
            $container->init($this, $this->getClient());
            $this->dailyBalanceReportApiContainer = $container;
        }
        return $this->dailyBalanceReportApiContainer;
    }


    /**
     * @return DailyReportsApiContainer
     */
    public function dailyReports()
    {
        if (empty($this->dailyReportsApiContainer)) {
            $container = new DailyReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->dailyReportsApiContainer = $container;
        }
        return $this->dailyReportsApiContainer;
    }


    /**
     * @return DataSourceDispatchApiContainer
     */
    public function dataSourceDispatch()
    {
        if (empty($this->dataSourceDispatchApiContainer)) {
            $container = new DataSourceDispatchApiContainer();
            $container->init($this, $this->getClient());
            $this->dataSourceDispatchApiContainer = $container;
        }
        return $this->dataSourceDispatchApiContainer;
    }


    /**
     * @return DynamicAdImageTemplatesApiContainer
     */
    public function dynamicAdImageTemplates()
    {
        if (empty($this->dynamicAdImageTemplatesApiContainer)) {
            $container = new DynamicAdImageTemplatesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicAdImageTemplatesApiContainer = $container;
        }
        return $this->dynamicAdImageTemplatesApiContainer;
    }


    /**
     * @return DynamicAdImagesApiContainer
     */
    public function dynamicAdImages()
    {
        if (empty($this->dynamicAdImagesApiContainer)) {
            $container = new DynamicAdImagesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicAdImagesApiContainer = $container;
        }
        return $this->dynamicAdImagesApiContainer;
    }


    /**
     * @return DynamicAdVideoApiContainer
     */
    public function dynamicAdVideo()
    {
        if (empty($this->dynamicAdVideoApiContainer)) {
            $container = new DynamicAdVideoApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicAdVideoApiContainer = $container;
        }
        return $this->dynamicAdVideoApiContainer;
    }


    /**
     * @return DynamicAdVideoTemplatesApiContainer
     */
    public function dynamicAdVideoTemplates()
    {
        if (empty($this->dynamicAdVideoTemplatesApiContainer)) {
            $container = new DynamicAdVideoTemplatesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicAdVideoTemplatesApiContainer = $container;
        }
        return $this->dynamicAdVideoTemplatesApiContainer;
    }


    /**
     * @return DynamicCreativeReviewResultsApiContainer
     */
    public function dynamicCreativeReviewResults()
    {
        if (empty($this->dynamicCreativeReviewResultsApiContainer)) {
            $container = new DynamicCreativeReviewResultsApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicCreativeReviewResultsApiContainer = $container;
        }
        return $this->dynamicCreativeReviewResultsApiContainer;
    }


    /**
     * @return DynamicCreativesApiContainer
     */
    public function dynamicCreatives()
    {
        if (empty($this->dynamicCreativesApiContainer)) {
            $container = new DynamicCreativesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicCreativesApiContainer = $container;
        }
        return $this->dynamicCreativesApiContainer;
    }


    /**
     * @return EcommerceOrderApiContainer
     */
    public function ecommerceOrder()
    {
        if (empty($this->ecommerceOrderApiContainer)) {
            $container = new EcommerceOrderApiContainer();
            $container->init($this, $this->getClient());
            $this->ecommerceOrderApiContainer = $container;
        }
        return $this->ecommerceOrderApiContainer;
    }


    /**
     * @return EstimationApiContainer
     */
    public function estimation()
    {
        if (empty($this->estimationApiContainer)) {
            $container = new EstimationApiContainer();
            $container->init($this, $this->getClient());
            $this->estimationApiContainer = $container;
        }
        return $this->estimationApiContainer;
    }


    /**
     * @return ExtendPackageApiContainer
     */
    public function extendPackage()
    {
        if (empty($this->extendPackageApiContainer)) {
            $container = new ExtendPackageApiContainer();
            $container->init($this, $this->getClient());
            $this->extendPackageApiContainer = $container;
        }
        return $this->extendPackageApiContainer;
    }


    /**
     * @return FundStatementsDetailedApiContainer
     */
    public function fundStatementsDetailed()
    {
        if (empty($this->fundStatementsDetailedApiContainer)) {
            $container = new FundStatementsDetailedApiContainer();
            $container->init($this, $this->getClient());
            $this->fundStatementsDetailedApiContainer = $container;
        }
        return $this->fundStatementsDetailedApiContainer;
    }


    /**
     * @return FundTransferApiContainer
     */
    public function fundTransfer()
    {
        if (empty($this->fundTransferApiContainer)) {
            $container = new FundTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->fundTransferApiContainer = $container;
        }
        return $this->fundTransferApiContainer;
    }


    /**
     * @return FundsApiContainer
     */
    public function funds()
    {
        if (empty($this->fundsApiContainer)) {
            $container = new FundsApiContainer();
            $container->init($this, $this->getClient());
            $this->fundsApiContainer = $container;
        }
        return $this->fundsApiContainer;
    }


    /**
     * @return GameFeatureApiContainer
     */
    public function gameFeature()
    {
        if (empty($this->gameFeatureApiContainer)) {
            $container = new GameFeatureApiContainer();
            $container->init($this, $this->getClient());
            $this->gameFeatureApiContainer = $container;
        }
        return $this->gameFeatureApiContainer;
    }


    /**
     * @return GameFeatureTagsApiContainer
     */
    public function gameFeatureTags()
    {
        if (empty($this->gameFeatureTagsApiContainer)) {
            $container = new GameFeatureTagsApiContainer();
            $container->init($this, $this->getClient());
            $this->gameFeatureTagsApiContainer = $container;
        }
        return $this->gameFeatureTagsApiContainer;
    }


    /**
     * @return HourlyReportsApiContainer
     */
    public function hourlyReports()
    {
        if (empty($this->hourlyReportsApiContainer)) {
            $container = new HourlyReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->hourlyReportsApiContainer = $container;
        }
        return $this->hourlyReportsApiContainer;
    }


    /**
     * @return ImagesApiContainer
     */
    public function images()
    {
        if (empty($this->imagesApiContainer)) {
            $container = new ImagesApiContainer();
            $container->init($this, $this->getClient());
            $this->imagesApiContainer = $container;
        }
        return $this->imagesApiContainer;
    }


    /**
     * @return KeywordRecommendApiContainer
     */
    public function keywordRecommend()
    {
        if (empty($this->keywordRecommendApiContainer)) {
            $container = new KeywordRecommendApiContainer();
            $container->init($this, $this->getClient());
            $this->keywordRecommendApiContainer = $container;
        }
        return $this->keywordRecommendApiContainer;
    }


    /**
     * @return LabelsApiContainer
     */
    public function labels()
    {
        if (empty($this->labelsApiContainer)) {
            $container = new LabelsApiContainer();
            $container->init($this, $this->getClient());
            $this->labelsApiContainer = $container;
        }
        return $this->labelsApiContainer;
    }


    /**
     * @return LandingPageSellStrategyApiContainer
     */
    public function landingPageSellStrategy()
    {
        if (empty($this->landingPageSellStrategyApiContainer)) {
            $container = new LandingPageSellStrategyApiContainer();
            $container->init($this, $this->getClient());
            $this->landingPageSellStrategyApiContainer = $container;
        }
        return $this->landingPageSellStrategyApiContainer;
    }


    /**
     * @return LeadsActionTypeReportApiContainer
     */
    public function leadsActionTypeReport()
    {
        if (empty($this->leadsActionTypeReportApiContainer)) {
            $container = new LeadsActionTypeReportApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsActionTypeReportApiContainer = $container;
        }
        return $this->leadsActionTypeReportApiContainer;
    }


    /**
     * @return LeadsApiContainer
     */
    public function leads()
    {
        if (empty($this->leadsApiContainer)) {
            $container = new LeadsApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsApiContainer = $container;
        }
        return $this->leadsApiContainer;
    }


    /**
     * @return LeadsCallRecordApiContainer
     */
    public function leadsCallRecord()
    {
        if (empty($this->leadsCallRecordApiContainer)) {
            $container = new LeadsCallRecordApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsCallRecordApiContainer = $container;
        }
        return $this->leadsCallRecordApiContainer;
    }


    /**
     * @return LeadsCallRecordsApiContainer
     */
    public function leadsCallRecords()
    {
        if (empty($this->leadsCallRecordsApiContainer)) {
            $container = new LeadsCallRecordsApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsCallRecordsApiContainer = $container;
        }
        return $this->leadsCallRecordsApiContainer;
    }


    /**
     * @return LeadsCallVirtualNumberApiContainer
     */
    public function leadsCallVirtualNumber()
    {
        if (empty($this->leadsCallVirtualNumberApiContainer)) {
            $container = new LeadsCallVirtualNumberApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsCallVirtualNumberApiContainer = $container;
        }
        return $this->leadsCallVirtualNumberApiContainer;
    }


    /**
     * @return LeadsClaimApiContainer
     */
    public function leadsClaim()
    {
        if (empty($this->leadsClaimApiContainer)) {
            $container = new LeadsClaimApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsClaimApiContainer = $container;
        }
        return $this->leadsClaimApiContainer;
    }


    /**
     * @return LeadsInvalidPayApiContainer
     */
    public function leadsInvalidPay()
    {
        if (empty($this->leadsInvalidPayApiContainer)) {
            $container = new LeadsInvalidPayApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsInvalidPayApiContainer = $container;
        }
        return $this->leadsInvalidPayApiContainer;
    }


    /**
     * @return LeadsListApiContainer
     */
    public function leadsList()
    {
        if (empty($this->leadsListApiContainer)) {
            $container = new LeadsListApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsListApiContainer = $container;
        }
        return $this->leadsListApiContainer;
    }


    /**
     * @return LeadsStatusApiContainer
     */
    public function leadsStatus()
    {
        if (empty($this->leadsStatusApiContainer)) {
            $container = new LeadsStatusApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsStatusApiContainer = $container;
        }
        return $this->leadsStatusApiContainer;
    }


    /**
     * @return LeadsVoipCallApiContainer
     */
    public function leadsVoipCall()
    {
        if (empty($this->leadsVoipCallApiContainer)) {
            $container = new LeadsVoipCallApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsVoipCallApiContainer = $container;
        }
        return $this->leadsVoipCallApiContainer;
    }


    /**
     * @return LeadsVoipCallTokenApiContainer
     */
    public function leadsVoipCallToken()
    {
        if (empty($this->leadsVoipCallTokenApiContainer)) {
            $container = new LeadsVoipCallTokenApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsVoipCallTokenApiContainer = $container;
        }
        return $this->leadsVoipCallTokenApiContainer;
    }


    /**
     * @return LiveRoomComponentStatusApiContainer
     */
    public function liveRoomComponentStatus()
    {
        if (empty($this->liveRoomComponentStatusApiContainer)) {
            $container = new LiveRoomComponentStatusApiContainer();
            $container->init($this, $this->getClient());
            $this->liveRoomComponentStatusApiContainer = $container;
        }
        return $this->liveRoomComponentStatusApiContainer;
    }


    /**
     * @return LiveRoomComponentsApiContainer
     */
    public function liveRoomComponents()
    {
        if (empty($this->liveRoomComponentsApiContainer)) {
            $container = new LiveRoomComponentsApiContainer();
            $container->init($this, $this->getClient());
            $this->liveRoomComponentsApiContainer = $container;
        }
        return $this->liveRoomComponentsApiContainer;
    }


    /**
     * @return LocalStoresAddressParsingResultApiContainer
     */
    public function localStoresAddressParsingResult()
    {
        if (empty($this->localStoresAddressParsingResultApiContainer)) {
            $container = new LocalStoresAddressParsingResultApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresAddressParsingResultApiContainer = $container;
        }
        return $this->localStoresAddressParsingResultApiContainer;
    }


    /**
     * @return LocalStoresApiContainer
     */
    public function localStores()
    {
        if (empty($this->localStoresApiContainer)) {
            $container = new LocalStoresApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresApiContainer = $container;
        }
        return $this->localStoresApiContainer;
    }


    /**
     * @return LocalStoresCategoriesApiContainer
     */
    public function localStoresCategories()
    {
        if (empty($this->localStoresCategoriesApiContainer)) {
            $container = new LocalStoresCategoriesApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresCategoriesApiContainer = $container;
        }
        return $this->localStoresCategoriesApiContainer;
    }


    /**
     * @return LocalStoresSearchInfoApiContainer
     */
    public function localStoresSearchInfo()
    {
        if (empty($this->localStoresSearchInfoApiContainer)) {
            $container = new LocalStoresSearchInfoApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresSearchInfoApiContainer = $container;
        }
        return $this->localStoresSearchInfoApiContainer;
    }


    /**
     * @return LocalStoresWxpayMerchantsApiContainer
     */
    public function localStoresWxpayMerchants()
    {
        if (empty($this->localStoresWxpayMerchantsApiContainer)) {
            $container = new LocalStoresWxpayMerchantsApiContainer();
            $container->init($this, $this->getClient());
            $this->localStoresWxpayMerchantsApiContainer = $container;
        }
        return $this->localStoresWxpayMerchantsApiContainer;
    }


    /**
     * @return MarketingTargetAssetCategoriesApiContainer
     */
    public function marketingTargetAssetCategories()
    {
        if (empty($this->marketingTargetAssetCategoriesApiContainer)) {
            $container = new MarketingTargetAssetCategoriesApiContainer();
            $container->init($this, $this->getClient());
            $this->marketingTargetAssetCategoriesApiContainer = $container;
        }
        return $this->marketingTargetAssetCategoriesApiContainer;
    }


    /**
     * @return MarketingTargetAssetDetailApiContainer
     */
    public function marketingTargetAssetDetail()
    {
        if (empty($this->marketingTargetAssetDetailApiContainer)) {
            $container = new MarketingTargetAssetDetailApiContainer();
            $container->init($this, $this->getClient());
            $this->marketingTargetAssetDetailApiContainer = $container;
        }
        return $this->marketingTargetAssetDetailApiContainer;
    }


    /**
     * @return MarketingTargetAssetPropertiesApiContainer
     */
    public function marketingTargetAssetProperties()
    {
        if (empty($this->marketingTargetAssetPropertiesApiContainer)) {
            $container = new MarketingTargetAssetPropertiesApiContainer();
            $container->init($this, $this->getClient());
            $this->marketingTargetAssetPropertiesApiContainer = $container;
        }
        return $this->marketingTargetAssetPropertiesApiContainer;
    }


    /**
     * @return MarketingTargetAssetPropertyValuesApiContainer
     */
    public function marketingTargetAssetPropertyValues()
    {
        if (empty($this->marketingTargetAssetPropertyValuesApiContainer)) {
            $container = new MarketingTargetAssetPropertyValuesApiContainer();
            $container->init($this, $this->getClient());
            $this->marketingTargetAssetPropertyValuesApiContainer = $container;
        }
        return $this->marketingTargetAssetPropertyValuesApiContainer;
    }


    /**
     * @return MarketingTargetAssetsApiContainer
     */
    public function marketingTargetAssets()
    {
        if (empty($this->marketingTargetAssetsApiContainer)) {
            $container = new MarketingTargetAssetsApiContainer();
            $container->init($this, $this->getClient());
            $this->marketingTargetAssetsApiContainer = $container;
        }
        return $this->marketingTargetAssetsApiContainer;
    }


    /**
     * @return MarketingTargetTypesApiContainer
     */
    public function marketingTargetTypes()
    {
        if (empty($this->marketingTargetTypesApiContainer)) {
            $container = new MarketingTargetTypesApiContainer();
            $container->init($this, $this->getClient());
            $this->marketingTargetTypesApiContainer = $container;
        }
        return $this->marketingTargetTypesApiContainer;
    }


    /**
     * @return MaterialDcatagApiContainer
     */
    public function materialDcatag()
    {
        if (empty($this->materialDcatagApiContainer)) {
            $container = new MaterialDcatagApiContainer();
            $container->init($this, $this->getClient());
            $this->materialDcatagApiContainer = $container;
        }
        return $this->materialDcatagApiContainer;
    }


    /**
     * @return MaterialLabelsApiContainer
     */
    public function materialLabels()
    {
        if (empty($this->materialLabelsApiContainer)) {
            $container = new MaterialLabelsApiContainer();
            $container->init($this, $this->getClient());
            $this->materialLabelsApiContainer = $container;
        }
        return $this->materialLabelsApiContainer;
    }


    /**
     * @return MergeFundTypeDailyBalanceReportApiContainer
     */
    public function mergeFundTypeDailyBalanceReport()
    {
        if (empty($this->mergeFundTypeDailyBalanceReportApiContainer)) {
            $container = new MergeFundTypeDailyBalanceReportApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeDailyBalanceReportApiContainer = $container;
        }
        return $this->mergeFundTypeDailyBalanceReportApiContainer;
    }


    /**
     * @return MergeFundTypeFundStatementsDetailedApiContainer
     */
    public function mergeFundTypeFundStatementsDetailed()
    {
        if (empty($this->mergeFundTypeFundStatementsDetailedApiContainer)) {
            $container = new MergeFundTypeFundStatementsDetailedApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeFundStatementsDetailedApiContainer = $container;
        }
        return $this->mergeFundTypeFundStatementsDetailedApiContainer;
    }


    /**
     * @return MergeFundTypeFundsApiContainer
     */
    public function mergeFundTypeFunds()
    {
        if (empty($this->mergeFundTypeFundsApiContainer)) {
            $container = new MergeFundTypeFundsApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeFundsApiContainer = $container;
        }
        return $this->mergeFundTypeFundsApiContainer;
    }


    /**
     * @return MergeFundTypeSubcustomerTransferApiContainer
     */
    public function mergeFundTypeSubcustomerTransfer()
    {
        if (empty($this->mergeFundTypeSubcustomerTransferApiContainer)) {
            $container = new MergeFundTypeSubcustomerTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->mergeFundTypeSubcustomerTransferApiContainer = $container;
        }
        return $this->mergeFundTypeSubcustomerTransferApiContainer;
    }


    /**
     * @return OauthApiContainer
     */
    public function oauth()
    {
        if (empty($this->oauthApiContainer)) {
            $container = new OauthApiContainer();
            $container->init($this, $this->getClient());
            $this->oauthApiContainer = $container;
        }
        return $this->oauthApiContainer;
    }


    /**
     * @return OptimizationGoalPermissionsApiContainer
     */
    public function optimizationGoalPermissions()
    {
        if (empty($this->optimizationGoalPermissionsApiContainer)) {
            $container = new OptimizationGoalPermissionsApiContainer();
            $container->init($this, $this->getClient());
            $this->optimizationGoalPermissionsApiContainer = $container;
        }
        return $this->optimizationGoalPermissionsApiContainer;
    }


    /**
     * @return OrganizationAccountRelationApiContainer
     */
    public function organizationAccountRelation()
    {
        if (empty($this->organizationAccountRelationApiContainer)) {
            $container = new OrganizationAccountRelationApiContainer();
            $container->init($this, $this->getClient());
            $this->organizationAccountRelationApiContainer = $container;
        }
        return $this->organizationAccountRelationApiContainer;
    }


    /**
     * @return PagesApiContainer
     */
    public function pages()
    {
        if (empty($this->pagesApiContainer)) {
            $container = new PagesApiContainer();
            $container->init($this, $this->getClient());
            $this->pagesApiContainer = $container;
        }
        return $this->pagesApiContainer;
    }


    /**
     * @return ProductCatalogsApiContainer
     */
    public function productCatalogs()
    {
        if (empty($this->productCatalogsApiContainer)) {
            $container = new ProductCatalogsApiContainer();
            $container->init($this, $this->getClient());
            $this->productCatalogsApiContainer = $container;
        }
        return $this->productCatalogsApiContainer;
    }


    /**
     * @return ProductItemsApiContainer
     */
    public function productItems()
    {
        if (empty($this->productItemsApiContainer)) {
            $container = new ProductItemsApiContainer();
            $container->init($this, $this->getClient());
            $this->productItemsApiContainer = $container;
        }
        return $this->productItemsApiContainer;
    }


    /**
     * @return ProductSeriesApiContainer
     */
    public function productSeries()
    {
        if (empty($this->productSeriesApiContainer)) {
            $container = new ProductSeriesApiContainer();
            $container->init($this, $this->getClient());
            $this->productSeriesApiContainer = $container;
        }
        return $this->productSeriesApiContainer;
    }


    /**
     * @return ProfilesApiContainer
     */
    public function profiles()
    {
        if (empty($this->profilesApiContainer)) {
            $container = new ProfilesApiContainer();
            $container->init($this, $this->getClient());
            $this->profilesApiContainer = $container;
        }
        return $this->profilesApiContainer;
    }


    /**
     * @return ProgrammedApiContainer
     */
    public function programmed()
    {
        if (empty($this->programmedApiContainer)) {
            $container = new ProgrammedApiContainer();
            $container->init($this, $this->getClient());
            $this->programmedApiContainer = $container;
        }
        return $this->programmedApiContainer;
    }


    /**
     * @return ProgrammedTemplateApiContainer
     */
    public function programmedTemplate()
    {
        if (empty($this->programmedTemplateApiContainer)) {
            $container = new ProgrammedTemplateApiContainer();
            $container->init($this, $this->getClient());
            $this->programmedTemplateApiContainer = $container;
        }
        return $this->programmedTemplateApiContainer;
    }


    /**
     * @return QualificationsApiContainer
     */
    public function qualifications()
    {
        if (empty($this->qualificationsApiContainer)) {
            $container = new QualificationsApiContainer();
            $container->init($this, $this->getClient());
            $this->qualificationsApiContainer = $container;
        }
        return $this->qualificationsApiContainer;
    }


    /**
     * @return RealtimeCostApiContainer
     */
    public function realtimeCost()
    {
        if (empty($this->realtimeCostApiContainer)) {
            $container = new RealtimeCostApiContainer();
            $container->init($this, $this->getClient());
            $this->realtimeCostApiContainer = $container;
        }
        return $this->realtimeCostApiContainer;
    }


    /**
     * @return ReviewElementPrereviewResultsApiContainer
     */
    public function reviewElementPrereviewResults()
    {
        if (empty($this->reviewElementPrereviewResultsApiContainer)) {
            $container = new ReviewElementPrereviewResultsApiContainer();
            $container->init($this, $this->getClient());
            $this->reviewElementPrereviewResultsApiContainer = $container;
        }
        return $this->reviewElementPrereviewResultsApiContainer;
    }


    /**
     * @return SceneSpecTagsApiContainer
     */
    public function sceneSpecTags()
    {
        if (empty($this->sceneSpecTagsApiContainer)) {
            $container = new SceneSpecTagsApiContainer();
            $container->init($this, $this->getClient());
            $this->sceneSpecTagsApiContainer = $container;
        }
        return $this->sceneSpecTagsApiContainer;
    }


    /**
     * @return SubcustomerTransferApiContainer
     */
    public function subcustomerTransfer()
    {
        if (empty($this->subcustomerTransferApiContainer)) {
            $container = new SubcustomerTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->subcustomerTransferApiContainer = $container;
        }
        return $this->subcustomerTransferApiContainer;
    }


    /**
     * @return TargetingTagReportsApiContainer
     */
    public function targetingTagReports()
    {
        if (empty($this->targetingTagReportsApiContainer)) {
            $container = new TargetingTagReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->targetingTagReportsApiContainer = $container;
        }
        return $this->targetingTagReportsApiContainer;
    }


    /**
     * @return TargetingTagsApiContainer
     */
    public function targetingTags()
    {
        if (empty($this->targetingTagsApiContainer)) {
            $container = new TargetingTagsApiContainer();
            $container->init($this, $this->getClient());
            $this->targetingTagsApiContainer = $container;
        }
        return $this->targetingTagsApiContainer;
    }


    /**
     * @return TargetingTagsUvApiContainer
     */
    public function targetingTagsUv()
    {
        if (empty($this->targetingTagsUvApiContainer)) {
            $container = new TargetingTagsUvApiContainer();
            $container->init($this, $this->getClient());
            $this->targetingTagsUvApiContainer = $container;
        }
        return $this->targetingTagsUvApiContainer;
    }


    /**
     * @return UnionPositionPackagesApiContainer
     */
    public function unionPositionPackages()
    {
        if (empty($this->unionPositionPackagesApiContainer)) {
            $container = new UnionPositionPackagesApiContainer();
            $container->init($this, $this->getClient());
            $this->unionPositionPackagesApiContainer = $container;
        }
        return $this->unionPositionPackagesApiContainer;
    }


    /**
     * @return UserActionSetReportsApiContainer
     */
    public function userActionSetReports()
    {
        if (empty($this->userActionSetReportsApiContainer)) {
            $container = new UserActionSetReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->userActionSetReportsApiContainer = $container;
        }
        return $this->userActionSetReportsApiContainer;
    }


    /**
     * @return UserActionSetsApiContainer
     */
    public function userActionSets()
    {
        if (empty($this->userActionSetsApiContainer)) {
            $container = new UserActionSetsApiContainer();
            $container->init($this, $this->getClient());
            $this->userActionSetsApiContainer = $container;
        }
        return $this->userActionSetsApiContainer;
    }


    /**
     * @return UserActionsApiContainer
     */
    public function userActions()
    {
        if (empty($this->userActionsApiContainer)) {
            $container = new UserActionsApiContainer();
            $container->init($this, $this->getClient());
            $this->userActionsApiContainer = $container;
        }
        return $this->userActionsApiContainer;
    }


    /**
     * @return VideoChannelDealerDataApiContainer
     */
    public function videoChannelDealerData()
    {
        if (empty($this->videoChannelDealerDataApiContainer)) {
            $container = new VideoChannelDealerDataApiContainer();
            $container->init($this, $this->getClient());
            $this->videoChannelDealerDataApiContainer = $container;
        }
        return $this->videoChannelDealerDataApiContainer;
    }


    /**
     * @return VideoChannelFansDataApiContainer
     */
    public function videoChannelFansData()
    {
        if (empty($this->videoChannelFansDataApiContainer)) {
            $container = new VideoChannelFansDataApiContainer();
            $container->init($this, $this->getClient());
            $this->videoChannelFansDataApiContainer = $container;
        }
        return $this->videoChannelFansDataApiContainer;
    }


    /**
     * @return VideoChannelLeadsDataApiContainer
     */
    public function videoChannelLeadsData()
    {
        if (empty($this->videoChannelLeadsDataApiContainer)) {
            $container = new VideoChannelLeadsDataApiContainer();
            $container->init($this, $this->getClient());
            $this->videoChannelLeadsDataApiContainer = $container;
        }
        return $this->videoChannelLeadsDataApiContainer;
    }


    /**
     * @return VideoChannelLiveDataApiContainer
     */
    public function videoChannelLiveData()
    {
        if (empty($this->videoChannelLiveDataApiContainer)) {
            $container = new VideoChannelLiveDataApiContainer();
            $container->init($this, $this->getClient());
            $this->videoChannelLiveDataApiContainer = $container;
        }
        return $this->videoChannelLiveDataApiContainer;
    }


    /**
     * @return VideosApiContainer
     */
    public function videos()
    {
        if (empty($this->videosApiContainer)) {
            $container = new VideosApiContainer();
            $container->init($this, $this->getClient());
            $this->videosApiContainer = $container;
        }
        return $this->videosApiContainer;
    }


    /**
     * @return WechatPagesApiContainer
     */
    public function wechatPages()
    {
        if (empty($this->wechatPagesApiContainer)) {
            $container = new WechatPagesApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesApiContainer = $container;
        }
        return $this->wechatPagesApiContainer;
    }


    /**
     * @return WechatPagesCustomApiContainer
     */
    public function wechatPagesCustom()
    {
        if (empty($this->wechatPagesCustomApiContainer)) {
            $container = new WechatPagesCustomApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesCustomApiContainer = $container;
        }
        return $this->wechatPagesCustomApiContainer;
    }


    /**
     * @return WechatPagesGrantinfoApiContainer
     */
    public function wechatPagesGrantinfo()
    {
        if (empty($this->wechatPagesGrantinfoApiContainer)) {
            $container = new WechatPagesGrantinfoApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesGrantinfoApiContainer = $container;
        }
        return $this->wechatPagesGrantinfoApiContainer;
    }


    /**
     * @return WildcardsApiContainer
     */
    public function wildcards()
    {
        if (empty($this->wildcardsApiContainer)) {
            $container = new WildcardsApiContainer();
            $container->init($this, $this->getClient());
            $this->wildcardsApiContainer = $container;
        }
        return $this->wildcardsApiContainer;
    }


    /**
     * @return WxPackageAccountApiContainer
     */
    public function wxPackageAccount()
    {
        if (empty($this->wxPackageAccountApiContainer)) {
            $container = new WxPackageAccountApiContainer();
            $container->init($this, $this->getClient());
            $this->wxPackageAccountApiContainer = $container;
        }
        return $this->wxPackageAccountApiContainer;
    }


    /**
     * @return WxPackagePackageApiContainer
     */
    public function wxPackagePackage()
    {
        if (empty($this->wxPackagePackageApiContainer)) {
            $container = new WxPackagePackageApiContainer();
            $container->init($this, $this->getClient());
            $this->wxPackagePackageApiContainer = $container;
        }
        return $this->wxPackagePackageApiContainer;
    }


    /**
     * @return XijingComplexTemplateApiContainer
     */
    public function xijingComplexTemplate()
    {
        if (empty($this->xijingComplexTemplateApiContainer)) {
            $container = new XijingComplexTemplateApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingComplexTemplateApiContainer = $container;
        }
        return $this->xijingComplexTemplateApiContainer;
    }


    /**
     * @return XijingPageApiContainer
     */
    public function xijingPage()
    {
        if (empty($this->xijingPageApiContainer)) {
            $container = new XijingPageApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingPageApiContainer = $container;
        }
        return $this->xijingPageApiContainer;
    }


    /**
     * @return XijingPageByComponentsApiContainer
     */
    public function xijingPageByComponents()
    {
        if (empty($this->xijingPageByComponentsApiContainer)) {
            $container = new XijingPageByComponentsApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingPageByComponentsApiContainer = $container;
        }
        return $this->xijingPageByComponentsApiContainer;
    }


    /**
     * @return XijingPageListApiContainer
     */
    public function xijingPageList()
    {
        if (empty($this->xijingPageListApiContainer)) {
            $container = new XijingPageListApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingPageListApiContainer = $container;
        }
        return $this->xijingPageListApiContainer;
    }


    /**
     * @return XijingTemplateApiContainer
     */
    public function xijingTemplate()
    {
        if (empty($this->xijingTemplateApiContainer)) {
            $container = new XijingTemplateApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingTemplateApiContainer = $container;
        }
        return $this->xijingTemplateApiContainer;
    }


    /**
     * @return XijingTemplateListApiContainer
     */
    public function xijingTemplateList()
    {
        if (empty($this->xijingTemplateListApiContainer)) {
            $container = new XijingTemplateListApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingTemplateListApiContainer = $container;
        }
        return $this->xijingTemplateListApiContainer;
    }
}
