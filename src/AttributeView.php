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
use Phpfunc\Crud\Update;
use Phpfunc\Source\Db;
use Phpfunc\Crud\Create;
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

