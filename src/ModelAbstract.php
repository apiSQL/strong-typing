<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:43
 */

namespace Apisql;


abstract class ModelAbstract
{
    public $model;

    /**
     * ModelAbstract constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }


    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     * @return ModelAbstract
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }



}