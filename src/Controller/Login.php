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

class Login
{
    /** @var UserLogin */
    public $user_login;

    /** @var UserPassword */
    public $user_password;

    /**
     * Authentication constructor.
     * @param UserLogin $user_login
     * @param UserPassword $user_password
     */
    public function __construct(UserLogin $user_login, UserPassword $user_password)
    {
        $this->user_login = $user_login;
        $this->user_password = $user_password;
    }

}