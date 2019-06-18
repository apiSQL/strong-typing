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
np:


new DataCollection(
  new Url("/authorisation"),
  
  
)


new ProcesCollection(
  new Request("authorisation"),
  
  
)


new Execute(
  new DataCollection(),
  new ProcesCollection(),
)
  
  new Request(
    
    new 
  )

