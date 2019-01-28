<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 09:37
 */

namespace Apisql\Model;

use Apisql\Attribute\UserId;
use Apisql\Attribute\UserEmail;
use Apisql\Attribute\UserLogin;
use Apisql\Attribute\UserPassword;
use Apisql\Model;

class User extends Model
{
    /** @var UserId */
    public $user_id;

    /** @var UserLogin */
    public $user_login;

    /** @var UserPassword */
    public $user_password;

    /** @var UserEmail */
    public $user_email;


}