<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 27.01.2019
 * Time: 14:51
 */

namespace Phpfunc\Unit;


use Phpfunc\UnitAbstract;

interface UnitNameInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return UnitAbstract
     */
    public function setName(string $name);
}