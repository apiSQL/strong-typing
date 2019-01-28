<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:42
 */

namespace Apisql;


abstract class OperationAbstract implements ExecuteInterface
{
    // DB, Filesystem
    /** @var Source */
    public $source;

    /** @var Model */
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
        $this->execute();
    }

    public function execute()
    {
        return $this;
    }
}