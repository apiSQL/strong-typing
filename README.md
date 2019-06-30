# strong-typing
With Objects to generate any application with example benefits 

(BRIDGE.md)[BRIDGE.md]
### Install -apicra

    echo .apicra/ >> .gitignore
    git clone https://github.com/apicra/npm-github-win.git .apicra

or 

    git clone https://gist.github.com/tom-sapletta-com/0ab2fbd82c6a6efba131db52588e1f3b apicra && copy apicra\* . && RMDIR /Q /S apicra && -apicra.bat install

or
    
    git clone https://gist.github.com/tom-sapletta-com/0ab2fbd82c6a6efba131db52588e1f3b .apicra && .apicra/-apicra.bat install

## php

install

    -apicra.bat i php

run

    -php.bat exec -v

## composer
 
Install .apicra Module: composer

    -php.bat install-composer
    
    -apicra.bat i composer
        
Install Composer by .apicra Module

    -composer.bat i

update packages

    -php exec "composer.phar update"


.apicra\module\php\php-7.3.6-nts-Win32-VC15-x86\php.exe composer.phar u
.apicra\module\php\php-7.3.6-nts-Win32-VC15-x86\php.exe composer.phar config minimum-stability dev
.apicra\module\php\php-7.3.6-nts-Win32-VC15-x86\php.exe composer.phar global config minimum-stability dev


### Composer

init project

    composer init

update libraries
    
    composer update

## Routing

/{Operation:Create,Delete}/{Model}

/{Operation:Read,Update}/{Attribute}


## access control list (ACL)


Celem te biblioteki jest stworzenie narzedzi dla budowania aplikacji w roznych jezykac programowania
w oparciu o te same metody,
bez potrzeby uczenia sie nowego frameworka
zwlaszcza w przypadku wykorzystywania SDK API


Przy zalozeniu ze trzeba szybko dostosowac istniejace API
dla konkretnej aplikacji warto stworzyc dla kazdegj platformy w roznych jezykach SDK dopasowane do konrketnego celu
wobec tego tworzenie aplikacji samotworzacej sie, otwartej na rozbudowe poprzez API jest bardzo atrakcyjne i szybkie we wdrozeniu

Kazda webowa aplikacja ma pewne cechy uniwersalne, jak

+ routing
+ ACL
+ MVC



Oferuja to frameworki, ale one nie sa tłumaczone na różne języki programowania i w każdym języku programowania jest inna semantyka.

Dzieki uzyciu typowania w OOP mozliwe jest wielouzycie tego samego kodu, napisanego w innym jezyku programowania.


1. Instalacja Framework
2. Inicjalizacja z danymi konfiguracyjnymi:
    Strukutra bazy danych
    Struktura plikow
    Cache
3. Uzycie aplikacji poprzez API
4. Konfiguracja w innym jezyku na podstawie uzycia tych samych danych zrodlowych konfiguracji JSON/YML


### Przykład z konwersją modelu danych na kod SQL

+ model danych
    
        class UserModel {
            $username;
            $firstname;
            $lastname;
            $email;
        } 

+ convert One Attribute of Model to Strong Typed Attribute 
        AttributeGenerator
        
        
+ convert to collection with strong-typing
    if type is not defined, use AttributeTypeGenerator
     
         class AttributeCollection {
             $collection = [
                0 => new Attribute('username'),
                1 => new Attribute('firstname'),
                2 => new Attribute('lastname'),
                3 => new Attribute('email'),
             ];
         }    

+ generate SQL from strong-typing

    get each attribute, 


### ciekawe funkcje z laravel
https://laravel.com/docs/5.7/helpers


### TRansformacje danych pomiedzy MVC

https://symfony.com/doc/current/form/data_transformers.html
![dia](https://symfony.com/doc/current/_images/data-transformer-types.png)
