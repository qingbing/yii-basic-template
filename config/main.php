<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

return [
    'id'         => 'basic',
    'language'   => 'zh-CN',
    'basePath'   => dirname(__DIR__),
    'bootstrap'  => ['log'],
    'aliases'    => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    /*
    'controllerMap' => [
        'health' => [
            'class' => HealthController::class,
        ],
    ],
    */
    'components' => [
        'cache'        => [
            'class' => \yii\caching\FileCache::class,
        ],
        // 缓存助手
        'cacheHelper'  => [
            'class'   => \YiiHelper\components\CacheHelper::class,
            'cacheId' => 'cache',
        ],
        'errorHandler' => [
            'class' => \YiiHelper\components\ErrorHandler::class,
        ],
        'db'           => [
            'class'    => 'yii\db\Connection',
            'charset'  => 'utf8',
            'dsn'      => define_var("CONF_DB_DSN"),
            'username' => define_var("CONF_DB_USER"),
            'password' => define_var("CONF_DB_PASS"),
        ],
        'mailer'       => [
            'class'            => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
            'transport'        => [
                'class'      => 'Swift_SmtpTransport',
                'encryption' => 'tls',
            ],
            'messageConfig'    => [
                'charset' => 'UTF-8',
            ],
        ],
    ],
    'params'     => [],
];