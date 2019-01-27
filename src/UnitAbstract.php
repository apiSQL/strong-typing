<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 27.01.2019
 * Time: 15:07
 */

namespace Phpfunc;


use Phpfunc\Unit\UnitFactorInterface;
use Phpfunc\Unit\UnitNameInterface;
use Phpfunc\Unit\UnitStandardInterface;
use Phpfunc\Unit\UnitSymbolInterface;
use Phpfunc\Unit\UnitValueInterface;

abstract class UnitAbstract implements UnitFactorInterface, UnitNameInterface, UnitStandardInterface, UnitValueInterface, UnitSymbolInterface
{
    /** @var string  */
    public $name = '';

    /** @var int */
    public $value = 0;

    /** @var string */
    public $symbol = '';

    /** @var int */
    public $factor = 0;

    /** @var string */
    public $standard = '';

    /**
     * UnitAbstract constructor.
     * @param string $name
     * @param int $value
     * @param string $symbol
     * @param int $factor
     * @param string $standard
     */
    public function __construct(string $name, int $value, string $symbol, int $factor, string $standard)
    {
        $this->name = $name;
        $this->value = $value;
        $this->symbol = $symbol;
        $this->factor = $factor;
        $this->standard = $standard;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return UnitAbstract
     */
    public function setName(string $name): UnitAbstract
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     * @return UnitAbstract
     */
    public function setValue(int $value): UnitAbstract
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return UnitAbstract
     */
    public function setSymbol(string $symbol): UnitAbstract
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return int
     */
    public function getFactor(): int
    {
        return $this->factor;
    }

    /**
     * @param int $factor
     * @return UnitAbstract
     */
    public function setFactor(int $factor): UnitAbstract
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * @return string
     */
    public function getStandard(): string
    {
        return $this->standard;
    }

    /**
     * @param string $standard
     * @return UnitAbstract
     */
    public function setStandard(string $standard): UnitAbstract
    {
        $this->standard = $standard;
        return $this;
    }

}