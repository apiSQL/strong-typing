<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 10:36
 */

namespace Apisql\Controller;


use Apisql\Attribute\UserLogin;
use Apisql\Attribute\UserPassword;

class Logout
{
    /** @var UserLogin */
    public $user_login;

    /**
     * Logout constructor.
     * @param UserLogin $user_login
     */
    public function __construct(UserLogin $user_login)
    {
        $this->user_login = $user_login;
    }

}