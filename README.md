# Marketing PHP SDK
## 概述
腾讯广告 Marketing API(以下简称API) SDK 提供了Token获取、请求封装、响应解释等功能，以本地化方式轻松完成API的调用和结果的获取，旨在帮助开发者快速搭建投放管理系统。
未来还会基于常用的广告投放场景，提供场景化的接口组合及调用封装。

## 使用条件
1. 使用SDK需要首先注册成为腾讯广告开发者，请参考[开发者快速入门文档](https://developers.e.qq.com/docs/start)
2. 使用SDK需要先拥有API的访问权限，所有SDK的使用与应用拥有的权限组相关联
3. PHP SDK 需要依赖 PHP 5.5 及以上

## 如何安装
1. 修改composer.json文件，添加如下内容

```json
{
  "require": {
    "tencent-ad/marketing-api-php-sdk" : "*"
  }
}
```

2. 执行如下命令安装

```shell
composer install --no-dev
```

## 如何使用
SDK同时支持数组参数和语义化调用，推荐使用数组参数，方便后续升级扩展。本说明文档都使用数组参数调用的形式。/docs目录下的文档使用了语义化调用的方式。
SDK数组参数调用的方法名与API接口一一对应，如campaigns/get接口就对应$tads->campaigns()->get()方法
### 获取Access Token
###### 注：本示例适用于授权时通过Authorization Code获取Access Token和Refresh Token，如需更新Access Token请参考 ./examples/refresh_token.php 示例
```php
<?php
require_once __DIR__ . '/vendor/autoload.php'; // vendor 目录中的 autoload 文件
use TencentAds\TencentAds;

$tads = TencentAds::init([]);
$token = $tads->oauth()
              ->token([ // oauth/token接口即对应oauth()->token()方法
                  'client_id'          => '{your client id}',
                  'client_secret'      => '{your client secret}',
                  'grant_type'         => 'authorization_code',
                  'authorization_code' => '{your authorization code}',
                  'redirect_uri'       => '{your redirect uri}',
              ]);

echo "<pre>" . PHP_EOL;
print_r($token);
echo "</pre>" . PHP_EOL;

$tads->setAccessToken($token->getAccessToken());
```
### 设置调用环境、Access Token
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';
use TencentAds\TencentAds;

$tads = TencentAds::init([
    'access_token' => '{access-token}',
])->useSandbox(); // 默认访问沙箱环境，如访问正式环境，请调用$tads->useProduction()
```
### 调用API接口
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use TencentAds\TencentAds;
use TencentAds\Exception\TencentAdsResponseException;
use TencentAds\Exception\TencentAdsSDKException;

$tads = TencentAds::init([
    'access_token' => '{your access token}',
]);
try {
    $filtering = [
        [
            'field'    => 'promoted_object_type',
            'operator' => 'EQUALS',
            'values'   => ['PROMOTED_OBJECT_TYPE_APP_IOS'],
        ],
    ];
    $response = $tads
        ->campaigns()
        ->get([ // campaigns/get接口即对应campaigns()->get()方法
            'account_id' => '{your account id}',
            'filtering'  => $filtering,
        ]);
    echo "<pre>" . PHP_EOL;
    print_r($response);
    echo "</pre>" . PHP_EOL;
} catch (TencentAdsResponseException $e) {
    // When Api returns an error
    echo 'Tencent ads returned an error: ' . $e->getMessage();
    exit;
} catch (TencentAdsSDKException $e) {
    // When validation fails or other local issues
    echo 'Tencent ads SDK returned an error: ' . $e->getMessage();
    exit;
}
```

### 调试和查看API接口日志
```php
<?php
require_once __DIR__ . '/vendor/autoload.php'; 

use TencentAds\TencentAds;

$tads = TencentAds::init([
    'access_token' => '{access-token}',
    'is_debug'     => true,
    'debug_file'   => '{your log path}', // 不指定，输出到 php://output
]);
```

### 关闭SDK上报
###### 目前SDK上报信息为您的服务器版本和PHP版本信息，为了帮助您更好地定位使用上的问题，建议开启上报，如需关闭请参考如下配置。
```php
<?php
require_once __DIR__ . '/vendor/autoload.php'; 

use TencentAds\TencentAds;

$tads = TencentAds::init([
    'access_token' => '{access-token}',
    'is_monitor'   => false,
]);
```

### 设置返回数组
```php
<?php
require_once __DIR__ . '/vendor/autoload.php'; 

use TencentAds\TencentAds;
use TencentAds\Kernel\SerializerHandler;

$tads = TencentAds::init([
    'access_token' => '{access-token}',
    'is_monitor'   => false,
]);

$tads->setSerializerType(SerializerHandler::SERIALIZER_TYPE_ARRAY);
```

## 问题建议与反馈
如果您在使用SDK过程中有任何问题与建议，请随时登录[开发者官网](https://developers.e.qq.com/)，点击右下角的"咨询"按钮，与我们的客服支持人员联系

## 后续计划
1. 丰富各类场景示例
2. 推出其他语言的SDK
