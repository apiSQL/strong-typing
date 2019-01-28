<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 28.01.2019
 * Time: 20:18
 */

namespace Apisql;


class Request
{

    /** @var Request\Method */
    public $method;

    public $url;

    public $path;

    public $parameter_collections;

}