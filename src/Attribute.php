<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:41
 */


namespace Apisql;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php'; // Autoload files using Composer autoload


use Apisql\Attribute\UserEmail;
use Apisql\Attribute\UserLogin;
use Apisql\Attribute\UserPassword;
use Apisql\Generic\Address;
use Apisql\Generic\DateCreatedAt;
use Apisql\Generic\DateFrom;
use Apisql\Generic\DateTo;
use Apisql\Generic\FirstName;
use Apisql\Generic\Identify;
use Apisql\Generic\LastName;
use Apisql\Model\User;
use Apisql\Crud\Delete;
use Apisql\Crud\Read;
use Apisql\Source\Db;
use Apisql\Crud\Create;

$model_worker = new ModelAttributeCollection(
    'worker',
    new \Apisql\AttributeCollection([
        new FirstName('firstname'),
        new LastName('lastname'),
        new Address('address'),
        new Identify(4)
    ])
);

$gen = new ModelAttributeSql($model_worker);
//$sql = $gen->sqlGenerator()->sql;
//var_dump($sql);
//var_dump($model_worker->toArray());
//var_dump($model_worker->val('Address'));


// Pobieranie przez magiczne
//$value = $model_worker->FirstName;
//var_dump($value);

//$obj = $model_worker->FirstName();
//var_dump($obj);

//$obj = $model_worker->byClass(LastName::class)->getValue();
//var_dump($obj);

//$obj = $model_worker->byObj(new LastName(''));
//var_dump($obj);

//$value = $model_worker->value(new Address(''));
//var_dump($value);
