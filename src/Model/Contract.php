<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 10:50
 */

namespace Phpfunc\Model;


use Phpfunc\Generic\DateFromInterface;
use Phpfunc\Generic\DateToInterface;
use Phpfunc\Generic\MoneyInterface;
use Phpfunc\Model;

class Contract extends Model implements DateFromInterface, DateToInterface, MoneyInterface, HolidayInterface
{
    public $date_from;

    public $date_to;

    public $salary;

    public $holiday;

}