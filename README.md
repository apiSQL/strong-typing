# strong-typing
With Objects to generate any application with example benefits 


### Install by Apicra

    sh /apicra/composer_install.sh
    .\apicra\composer_install.bat
    
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



Oferuja to frameworki, ale one nie sa tlumaczone na rozne jezyki i w kazdym jezyku programowania jest inny framework

Dzieki uzyciu typowania w OOP mozliwe jest wielouzycie tego samego kodu, napisanego w innym jezyku programowania.


1. Instalacja Framework
2. Inicjalizacja z danymi konfiguracyjnymi:
    Strukutra bazy danych
    Struktura plikow
    Cache
3. Uzycie aplikacji poprzez API
4. Konfiguracja w innym jezyku na podstawie uzycia tych samych danych zrodlowych konfiguracji JSON/YML


### ciekawe funkcje z laravel
https://laravel.com/docs/5.7/helpers


### TRansformacje danych pomiedzy MVC

https://symfony.com/doc/current/form/data_transformers.html
![dia](https://symfony.com/doc/current/_images/data-transformer-types.png)