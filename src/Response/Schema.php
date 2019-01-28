<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 28.01.2019
 * Time: 20:35
 */

namespace Apisql\Response;


use Apisql\AttributeCollection;
use Apisql\Model;
use Apisql\ModelAttributeCollection;

class Schema extends ModelAttributeCollection
{
    /** @var string */
    public $name = 'response_schema';

    /** @var AttributeCollection */
    public $attribute_collection;

    public function __construct(string $name, AttributeCollection $attribute_collection)
    {
        $this->name = $name;
        $this->attribute_collection = $attribute_collection;
    }
}