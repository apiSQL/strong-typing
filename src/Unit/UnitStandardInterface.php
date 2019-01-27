<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 27.01.2019
 * Time: 14:51
 */

namespace Phpfunc\Unit;


use Phpfunc\UnitAbstract;

interface UnitStandardInterface
{
    /**
     * @return string
     */
    public function getStandard(): string;

    /**
     * @param string $standard
     * @return UnitAbstract
     */
    public function setStandard(string $standard);

}