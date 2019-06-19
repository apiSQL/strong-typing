<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 15:00
 */

namespace Apisql;


class AttributeCollection extends CollectionAbstract
{
    /** @var array */
    public $attribute_collection = [];

    /**
     * AttributeCollection constructor.
     * @param array $attribute_collection
     */
    public function __construct(array $attribute_collection)
    {
        $this->attribute_collection = $attribute_collection;
    }


}