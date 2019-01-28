<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 09:37
 */

namespace Apisql\Crud;

use Apisql\ExecuteInterface;
use Apisql\OperationAbstract;

interface CreateInterface
{
    public function create();
    public function execute();
}