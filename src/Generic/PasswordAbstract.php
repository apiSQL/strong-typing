<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 12:32
 */

namespace Apisql\Generic;


abstract class PasswordAbstract implements PasswordInterface
{
    public $password;

    public function Password()
    {
        // TODO: Implement Password() method.
        return $this->password;
    }

}