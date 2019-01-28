<?php


namespace Apisql\Sql;


use Apisql\ExecuteInterface;
use Apisql\OperationAbstract;

class Create extends OperationAbstract implements ExecuteInterface
{


    public function execute()
    {
        return $this;
    }
}