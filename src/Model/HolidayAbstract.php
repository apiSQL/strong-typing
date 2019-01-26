<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 09:46
 */

namespace Phpfunc\Model;


use Phpfunc\Model;

class HolidayAbstract  extends Model implements HolidayInterface
{
    public $holiday;

    public function Holiday()
    {
        return $this->holiday;
    }
}