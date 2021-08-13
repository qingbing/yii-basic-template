<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 *
 * configuration adjustments for 'dev' environment
 */

use YiiHelper\extend\FileTarget;

return [
    'components' => [
        'db'  => [
            // Schema cache options (for production environment)
            //'enableSchemaCache' => true,
            //'schemaCacheDuration' => 60,
            //'schemaCache' => 'cache',
        ],
        // 缓存助手
        'cacheHelper' => [
            'openCache' => false, // 不缓存
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'      => FileTarget::class,
                    'levels'     => ['info', 'warning', 'error'],
                    'logVars'    => [],
                    //表示以yii\db\或者app\models\开头的分类都会写入这个文件
                    'categories' => ['yii\db\*', 'app\models\*'],
                    //表示写入到文件
                    'logFile'    => '@runtime/logs/YIISQL_' . date('y_m_d') . '.log',
                ],
                [
                    'class'      => FileTarget::class,
                    'levels'     => ['info', 'warning', 'error'],
                    'logVars'    => [],
                    //表示以yii\db\或者app\models\开头的分类都会写入这个文件
                    'categories' => ['custom.error'],
                    //表示写入到文件
                    'logFile'    => '@runtime/logs/error_' . date('y_m_d') . '.log',
                ],
                [
                    'class'      => FileTarget::class,
                    'levels'     => ['info', 'warning', 'error'],
                    'logVars'    => [],
                    //表示以yii\db\或者app\models\开头的分类都会写入这个文件
                    'categories' => ['custom.exception'],
                    //表示写入到文件
                    'logFile'    => '@runtime/logs/exception_' . date('y_m_d') . '.log',
                ]
            ],
        ],
    ],
];