<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:39
 */

namespace Apisql\Source;


use Apisql\Source;

class Db extends Source
{
    /** @var DbOperation */
    public $operation;

    /**
     * @return DbOperation
     */
    public function getOperation(): DbOperation
    {
        return $this->operation;
    }

    /**
     * @param DbOperation $operation
     * @return Db
     */
    public function setOperation(DbOperation $operation): Db
    {
        $this->operation = $operation;
        return $this;
    }



}