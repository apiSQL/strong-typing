<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 27.01.2019
 * Time: 14:51
 */

namespace Apisql\Unit;


use Apisql\UnitAbstract;

interface UnitSymbolInterface
{
    /**
     * @return string
     */
    public function getSymbol(): string;

    /**
     * @param string $symbol
     * @return UnitAbstract
     */
    public function setSymbol(string $symbol);
}