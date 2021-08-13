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
    'components' => [
        'request'     => [
            // 配置信任主机，不配置，x-forwarded-for(header头) 指定的ip将不能透传
            'trustedHosts' => [],
        ],
    ],
];