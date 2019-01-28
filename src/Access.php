<?php


namespace Apisql;


use Apisql\Access\AccessOperation;
use Apisql\Access\AccessRole;
use Apisql\Access\AccessUser;
use Apisql\Access\ConditionAbstract;

class Access extends AccessAbstract //CollectionAbstract
{
    /** @var AccessOperation */
//    public $operation;

    /** @var AccessRole */
//    public $role;

    /** @var AccessUser */
//    public $user;


//    public $collection;


    /** @var AccessAbstract */
    public $access;

    /** @var ConditionAbstract */
    public $condition;

    /**
     * Access constructor.
     * @param AccessAbstract $access
     * @param ConditionAbstract $condition
     */
    public function __construct(AccessAbstract $access, ConditionAbstract $condition)
    {
        $this->access = $access;
        $this->condition = $condition;
    }



    /**
     * Access constructor.
     * @param AccessOperation $operation
     * @param AccessRole $role
     * @param AccessUser $user
     */
//    public function __construct(AccessOperation $operation, AccessRole $role, AccessUser $user)
//    {
//        $this->operation = $operation;
//        $this->role = $role;
//        $this->user = $user;
//    }


}