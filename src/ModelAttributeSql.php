<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:43
 */

namespace Apisql;

// Generator Kodu Sql z Modelu danych z kolekcji
class ModelAttributeSql
{
    /** @var ModelAttributeCollection */
    public $model_attribute_collection;

    /** @var string */
    public $sql;

    /** @var array */
    public $table;

    /** @var array */
    public $columns;

    /** @var array */
    public $values;

    /** @var array */
    public $types;


    /**
     * ModelAttributeSql constructor.
     * @param ModelAttributeCollection $model_attribute_collection
     */
    public function __construct(ModelAttributeCollection $model_attribute_collection)
    {
        $this->model_attribute_collection = $model_attribute_collection;
    }

    public static function decamelize($string) {
        return strtolower(preg_replace(['/([a-z\d])([A-Z])/', '/([^_])([A-Z][a-z])/'], '$1_$2', $string));
    }

    public function sqlGenerator()
    {

        $this->table = $this->model_attribute_collection->name;
        $this->columns = array_keys($this->model_attribute_collection->toArray());
        $this->values = array_values($this->model_attribute_collection->toArray());

        $this->types = [];
        foreach ($this->values as $val) {
            $this->types[] = gettype($val);
        }

        $this->sql = "";
        $this->sql .= "CREATE TABLE IF NOT EXISTS $this->table (";

        $first = 1;
        $last = 0;
        $count = count($this->model_attribute_collection->toArray());
        $counter = 0;
        foreach ($this->model_attribute_collection->toArray() as $column => $value) {
            $column = self::decamelize($column);
            $counter++;
            $last = $counter >= $count;

            $type = gettype($value);

            $sql_type = '';
            if ($type === 'string') {
                $sql_type = ' VARCHAR(100)';
            }

            if ($type === 'integer') {
                $sql_type = ' INT NOT NULL';
            }

            if ($type === 'key') {
                $sql_type = ' AUTO_INCREMENT PRIMARY KEY';
            }
            $this->sql .= "$column $sql_type";

            if (!$last) {
                $this->sql .= ",";
            }

            $first = 0;
        }

        $this->sql .= ")";
//        $this->sql .= "ENGINE=INNODB;";
        $this->sql .= ";";

        /*
                ENGINE = NDB
        COMMENT = \"NDB_TABLE = READ_BACKUP = 0,PARTITION_BALANCE = FOR_RP_BY_NODE\";
                ';
                ";
        */
        return $this;
    }

}