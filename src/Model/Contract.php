<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 10:50
 */

namespace Apisql\Model;


use Apisql\Generic\DateFromInterface;
use Apisql\Generic\DateToInterface;
use Apisql\Generic\MoneyInterface;
use Apisql\Model;

class Contract extends Model implements DateFromInterface, DateToInterface, MoneyInterface, HolidayInterface
{
    public $date_from;

    public $date_to;

    public $salary;

    public $holiday;

}