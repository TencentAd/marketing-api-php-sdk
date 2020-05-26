<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-02
 * Time: 12:05
 */

namespace TencentAds;

use GuzzleHttp\Client;
use Monolog\Logger;
use TencentAds\Exception\TencentAdsSDKException;
use TencentAds\Helper\Url;
use TencentAds\Kernel\App;
use TencentAds\Kernel\BatchHandler;
use TencentAds\Kernel\BatchResponse;
use TencentAds\Kernel\Log;
use TencentAds\Middleware\AuthMiddleware;
use TencentAds\Middleware\DiffHostMiddleware;
use TencentAds\Middleware\EncodeArrayMiddleware;
use TencentAds\Middleware\LogMiddleware;

/**
 * Class TencentAds
 * @package TencentAds
 */
class TencentAds extends App
{
    /**
     * @var TencentAds 实例
     */
    protected static $instance;

    /**
     * SDK version
     * @var string
     */
    protected $version = '1.1.2';

    /**
     * SDK version
     * @var string
     */
    protected $apiVersion = 'v1.1';

    /**
     * @var string access token
     */
    protected $accessToken = '';

    /**
     * @var Configuration tencent ad config
     */
    protected $config;

    /**
     * @var array
     */
    protected $globalConfig = [];

    /**
     * @var array
     */
    protected $batchRequests = [];

    /**
     * @var array middleware list
     */
    protected $middleware = [
        AuthMiddleware::class,
        DiffHostMiddleware::class,
        EncodeArrayMiddleware::class,
        LogMiddleware::class,
    ];

    /**
     * @var array middleware list
     */
    protected $middlewareInstance = [];

    /**
     * Init tencent ads
     * @param array $config
     * @return TencentAds
     * @throws TencentAdsSDKException
     */
    public static function init(array $config)
    {
        $instance = self::getInstance();
        $instance->config = Configuration::getDefaultConfiguration();
        $accessToken = isset($config['access_token']) ? $config['access_token'] : '';
        $isDebug = isset($config['is_debug']) ? $config['is_debug'] : false;
        $debugFile = isset($config['debug_file']) ? $config['debug_file'] : $instance->config->getDebugFile();
        $isMonitor = isset($config['is_monitor']) ? $config['is_monitor'] : true;
        $instance->accessToken = $accessToken;
        $instance->config->setApiKey('access_token', $accessToken)
            ->setDebug($isDebug)
            ->setDebugFile($debugFile);
        if ($isDebug) {
            Log::init(Logger::DEBUG, $debugFile);
        } else {
            Log::init();
        }
        // default use sandbox
        $instance->useSandbox();
        $instance->generateMiddlewareInstance();
        $rootPath = dirname(dirname(__DIR__));
        $configKeys = ['app', 'interface_map'];
        foreach ($configKeys as $configKey) {
            $instance->globalConfig[$configKey] = require_once $rootPath . '/config/' . $configKey . '.php';
        }
        $instance->globalConfig['is_monitor'] = $isMonitor;
        return $instance;
    }

    /**
     * Use SDK monitor
     * @param bool $isMonitor
     * @return $this
     */
    public function setIsMonitor($isMonitor = true)
    {
        $this->globalConfig['is_monitor'] = $isMonitor;
        return $this;
    }

    /**
     * Set host, such as
     * @param $host
     * @param $schema
     * @return TencentAds
     */
    public function setHost($host, $schema = 'https')
    {
        $url = "{$schema}://{$host}/{$this->apiVersion}";
        $this->globalConfig['url'] = $url;
        $this->config->setHost($url);
        return $this;
    }

    /**
     * Use sandbox environment
     * @return TencentAds
     */
    public function useSandbox()
    {
        return $this->setHost('sandbox-api.e.qq.com');
    }

    /**
     * Use production environment
     * @return TencentAds
     */
    public function useProduction()
    {
        return $this->setHost('api.e.qq.com');
    }

    /**
     * Set ip and port
     * @param $ip
     * @param int $port
     * @param string $schema
     * @return $this
     */
    public function setIpPort($ip, $port = 80, $schema = 'http')
    {
        $this->setHost("$ip:$port", $schema);
        return $this;
    }

    /**
     * Set guzzle client header
     * @param array $headers
     * @return $this
     */
    public function setHeaders($headers)
    {
        if (empty($this->globalConfig['http_options'])) {
            $this->globalConfig['http_options'] = [];
        }
        $this->globalConfig['http_options']['headers'] = $headers;
        return $this;
    }

    /**
     * Get headers
     * @return array|mixed
     */
    public function getHeaders()
    {
        return empty($this->globalConfig['http_options']['headers']) ? [] : $this->globalConfig['http_options']['headers'];
    }

    /**
     * Set serializer type
     * @param $type
     * @return $this
     */
    public function setSerializerType($type)
    {
        $this->globalConfig['serializer'] = $type;
        return $this;
    }

    /**
     * Set guzzle options
     * @param $options
     * @return $this
     */
    public function setHttpOptions($options)
    {
        $this->globalConfig['http_options'] = $options;
        $this->client = new Client($this->globalConfig['http_options']);
        return $this;
    }

    /**
     * Get http options
     * @return array|mixed
     */
    public function getHttpOptions()
    {
        return empty($this->globalConfig['http_options']) ? [] : $this->globalConfig['http_options'];
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        if (empty($this->client)) {
            if (!empty($this->globalConfig['http_options'])) {
                $this->client = new Client($this->globalConfig['http_options']);
            } else {
                $this->client = new Client();
            }
        }
        return $this->client;
    }

    /**
     * Generate middleware instance
     *
     * @throws TencentAdsSDKException
     */
    public function generateMiddlewareInstance()
    {
        $oldMiddlewareInstances = $this->middlewareInstance;
        $this->middlewareInstance = [];
        foreach ($this->middleware as $middlewareName) {
            if (empty($oldMiddlewareInstances[$middlewareName])) {
                if (!class_exists($middlewareName)) {
                    throw new TencentAdsSDKException("Middleware $middlewareName not exists");
                }
                $this->middlewareInstance[$middlewareName] = new $middlewareName();
                if (!method_exists($this->middlewareInstance[$middlewareName], 'handle')) {
                    throw new TencentAdsSDKException("Middleware $middlewareName's handle function not exists");
                }
            } else {
                $this->middlewareInstance[$middlewareName] = $oldMiddlewareInstances[$middlewareName];
            }
        }
    }

    /**
     * Get sdk version
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Get instance
     * @return TencentAds
     */
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return array
     */
    public function getGlobalConfig()
    {
        return $this->globalConfig;
    }

    /**
     * Set global config
     *
     * @param $key
     * @param $value
     * @return $this
     */
    public function setGlobalConfig($key, $value)
    {
        $this->globalConfig[$key] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set access token
     *
     * @param $accessToken
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        $this->config->setApiKey('access_token', $accessToken);
        return $this;
    }

    /**
     * Append a middleware
     *
     * @param string $middleware
     * @throws TencentAdsSDKException
     */
    public function appendMiddleware($middleware)
    {
        $this->middleware[] = $middleware;
        $this->generateMiddlewareInstance();
    }

    /**
     * Set all middleware
     * @param array $middleware
     * @return $this
     * @throws TencentAdsSDKException
     */
    public function setMiddleware(array $middleware)
    {
        $this->middleware = $middleware;
        $this->generateMiddlewareInstance();
        return $this;
    }

    /**
     * Get all middleware
     * @return array
     */
    public function getMiddleware()
    {
        return $this->middleware;
    }

    /**
     * Get all middleware instance
     * @return array
     */
    public function getMiddlewareInstance()
    {
        return $this->middlewareInstance;
    }

    /**
     * Send batch request
     *
     * @param $accountId
     * @param $batchRequest
     * @return BatchResponse[]
     * @throws ApiException
     * @throws Exception\TencentAdsResponseException
     * @throws TencentAdsSDKException
     */
    public function sendBatchRequest($accountId, $batchRequest)
    {
        $batchRequestSpec = $this->buildBatchRequest($accountId, $batchRequest);
        $data = $this->batchRequests()->add([
            'batch_request_spec' => $batchRequestSpec,
            'account_id' => $accountId,
        ]);
        $responses = $data->getList();
        $batchHandler = BatchHandler::getInstance();
        return $batchHandler->getResponses($batchRequest, $responses);
    }

    /**
     * Build batch request spec param
     * @param $accountId
     * @param $batchRequest
     * @return array
     * @throws TencentAdsSDKException
     */
    protected function buildBatchRequest($accountId, $batchRequest)
    {
        $interfaceMap = $this->globalConfig['interface_map'];
        $batchRequestSpec = [];
        foreach ($batchRequest as $item) {
            list($uri, $params) = $item;
            if (!empty($interfaceMap[$uri])) {
                $interfaceInfo = $interfaceMap[$uri];
                $versionUri = $this->apiVersion . '/' . $uri;
                if (empty($params['account_id'])) {
                    $params['account_id'] = $accountId;
                }
                $query = Url::buildQuery($params);
                switch ($interfaceInfo['method']) {
                    case 'GET':
                        $batchRequestSpec[] = [
                            'relative_path' => $versionUri . (empty($query) ? '' : '?') . $query
                        ];
                        break;
                    case 'POST':
                        $batchRequestSpec[] = [
                            'relative_path' => $versionUri,
                            'body' => $query
                        ];
                        break;
                    default:
                        throw new TencentAdsSDKException("Batch request not support this interface method");
                }
            } else {
                throw new TencentAdsSDKException("Batch request not support this interface");
            }
        }
        return $batchRequestSpec;
    }
}
