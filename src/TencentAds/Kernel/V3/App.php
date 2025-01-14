<?php
namespace TencentAds\Kernel\V3;

use GuzzleHttp\Client;
use TencentAds\Container\V3\AccountVersionApiContainer;
use TencentAds\Container\V3\AdLabelApiContainer;
use TencentAds\Container\V3\AdParamApiContainer;
use TencentAds\Container\V3\AdUnionReportsApiContainer;
use TencentAds\Container\V3\AdcreativePreviewsApiContainer;
use TencentAds\Container\V3\AdcreativePreviewsQrcodeApiContainer;
use TencentAds\Container\V3\AdgroupNegativewordsApiContainer;
use TencentAds\Container\V3\AdgroupsApiContainer;
use TencentAds\Container\V3\AdvertiserApiContainer;
use TencentAds\Container\V3\AdvertiserDailyBudgetApiContainer;
use TencentAds\Container\V3\AgencyApiContainer;
use TencentAds\Container\V3\AgencyBusinessUnitApiContainer;
use TencentAds\Container\V3\AgencyBusinessUnitListAccountApiContainer;
use TencentAds\Container\V3\AgencyBusinessUnitListApiContainer;
use TencentAds\Container\V3\AgencyBusinessUnitListByAccountApiContainer;
use TencentAds\Container\V3\AgencyRealtimeCostApiContainer;
use TencentAds\Container\V3\AgencyWalletListApiContainer;
use TencentAds\Container\V3\AndroidChannelApiContainer;
use TencentAds\Container\V3\AsyncReportFilesApiContainer;
use TencentAds\Container\V3\AsyncReportsApiContainer;
use TencentAds\Container\V3\AsyncTasksApiContainer;
use TencentAds\Container\V3\AudienceGrantRelationsApiContainer;
use TencentAds\Container\V3\BarrageApiContainer;
use TencentAds\Container\V3\BarrageRecommendApiContainer;
use TencentAds\Container\V3\BatchAsyncRequestSpecificationApiContainer;
use TencentAds\Container\V3\BatchAsyncRequestsApiContainer;
use TencentAds\Container\V3\BatchRequestsApiContainer;
use TencentAds\Container\V3\BidSimulationApiContainer;
use TencentAds\Container\V3\BidwordApiContainer;
use TencentAds\Container\V3\BidwordFlowApiContainer;
use TencentAds\Container\V3\BrandApiContainer;
use TencentAds\Container\V3\BusinessPointApiContainer;
use TencentAds\Container\V3\CategoriesApiContainer;
use TencentAds\Container\V3\CategoriesAttributeApiContainer;
use TencentAds\Container\V3\ChannelsCommentApiContainer;
use TencentAds\Container\V3\ChannelsFinderobjectApiContainer;
use TencentAds\Container\V3\ChannelsLivenoticeinfoApiContainer;
use TencentAds\Container\V3\ChannelsUserpageobjectsApiContainer;
use TencentAds\Container\V3\CommentListApiContainer;
use TencentAds\Container\V3\ComponentElementUrgeReviewApiContainer;
use TencentAds\Container\V3\ComponentReviewResultsApiContainer;
use TencentAds\Container\V3\ComponentSharingApiContainer;
use TencentAds\Container\V3\ComponentsApiContainer;
use TencentAds\Container\V3\ComponentsMetadataApiContainer;
use TencentAds\Container\V3\ConversionLinkAssetAvailableApiContainer;
use TencentAds\Container\V3\ConversionLinkAssetsApiContainer;
use TencentAds\Container\V3\ConversionLinksApiContainer;
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
use TencentAds\Container\V3\DynamicCreativePreviewsApiContainer;
use TencentAds\Container\V3\DynamicCreativeReviewResultsApiContainer;
use TencentAds\Container\V3\DynamicCreativesApiContainer;
use TencentAds\Container\V3\EcommerceOrderApiContainer;
use TencentAds\Container\V3\ElementAppealQuotaApiContainer;
use TencentAds\Container\V3\ElementAppealReviewApiContainer;
use TencentAds\Container\V3\EstimationApiContainer;
use TencentAds\Container\V3\ExtendPackageApiContainer;
use TencentAds\Container\V3\FinderAdObjectListApiContainer;
use TencentAds\Container\V3\FundStatementsDetailedApiContainer;
use TencentAds\Container\V3\FundTransferApiContainer;
use TencentAds\Container\V3\FundsApiContainer;
use TencentAds\Container\V3\GameFeatureApiContainer;
use TencentAds\Container\V3\GameFeatureTagsApiContainer;
use TencentAds\Container\V3\GetWxGameAppGiftPackApiContainer;
use TencentAds\Container\V3\HourlyReportsApiContainer;
use TencentAds\Container\V3\ImageProcessingApiContainer;
use TencentAds\Container\V3\ImagesApiContainer;
use TencentAds\Container\V3\JointBudgetRulesApiContainer;
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
use TencentAds\Container\V3\LocalStorePackagesApiContainer;
use TencentAds\Container\V3\LocalStoresAddressParsingResultApiContainer;
use TencentAds\Container\V3\LocalStoresApiContainer;
use TencentAds\Container\V3\LocalStoresCategoriesApiContainer;
use TencentAds\Container\V3\LocalStoresSearchInfoApiContainer;
use TencentAds\Container\V3\LocalStoresWxpayMerchantsApiContainer;
use TencentAds\Container\V3\MarketingRulesApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetCategoriesApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetDetailApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetPropertiesApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetPropertyValuesApiContainer;
use TencentAds\Container\V3\MarketingTargetAssetsApiContainer;
use TencentAds\Container\V3\MarketingTargetTypesApiContainer;
use TencentAds\Container\V3\MaterialDcasetApiContainer;
use TencentAds\Container\V3\MaterialDcatagApiContainer;
use TencentAds\Container\V3\MaterialLabelsApiContainer;
use TencentAds\Container\V3\MergeFundTypeDailyBalanceReportApiContainer;
use TencentAds\Container\V3\MergeFundTypeFundStatementsDetailedApiContainer;
use TencentAds\Container\V3\MergeFundTypeFundsApiContainer;
use TencentAds\Container\V3\MergeFundTypeSubcustomerTransferApiContainer;
use TencentAds\Container\V3\MuseAiMaterialApiContainer;
use TencentAds\Container\V3\MuseAiTaskApiContainer;
use TencentAds\Container\V3\MuseAiUgcApiContainer;
use TencentAds\Container\V3\OauthApiContainer;
use TencentAds\Container\V3\ObjectCommentFlagApiContainer;
use TencentAds\Container\V3\OperationLogListApiContainer;
use TencentAds\Container\V3\OptimizationGoalPermissionsApiContainer;
use TencentAds\Container\V3\OrganizationAccountRelationApiContainer;
use TencentAds\Container\V3\PagesApiContainer;
use TencentAds\Container\V3\ProductCatalogsApiContainer;
use TencentAds\Container\V3\ProductCategoriesListApiContainer;
use TencentAds\Container\V3\ProductItemsApiContainer;
use TencentAds\Container\V3\ProductItemsDetailApiContainer;
use TencentAds\Container\V3\ProductItemsVerticalsApiContainer;
use TencentAds\Container\V3\ProductSeriesApiContainer;
use TencentAds\Container\V3\ProductsSystemStatusApiContainer;
use TencentAds\Container\V3\ProfilesApiContainer;
use TencentAds\Container\V3\ProgrammedApiContainer;
use TencentAds\Container\V3\ProgrammedCommponentPreviewApiContainer;
use TencentAds\Container\V3\ProgrammedCommponentPreviewTemplateApiContainer;
use TencentAds\Container\V3\ProgrammedCommponentResultApiContainer;
use TencentAds\Container\V3\ProgrammedMaterialMappingsApiContainer;
use TencentAds\Container\V3\ProgrammedTemplateApiContainer;
use TencentAds\Container\V3\QualificationImagesApiContainer;
use TencentAds\Container\V3\QualificationStructureApiContainer;
use TencentAds\Container\V3\QualificationsApiContainer;
use TencentAds\Container\V3\RealtimeCostApiContainer;
use TencentAds\Container\V3\ReviewElementPrereviewResultsApiContainer;
use TencentAds\Container\V3\RtaInfoApiContainer;
use TencentAds\Container\V3\RtaexpApiContainer;
use TencentAds\Container\V3\RtaexpDataRoiApiContainer;
use TencentAds\Container\V3\RtaexpDspTagDataApiContainer;
use TencentAds\Container\V3\RtatargetApiContainer;
use TencentAds\Container\V3\RtatargetBindApiContainer;
use TencentAds\Container\V3\SceneSpecTagsApiContainer;
use TencentAds\Container\V3\SubcustomerTransferApiContainer;
use TencentAds\Container\V3\TargetingTagReportsApiContainer;
use TencentAds\Container\V3\TargetingTagsApiContainer;
use TencentAds\Container\V3\TargetingTagsUvApiContainer;
use TencentAds\Container\V3\TargetingsApiContainer;
use TencentAds\Container\V3\UnionPositionPackagesApiContainer;
use TencentAds\Container\V3\UserActionSetReportsApiContainer;
use TencentAds\Container\V3\UserActionSetsApiContainer;
use TencentAds\Container\V3\UserActionsApiContainer;
use TencentAds\Container\V3\VideoChannelDealerDataApiContainer;
use TencentAds\Container\V3\VideoChannelFansDataApiContainer;
use TencentAds\Container\V3\VideoChannelLeadsDataApiContainer;
use TencentAds\Container\V3\VideoChannelLiveDataApiContainer;
use TencentAds\Container\V3\VideosApiContainer;
use TencentAds\Container\V3\WalletApiContainer;
use TencentAds\Container\V3\WalletTransferApiContainer;
use TencentAds\Container\V3\WechatChannelsAccountsApiContainer;
use TencentAds\Container\V3\WechatChannelsAdAccountApiContainer;
use TencentAds\Container\V3\WechatChannelsAdAccountCertificationFileApiContainer;
use TencentAds\Container\V3\WechatChannelsAdAccountValidationApiContainer;
use TencentAds\Container\V3\WechatChannelsAdAccountWechatBindingApiContainer;
use TencentAds\Container\V3\WechatChannelsAuthorizationApiContainer;
use TencentAds\Container\V3\WechatOfficialAccountsApiContainer;
use TencentAds\Container\V3\WechatPagesApiContainer;
use TencentAds\Container\V3\WechatPagesCsgroupStatusApiContainer;
use TencentAds\Container\V3\WechatPagesCsgroupUserApiContainer;
use TencentAds\Container\V3\WechatPagesCsgrouplistApiContainer;
use TencentAds\Container\V3\WechatPagesCustomApiContainer;
use TencentAds\Container\V3\WechatPagesGrantinfoApiContainer;
use TencentAds\Container\V3\WechatShopApiContainer;
use TencentAds\Container\V3\WechatShopAuthorizationApiContainer;
use TencentAds\Container\V3\WechatShopAuthorizationStatusApiContainer;
use TencentAds\Container\V3\WechatShopAuthorizationValidationApiContainer;
use TencentAds\Container\V3\WechatStoreCatalogsApiContainer;
use TencentAds\Container\V3\WechatStoreProductItemsApiContainer;
use TencentAds\Container\V3\WildcardsApiContainer;
use TencentAds\Container\V3\WxGamePlayablePageApiContainer;
use TencentAds\Container\V3\XijingComplexTemplateApiContainer;
use TencentAds\Container\V3\XijingPageApiContainer;
use TencentAds\Container\V3\XijingPageByComponentsApiContainer;
use TencentAds\Container\V3\XijingPageInteractiveApiContainer;
use TencentAds\Container\V3\XijingPageListApiContainer;
use TencentAds\Container\V3\XijingTemplateApiContainer;
use TencentAds\Container\V3\XijingTemplateListApiContainer;

class App
{
    /** @var Client */
    public $client;

    /** @var AccountVersionApiContainer */
    public $accountVersionApiContainer;

    /** @var AdLabelApiContainer */
    public $adLabelApiContainer;

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

    /** @var AgencyBusinessUnitApiContainer */
    public $agencyBusinessUnitApiContainer;

    /** @var AgencyBusinessUnitListAccountApiContainer */
    public $agencyBusinessUnitListAccountApiContainer;

    /** @var AgencyBusinessUnitListApiContainer */
    public $agencyBusinessUnitListApiContainer;

    /** @var AgencyBusinessUnitListByAccountApiContainer */
    public $agencyBusinessUnitListByAccountApiContainer;

    /** @var AgencyRealtimeCostApiContainer */
    public $agencyRealtimeCostApiContainer;

    /** @var AgencyWalletListApiContainer */
    public $agencyWalletListApiContainer;

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

    /** @var BarrageApiContainer */
    public $barrageApiContainer;

    /** @var BarrageRecommendApiContainer */
    public $barrageRecommendApiContainer;

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

    /** @var CategoriesApiContainer */
    public $categoriesApiContainer;

    /** @var CategoriesAttributeApiContainer */
    public $categoriesAttributeApiContainer;

    /** @var ChannelsCommentApiContainer */
    public $channelsCommentApiContainer;

    /** @var ChannelsFinderobjectApiContainer */
    public $channelsFinderobjectApiContainer;

    /** @var ChannelsLivenoticeinfoApiContainer */
    public $channelsLivenoticeinfoApiContainer;

    /** @var ChannelsUserpageobjectsApiContainer */
    public $channelsUserpageobjectsApiContainer;

    /** @var CommentListApiContainer */
    public $commentListApiContainer;

    /** @var ComponentElementUrgeReviewApiContainer */
    public $componentElementUrgeReviewApiContainer;

    /** @var ComponentReviewResultsApiContainer */
    public $componentReviewResultsApiContainer;

    /** @var ComponentSharingApiContainer */
    public $componentSharingApiContainer;

    /** @var ComponentsApiContainer */
    public $componentsApiContainer;

    /** @var ComponentsMetadataApiContainer */
    public $componentsMetadataApiContainer;

    /** @var ConversionLinkAssetAvailableApiContainer */
    public $conversionLinkAssetAvailableApiContainer;

    /** @var ConversionLinkAssetsApiContainer */
    public $conversionLinkAssetsApiContainer;

    /** @var ConversionLinksApiContainer */
    public $conversionLinksApiContainer;

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

    /** @var DynamicCreativePreviewsApiContainer */
    public $dynamicCreativePreviewsApiContainer;

    /** @var DynamicCreativeReviewResultsApiContainer */
    public $dynamicCreativeReviewResultsApiContainer;

    /** @var DynamicCreativesApiContainer */
    public $dynamicCreativesApiContainer;

    /** @var EcommerceOrderApiContainer */
    public $ecommerceOrderApiContainer;

    /** @var ElementAppealQuotaApiContainer */
    public $elementAppealQuotaApiContainer;

    /** @var ElementAppealReviewApiContainer */
    public $elementAppealReviewApiContainer;

    /** @var EstimationApiContainer */
    public $estimationApiContainer;

    /** @var ExtendPackageApiContainer */
    public $extendPackageApiContainer;

    /** @var FinderAdObjectListApiContainer */
    public $finderAdObjectListApiContainer;

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

    /** @var GetWxGameAppGiftPackApiContainer */
    public $getWxGameAppGiftPackApiContainer;

    /** @var HourlyReportsApiContainer */
    public $hourlyReportsApiContainer;

    /** @var ImageProcessingApiContainer */
    public $imageProcessingApiContainer;

    /** @var ImagesApiContainer */
    public $imagesApiContainer;

    /** @var JointBudgetRulesApiContainer */
    public $jointBudgetRulesApiContainer;

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

    /** @var LocalStorePackagesApiContainer */
    public $localStorePackagesApiContainer;

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

    /** @var MarketingRulesApiContainer */
    public $marketingRulesApiContainer;

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

    /** @var MaterialDcasetApiContainer */
    public $materialDcasetApiContainer;

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

    /** @var MuseAiMaterialApiContainer */
    public $museAiMaterialApiContainer;

    /** @var MuseAiTaskApiContainer */
    public $museAiTaskApiContainer;

    /** @var MuseAiUgcApiContainer */
    public $museAiUgcApiContainer;

    /** @var OauthApiContainer */
    public $oauthApiContainer;

    /** @var ObjectCommentFlagApiContainer */
    public $objectCommentFlagApiContainer;

    /** @var OperationLogListApiContainer */
    public $operationLogListApiContainer;

    /** @var OptimizationGoalPermissionsApiContainer */
    public $optimizationGoalPermissionsApiContainer;

    /** @var OrganizationAccountRelationApiContainer */
    public $organizationAccountRelationApiContainer;

    /** @var PagesApiContainer */
    public $pagesApiContainer;

    /** @var ProductCatalogsApiContainer */
    public $productCatalogsApiContainer;

    /** @var ProductCategoriesListApiContainer */
    public $productCategoriesListApiContainer;

    /** @var ProductItemsApiContainer */
    public $productItemsApiContainer;

    /** @var ProductItemsDetailApiContainer */
    public $productItemsDetailApiContainer;

    /** @var ProductItemsVerticalsApiContainer */
    public $productItemsVerticalsApiContainer;

    /** @var ProductSeriesApiContainer */
    public $productSeriesApiContainer;

    /** @var ProductsSystemStatusApiContainer */
    public $productsSystemStatusApiContainer;

    /** @var ProfilesApiContainer */
    public $profilesApiContainer;

    /** @var ProgrammedApiContainer */
    public $programmedApiContainer;

    /** @var ProgrammedCommponentPreviewApiContainer */
    public $programmedCommponentPreviewApiContainer;

    /** @var ProgrammedCommponentPreviewTemplateApiContainer */
    public $programmedCommponentPreviewTemplateApiContainer;

    /** @var ProgrammedCommponentResultApiContainer */
    public $programmedCommponentResultApiContainer;

    /** @var ProgrammedMaterialMappingsApiContainer */
    public $programmedMaterialMappingsApiContainer;

    /** @var ProgrammedTemplateApiContainer */
    public $programmedTemplateApiContainer;

    /** @var QualificationImagesApiContainer */
    public $qualificationImagesApiContainer;

    /** @var QualificationStructureApiContainer */
    public $qualificationStructureApiContainer;

    /** @var QualificationsApiContainer */
    public $qualificationsApiContainer;

    /** @var RealtimeCostApiContainer */
    public $realtimeCostApiContainer;

    /** @var ReviewElementPrereviewResultsApiContainer */
    public $reviewElementPrereviewResultsApiContainer;

    /** @var RtaInfoApiContainer */
    public $rtaInfoApiContainer;

    /** @var RtaexpApiContainer */
    public $rtaexpApiContainer;

    /** @var RtaexpDataRoiApiContainer */
    public $rtaexpDataRoiApiContainer;

    /** @var RtaexpDspTagDataApiContainer */
    public $rtaexpDspTagDataApiContainer;

    /** @var RtatargetApiContainer */
    public $rtatargetApiContainer;

    /** @var RtatargetBindApiContainer */
    public $rtatargetBindApiContainer;

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

    /** @var TargetingsApiContainer */
    public $targetingsApiContainer;

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

    /** @var WalletApiContainer */
    public $walletApiContainer;

    /** @var WalletTransferApiContainer */
    public $walletTransferApiContainer;

    /** @var WechatChannelsAccountsApiContainer */
    public $wechatChannelsAccountsApiContainer;

    /** @var WechatChannelsAdAccountApiContainer */
    public $wechatChannelsAdAccountApiContainer;

    /** @var WechatChannelsAdAccountCertificationFileApiContainer */
    public $wechatChannelsAdAccountCertificationFileApiContainer;

    /** @var WechatChannelsAdAccountValidationApiContainer */
    public $wechatChannelsAdAccountValidationApiContainer;

    /** @var WechatChannelsAdAccountWechatBindingApiContainer */
    public $wechatChannelsAdAccountWechatBindingApiContainer;

    /** @var WechatChannelsAuthorizationApiContainer */
    public $wechatChannelsAuthorizationApiContainer;

    /** @var WechatOfficialAccountsApiContainer */
    public $wechatOfficialAccountsApiContainer;

    /** @var WechatPagesApiContainer */
    public $wechatPagesApiContainer;

    /** @var WechatPagesCsgroupStatusApiContainer */
    public $wechatPagesCsgroupStatusApiContainer;

    /** @var WechatPagesCsgroupUserApiContainer */
    public $wechatPagesCsgroupUserApiContainer;

    /** @var WechatPagesCsgrouplistApiContainer */
    public $wechatPagesCsgrouplistApiContainer;

    /** @var WechatPagesCustomApiContainer */
    public $wechatPagesCustomApiContainer;

    /** @var WechatPagesGrantinfoApiContainer */
    public $wechatPagesGrantinfoApiContainer;

    /** @var WechatShopApiContainer */
    public $wechatShopApiContainer;

    /** @var WechatShopAuthorizationApiContainer */
    public $wechatShopAuthorizationApiContainer;

    /** @var WechatShopAuthorizationStatusApiContainer */
    public $wechatShopAuthorizationStatusApiContainer;

    /** @var WechatShopAuthorizationValidationApiContainer */
    public $wechatShopAuthorizationValidationApiContainer;

    /** @var WechatStoreCatalogsApiContainer */
    public $wechatStoreCatalogsApiContainer;

    /** @var WechatStoreProductItemsApiContainer */
    public $wechatStoreProductItemsApiContainer;

    /** @var WildcardsApiContainer */
    public $wildcardsApiContainer;

    /** @var WxGamePlayablePageApiContainer */
    public $wxGamePlayablePageApiContainer;

    /** @var XijingComplexTemplateApiContainer */
    public $xijingComplexTemplateApiContainer;

    /** @var XijingPageApiContainer */
    public $xijingPageApiContainer;

    /** @var XijingPageByComponentsApiContainer */
    public $xijingPageByComponentsApiContainer;

    /** @var XijingPageInteractiveApiContainer */
    public $xijingPageInteractiveApiContainer;

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
     * @return AccountVersionApiContainer
     */
    public function accountVersion()
    {
        if (empty($this->accountVersionApiContainer)) {
            $container = new AccountVersionApiContainer();
            $container->init($this, $this->getClient());
            $this->accountVersionApiContainer = $container;
        }
        return $this->accountVersionApiContainer;
    }


    /**
     * @return AdLabelApiContainer
     */
    public function adLabel()
    {
        if (empty($this->adLabelApiContainer)) {
            $container = new AdLabelApiContainer();
            $container->init($this, $this->getClient());
            $this->adLabelApiContainer = $container;
        }
        return $this->adLabelApiContainer;
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
     * @return AgencyBusinessUnitApiContainer
     */
    public function agencyBusinessUnit()
    {
        if (empty($this->agencyBusinessUnitApiContainer)) {
            $container = new AgencyBusinessUnitApiContainer();
            $container->init($this, $this->getClient());
            $this->agencyBusinessUnitApiContainer = $container;
        }
        return $this->agencyBusinessUnitApiContainer;
    }


    /**
     * @return AgencyBusinessUnitListAccountApiContainer
     */
    public function agencyBusinessUnitListAccount()
    {
        if (empty($this->agencyBusinessUnitListAccountApiContainer)) {
            $container = new AgencyBusinessUnitListAccountApiContainer();
            $container->init($this, $this->getClient());
            $this->agencyBusinessUnitListAccountApiContainer = $container;
        }
        return $this->agencyBusinessUnitListAccountApiContainer;
    }


    /**
     * @return AgencyBusinessUnitListApiContainer
     */
    public function agencyBusinessUnitList()
    {
        if (empty($this->agencyBusinessUnitListApiContainer)) {
            $container = new AgencyBusinessUnitListApiContainer();
            $container->init($this, $this->getClient());
            $this->agencyBusinessUnitListApiContainer = $container;
        }
        return $this->agencyBusinessUnitListApiContainer;
    }


    /**
     * @return AgencyBusinessUnitListByAccountApiContainer
     */
    public function agencyBusinessUnitListByAccount()
    {
        if (empty($this->agencyBusinessUnitListByAccountApiContainer)) {
            $container = new AgencyBusinessUnitListByAccountApiContainer();
            $container->init($this, $this->getClient());
            $this->agencyBusinessUnitListByAccountApiContainer = $container;
        }
        return $this->agencyBusinessUnitListByAccountApiContainer;
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
     * @return AgencyWalletListApiContainer
     */
    public function agencyWalletList()
    {
        if (empty($this->agencyWalletListApiContainer)) {
            $container = new AgencyWalletListApiContainer();
            $container->init($this, $this->getClient());
            $this->agencyWalletListApiContainer = $container;
        }
        return $this->agencyWalletListApiContainer;
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
     * @return BarrageApiContainer
     */
    public function barrage()
    {
        if (empty($this->barrageApiContainer)) {
            $container = new BarrageApiContainer();
            $container->init($this, $this->getClient());
            $this->barrageApiContainer = $container;
        }
        return $this->barrageApiContainer;
    }


    /**
     * @return BarrageRecommendApiContainer
     */
    public function barrageRecommend()
    {
        if (empty($this->barrageRecommendApiContainer)) {
            $container = new BarrageRecommendApiContainer();
            $container->init($this, $this->getClient());
            $this->barrageRecommendApiContainer = $container;
        }
        return $this->barrageRecommendApiContainer;
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
     * @return CategoriesApiContainer
     */
    public function categories()
    {
        if (empty($this->categoriesApiContainer)) {
            $container = new CategoriesApiContainer();
            $container->init($this, $this->getClient());
            $this->categoriesApiContainer = $container;
        }
        return $this->categoriesApiContainer;
    }


    /**
     * @return CategoriesAttributeApiContainer
     */
    public function categoriesAttribute()
    {
        if (empty($this->categoriesAttributeApiContainer)) {
            $container = new CategoriesAttributeApiContainer();
            $container->init($this, $this->getClient());
            $this->categoriesAttributeApiContainer = $container;
        }
        return $this->categoriesAttributeApiContainer;
    }


    /**
     * @return ChannelsCommentApiContainer
     */
    public function channelsComment()
    {
        if (empty($this->channelsCommentApiContainer)) {
            $container = new ChannelsCommentApiContainer();
            $container->init($this, $this->getClient());
            $this->channelsCommentApiContainer = $container;
        }
        return $this->channelsCommentApiContainer;
    }


    /**
     * @return ChannelsFinderobjectApiContainer
     */
    public function channelsFinderobject()
    {
        if (empty($this->channelsFinderobjectApiContainer)) {
            $container = new ChannelsFinderobjectApiContainer();
            $container->init($this, $this->getClient());
            $this->channelsFinderobjectApiContainer = $container;
        }
        return $this->channelsFinderobjectApiContainer;
    }


    /**
     * @return ChannelsLivenoticeinfoApiContainer
     */
    public function channelsLivenoticeinfo()
    {
        if (empty($this->channelsLivenoticeinfoApiContainer)) {
            $container = new ChannelsLivenoticeinfoApiContainer();
            $container->init($this, $this->getClient());
            $this->channelsLivenoticeinfoApiContainer = $container;
        }
        return $this->channelsLivenoticeinfoApiContainer;
    }


    /**
     * @return ChannelsUserpageobjectsApiContainer
     */
    public function channelsUserpageobjects()
    {
        if (empty($this->channelsUserpageobjectsApiContainer)) {
            $container = new ChannelsUserpageobjectsApiContainer();
            $container->init($this, $this->getClient());
            $this->channelsUserpageobjectsApiContainer = $container;
        }
        return $this->channelsUserpageobjectsApiContainer;
    }


    /**
     * @return CommentListApiContainer
     */
    public function commentList()
    {
        if (empty($this->commentListApiContainer)) {
            $container = new CommentListApiContainer();
            $container->init($this, $this->getClient());
            $this->commentListApiContainer = $container;
        }
        return $this->commentListApiContainer;
    }


    /**
     * @return ComponentElementUrgeReviewApiContainer
     */
    public function componentElementUrgeReview()
    {
        if (empty($this->componentElementUrgeReviewApiContainer)) {
            $container = new ComponentElementUrgeReviewApiContainer();
            $container->init($this, $this->getClient());
            $this->componentElementUrgeReviewApiContainer = $container;
        }
        return $this->componentElementUrgeReviewApiContainer;
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
     * @return ComponentSharingApiContainer
     */
    public function componentSharing()
    {
        if (empty($this->componentSharingApiContainer)) {
            $container = new ComponentSharingApiContainer();
            $container->init($this, $this->getClient());
            $this->componentSharingApiContainer = $container;
        }
        return $this->componentSharingApiContainer;
    }


    /**
     * @return ComponentsApiContainer
     */
    public function components()
    {
        if (empty($this->componentsApiContainer)) {
            $container = new ComponentsApiContainer();
            $container->init($this, $this->getClient());
            $this->componentsApiContainer = $container;
        }
        return $this->componentsApiContainer;
    }


    /**
     * @return ComponentsMetadataApiContainer
     */
    public function componentsMetadata()
    {
        if (empty($this->componentsMetadataApiContainer)) {
            $container = new ComponentsMetadataApiContainer();
            $container->init($this, $this->getClient());
            $this->componentsMetadataApiContainer = $container;
        }
        return $this->componentsMetadataApiContainer;
    }


    /**
     * @return ConversionLinkAssetAvailableApiContainer
     */
    public function conversionLinkAssetAvailable()
    {
        if (empty($this->conversionLinkAssetAvailableApiContainer)) {
            $container = new ConversionLinkAssetAvailableApiContainer();
            $container->init($this, $this->getClient());
            $this->conversionLinkAssetAvailableApiContainer = $container;
        }
        return $this->conversionLinkAssetAvailableApiContainer;
    }


    /**
     * @return ConversionLinkAssetsApiContainer
     */
    public function conversionLinkAssets()
    {
        if (empty($this->conversionLinkAssetsApiContainer)) {
            $container = new ConversionLinkAssetsApiContainer();
            $container->init($this, $this->getClient());
            $this->conversionLinkAssetsApiContainer = $container;
        }
        return $this->conversionLinkAssetsApiContainer;
    }


    /**
     * @return ConversionLinksApiContainer
     */
    public function conversionLinks()
    {
        if (empty($this->conversionLinksApiContainer)) {
            $container = new ConversionLinksApiContainer();
            $container->init($this, $this->getClient());
            $this->conversionLinksApiContainer = $container;
        }
        return $this->conversionLinksApiContainer;
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
     * @return DynamicCreativePreviewsApiContainer
     */
    public function dynamicCreativePreviews()
    {
        if (empty($this->dynamicCreativePreviewsApiContainer)) {
            $container = new DynamicCreativePreviewsApiContainer();
            $container->init($this, $this->getClient());
            $this->dynamicCreativePreviewsApiContainer = $container;
        }
        return $this->dynamicCreativePreviewsApiContainer;
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
     * @return ElementAppealQuotaApiContainer
     */
    public function elementAppealQuota()
    {
        if (empty($this->elementAppealQuotaApiContainer)) {
            $container = new ElementAppealQuotaApiContainer();
            $container->init($this, $this->getClient());
            $this->elementAppealQuotaApiContainer = $container;
        }
        return $this->elementAppealQuotaApiContainer;
    }


    /**
     * @return ElementAppealReviewApiContainer
     */
    public function elementAppealReview()
    {
        if (empty($this->elementAppealReviewApiContainer)) {
            $container = new ElementAppealReviewApiContainer();
            $container->init($this, $this->getClient());
            $this->elementAppealReviewApiContainer = $container;
        }
        return $this->elementAppealReviewApiContainer;
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
     * @return FinderAdObjectListApiContainer
     */
    public function finderAdObjectList()
    {
        if (empty($this->finderAdObjectListApiContainer)) {
            $container = new FinderAdObjectListApiContainer();
            $container->init($this, $this->getClient());
            $this->finderAdObjectListApiContainer = $container;
        }
        return $this->finderAdObjectListApiContainer;
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
     * @return GetWxGameAppGiftPackApiContainer
     */
    public function getWxGameAppGiftPack()
    {
        if (empty($this->getWxGameAppGiftPackApiContainer)) {
            $container = new GetWxGameAppGiftPackApiContainer();
            $container->init($this, $this->getClient());
            $this->getWxGameAppGiftPackApiContainer = $container;
        }
        return $this->getWxGameAppGiftPackApiContainer;
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
     * @return JointBudgetRulesApiContainer
     */
    public function jointBudgetRules()
    {
        if (empty($this->jointBudgetRulesApiContainer)) {
            $container = new JointBudgetRulesApiContainer();
            $container->init($this, $this->getClient());
            $this->jointBudgetRulesApiContainer = $container;
        }
        return $this->jointBudgetRulesApiContainer;
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
     * @return LocalStorePackagesApiContainer
     */
    public function localStorePackages()
    {
        if (empty($this->localStorePackagesApiContainer)) {
            $container = new LocalStorePackagesApiContainer();
            $container->init($this, $this->getClient());
            $this->localStorePackagesApiContainer = $container;
        }
        return $this->localStorePackagesApiContainer;
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
     * @return MarketingRulesApiContainer
     */
    public function marketingRules()
    {
        if (empty($this->marketingRulesApiContainer)) {
            $container = new MarketingRulesApiContainer();
            $container->init($this, $this->getClient());
            $this->marketingRulesApiContainer = $container;
        }
        return $this->marketingRulesApiContainer;
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
     * @return MaterialDcasetApiContainer
     */
    public function materialDcaset()
    {
        if (empty($this->materialDcasetApiContainer)) {
            $container = new MaterialDcasetApiContainer();
            $container->init($this, $this->getClient());
            $this->materialDcasetApiContainer = $container;
        }
        return $this->materialDcasetApiContainer;
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
     * @return MuseAiMaterialApiContainer
     */
    public function museAiMaterial()
    {
        if (empty($this->museAiMaterialApiContainer)) {
            $container = new MuseAiMaterialApiContainer();
            $container->init($this, $this->getClient());
            $this->museAiMaterialApiContainer = $container;
        }
        return $this->museAiMaterialApiContainer;
    }


    /**
     * @return MuseAiTaskApiContainer
     */
    public function museAiTask()
    {
        if (empty($this->museAiTaskApiContainer)) {
            $container = new MuseAiTaskApiContainer();
            $container->init($this, $this->getClient());
            $this->museAiTaskApiContainer = $container;
        }
        return $this->museAiTaskApiContainer;
    }


    /**
     * @return MuseAiUgcApiContainer
     */
    public function museAiUgc()
    {
        if (empty($this->museAiUgcApiContainer)) {
            $container = new MuseAiUgcApiContainer();
            $container->init($this, $this->getClient());
            $this->museAiUgcApiContainer = $container;
        }
        return $this->museAiUgcApiContainer;
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
     * @return ObjectCommentFlagApiContainer
     */
    public function objectCommentFlag()
    {
        if (empty($this->objectCommentFlagApiContainer)) {
            $container = new ObjectCommentFlagApiContainer();
            $container->init($this, $this->getClient());
            $this->objectCommentFlagApiContainer = $container;
        }
        return $this->objectCommentFlagApiContainer;
    }


    /**
     * @return OperationLogListApiContainer
     */
    public function operationLogList()
    {
        if (empty($this->operationLogListApiContainer)) {
            $container = new OperationLogListApiContainer();
            $container->init($this, $this->getClient());
            $this->operationLogListApiContainer = $container;
        }
        return $this->operationLogListApiContainer;
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
     * @return ProgrammedCommponentPreviewApiContainer
     */
    public function programmedCommponentPreview()
    {
        if (empty($this->programmedCommponentPreviewApiContainer)) {
            $container = new ProgrammedCommponentPreviewApiContainer();
            $container->init($this, $this->getClient());
            $this->programmedCommponentPreviewApiContainer = $container;
        }
        return $this->programmedCommponentPreviewApiContainer;
    }


    /**
     * @return ProgrammedCommponentPreviewTemplateApiContainer
     */
    public function programmedCommponentPreviewTemplate()
    {
        if (empty($this->programmedCommponentPreviewTemplateApiContainer)) {
            $container = new ProgrammedCommponentPreviewTemplateApiContainer();
            $container->init($this, $this->getClient());
            $this->programmedCommponentPreviewTemplateApiContainer = $container;
        }
        return $this->programmedCommponentPreviewTemplateApiContainer;
    }


    /**
     * @return ProgrammedCommponentResultApiContainer
     */
    public function programmedCommponentResult()
    {
        if (empty($this->programmedCommponentResultApiContainer)) {
            $container = new ProgrammedCommponentResultApiContainer();
            $container->init($this, $this->getClient());
            $this->programmedCommponentResultApiContainer = $container;
        }
        return $this->programmedCommponentResultApiContainer;
    }


    /**
     * @return ProgrammedMaterialMappingsApiContainer
     */
    public function programmedMaterialMappings()
    {
        if (empty($this->programmedMaterialMappingsApiContainer)) {
            $container = new ProgrammedMaterialMappingsApiContainer();
            $container->init($this, $this->getClient());
            $this->programmedMaterialMappingsApiContainer = $container;
        }
        return $this->programmedMaterialMappingsApiContainer;
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
     * @return QualificationImagesApiContainer
     */
    public function qualificationImages()
    {
        if (empty($this->qualificationImagesApiContainer)) {
            $container = new QualificationImagesApiContainer();
            $container->init($this, $this->getClient());
            $this->qualificationImagesApiContainer = $container;
        }
        return $this->qualificationImagesApiContainer;
    }


    /**
     * @return QualificationStructureApiContainer
     */
    public function qualificationStructure()
    {
        if (empty($this->qualificationStructureApiContainer)) {
            $container = new QualificationStructureApiContainer();
            $container->init($this, $this->getClient());
            $this->qualificationStructureApiContainer = $container;
        }
        return $this->qualificationStructureApiContainer;
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
     * @return RtaInfoApiContainer
     */
    public function rtaInfo()
    {
        if (empty($this->rtaInfoApiContainer)) {
            $container = new RtaInfoApiContainer();
            $container->init($this, $this->getClient());
            $this->rtaInfoApiContainer = $container;
        }
        return $this->rtaInfoApiContainer;
    }


    /**
     * @return RtaexpApiContainer
     */
    public function rtaexp()
    {
        if (empty($this->rtaexpApiContainer)) {
            $container = new RtaexpApiContainer();
            $container->init($this, $this->getClient());
            $this->rtaexpApiContainer = $container;
        }
        return $this->rtaexpApiContainer;
    }


    /**
     * @return RtaexpDataRoiApiContainer
     */
    public function rtaexpDataRoi()
    {
        if (empty($this->rtaexpDataRoiApiContainer)) {
            $container = new RtaexpDataRoiApiContainer();
            $container->init($this, $this->getClient());
            $this->rtaexpDataRoiApiContainer = $container;
        }
        return $this->rtaexpDataRoiApiContainer;
    }


    /**
     * @return RtaexpDspTagDataApiContainer
     */
    public function rtaexpDspTagData()
    {
        if (empty($this->rtaexpDspTagDataApiContainer)) {
            $container = new RtaexpDspTagDataApiContainer();
            $container->init($this, $this->getClient());
            $this->rtaexpDspTagDataApiContainer = $container;
        }
        return $this->rtaexpDspTagDataApiContainer;
    }


    /**
     * @return RtatargetApiContainer
     */
    public function rtatarget()
    {
        if (empty($this->rtatargetApiContainer)) {
            $container = new RtatargetApiContainer();
            $container->init($this, $this->getClient());
            $this->rtatargetApiContainer = $container;
        }
        return $this->rtatargetApiContainer;
    }


    /**
     * @return RtatargetBindApiContainer
     */
    public function rtatargetBind()
    {
        if (empty($this->rtatargetBindApiContainer)) {
            $container = new RtatargetBindApiContainer();
            $container->init($this, $this->getClient());
            $this->rtatargetBindApiContainer = $container;
        }
        return $this->rtatargetBindApiContainer;
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
     * @return WalletApiContainer
     */
    public function wallet()
    {
        if (empty($this->walletApiContainer)) {
            $container = new WalletApiContainer();
            $container->init($this, $this->getClient());
            $this->walletApiContainer = $container;
        }
        return $this->walletApiContainer;
    }


    /**
     * @return WalletTransferApiContainer
     */
    public function walletTransfer()
    {
        if (empty($this->walletTransferApiContainer)) {
            $container = new WalletTransferApiContainer();
            $container->init($this, $this->getClient());
            $this->walletTransferApiContainer = $container;
        }
        return $this->walletTransferApiContainer;
    }


    /**
     * @return WechatChannelsAccountsApiContainer
     */
    public function wechatChannelsAccounts()
    {
        if (empty($this->wechatChannelsAccountsApiContainer)) {
            $container = new WechatChannelsAccountsApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatChannelsAccountsApiContainer = $container;
        }
        return $this->wechatChannelsAccountsApiContainer;
    }


    /**
     * @return WechatChannelsAdAccountApiContainer
     */
    public function wechatChannelsAdAccount()
    {
        if (empty($this->wechatChannelsAdAccountApiContainer)) {
            $container = new WechatChannelsAdAccountApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatChannelsAdAccountApiContainer = $container;
        }
        return $this->wechatChannelsAdAccountApiContainer;
    }


    /**
     * @return WechatChannelsAdAccountCertificationFileApiContainer
     */
    public function wechatChannelsAdAccountCertificationFile()
    {
        if (empty($this->wechatChannelsAdAccountCertificationFileApiContainer)) {
            $container = new WechatChannelsAdAccountCertificationFileApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatChannelsAdAccountCertificationFileApiContainer = $container;
        }
        return $this->wechatChannelsAdAccountCertificationFileApiContainer;
    }


    /**
     * @return WechatChannelsAdAccountValidationApiContainer
     */
    public function wechatChannelsAdAccountValidation()
    {
        if (empty($this->wechatChannelsAdAccountValidationApiContainer)) {
            $container = new WechatChannelsAdAccountValidationApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatChannelsAdAccountValidationApiContainer = $container;
        }
        return $this->wechatChannelsAdAccountValidationApiContainer;
    }


    /**
     * @return WechatChannelsAdAccountWechatBindingApiContainer
     */
    public function wechatChannelsAdAccountWechatBinding()
    {
        if (empty($this->wechatChannelsAdAccountWechatBindingApiContainer)) {
            $container = new WechatChannelsAdAccountWechatBindingApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatChannelsAdAccountWechatBindingApiContainer = $container;
        }
        return $this->wechatChannelsAdAccountWechatBindingApiContainer;
    }


    /**
     * @return WechatChannelsAuthorizationApiContainer
     */
    public function wechatChannelsAuthorization()
    {
        if (empty($this->wechatChannelsAuthorizationApiContainer)) {
            $container = new WechatChannelsAuthorizationApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatChannelsAuthorizationApiContainer = $container;
        }
        return $this->wechatChannelsAuthorizationApiContainer;
    }


    /**
     * @return WechatOfficialAccountsApiContainer
     */
    public function wechatOfficialAccounts()
    {
        if (empty($this->wechatOfficialAccountsApiContainer)) {
            $container = new WechatOfficialAccountsApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatOfficialAccountsApiContainer = $container;
        }
        return $this->wechatOfficialAccountsApiContainer;
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
     * @return WechatPagesCsgroupStatusApiContainer
     */
    public function wechatPagesCsgroupStatus()
    {
        if (empty($this->wechatPagesCsgroupStatusApiContainer)) {
            $container = new WechatPagesCsgroupStatusApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesCsgroupStatusApiContainer = $container;
        }
        return $this->wechatPagesCsgroupStatusApiContainer;
    }


    /**
     * @return WechatPagesCsgroupUserApiContainer
     */
    public function wechatPagesCsgroupUser()
    {
        if (empty($this->wechatPagesCsgroupUserApiContainer)) {
            $container = new WechatPagesCsgroupUserApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesCsgroupUserApiContainer = $container;
        }
        return $this->wechatPagesCsgroupUserApiContainer;
    }


    /**
     * @return WechatPagesCsgrouplistApiContainer
     */
    public function wechatPagesCsgrouplist()
    {
        if (empty($this->wechatPagesCsgrouplistApiContainer)) {
            $container = new WechatPagesCsgrouplistApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatPagesCsgrouplistApiContainer = $container;
        }
        return $this->wechatPagesCsgrouplistApiContainer;
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
     * @return WechatShopApiContainer
     */
    public function wechatShop()
    {
        if (empty($this->wechatShopApiContainer)) {
            $container = new WechatShopApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatShopApiContainer = $container;
        }
        return $this->wechatShopApiContainer;
    }


    /**
     * @return WechatShopAuthorizationApiContainer
     */
    public function wechatShopAuthorization()
    {
        if (empty($this->wechatShopAuthorizationApiContainer)) {
            $container = new WechatShopAuthorizationApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatShopAuthorizationApiContainer = $container;
        }
        return $this->wechatShopAuthorizationApiContainer;
    }


    /**
     * @return WechatShopAuthorizationStatusApiContainer
     */
    public function wechatShopAuthorizationStatus()
    {
        if (empty($this->wechatShopAuthorizationStatusApiContainer)) {
            $container = new WechatShopAuthorizationStatusApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatShopAuthorizationStatusApiContainer = $container;
        }
        return $this->wechatShopAuthorizationStatusApiContainer;
    }


    /**
     * @return WechatShopAuthorizationValidationApiContainer
     */
    public function wechatShopAuthorizationValidation()
    {
        if (empty($this->wechatShopAuthorizationValidationApiContainer)) {
            $container = new WechatShopAuthorizationValidationApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatShopAuthorizationValidationApiContainer = $container;
        }
        return $this->wechatShopAuthorizationValidationApiContainer;
    }


    /**
     * @return WechatStoreCatalogsApiContainer
     */
    public function wechatStoreCatalogs()
    {
        if (empty($this->wechatStoreCatalogsApiContainer)) {
            $container = new WechatStoreCatalogsApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatStoreCatalogsApiContainer = $container;
        }
        return $this->wechatStoreCatalogsApiContainer;
    }


    /**
     * @return WechatStoreProductItemsApiContainer
     */
    public function wechatStoreProductItems()
    {
        if (empty($this->wechatStoreProductItemsApiContainer)) {
            $container = new WechatStoreProductItemsApiContainer();
            $container->init($this, $this->getClient());
            $this->wechatStoreProductItemsApiContainer = $container;
        }
        return $this->wechatStoreProductItemsApiContainer;
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
     * @return WxGamePlayablePageApiContainer
     */
    public function wxGamePlayablePage()
    {
        if (empty($this->wxGamePlayablePageApiContainer)) {
            $container = new WxGamePlayablePageApiContainer();
            $container->init($this, $this->getClient());
            $this->wxGamePlayablePageApiContainer = $container;
        }
        return $this->wxGamePlayablePageApiContainer;
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
     * @return XijingPageInteractiveApiContainer
     */
    public function xijingPageInteractive()
    {
        if (empty($this->xijingPageInteractiveApiContainer)) {
            $container = new XijingPageInteractiveApiContainer();
            $container->init($this, $this->getClient());
            $this->xijingPageInteractiveApiContainer = $container;
        }
        return $this->xijingPageInteractiveApiContainer;
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
