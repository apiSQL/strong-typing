<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:41
 */

namespace Phpfunc;


class Example1
{

    function CreateUserInDb()
    {
        $source = new Db();
        $model = new User();


        Create($source, $model);
    }
}