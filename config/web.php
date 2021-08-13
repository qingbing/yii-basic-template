<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

return [
    'id'            => 'basic',
    'defaultRoute'  => 'site/index',
    'controllerMap' => [
        'login'                => [
            'class'        => \YiiHelper\features\login\controllers\LoginController::class,
            'serviceClass' => \app\services\LoginService::class,
        ],
        'health' => \YiiHelper\controllers\HealthController::class,
    ],
    'components'    => [
        'request'      => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey'  => 'hHdoXA7pIp5Z-ajb_nz8WSNwTWyKE3Gg',
            // 接口在post时关闭 csrf 检查
            'enableCsrfValidation' => false,
            'parsers'              => [
                'application/json' => \yii\web\JsonParser::class
            ],
        ],
        'urlManager'   => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules'           => [],
        ],
        'user'             => [
            'class'           => \YiiHelper\components\User::class,
            'identityClass'   => \app\models\User::class,
            'enableAutoLogin' => true,
            'identityCookie'  => ['name' => '_identity-portal', 'httpOnly' => true],
            'multiLogin'      => true, // 是否允许多客户端登录
            // 允许登录的账户类型
            'loginTypes'      => [
                \YiiHelper\models\abstracts\UserAccount::TYPE_EMAIL,
                //\YiiHelper\models\abstracts\UserAccount::TYPE_USERNAME,
                //\YiiHelper\models\abstracts\UserAccount::TYPE_MOBILE,
                //\YiiHelper\models\abstracts\UserAccount::TYPE_NAME,
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ]
];