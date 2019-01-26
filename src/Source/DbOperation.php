<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:39
 */

namespace Phpfunc\Source;


use Phpfunc\Operation\CreateInterface;
use Phpfunc\Operation\ReadInterface;
use Phpfunc\OperationAbstract;
use Phpfunc\Source;

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