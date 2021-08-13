<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace app\services;


use app\models\User;
use app\models\UserAccount;

/**
 * 服务：登录
 *
 * Class LoginService
 * @package app\services
 */
class LoginService extends \YiiHelper\features\login\services\LoginService
{
    /**
     * @inheritDoc
     */
    public function getUserAccount(string $type, string $account): \YiiHelper\models\abstracts\UserAccount
    {
        return UserAccount::findOne([
            'type'    => $type,
            'account' => $account,
        ]);
    }

    /**
     * 获取登录账户信息
     *
     * @param int $uid
     * @return \YiiHelper\models\abstracts\User
     */
    public function getUser($uid): \YiiHelper\models\abstracts\User
    {
        return User::findOne([
            'uid' => $uid,
        ]);
    }

    /**
     * 获取支持的登录类型
     *
     * @return array
     */
    public function getSupportTypes(): array
    {
        return UserAccount::types();
    }
}