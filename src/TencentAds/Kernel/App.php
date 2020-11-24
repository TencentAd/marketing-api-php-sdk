<?php
namespace TencentAds\Kernel;

use GuzzleHttp\Client;
use TencentAds\Container\AdDiagnosisApiContainer;
use TencentAds\Container\AdcreativePreviewsApiContainer;
use TencentAds\Container\AdcreativeTemplateDetailApiContainer;
use TencentAds\Container\AdcreativeTemplatePreviewApiContainer;
use TencentAds\Container\AdcreativeTemplatePreviewsApiContainer;
use TencentAds\Container\AdcreativeTemplatesApiContainer;
use TencentAds\Container\AdcreativesApiContainer;
use TencentAds\Container\AdcreativesRelatedCapabilityApiContainer;
use TencentAds\Container\AdgroupsApiContainer;
use TencentAds\Container\AdsApiContainer;
use TencentAds\Container\AdvertiserApiContainer;
use TencentAds\Container\AndroidChannelPackagesApiContainer;
use TencentAds\Container\AndroidUnionChannelPackagesApiContainer;
use TencentAds\Container\AssetPermissionsApiContainer;
use TencentAds\Container\AsyncReportFilesApiContainer;
use TencentAds\Container\AsyncReportsApiContainer;
use TencentAds\Container\AsyncTaskFilesApiContainer;
use TencentAds\Container\AsyncTasksApiContainer;
use TencentAds\Container\AudienceGrantRelationsApiContainer;
use TencentAds\Container\AuthorizationApiContainer;
use TencentAds\Container\BatchAsyncRequestSpecificationApiContainer;
use TencentAds\Container\BatchAsyncRequestsApiContainer;
use TencentAds\Container\BatchOperationApiContainer;
use TencentAds\Container\BatchRequestsApiContainer;
use TencentAds\Container\BidSimulationApiContainer;
use TencentAds\Container\BrandApiContainer;
use TencentAds\Container\BusinessManagerRelationsApiContainer;
use TencentAds\Container\BusinessMdmAccountRelationsApiContainer;
use TencentAds\Container\CampaignsApiContainer;
use TencentAds\Container\CapabilitiesApiContainer;
use TencentAds\Container\ChannelsApiContainer;
use TencentAds\Container\ComplianceValidationApiContainer;
use TencentAds\Container\ConversionsApiContainer;
use TencentAds\Container\CreativetoolsTextApiContainer;
use TencentAds\Container\CustomAudienceEstimationsApiContainer;
use TencentAds\Container\CustomAudienceFilesApiContainer;
use TencentAds\Container\CustomAudienceInsightsApiContainer;
use TencentAds\Container\CustomAudienceReportsApiContainer;
use TencentAds\Container\CustomAudiencesApiContainer;
use TencentAds\Container\CustomDataSaltApiContainer;
use TencentAds\Container\CustomFeaturesApiContainer;
use TencentAds\Container\CustomTagFilesApiContainer;
use TencentAds\Container\CustomTagsApiContainer;
use TencentAds\Container\DailyCostApiContainer;
use TencentAds\Container\DailyReportsApiContainer;
use TencentAds\Container\DiagnosisApiContainer;
use TencentAds\Container\DynamicAdImagesApiContainer;
use TencentAds\Container\DynamicAdTemplatesApiContainer;
use TencentAds\Container\DynamicAdVideoApiContainer;
use TencentAds\Container\DynamicCreativesApiContainer;
use TencentAds\Container\EcommerceOrderApiContainer;
use TencentAds\Container\EstimationApiContainer;
use TencentAds\Container\FundStatementsDailyApiContainer;
use TencentAds\Container\FundStatementsDetailedApiContainer;
use TencentAds\Container\FundTransferApiContainer;
use TencentAds\Container\FundsApiContainer;
use TencentAds\Container\HourlyReportsApiContainer;
use TencentAds\Container\ImageProcessingApiContainer;
use TencentAds\Container\ImagesApiContainer;
use TencentAds\Container\LabelAudiencesApiContainer;
use TencentAds\Container\LabelsApiContainer;
use TencentAds\Container\LeadCluesApiContainer;
use TencentAds\Container\LeadsFormApiContainer;
use TencentAds\Container\LeadsFormListApiContainer;
use TencentAds\Container\LocalApiContainer;
use TencentAds\Container\LocalEndadsmanuallyApiContainer;
use TencentAds\Container\LocalEstimatedamountApiContainer;
use TencentAds\Container\LocalStoresAddressParsingResultApiContainer;
use TencentAds\Container\LocalStoresApiContainer;
use TencentAds\Container\LocalStoresSearchInfoApiContainer;
use TencentAds\Container\OauthApiContainer;
use TencentAds\Container\OptimizationGoalPermissionsApiContainer;
use TencentAds\Container\PagesApiContainer;
use TencentAds\Container\PlayablePagesApiContainer;
use TencentAds\Container\ProductCatalogsApiContainer;
use TencentAds\Container\ProductCatalogsReportsApiContainer;
use TencentAds\Container\ProductCategoriesListApiContainer;
use TencentAds\Container\ProductItemsApiContainer;
use TencentAds\Container\ProductItemsDetailApiContainer;
use TencentAds\Container\ProductItemsVerticalsApiContainer;
use TencentAds\Container\ProductsSystemStatusApiContainer;
use TencentAds\Container\ProfilesApiContainer;
use TencentAds\Container\PromotedObjectsApiContainer;
use TencentAds\Container\QualificationsApiContainer;
use TencentAds\Container\RealtimeCostApiContainer;
use TencentAds\Container\ReportApiContainer;
use TencentAds\Container\ShopApiContainer;
use TencentAds\Container\SplitTestsApiContainer;
use TencentAds\Container\SystemStatusApiContainer;
use TencentAds\Container\TargetingTagReportsApiContainer;
use TencentAds\Container\TargetingTagsApiContainer;
use TencentAds\Container\TargetingsApiContainer;
use TencentAds\Container\TrackingReportsApiContainer;
use TencentAds\Container\UnionPositionPackagesApiContainer;
use TencentAds\Container\UserActionSetReportsApiContainer;
use TencentAds\Container\UserActionSetsApiContainer;
use TencentAds\Container\UserActionsApiContainer;
use TencentAds\Container\UserPropertiesApiContainer;
use TencentAds\Container\UserPropertySetsApiContainer;
use TencentAds\Container\VideomakerAutoadjustmentsApiContainer;
use TencentAds\Container\VideomakerSubtitlesApiContainer;
use TencentAds\Container\VideomakerTasksApiContainer;
use TencentAds\Container\VideosApiContainer;
use TencentAds\Container\WechatAdFollowersApiContainer;
use TencentAds\Container\WechatAdLabelsApiContainer;
use TencentAds\Container\WechatAdvertiserApiContainer;
use TencentAds\Container\WechatAdvertiserDetailApiContainer;
use TencentAds\Container\WechatAdvertiserLocalBusinessApiContainer;
use TencentAds\Container\WechatAdvertiserSpecificationApiContainer;
use TencentAds\Container\WechatAgencyApiContainer;
use TencentAds\Container\WechatDailyCostApiContainer;
use TencentAds\Container\WechatFundStatementsDetailedApiContainer;
use TencentAds\Container\WechatFundTransferApiContainer;
use TencentAds\Container\WechatFundsApiContainer;
use TencentAds\Container\WechatPagesApiContainer;
use TencentAds\Container\WechatQualificationsApiContainer;
use TencentAds\Container\XijingPageApiContainer;
use TencentAds\Container\XijingPageByComponentsApiContainer;
use TencentAds\Container\XijingPageListApiContainer;
use TencentAds\Container\XijingTemplateApiContainer;

class App
{
    /** @var Client */
    public $client;

    /** @var AdDiagnosisApiContainer */
    public $adDiagnosisApiContainer;

    /** @var AdcreativePreviewsApiContainer */
    public $adcreativePreviewsApiContainer;

    /** @var AdcreativeTemplateDetailApiContainer */
    public $adcreativeTemplateDetailApiContainer;

    /** @var AdcreativeTemplatePreviewApiContainer */
    public $adcreativeTemplatePreviewApiContainer;

    /** @var AdcreativeTemplatePreviewsApiContainer */
    public $adcreativeTemplatePreviewsApiContainer;

    /** @var AdcreativeTemplatesApiContainer */
    public $adcreativeTemplatesApiContainer;

    /** @var AdcreativesApiContainer */
    public $adcreativesApiContainer;

    /** @var AdcreativesRelatedCapabilityApiContainer */
    public $adcreativesRelatedCapabilityApiContainer;

    /** @var AdgroupsApiContainer */
    public $adgroupsApiContainer;

    /** @var AdsApiContainer */
    public $adsApiContainer;

    /** @var AdvertiserApiContainer */
    public $advertiserApiContainer;

    /** @var AndroidChannelPackagesApiContainer */
    public $androidChannelPackagesApiContainer;

    /** @var AndroidUnionChannelPackagesApiContainer */
    public $androidUnionChannelPackagesApiContainer;

    /** @var AssetPermissionsApiContainer */
    public $assetPermissionsApiContainer;

    /** @var AsyncReportFilesApiContainer */
    public $asyncReportFilesApiContainer;

    /** @var AsyncReportsApiContainer */
    public $asyncReportsApiContainer;

    /** @var AsyncTaskFilesApiContainer */
    public $asyncTaskFilesApiContainer;

    /** @var AsyncTasksApiContainer */
    public $asyncTasksApiContainer;

    /** @var AudienceGrantRelationsApiContainer */
    public $audienceGrantRelationsApiContainer;

    /** @var AuthorizationApiContainer */
    public $authorizationApiContainer;

    /** @var BatchAsyncRequestSpecificationApiContainer */
    public $batchAsyncRequestSpecificationApiContainer;

    /** @var BatchAsyncRequestsApiContainer */
    public $batchAsyncRequestsApiContainer;

    /** @var BatchOperationApiContainer */
    public $batchOperationApiContainer;

    /** @var BatchRequestsApiContainer */
    public $batchRequestsApiContainer;

    /** @var BidSimulationApiContainer */
    public $bidSimulationApiContainer;

    /** @var BrandApiContainer */
    public $brandApiContainer;

    /** @var BusinessManagerRelationsApiContainer */
    public $businessManagerRelationsApiContainer;

    /** @var BusinessMdmAccountRelationsApiContainer */
    public $businessMdmAccountRelationsApiContainer;

    /** @var CampaignsApiContainer */
    public $campaignsApiContainer;

    /** @var CapabilitiesApiContainer */
    public $capabilitiesApiContainer;

    /** @var ChannelsApiContainer */
    public $channelsApiContainer;

    /** @var ComplianceValidationApiContainer */
    public $complianceValidationApiContainer;

    /** @var ConversionsApiContainer */
    public $conversionsApiContainer;

    /** @var CreativetoolsTextApiContainer */
    public $creativetoolsTextApiContainer;

    /** @var CustomAudienceEstimationsApiContainer */
    public $customAudienceEstimationsApiContainer;

    /** @var CustomAudienceFilesApiContainer */
    public $customAudienceFilesApiContainer;

    /** @var CustomAudienceInsightsApiContainer */
    public $customAudienceInsightsApiContainer;

    /** @var CustomAudienceReportsApiContainer */
    public $customAudienceReportsApiContainer;

    /** @var CustomAudiencesApiContainer */
    public $customAudiencesApiContainer;

    /** @var CustomDataSaltApiContainer */
    public $customDataSaltApiContainer;

    /** @var CustomFeaturesApiContainer */
    public $customFeaturesApiContainer;

    /** @var CustomTagFilesApiContainer */
    public $customTagFilesApiContainer;

    /** @var CustomTagsApiContainer */
    public $customTagsApiContainer;

    /** @var DailyCostApiContainer */
    public $dailyCostApiContainer;

    /** @var DailyReportsApiContainer */
    public $dailyReportsApiContainer;

    /** @var DiagnosisApiContainer */
    public $diagnosisApiContainer;

    /** @var DynamicAdImagesApiContainer */
    public $dynamicAdImagesApiContainer;

    /** @var DynamicAdTemplatesApiContainer */
    public $dynamicAdTemplatesApiContainer;

    /** @var DynamicAdVideoApiContainer */
    public $dynamicAdVideoApiContainer;

    /** @var DynamicCreativesApiContainer */
    public $dynamicCreativesApiContainer;

    /** @var EcommerceOrderApiContainer */
    public $ecommerceOrderApiContainer;

    /** @var EstimationApiContainer */
    public $estimationApiContainer;

    /** @var FundStatementsDailyApiContainer */
    public $fundStatementsDailyApiContainer;

    /** @var FundStatementsDetailedApiContainer */
    public $fundStatementsDetailedApiContainer;

    /** @var FundTransferApiContainer */
    public $fundTransferApiContainer;

    /** @var FundsApiContainer */
    public $fundsApiContainer;

    /** @var HourlyReportsApiContainer */
    public $hourlyReportsApiContainer;

    /** @var ImageProcessingApiContainer */
    public $imageProcessingApiContainer;

    /** @var ImagesApiContainer */
    public $imagesApiContainer;

    /** @var LabelAudiencesApiContainer */
    public $labelAudiencesApiContainer;

    /** @var LabelsApiContainer */
    public $labelsApiContainer;

    /** @var LeadCluesApiContainer */
    public $leadCluesApiContainer;

    /** @var LeadsFormApiContainer */
    public $leadsFormApiContainer;

    /** @var LeadsFormListApiContainer */
    public $leadsFormListApiContainer;

    /** @var LocalApiContainer */
    public $localApiContainer;

    /** @var LocalEndadsmanuallyApiContainer */
    public $localEndadsmanuallyApiContainer;

    /** @var LocalEstimatedamountApiContainer */
    public $localEstimatedamountApiContainer;

    /** @var LocalStoresAddressParsingResultApiContainer */
    public $localStoresAddressParsingResultApiContainer;

    /** @var LocalStoresApiContainer */
    public $localStoresApiContainer;

    /** @var LocalStoresSearchInfoApiContainer */
    public $localStoresSearchInfoApiContainer;

    /** @var OauthApiContainer */
    public $oauthApiContainer;

    /** @var OptimizationGoalPermissionsApiContainer */
    public $optimizationGoalPermissionsApiContainer;

    /** @var PagesApiContainer */
    public $pagesApiContainer;

    /** @var PlayablePagesApiContainer */
    public $playablePagesApiContainer;

    /** @var ProductCatalogsApiContainer */
    public $productCatalogsApiContainer;

    /** @var ProductCatalogsReportsApiContainer */
    public $productCatalogsReportsApiContainer;

    /** @var ProductCategoriesListApiContainer */
    public $productCategoriesListApiContainer;

    /** @var ProductItemsApiContainer */
    public $productItemsApiContainer;

    /** @var ProductItemsDetailApiContainer */
    public $productItemsDetailApiContainer;

    /** @var ProductItemsVerticalsApiContainer */
    public $productItemsVerticalsApiContainer;

    /** @var ProductsSystemStatusApiContainer */
    public $productsSystemStatusApiContainer;

    /** @var ProfilesApiContainer */
    public $profilesApiContainer;

    /** @var PromotedObjectsApiContainer */
    public $promotedObjectsApiContainer;

    /** @var QualificationsApiContainer */
    public $qualificationsApiContainer;

    /** @var RealtimeCostApiContainer */
    public $realtimeCostApiContainer;

    /** @var ReportApiContainer */
    public $reportApiContainer;

    /** @var ShopApiContainer */
    public $shopApiContainer;

    /** @var SplitTestsApiContainer */
    public $splitTestsApiContainer;

    /** @var SystemStatusApiContainer */
    public $systemStatusApiContainer;

    /** @var TargetingTagReportsApiContainer */
    public $targetingTagReportsApiContainer;

    /** @var TargetingTagsApiContainer */
    public $targetingTagsApiContainer;

    /** @var TargetingsApiContainer */
    public $targetingsApiContainer;

    /** @var TrackingReportsApiContainer */
    public $trackingReportsApiContainer;

    /** @var UnionPositionPackagesApiContainer */
    public $unionPositionPackagesApiContainer;

    /** @var UserActionSetReportsApiContainer */
    public $userActionSetReportsApiContainer;

    /** @var UserActionSetsApiContainer */
    public $userActionSetsApiContainer;

    /** @var UserActionsApiContainer */
    public $userActionsApiContainer;

    /** @var UserPropertiesApiContainer */
    public $userPropertiesApiContainer;

    /** @var UserPropertySetsApiContainer */
    public $userPropertySetsApiContainer;

    /** @var VideomakerAutoadjustmentsApiContainer */
    public $videomakerAutoadjustmentsApiContainer;

    /** @var VideomakerSubtitlesApiContainer */
    public $videomakerSubtitlesApiContainer;

    /** @var VideomakerTasksApiContainer */
    public $videomakerTasksApiContainer;

    /** @var VideosApiContainer */
    public $videosApiContainer;

    /** @var WechatAdFollowersApiContainer */
    public $wechatAdFollowersApiContainer;

    /** @var WechatAdLabelsApiContainer */
    public $wechatAdLabelsApiContainer;

    /** @var WechatAdvertiserApiContainer */
    public $wechatAdvertiserApiContainer;

    /** @var WechatAdvertiserDetailApiContainer */
    public $wechatAdvertiserDetailApiContainer;

    /** @var WechatAdvertiserLocalBusinessApiContainer */
    public $wechatAdvertiserLocalBusinessApiContainer;

    /** @var WechatAdvertiserSpecificationApiContainer */
    public $wechatAdvertiserSpecificationApiContainer;

    /** @var WechatAgencyApiContainer */
    public $wechatAgencyApiContainer;

    /** @var WechatDailyCostApiContainer */
    public $wechatDailyCostApiContainer;

    /** @var WechatFundStatementsDetailedApiContainer */
    public $wechatFundStatementsDetailedApiContainer;

    /** @var WechatFundTransferApiContainer */
    public $wechatFundTransferApiContainer;

    /** @var WechatFundsApiContainer */
    public $wechatFundsApiContainer;

    /** @var WechatPagesApiContainer */
    public $wechatPagesApiContainer;

    /** @var WechatQualificationsApiContainer */
    public $wechatQualificationsApiContainer;

    /** @var XijingPageApiContainer */
    public $xijingPageApiContainer;

    /** @var XijingPageByComponentsApiContainer */
    public $xijingPageByComponentsApiContainer;

    /** @var XijingPageListApiContainer */
    public $xijingPageListApiContainer;

    /** @var XijingTemplateApiContainer */
    public $xijingTemplateApiContainer;


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
     * @return AdcreativeTemplateDetailApiContainer
     */
    public function adcreativeTemplateDetail()
    {
        if (empty($this->adcreativeTemplateDetailApiContainer)) {
            $container = new AdcreativeTemplateDetailApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativeTemplateDetailApiContainer = $container;
        }
        return $this->adcreativeTemplateDetailApiContainer;
    }


    /**
     * @return AdcreativeTemplatePreviewApiContainer
     */
    public function adcreativeTemplatePreview()
    {
        if (empty($this->adcreativeTemplatePreviewApiContainer)) {
            $container = new AdcreativeTemplatePreviewApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativeTemplatePreviewApiContainer = $container;
        }
        return $this->adcreativeTemplatePreviewApiContainer;
    }


    /**
     * @return AdcreativeTemplatePreviewsApiContainer
     */
    public function adcreativeTemplatePreviews()
    {
        if (empty($this->adcreativeTemplatePreviewsApiContainer)) {
            $container = new AdcreativeTemplatePreviewsApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativeTemplatePreviewsApiContainer = $container;
        }
        return $this->adcreativeTemplatePreviewsApiContainer;
    }


    /**
     * @return AdcreativeTemplatesApiContainer
     */
    public function adcreativeTemplates()
    {
        if (empty($this->adcreativeTemplatesApiContainer)) {
            $container = new AdcreativeTemplatesApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativeTemplatesApiContainer = $container;
        }
        return $this->adcreativeTemplatesApiContainer;
    }


    /**
     * @return AdcreativesApiContainer
     */
    public function adcreatives()
    {
        if (empty($this->adcreativesApiContainer)) {
            $container = new AdcreativesApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativesApiContainer = $container;
        }
        return $this->adcreativesApiContainer;
    }


    /**
     * @return AdcreativesRelatedCapabilityApiContainer
     */
    public function adcreativesRelatedCapability()
    {
        if (empty($this->adcreativesRelatedCapabilityApiContainer)) {
            $container = new AdcreativesRelatedCapabilityApiContainer();
            $container->init($this, $this->getClient());
            $this->adcreativesRelatedCapabilityApiContainer = $container;
        }
        return $this->adcreativesRelatedCapabilityApiContainer;
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
     * @return AdsApiContainer
     */
    public function ads()
    {
        if (empty($this->adsApiContainer)) {
            $container = new AdsApiContainer();
            $container->init($this, $this->getClient());
            $this->adsApiContainer = $container;
        }
        return $this->adsApiContainer;
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
     * @return AndroidChannelPackagesApiContainer
     */
    public function androidChannelPackages()
    {
        if (empty($this->androidChannelPackagesApiContainer)) {
            $container = new AndroidChannelPackagesApiContainer();
            $container->init($this, $this->getClient());
            $this->androidChannelPackagesApiContainer = $container;
        }
        return $this->androidChannelPackagesApiContainer;
    }


    /**
     * @return AndroidUnionChannelPackagesApiContainer
     */
    public function androidUnionChannelPackages()
    {
        if (empty($this->androidUnionChannelPackagesApiContainer)) {
            $container = new AndroidUnionChannelPackagesApiContainer();
            $container->init($this, $this->getClient());
            $this->androidUnionChannelPackagesApiContainer = $container;
        }
        return $this->androidUnionChannelPackagesApiContainer;
    }


    /**
     * @return AssetPermissionsApiContainer
     */
    public function assetPermissions()
    {
        if (empty($this->assetPermissionsApiContainer)) {
            $container = new AssetPermissionsApiContainer();
            $container->init($this, $this->getClient());
            $this->assetPermissionsApiContainer = $container;
        }
        return $this->assetPermissionsApiContainer;
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
     * @return AsyncTaskFilesApiContainer
     */
    public function asyncTaskFiles()
    {
        if (empty($this->asyncTaskFilesApiContainer)) {
            $container = new AsyncTaskFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->asyncTaskFilesApiContainer = $container;
        }
        return $this->asyncTaskFilesApiContainer;
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
     * @return AuthorizationApiContainer
     */
    public function authorization()
    {
        if (empty($this->authorizationApiContainer)) {
            $container = new AuthorizationApiContainer();
            $container->init($this, $this->getClient());
            $this->authorizationApiContainer = $container;
        }
        return $this->authorizationApiContainer;
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
     * @return BatchOperationApiContainer
     */
    public function batchOperation()
    {
        if (empty($this->batchOperationApiContainer)) {
            $container = new BatchOperationApiContainer();
            $container->init($this, $this->getClient());
            $this->batchOperationApiContainer = $container;
        }
        return $this->batchOperationApiContainer;
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
     * @return BusinessManagerRelationsApiContainer
     */
    public function businessManagerRelations()
    {
        if (empty($this->businessManagerRelationsApiContainer)) {
            $container = new BusinessManagerRelationsApiContainer();
            $container->init($this, $this->getClient());
            $this->businessManagerRelationsApiContainer = $container;
        }
        return $this->businessManagerRelationsApiContainer;
    }


    /**
     * @return BusinessMdmAccountRelationsApiContainer
     */
    public function businessMdmAccountRelations()
    {
        if (empty($this->businessMdmAccountRelationsApiContainer)) {
            $container = new BusinessMdmAccountRelationsApiContainer();
            $container->init($this, $this->getClient());
            $this->businessMdmAccountRelationsApiContainer = $container;
        }
        return $this->businessMdmAccountRelationsApiContainer;
    }


    /**
     * @return CampaignsApiContainer
     */
    public function campaigns()
    {
        if (empty($this->campaignsApiContainer)) {
            $container = new CampaignsApiContainer();
            $container->init($this, $this->getClient());
            $this->campaignsApiContainer = $container;
        }
        return $this->campaignsApiContainer;
    }


    /**
     * @return CapabilitiesApiContainer
     */
    public function capabilities()
    {
        if (empty($this->capabilitiesApiContainer)) {
            $container = new CapabilitiesApiContainer();
            $container->init($this, $this->getClient());
            $this->capabilitiesApiContainer = $container;
        }
        return $this->capabilitiesApiContainer;
    }


    /**
     * @return ChannelsApiContainer
     */
    public function channels()
    {
        if (empty($this->channelsApiContainer)) {
            $container = new ChannelsApiContainer();
            $container->init($this, $this->getClient());
            $this->channelsApiContainer = $container;
        }
        return $this->channelsApiContainer;
    }


    /**
     * @return ComplianceValidationApiContainer
     */
    public function complianceValidation()
    {
        if (empty($this->complianceValidationApiContainer)) {
            $container = new ComplianceValidationApiContainer();
            $container->init($this, $this->getClient());
            $this->complianceValidationApiContainer = $container;
        }
        return $this->complianceValidationApiContainer;
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
     * @return CustomAudienceInsightsApiContainer
     */
    public function customAudienceInsights()
    {
        if (empty($this->customAudienceInsightsApiContainer)) {
            $container = new CustomAudienceInsightsApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudienceInsightsApiContainer = $container;
        }
        return $this->customAudienceInsightsApiContainer;
    }


    /**
     * @return CustomAudienceReportsApiContainer
     */
    public function customAudienceReports()
    {
        if (empty($this->customAudienceReportsApiContainer)) {
            $container = new CustomAudienceReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->customAudienceReportsApiContainer = $container;
        }
        return $this->customAudienceReportsApiContainer;
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
     * @return CustomDataSaltApiContainer
     */
    public function customDataSalt()
    {
        if (empty($this->customDataSaltApiContainer)) {
            $container = new CustomDataSaltApiContainer();
            $container->init($this, $this->getClient());
            $this->customDataSaltApiContainer = $container;
        }
        return $this->customDataSaltApiContainer;
    }


    /**
     * @return CustomFeaturesApiContainer
     */
    public function customFeatures()
    {
        if (empty($this->customFeaturesApiContainer)) {
            $container = new CustomFeaturesApiContainer();
            $container->init($this, $this->getClient());
            $this->customFeaturesApiContainer = $container;
        }
        return $this->customFeaturesApiContainer;
    }


    /**
     * @return CustomTagFilesApiContainer
     */
    public function customTagFiles()
    {
        if (empty($this->customTagFilesApiContainer)) {
            $container = new CustomTagFilesApiContainer();
            $container->init($this, $this->getClient());
            $this->customTagFilesApiContainer = $container;
        }
        return $this->customTagFilesApiContainer;
    }


    /**
     * @return CustomTagsApiContainer
     */
    public function customTags()
    {
        if (empty($this->customTagsApiContainer)) {
            $container = new CustomTagsApiContainer();
            $container->init($this, $this->getClient());
            $this->customTagsApiContainer = $container;
        }
        return $this->customTagsApiContainer;
    }


    /**
     * @return DailyCostApiContainer
     */
    public function dailyCost()
    {
        if (empty($this->dailyCostApiContainer)) {
            $container = new DailyCostApiContainer();
            $container->init($this, $this->getClient());
            $this->dailyCostApiContainer = $container;
        }
        return $this->dailyCostApiContainer;
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
     * @return DiagnosisApiContainer
     */
    public function diagnosis()
    {
        if (empty($this->diagnosisApiContainer)) {
            $container = new DiagnosisApiContainer();
            $container->init($this, $this->getClient());
            $this->diagnosisApiContainer = $container;
        }
        return $this->diagnosisApiContainer;
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
     * @return DynamicAdTemplatesApiContainer
     */
    public function dynamicAdTemplates()
    {
        if (empty($this->dynamicAdTemplatesApiContainer)) {
            $container = new DynamicAdTemplatesApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicAdTemplatesApiContainer = $container;
        }
        return $this->dynamicAdTemplatesApiContainer;
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
     * @return FundStatementsDailyApiContainer
     */
    public function fundStatementsDaily()
    {
        if (empty($this->fundStatementsDailyApiContainer)) {
            $container = new FundStatementsDailyApiContainer();
            $container->init($this, $this->getClient());
            $this->fundStatementsDailyApiContainer = $container;
        }
        return $this->fundStatementsDailyApiContainer;
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
     * @return ImageProcessingApiContainer
     */
    public function imageProcessing()
    {
        if (empty($this->imageProcessingApiContainer)) {
            $container = new ImageProcessingApiContainer();
            $container->init($this, $this->getClient());
            $this->imageProcessingApiContainer = $container;
        }
        return $this->imageProcessingApiContainer;
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
     * @return LabelAudiencesApiContainer
     */
    public function labelAudiences()
    {
        if (empty($this->labelAudiencesApiContainer)) {
            $container = new LabelAudiencesApiContainer();
            $container->init($this, $this->getClient());
            $this->labelAudiencesApiContainer = $container;
        }
        return $this->labelAudiencesApiContainer;
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
     * @return LeadCluesApiContainer
     */
    public function leadClues()
    {
        if (empty($this->leadCluesApiContainer)) {
            $container = new LeadCluesApiContainer();
            $container->init($this, $this->getClient());
            $this->leadCluesApiContainer = $container;
        }
        return $this->leadCluesApiContainer;
    }


    /**
     * @return LeadsFormApiContainer
     */
    public function leadsForm()
    {
        if (empty($this->leadsFormApiContainer)) {
            $container = new LeadsFormApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsFormApiContainer = $container;
        }
        return $this->leadsFormApiContainer;
    }


    /**
     * @return LeadsFormListApiContainer
     */
    public function leadsFormList()
    {
        if (empty($this->leadsFormListApiContainer)) {
            $container = new LeadsFormListApiContainer();
            $container->init($this, $this->getClient());
            $this->leadsFormListApiContainer = $container;
        }
        return $this->leadsFormListApiContainer;
    }


    /**
     * @return LocalApiContainer
     */
    public function local()
    {
        if (empty($this->localApiContainer)) {
            $container = new LocalApiContainer();
            $container->init($this, $this->getClient());
            $this->localApiContainer = $container;
        }
        return $this->localApiContainer;
    }


    /**
     * @return LocalEndadsmanuallyApiContainer
     */
    public function localEndadsmanually()
    {
        if (empty($this->localEndadsmanuallyApiContainer)) {
            $container = new LocalEndadsmanuallyApiContainer();
            $container->init($this, $this->getClient());
            $this->localEndadsmanuallyApiContainer = $container;
        }
        return $this->localEndadsmanuallyApiContainer;
    }


    /**
     * @return LocalEstimatedamountApiContainer
     */
    public function localEstimatedamount()
    {
        if (empty($this->localEstimatedamountApiContainer)) {
            $container = new LocalEstimatedamountApiContainer();
            $container->init($this, $this->getClient());
            $this->localEstimatedamountApiContainer = $container;
        }
        return $this->localEstimatedamountApiContainer;
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
     * @return PlayablePagesApiContainer
     */
    public function playablePages()
    {
        if (empty($this->playablePagesApiContainer)) {
            $container = new PlayablePagesApiContainer();
            $container->init($this, $this->getClient());
            $this->playablePagesApiContainer = $container;
        }
        return $this->playablePagesApiContainer;
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
     * @return ProductCatalogsReportsApiContainer
     */
    public function productCatalogsReports()
    {
        if (empty($this->productCatalogsReportsApiContainer)) {
            $container = new ProductCatalogsReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->productCatalogsReportsApiContainer = $container;
        }
        return $this->productCatalogsReportsApiContainer;
    }


    /**
     * @return ProductCategoriesListApiContainer
     */
    public function productCategoriesList()
    {
        if (empty($this->productCategoriesListApiContainer)) {
            $container = new ProductCategoriesListApiContainer();
            $container->init($this, $this->getClient());
            $this->productCategoriesListApiContainer = $container;
        }
        return $this->productCategoriesListApiContainer;
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
     * @return ProductItemsDetailApiContainer
     */
    public function productItemsDetail()
    {
        if (empty($this->productItemsDetailApiContainer)) {
            $container = new ProductItemsDetailApiContainer();
            $container->init($this, $this->getClient());
            $this->productItemsDetailApiContainer = $container;
        }
        return $this->productItemsDetailApiContainer;
    }


    /**
     * @return ProductItemsVerticalsApiContainer
     */
    public function productItemsVerticals()
    {
        if (empty($this->productItemsVerticalsApiContainer)) {
            $container = new ProductItemsVerticalsApiContainer();
            $container->init($this, $this->getClient());
            $this->productItemsVerticalsApiContainer = $container;
        }
        return $this->productItemsVerticalsApiContainer;
    }


    /**
     * @return ProductsSystemStatusApiContainer
     */
    public function productsSystemStatus()
    {
        if (empty($this->productsSystemStatusApiContainer)) {
            $container = new ProductsSystemStatusApiContainer();
            $container->init($this, $this->getClient());
            $this->productsSystemStatusApiContainer = $container;
        }
        return $this->productsSystemStatusApiContainer;
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
     * @return PromotedObjectsApiContainer
     */
    public function promotedObjects()
    {
        if (empty($this->promotedObjectsApiContainer)) {
            $container = new PromotedObjectsApiContainer();
            $container->init($this, $this->getClient());
            $this->promotedObjectsApiContainer = $container;
        }
        return $this->promotedObjectsApiContainer;
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
     * @return ReportApiContainer
     */
    public function report()
    {
        if (empty($this->reportApiContainer)) {
            $container = new ReportApiContainer();
            $container->init($this, $this->getClient());
            $this->reportApiContainer = $container;
        }
        return $this->reportApiContainer;
    }


    /**
     * @return ShopApiContainer
     */
    public function shop()
    {
        if (empty($this->shopApiContainer)) {
            $container = new ShopApiContainer();
            $container->init($this, $this->getClient());
            $this->shopApiContainer = $container;
        }
        return $this->shopApiContainer;
    }


    /**
     * @return SplitTestsApiContainer
     */
    public function splitTests()
    {
        if (empty($this->splitTestsApiContainer)) {
            $container = new SplitTestsApiContainer();
            $container->init($this, $this->getClient());
            $this->splitTestsApiContainer = $container;
        }
        return $this->splitTestsApiContainer;
    }


    /**
     * @return SystemStatusApiContainer
     */
    public function systemStatus()
    {
        if (empty($this->systemStatusApiContainer)) {
            $container = new SystemStatusApiContainer();
            $container->init($this, $this->getClient());
            $this->systemStatusApiContainer = $container;
        }
        return $this->systemStatusApiContainer;
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
     * @return TargetingsApiContainer
     */
    public function targetings()
    {
        if (empty($this->targetingsApiContainer)) {
            $container = new TargetingsApiContainer();
            $container->init($this, $this->getClient());
            $this->targetingsApiContainer = $container;
        }
        return $this->targetingsApiContainer;
    }


    /**
     * @return TrackingReportsApiContainer
     */
    public function trackingReports()
    {
        if (empty($this->trackingReportsApiContainer)) {
            $container = new TrackingReportsApiContainer();
            $container->init($this, $this->getClient());
            $this->trackingReportsApiContainer = $container;
        }
        return $this->trackingReportsApiContainer;
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
     * @return UserPropertiesApiContainer
     */
    public function userProperties()
    {
        if (empty($this->userPropertiesApiContainer)) {
            $container = new UserPropertiesApiContainer();
            $container->init($this, $this->getClient());
            $this->userPropertiesApiContainer = $container;
        }
        return $this->userPropertiesApiContainer;
    }


    /**
     * @return UserPropertySetsApiContainer
     */
    public function userPropertySets()
    {
        if (empty($this->userPropertySetsApiContainer)) {
            $container = new UserPropertySetsApiContainer();
            $container->init($this, $this->getClient());
            $this->userPropertySetsApiContainer = $container;
        }
        return $this->userPropertySetsApiContainer;
    }


    /**
     * @return VideomakerAutoadjustmentsApiContainer
     */
    public function videomakerAutoadjustments()
    {
        if (empty($this->videomakerAutoadjustmentsApiContainer)) {
            $container = new VideomakerAutoadjustmentsApiContainer();
            $container->init($this, $this->getClient());
            $this->videomakerAutoadjustmentsApiContainer = $container;
        }
        return $this->videomakerAutoadjustmentsApiContainer;
    }


    /**
     * @return VideomakerSubtitlesApiContainer
     */
    public function videomakerSubtitles()
    {
        if (empty($this->videomakerSubtitlesApiContainer)) {
            $container = new VideomakerSubtitlesApiContainer();
            $container->init($this, $this->getClient());
            $this->videomakerSubtitlesApiContainer = $container;
        }
        return $this->videomakerSubtitlesApiContainer;
    }


    /**
     * @return VideomakerTasksApiContainer
     */
    public function videomakerTasks()
    {
        if (empty($this->videomakerTasksApiContainer)) {
            $container = new VideomakerTasksApiContainer();
            $container->init($this, $this->getClient());
            $this->videomakerTasksApiContainer = $container;
        }
        return $this->videomakerTasksApiContainer;
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
     * @return WechatAdFollowersApiContainer
     */
    public function wechatAdFollowers()
    {
        if (empty($this->wechatAdFollowersApiContainer)) {
            $container = new WechatAdFollowersApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdFollowersApiContainer = $container;
        }
        return $this->wechatAdFollowersApiContainer;
    }


    /**
     * @return WechatAdLabelsApiContainer
     */
    public function wechatAdLabels()
    {
        if (empty($this->wechatAdLabelsApiContainer)) {
            $container = new WechatAdLabelsApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdLabelsApiContainer = $container;
        }
        return $this->wechatAdLabelsApiContainer;
    }


    /**
     * @return WechatAdvertiserApiContainer
     */
    public function wechatAdvertiser()
    {
        if (empty($this->wechatAdvertiserApiContainer)) {
            $container = new WechatAdvertiserApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdvertiserApiContainer = $container;
        }
        return $this->wechatAdvertiserApiContainer;
    }


    /**
     * @return WechatAdvertiserDetailApiContainer
     */
    public function wechatAdvertiserDetail()
    {
        if (empty($this->wechatAdvertiserDetailApiContainer)) {
            $container = new WechatAdvertiserDetailApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdvertiserDetailApiContainer = $container;
        }
        return $this->wechatAdvertiserDetailApiContainer;
    }


    /**
     * @return WechatAdvertiserLocalBusinessApiContainer
     */
    public function wechatAdvertiserLocalBusiness()
    {
        if (empty($this->wechatAdvertiserLocalBusinessApiContainer)) {
            $container = new WechatAdvertiserLocalBusinessApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdvertiserLocalBusinessApiContainer = $container;
        }
        return $this->wechatAdvertiserLocalBusinessApiContainer;
    }


    /**
     * @return WechatAdvertiserSpecificationApiContainer
     */
    public function wechatAdvertiserSpecification()
    {
        if (empty($this->wechatAdvertiserSpecificationApiContainer)) {
            $container = new WechatAdvertiserSpecificationApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAdvertiserSpecificationApiContainer = $container;
        }
        return $this->wechatAdvertiserSpecificationApiContainer;
    }


    /**
     * @return WechatAgencyApiContainer
     */
    public function wechatAgency()
    {
        if (empty($this->wechatAgencyApiContainer)) {
            $container = new WechatAgencyApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatAgencyApiContainer = $container;
        }
        return $this->wechatAgencyApiContainer;
    }


    /**
     * @return WechatDailyCostApiContainer
     */
    public function wechatDailyCost()
    {
        if (empty($this->wechatDailyCostApiContainer)) {
            $container = new WechatDailyCostApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatDailyCostApiContainer = $container;
        }
        return $this->wechatDailyCostApiContainer;
    }


    /**
     * @return WechatFundStatementsDetailedApiContainer
     */
    public function wechatFundStatementsDetailed()
    {
        if (empty($this->wechatFundStatementsDetailedApiContainer)) {
            $container = new WechatFundStatementsDetailedApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatFundStatementsDetailedApiContainer = $container;
        }
        return $this->wechatFundStatementsDetailedApiContainer;
    }


    /**
     * @return WechatFundTransferApiContainer
     */
    public function wechatFundTransfer()
    {
        if (empty($this->wechatFundTransferApiContainer)) {
            $container = new WechatFundTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatFundTransferApiContainer = $container;
        }
        return $this->wechatFundTransferApiContainer;
    }


    /**
     * @return WechatFundsApiContainer
     */
    public function wechatFunds()
    {
        if (empty($this->wechatFundsApiContainer)) {
            $container = new WechatFundsApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatFundsApiContainer = $container;
        }
        return $this->wechatFundsApiContainer;
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
     * @return WechatQualificationsApiContainer
     */
    public function wechatQualifications()
    {
        if (empty($this->wechatQualificationsApiContainer)) {
            $container = new WechatQualificationsApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatQualificationsApiContainer = $container;
        }
        return $this->wechatQualificationsApiContainer;
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
}
