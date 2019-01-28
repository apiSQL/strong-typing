<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 28.01.2019
 * Time: 19:31
 */

namespace Apisql\Transaction;


use Apisql\OperationAbstract;
use Apisql\TransactionAbstract;

class Operation extends TransactionAbstract
{

    /** @var OperationAbstract */
    public $operation;

    /**
     * Operation constructor.
     * @param OperationAbstract $operation
     */
    public function __construct(OperationAbstract $operation)
    {
        $this->operation = $operation;
    }

    public function execute() {

    }
}