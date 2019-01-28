<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:41
 */


namespace Phpfunc;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php'; // Autoload files using Composer autoload


use Phpfunc\Access\AccessRole;
use Phpfunc\Access\AccessUser;
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
use Phpfunc\Operation\Update;
use Phpfunc\Source\Db;
use Phpfunc\Operation\Create;
use Phpfunc\View\Form;

$model_worker = new ModelAttributeCollection(
    'worker',
    [
        new FirstName('firstname'),
        new LastName('lastname'),
        new Address('address'),
        new Identify(4)
    ]
);
$source = null;


// aktualizacja danych w DB
$update = new Update($source, $model_worker);
//$access = new Access($update, new AccessRole('admin', 'manager'), new AccessUser());
$access = new Access([
        new AccessRole('admin', 'manager'),
        new AccessUser(
            new UserId(10),
            new UserFirstName('Tomasz')
        )
]);


$transaction = new Transaction($update, $access, 'Update User Data'  );

$collection = new Collection();
$collection->add($transaction);


// execute all transactions in collection
new Transaction\Collection\Execute($collection);

//$collection->execute();


// new Create();

// Formularz zmiany Adresu
$model_worker_address = new ModelAttributeCollection(
    'worker',
    [
        new Address('address'),
    ]
);

// renderowanie z istniejacymi danymi
// http://localhost/form/worker/address
$form_create_new_worker = new Form($source, $model_worker_address);
$form_create_new_worker->render();

// aktualizacja danych w DB, przeslanych przez Form
// http://localhost/update/worker/address
new Update($source, $model_worker_address);

