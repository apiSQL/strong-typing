<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:42
 */

namespace Phpfunc;


abstract class OperationAbstract implements ExecuteInterface
{
    // DB, Filesystem
    public $source;

    public $model;

    /**
     * OperationAbstract constructor.
     * @param $source
     * @param $model
     */
    public function __construct($source, $model)
    {
        $this->source = $source;
        $this->model = $model;
    }

    public function execute()
    {
        return $this;
    }
}