<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 27.01.2019
 * Time: 22:54
 */

namespace Apisql;

/**
 * Class LocalValueAbstract
 * @package Phpfunc
 */
abstract class LocalValueAbstract
{
    public $LocalFormat;
    public $LocalFormatInterface;
    public $LocalName;
    public $LocalRegion;
    public $LocalRegionInterface;
    public $LocalValue;

    /**
     * LocalValueAbstract constructor.
     * @param $LocalFormat
     * @param $LocalFormatInterface
     * @param $LocalName
     * @param $LocalRegion
     * @param $LocalRegionInterface
     * @param $LocalValue
     */
    public function __construct($LocalFormat, $LocalFormatInterface, $LocalName, $LocalRegion, $LocalRegionInterface, $LocalValue)
    {
        $this->LocalFormat = $LocalFormat;
        $this->LocalFormatInterface = $LocalFormatInterface;
        $this->LocalName = $LocalName;
        $this->LocalRegion = $LocalRegion;
        $this->LocalRegionInterface = $LocalRegionInterface;
        $this->LocalValue = $LocalValue;
    }


    /**
     * @return mixed
     */
    public function getLocalFormat()
    {
        return $this->LocalFormat;
    }

    /**
     * @param mixed $LocalFormat
     * @return LocalValueAbstract
     */
    public function setLocalFormat($LocalFormat)
    {
        $this->LocalFormat = $LocalFormat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocalFormatInterface()
    {
        return $this->LocalFormatInterface;
    }

    /**
     * @param mixed $LocalFormatInterface
     * @return LocalValueAbstract
     */
    public function setLocalFormatInterface($LocalFormatInterface)
    {
        $this->LocalFormatInterface = $LocalFormatInterface;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocalName()
    {
        return $this->LocalName;
    }

    /**
     * @param mixed $LocalName
     * @return LocalValueAbstract
     */
    public function setLocalName($LocalName)
    {
        $this->LocalName = $LocalName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocalRegion()
    {
        return $this->LocalRegion;
    }

    /**
     * @param mixed $LocalRegion
     * @return LocalValueAbstract
     */
    public function setLocalRegion($LocalRegion)
    {
        $this->LocalRegion = $LocalRegion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocalRegionInterface()
    {
        return $this->LocalRegionInterface;
    }

    /**
     * @param mixed $LocalRegionInterface
     * @return LocalValueAbstract
     */
    public function setLocalRegionInterface($LocalRegionInterface)
    {
        $this->LocalRegionInterface = $LocalRegionInterface;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocalValue()
    {
        return $this->LocalValue;
    }

    /**
     * @param mixed $LocalValue
     * @return LocalValueAbstract
     */
    public function setLocalValue($LocalValue)
    {
        $this->LocalValue = $LocalValue;
        return $this;
    }



}