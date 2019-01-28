<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 09:37
 */

namespace Apisql\Crud;

use Apisql\OperationAbstract;

class Read extends OperationAbstract
{
    /** @var \Apisql\Model\CollectionAbstract */
    public $model_collection;
}