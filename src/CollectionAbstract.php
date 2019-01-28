<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 14:07
 */

namespace Apisql;


abstract class CollectionAbstract
{

    public function add($model){
        return $this;
    }
}