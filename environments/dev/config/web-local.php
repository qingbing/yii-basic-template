<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 *
 * configuration adjustments for 'dev' environment
 */

// comment out the following two lines when deployed to production

return [
    'bootstrap'  => ['debug', 'gii'],
    'modules'    => [
        'debug' => [
            'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
        ],
        'gii'   => [
            'class' => 'yii\gii\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
        ]
    ],
    'components' => [
        'request'     => [
            // 配置信任主机，不配置，x-forwarded-for(header头) 指定的ip将不能透传
            'trustedHosts' => [
                '192.168.1.0/24',
            ],
        ],
    ],
];