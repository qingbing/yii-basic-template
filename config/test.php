<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */
return [
    'id'         => 'basic-tests',
    /*
    'controllerMap' => [
        'health' => [
            'class' => HealthController::class,
        ],
    ],
    */
    'components' => [
        'urlManager'   => [
            'showScriptName' => true,
        ],
        'request'      => [
            'cookieValidationKey'  => 'test',
            'enableCsrfValidation' => false,
            'parsers'              => [
                'application/json' => \yii\web\JsonParser::class
            ],
            // but if you absolutely need it set cookie domain to localhost
            /*
            'csrfCookie' => [
                'domain' => 'localhost',
            ],
            */
        ],
        'user'         => [
            'class'         => 'app\components\User',
            'identityClass' => 'app\models\User',
        ],
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
        ],
        'mailer'       => [
            'useFileTransport' => true,
        ],
    ]

];