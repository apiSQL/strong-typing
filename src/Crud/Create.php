<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 09:37
 */

namespace Phpfunc\Crud;

use Phpfunc\ExecuteInterface;
use Phpfunc\OperationAbstract;

class Create extends OperationAbstract implements ExecuteInterface
{
    public function execute()
    {
        $this->source->getOperation()->create($this->model);

        return $this;
    }
}