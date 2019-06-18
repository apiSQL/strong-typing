Mosty, bramy do wymiany danych z innymi standardami, 

Zamiast jak obecnie skupiać się na procesach w twiorzeniu aplikacji, 
lepisj procesy ustandaryzowac i dane ustalać inydiwualnie.


# Obecne requesty

każdy request dostosowuje się pod względem danych

Można jednak stworzyć warunki do przechowywania jakichkoliwek autonomicznych danych w formacie obiektow,

beda one zajmowaly wiecej miejsca, ale beda tez latwiejsze w przesylaniu i uzyciu:



## Przyklad 1
zamiast tworzyć request do logowania:

    /GET
      login:
      password:

i odebrać 

    token: 


Kolekcja procesów:

- czyli jakiekolwiek dane przyjdą, wykonaj z nimi te operacje:
jeśli jakiej danej nie ma to problem zwróci proces, który tej danej potrzebuje.
W ten sposób definicja procesów, funkcji w naturalny sposób waliduje
Chodzi też o unikanie tworzenia struktury, gdyż to nie ma znaczenia dla procesu jaka jest struktura danych
a to tylko wprowadza komplikację


#### Przykład w języku PHP

stwórzmy kolekcję danych potrzebnych do zwrócenia tokenu:
potrzebujemy dane wejściowe

+ adres url
+ login
+ hasło



        $inputCollection = new DataCollection(
          new Url("https://apisql.com/authorisation"),
          new UserLogin("tomasz"),
          new UserPassword("$ecret447"),
        )
        
dane wyjściowe        

        $outputCollection = new DataCollection(
          new Token()
        )        

Procesy jakie powinny być wykonane po stronie klienta to wysłanie tych danych na serwer w formacie JSON i pobranie JSON oraz konwersja na dane w formacie PHP
Procesy są budowane w strukturę, gdyż w ten sposób można określić kolejność działania i zależności

        $processCollection = new ProcessCollection(
          
          new FromJson(
              new Request(
                new ToJson()
              )
          )                 
        )
        
ale możliwe jest też budowanie płaskiej struktury

       $processCollection = new ProcessCollection(
         new FromJson(),
         new Request(),
         new ToJson(),
       )


Konfiguracja dotyczy parametrów jakie mogą być przydatne dla procesów, jest to zależne od konrketnego procesu,
są to głównie zmienne środowiskowe

        $configCollection = new ConfigCollection(
          new API('RESTAPI'),
          new DB('Mysql'),          
        )

Wykonaj prcesy i w oparciu o dostarczone dane wygeneruj nowe

         $authorisation = new Execute(
            $inputCollection,
            $outputCollection,
            $processCollection,
            $configCollection,           
         )

