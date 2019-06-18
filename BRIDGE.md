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

np:
stwórzmy kolekcję danych potrzebnych do zwrócenia tokenu:
potrzebujemy to adres url, login, hasło


    $dataCollection = new DataCollection(
      new Url("https://apisql.com/authorisation"),
      new UserLogin("/authorisation"),
      new UserPassword("/authorisation"),
    )


    $processCollection = new ProcesCollection(
      new Request("authorisation"),


    )


     $authorisation = new Execute(
        $dataCollection,
        $processCollection
     )

