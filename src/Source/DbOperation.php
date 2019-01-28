<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:39
 */

namespace Apisql\Source;


use Apisql\Crud\CreateInterface;
use Apisql\Crud\ReadInterface;
use Apisql\OperationAbstract;
use Apisql\Source;

class DbOperation extends OperationAbstract implements CreateInterface, ReadInterface
{
    public function create()
    {
        // TODO: Implement create() method.
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function execute()
    {
        return $this;
    }
}