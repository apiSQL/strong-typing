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

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "strong";

// Create connection

$source = null;
try {
    $source = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $source->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (\PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//$sql = "SELECT id, firstname, lastname FROM MyGuests";


try {
// use exec() because no results are returned
    $source->exec($sql);
    echo "Table $gen->table created successfully";
} catch (\PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

//$conn->close();

$create = new Create($source, $model_worker);

