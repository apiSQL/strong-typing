<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 27.01.2019
 * Time: 14:51
 */

namespace Apisql\Unit;


use Apisql\UnitAbstract;

interface UnitFactorInterface
{
    /**
     * @return int
     */
    public function getFactor(): int;

    /**
     * @param int $factor
     * @return UnitAbstract
     */
    public function setFactor(int $factor);
}