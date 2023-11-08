<?php
$production = [

  'movies' => [
    new Movie(new Production('Matrix', 'movie/matrix.jpg',new Description('Film con bella trama Matrix', 'en', ['horror', 'thriller'])) , '2021/01/10','2:30:01'),
    new Movie(new Production('Barbie', 'movie/barbie.jpg',new Description('Film con bella trama Barbie', 'it', ['animation', 'family'])) , '2019/01/10','2:30:50'),
    new Movie(new Production('Titanic', 'movie/titanic.jpg',new Description('Film con bella trama Titanic', 'es', ['drama', 'romance'])) , '2018/01/10','2:30:40'),
    new Movie(new Production('Il Padrino', 'movie/il-padrino.jpg',new Description('Film con bella trama Matrix 2', 'fr', ['action', 'scifi'])) , '2017/01/10','2:10:00'),
    new Movie(new Production('L\'Ultimo Imperatore', 'movie/imperatore.jpg',new Description('Film con bella trama Barbie 2', 'de', ['animation', 'family'])) , '2020/02/10','2:19:00'),
    new Movie(new Production('Il Signore degli Anelli: La Compagnia dell\'Anello', 'movie/anelli.jpg',new Description('Film con bella trama Titanic 2', 'ja', ['drama', 'romance'])) , '2020/03/10','1:30:00')
  ],
  
  'series' => [
    new Serie(new Production('Breaking Bad', 'series/Breaking-Bad.jpg',new Description('Film con bella trama Breaking Bad', 'en', ['horror', 'thriller']) ), '2018', '2020', 10, 4 ),
    new Serie(new Production('Game of Thrones', 'series/Game-of-Thrones.jpg',new Description('Film con bella trama Game of Thrones', 'it', ['animation', 'family']) ), '2000', '2020', 20, 10 ),
    new Serie(new Production('Stranger Things', 'series/Stranger-Things.jpg',new Description('Film con bella trama Stranger Things', 'es', ['drama', 'romance']) ), '1990', '2020', 20, 10 ),
    new Serie(new Production('The Crown', 'series/The-Crown.jpg',new Description('Film con bella trama The Crown', 'fr', ['action', 'scifi'])) , '1990', '2020', 20, 10 ),
    new Serie(new Production('Friends', 'series/Friends.jpg',new Description('Film con bella trama Friends', 'de', ['animation', 'family']) ), '1990', '2023', 8, 6 ),
    new Serie(new Production('Black Mirror', 'series/Black-Mirror.jpg',new Description('Film con bella trama Black Mirror', 'ja', ['drama', 'romance']) ), '2019', '2021', 10, 5 )
  ]

];
