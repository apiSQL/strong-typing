<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:41
 */


namespace Phpfunc;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php'; // Autoload files using Composer autoload


use Phpfunc\Attribute\UserEmail;
use Phpfunc\Attribute\UserLogin;
use Phpfunc\Attribute\UserPassword;
use Phpfunc\Generic\Address;
use Phpfunc\Generic\DateCreatedAt;
use Phpfunc\Generic\DateFrom;
use Phpfunc\Generic\DateTo;
use Phpfunc\Generic\FirstName;
use Phpfunc\Generic\Identify;
use Phpfunc\Generic\LastName;
use Phpfunc\Model\User;
use Phpfunc\Crud\Delete;
use Phpfunc\Crud\Read;
use Phpfunc\Source\Db;
use Phpfunc\Crud\Create;

$model_worker = new ModelAttributeCollection(
    'worker',
    [
        new FirstName('firstname'),
        new LastName('lastname'),
        new Address('address'),
        new Identify(4)
    ]
);
$gen = new ModelAttributeSql($model_worker);
$sql = $gen->sqlGenerator()->sql;
var_dump($sql);
var_dump($model_worker->toArray());
var_dump($model_worker->val('Address'));

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
