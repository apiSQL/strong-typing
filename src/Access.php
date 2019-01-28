<?php


namespace Phpfunc;


use Phpfunc\Access\AccessOperation;
use Phpfunc\Access\AccessRole;
use Phpfunc\Access\AccessUser;

class Access extends AccessAbstract //CollectionAbstract
{
    /** @var AccessOperation */
    public $operation;

    /** @var AccessRole */
    public $role;

    /** @var AccessUser */
    public $user;


    public $collection;

    /**
     * Access constructor.
     * @param $collection
     */
    public function __construct(array $collection)
    {
        $this->collection = $collection;
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