<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 12:59
 */

namespace Apisql\Model;


use Phunc\DateRange\DateRange;

class HolidayAnnual extends Holiday implements HolidayInterface
{
    /** @var array */
    public $collection = [];

    /**
     * HolidayAnnual constructor.
     * @param array $collection
     */
    public function __construct(DateRange $holiday_range)
    {
        $this->collection = $collection;
    }


}