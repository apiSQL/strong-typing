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
use Apisql\Attribute\UserEmail;

class Registration
{
    /** @var UserLogin */
    public $user_login;

    /** @var UserPassword */
    public $user_password;

    /** @var UserEmail */
    public $user_email;

    /**
     * Registration constructor.
     * @param UserLogin $user_login
     * @param UserPassword $user_password
     * @param UserEmail $user_email
     */
    public function __construct(UserLogin $user_login, UserPassword $user_password, UserEmail $user_email)
    {
        $this->user_login = $user_login;
        $this->user_password = $user_password;
        $this->user_email = $user_email;
    }


}