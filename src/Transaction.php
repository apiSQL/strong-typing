<?php


namespace Apisql;


class Transaction
{
    /** @var OperationAbstract */
    public $operation;

    /** @var AccessAbstract */
    public $access;

    /** @var string */
    public $description;

    /**
     * Transaction constructor.
     * @param OperationAbstract $operation
     * @param AccessAbstract $access
     * @param string $description
     */
    public function __construct(OperationAbstract $operation, AccessAbstract $access, string $description)
    {
        $this->operation = $operation;
        $this->access = $access;
        $this->description = $description;
    }


}