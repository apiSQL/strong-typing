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
use Phpfunc\Operation\Delete;
use Phpfunc\Operation\Read;
use Phpfunc\Source\Db;
use Phpfunc\Operation\Create;

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

