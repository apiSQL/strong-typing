<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 15:37
 */

namespace Apisql;


use Apisql\Filter\Attribute;

class Fill
{
    public static function ModelByAttribute(Model $model, Attribute $attribute){

        return $model;
    }
}