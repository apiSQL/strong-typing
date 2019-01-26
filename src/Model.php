<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:43
 */

namespace Phpfunc;


class Model
{

    public function FillBy(){
        $model = $this->getModel();
        return new Fill($model);
    }
}