<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 09:37
 */

namespace Phpfunc\Operation;

use Phpfunc\OperationAbstract;

class Read extends OperationAbstract
{
    /** @var \Phpfunc\Model\CollectionAbstract */
    public $model_collection;
}