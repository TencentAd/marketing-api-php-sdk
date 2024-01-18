<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2024-01-12
 * Time: 16:08
 */

return [
    // 暂不区分环境
    'TencentAds\Api\V3\AsyncTaskFilesApi'                  => [
        'get' => [
            'url' => 'https://dl.e.qq.com/v3.0',
        ],
    ],
    'TencentAds\Api\V3\AsyncReportFilesApi'                => [
        'get' => [
            'url' => 'https://dl.e.qq.com/v3.0',
        ],
    ],
    'TencentAds\Api\V3\OauthApi'                           => [
        'token'     => [
            'url' => 'https://api.e.qq.com',
        ],
        'authorize' => [
            'url' => 'https://developers.e.qq.com',
        ],
    ],
    'TencentAds\Api\V3\AuthorizationApi'                   => [
        'wechatBind' => [
            'url' => 'https://developers.e.qq.com',
        ],
    ],
    'TencentAds\Api\V3\AudienceGrantRelationsApi'          => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\AudienceLaunchesApi'                => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\BatchRequestsApi'                   => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\CustomAudiencesApi'                 => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\CustomAudienceEstimationsApi'       => [
        'get' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\CustomFeatureClassProjectGrantsApi' => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\CustomFeatureClassesApi'            => [
        'add'    => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
        'update' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\CustomFeaturesApi'                  => [
        'add'    => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
        'update' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\CustomTagFilesApi'                  => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\LabelAudiencesApi'                  => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\UserActionsApi'                     => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\UserPropertiesApi'                  => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\LocalStoresApi'                     => [
        'add'    => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
        'delete' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\LocalStoresAddressParsingResultApi' => [
        'get' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\AdDiagnosisApi'                     => [
        'get' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\XijingPageApi'                      => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\XijingPageByComponentsApi'          => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\LeadCluesApi'                       => [
        'get'    => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
        'update' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\BatchAsyncRequestsApi'              => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\LeadsFormApi'                       => [
        'add' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\BidSimulationApi'                   => [
        'get' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
    'TencentAds\Api\V3\AdcreativesValidateResultApi'       => [
        'get' => [
            'skip_middleware' => [\TencentAds\Middleware\EncodeArrayMiddleware::class],
        ],
    ],
];
