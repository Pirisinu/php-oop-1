<?php
$production = [
  'movies' => [
    new Movie('Matrix', 'movie/matrix.jpg', 'Film con bella trama Matrix', 'en', ['horror', 'thriller'], '2021/01/10','2:30:01'),
    new Movie('Barbie', 'movie/barbie.jpg', 'Film con bella trama Barbie', 'en', ['animation', 'family'], '2019/01/10','2:30:50'),
    new Movie('Titanic', 'movie/titanic.jpg', 'Film con bella trama Titanic', 'en', ['drama', 'romance'], '2018/01/10','2:30:40'),
    new Movie('Il Padrino', 'movie/il-padrino.jpg', 'Film con bella trama Matrix 2', 'en', ['action', 'scifi'], '2017/01/10','2:10:00'),
    new Movie('L\'Ultimo Imperatore', 'movie/imperatore.jpg', 'Film con bella trama Barbie 2', 'en', ['animation', 'family'], '2020/02/10','2:19:00'),
    new Movie('Il Signore degli Anelli: La Compagnia dell\'Anello', 'movie/anelli.jpg', 'Film con bella trama Titanic 2', 'en', ['drama', 'romance'], '2020/03/10','1:30:00'),
  ],
  
  'series' => [
    new Serie('Breaking Bad', 'series/Breaking-Bad.jpg', 'Film con bella trama Breaking Bad', 'en', ['horror', 'thriller'], '2018', '2020', 10, 4 ),
    new Serie('Game of Thrones', 'series/Game-of-Thrones.jpg', 'Film con bella trama Game of Thrones', 'en', ['animation', 'family'], '2000', '2020', 20, 10 ),
    new Serie('Stranger Things', 'series/Stranger-Things.jpg', 'Film con bella trama Stranger Things', 'en', ['drama', 'romance'], '1990', '2020', 20, 10 ),
    new Serie('The Crown', 'series/The-Crown.jpg', 'Film con bella trama The Crown', 'en', ['action', 'scifi'], '1990', '2020', 20, 10 ),
    new Serie('Friends', 'series/Friends.jpg', 'Film con bella trama Friends', 'en', ['animation', 'family'], '1990', '2023', 8, 6 ),
    new Serie('Black Mirror', 'series/Black-Mirror.jpg', 'Film con bella trama Black Mirror', 'en', ['drama', 'romance'], '2019', '2021', 10, 5 ),
  ]

];
