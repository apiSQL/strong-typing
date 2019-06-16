<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:43
 */

namespace Apisql;


class ModelAttributeCollection extends Model
{
    /** @var string */
    public $name;

    /** @var AttributeCollection */
    public $attribute_collection;

    /**
     * ModelAttributeCollection constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->attribute_collection = new AttributeCollection();
    }

    public function __call($name, $arguments)
    {
//        var_dump(new $name());

        return $this->byName($name);
//            if (method_exists($this, $name)) {
//                $this->$name($arguments);
//            }
    }

    public function __get($name)
    {
        return $this->byName($name)->getValue();
//        return $this->get($name);
    }


//    public function __set($name)
//    {
//        return $this->set($name);
//    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return ModelAttributeCollection
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return AttributeCollection
     */
    public function attributeCollection(): AttributeCollection
    {
        return $this->attribute_collection;
    }

    public function val($name)
    {
        return $this->toArray()[$name];
    }

    public function toArray()
    {
//        $this->attribute_collection->toArray();
        $array = [];
        foreach ($this->attribute_collection as $object){
            $array[$this->getClassnameByObject($object)] = $object->getValue();
        }
        return $array;

//        return $this->attribute_collection;
    }

    protected function getClassnameByObject($object)
    {
//        var_dump($object);
        $elements = explode('\\', get_class($object));
//        var_dump($elements);
        return end($elements);
    }


    protected function getClassnameByString(string $classname)
    {
//        var_dump($object);
        $elements = explode('\\', $classname);
//        var_dump($elements);
        return end($elements);
    }

    public function byObj(\Phunc\Value $object)
    {
        foreach ($this->attribute_collection as $item) {
//            var_dump(get_class($item));
            $has = $this->getClassnameByObject($object) === $this->getClassnameByObject($item);
            if ($has) {
                return $item;
            }
        }
    }

    public function byClass(string $classname)
    {
        foreach ($this->attribute_collection as $item) {
//            var_dump(get_class($item));
//            var_dump(
//                $classname,
//                $this->getClassnameByString($classname)
//            );
            $has = $this->getClassnameByString($classname) === $this->getClassnameByObject($item);
            if ($has) {
                return $item;
            }
        }
    }

    protected function byName(string $name)
    {
        foreach ($this->attribute_collection as $item) {
//            var_dump(get_class($item));
            $has = $name === $this->getClassnameByObject($item);
            if ($has) {
                return $item;
            }
        }
    }

    public function value(\Phunc\Value $object)
    {
        return $this->byObj($object)->getValue();
    }

}