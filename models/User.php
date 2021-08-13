<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace app\models;


use YiiHelper\models\abstracts\UserAccount;

/**
 * 用户模型
 *
 * Class User
 * @package app\models
 */
class User extends \YiiHelper\models\abstracts\User
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'program_user';
    }

    /**
     * 查询用户账户信息
     *
     * @param int $uid
     * @param string $type
     * @param string $account
     * @return UserAccount
     */
    protected function getUserAccount($uid, string $type, string $account): UserAccount
    {
        return \app\models\UserAccount::findOne([
            'uid'     => $uid,
            'type'    => $type,
            'account' => $account,
        ]);
    }
}