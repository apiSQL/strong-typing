<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 15:15
 */

namespace Apisql\Model;


use Apisql\Filter\Attribute;
use Apisql\Model;
use Apisql\ModelAbstract;

class Fill extends ModelAbstract
{


    public function byAttribute(Attribute $attribute)
    {
        return $this;
    }

    public function byModel(Model $attribute)
    {
        return $this;
    }
}