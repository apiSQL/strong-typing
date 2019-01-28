<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:41
 */


namespace Apisql;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php'; // Autoload files using Composer autoload


use Apisql\Access\AccessOperation;
use Apisql\Access\AccessRole;
use Apisql\Access\AccessUser;
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
use Apisql\Crud\Update;
use Apisql\Source\Db;
use Apisql\Crud\Create;
use Apisql\View\Form;

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


$acces_user = new AccessUser(
    new UserId(10)
);

$acces_operation_user = new AccessOperation(
    new Create(
        new Source('db'),
        new Model('user')
    ),
);


$user_model = new Model('user');
$user_name = new ModelAttributeCollection(
    'user',
    [
        new FirstName('Tom'),
        new LastName('Sap'),
    ]
);
$url_user_name = new Url('/user/hello');

$acces_routing = new AccessOperation(
    new Post(
        $url_user_name,
        $user_name
    )
);

$condition_allows =
//new Access($acces_user, )

$collection = new AccessCollection(
    new Access\Condition\Allows($acces_operation_user),
    new Access\Condition\Allows($acces_user),
);
