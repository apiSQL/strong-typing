<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 13:41
 */

namespace Phpfunc;


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

class Example1
{


    function CreateUserInDb()
    {
        $source = new Db();
        $model = new User();
//        $model->

        new Create($source, $model);
    }

    function DeleteUserInDb()
    {
        $source = new Db();
        $model = new User();
        $model->user_login = new UserLogin('tomasz');

        new Delete($source, $model);
    }


    function ReadUserInDb()
    {
        $source = new Db();
        $model = new User();

        $operation_read = new Read($source, $model);
        $user_collection = $operation_read->execute()->model_collection;

    }

    function ModelAttribute()
    {
        // Model Attribute collection from Model variables

        $model_attribute = new ModelAttributeCollection(
            'user',
            [new UserLogin(), new UserPassword(), new UserEmail(), new DateCreatedAt()]
        );

        $model_worker = new ModelAttributeCollection(
            'worker',
            [new FirstName(), new LastName(), new Address(), new Identify()]
        );

        // Pobieranie przez magiczne
        $model_worker->getFirstName();

        $model_worker->byObj(new LastName());

        // Pobieranie przez funkcje
        $model_worker->toArray();

        // Pobieranie z kolekcji konkretnego obiektu
        ValueCollection($model_worker->attribute_collection, new FirstName())


        // Pobieranie wartosci
        FirstName::Value($model_worker);
    }


    function FillBy()
    {
        $date = '2018-12-31';

        $user = new User();
        $user->setDateCreatedAt($date);

        $user = new User(new DateCreatedAt($date));

        $model = new User();
        Fill::ModelByAttribute(
            new User(),
            new DateCreatedAt($date)
        );

        /*
                $model = new User();
                $model->fillbyAttribute(
                    new DateCreatedAt($date)
                );

                $fill = new Model\Fill($user);
                $user = $fill->byAttribute(new DateCreatedAt($date))->getModel();

                $user = User::fillByAttributeArray(
                    [new UserLogin('tomasz'), new DateCreatedAt($date), new DateUpdatedAt($date)]
                );
        */
    }

    function Models()
    {
        $date = '2018-12-31';

        $user = new User();
        $user->setDateCreatedAt($date);

        $user = new User(new DateCreatedAt($date));


        $model = new Model($user)

        $fill = new Model\Fill($user);
        $user = $fill->byAttribute(new DateCreatedAt($date))->getModel();

        $user = User::fillByAttributeArray(
            [new UserLogin('tomasz'), new DateCreatedAt($date), new DateUpdatedAt($date)]
        );
    }

    function FilterByName()
    {
        $source = new Db();
        $model = new User();

        $filter_collection = new Filter\CollectionAbstract();
//        $filter1 = new Filter($model, $username);
        $filter1 = new Filter\Between(
            new DateFrom(),
            new DateTo()
        );
        $filter1 = new Filter\MoreThan(
            new User(new DateCreatedAt('2018-12-31'))
        );
        $filter_collection->add($filter1);
        $username


        $filter_collection =
//        $model_attribute_collection

        $operation_read = new Filter($source, );
        $user_collection = $operation_read->execute()->model_collection;

    }
}