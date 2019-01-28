<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 27.01.2019
 * Time: 14:51
 */

namespace Apisql\Unit;


use Apisql\UnitAbstract;

interface LocalFormatInterface
{
    /**
     * @return int
     */
    public function getFormat(): int;

    /**
     * @param int $factor
     * @return UnitAbstract
     */
    public function setFormat(int $factor);
}