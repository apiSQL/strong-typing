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

// renderowanie z istniejacymi danymi
$form_create_new_worker = new Form($source, $model_worker);
$form_create_new_worker->render();

// aktualizacja danych w DB, przeslanych przez Form
new Update($source, $model_worker);

// new Create();
$form_create_new_worker->submit();





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

