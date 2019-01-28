<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 28.01.2019
 * Time: 20:22
 */

namespace Apisql\Request;


class Parameter
{
    /** @var string */
    public $name;

    /** @var string */
    public $value;

    /**
     * Parameter constructor.
     * @param string $name
     * @param string $value
     */
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }


}