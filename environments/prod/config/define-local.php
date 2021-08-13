<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 *
 * configuration adjustments for 'dev' environment
 *
 * 所有的常量值定义都可以写入这里，主要目的还是各个环境变量的配置内容
 */

/**
 * yii 环境定义
 */
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

/**
 * 数据库配置变量
 */
defined("CONF_DB_DSN") or define("CONF_DB_DSN", "mysql:host=192.168.1.8;dbname=yii_test");
defined("CONF_DB_USER") or define("CONF_DB_USER", "root");
defined("CONF_DB_PASS") or define("CONF_DB_PASS", "123456");
