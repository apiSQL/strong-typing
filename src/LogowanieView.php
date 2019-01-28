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
use Phpfunc\Crud\Update;
use Phpfunc\Source\Db;
use Phpfunc\Crud\Create;
use Phpfunc\View\Form;

// only for Form registration, data are not saved in DB
$model_user_registration = new ModelAttributeCollection(
    'user_registration',
    [
        new UserLogin('tom'),
        new UserPassword('pass'),
        new UserEmail('tom@tom.com'),
    ]
);

// Data from Form Registration are saved in DB
$model_user_login = new ModelAttributeCollection(
    'user_login',
    [
        new UserId(1),
        new UserLogin('tom'),
        new UserPasswordHash('pass'),
        new UserEmail('tom@tom.com'),
        new DateCreated(''),
        new DateUpdated(''),
    ]
);



$source = null;

// renderowanie z istniejacymi danymi
$view = new View();
$view->setAsHtml();

$form_create_new_worker = new Form($source, $model_user_registration);
$view->add($form_create_new_worker);

// aktualizacja danych w DB, przeslanych przez Form
//UserPassword -> UserPasswordHash
$pass = new UserPassword();
$pass_hash = new UserPasswordHash($pass);
$model_user_login->byObj($pass_hash);
new Update($source, $model_user_login);

// new Create();
$form_create_new_worker->submit();


$model_user_forgot_password = new ModelAttributeCollection(
    'user_forgot_password',
    [
        new UserId(1),
        new UserLogin('tom'),
        new UserEmail('tom@tom.com'),
        new Url(''),
        new Status(''),
        new DateCreated(''),
        new DateUpdated(''),
        new IpNumber(''),
    ]
);

// Form
$form_model_user_forgot_password = new ModelAttributeCollection(
    'user_forgot_password',
    [
        new UserLogin('tom'),
        new UserEmail('tom@tom.com'),
    ]
);

$form_user_forgot_password = new Form($source, $form_model_user_forgot_password);

