<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 27.01.2019
 * Time: 14:51
 */

namespace Phpfunc\Unit;


use Phpfunc\UnitAbstract;

interface UnitValueInterface
{
    /**
     * @return int
     */
    public function getValue(): int;

    /**
     * @param int $value
     * @return UnitAbstract
     */
    public function setValue(int $value);
}