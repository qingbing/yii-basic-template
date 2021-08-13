<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */
return [
    'id'                  => 'basic-console',
    'controllerNamespace' => 'app\commands',
    'aliases'             => [
        '@tests' => '@app/tests',
    ],
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
    'components'          => [
    ]
];