<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 09:37
 */

namespace Phpfunc\Model;

use Phpfunc\Attribute\UserId;
use Phpfunc\Attribute\UserEmail;
use Phpfunc\Attribute\UserLogin;
use Phpfunc\Attribute\UserPassword;
use Phpfunc\Model;

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