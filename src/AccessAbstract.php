<?php


namespace Apisql;


abstract class AccessAbstract
{
    /** @var array */
    public $allows = [];

    /** @var array */
    public $disallows = [];

    /**
     * AccessAbstract constructor.
     * @param array $allows
     * @param array $disallows
     */
    public function __construct(array $allows, array $disallows)
    {
        $this->allows = $allows;
        $this->disallows = $disallows;
    }

    /**
     * @return array
     */
    public function getAllows(): array
    {
        return $this->allows;
    }

    /**
     * @param array $allows
     * @return AccessAbstract
     */
    public function setAllows(array $allows): AccessAbstract
    {
        $this->allows = $allows;
        return $this;
    }

    /**
     * @return array
     */
    public function getDisallows(): array
    {
        return $this->disallows;
    }

    /**
     * @param array $disallows
     * @return AccessAbstract
     */
    public function setDisallows(array $disallows): AccessAbstract
    {
        $this->disallows = $disallows;
        return $this;
    }



}