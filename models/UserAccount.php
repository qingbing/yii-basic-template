<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace app\models;

/**
 * 用户账户模型
 *
 * Class UserAccount
 * @package app\models
 */
class UserAccount extends \YiiHelper\models\abstracts\UserAccount
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'program_user_account';
    }

    /**
     * 支持的登录类型
     *
     * @return array
     */
    public static function types(): array
    {
        return [
            self::TYPE_USERNAME => '用户名',
            self::TYPE_EMAIL    => '邮箱',
            self::TYPE_MOBILE   => '手机号',
            self::TYPE_NAME     => '姓名',
        ];
    }
}