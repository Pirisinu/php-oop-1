<?php
$movies = [
  new Movie('Matrix', 'matrix.jpg', 'Film con bella trama Matrix', 'en', ['horror', 'thriller']),
  new Movie('Barbie', 'barbie.jpg', 'Film con bella trama Barbie', 'en', ['animation', 'family']),
  new Movie('Titanic', 'titanic.jpg', 'Film con bella trama Titanic', 'en', ['drama', 'romance']),
  new Movie('Matrix 2', 'matrix.jpg', 'Film con bella trama Matrix 2', 'en', ['action', 'scifi']),
  new Movie('Barbie 2', 'barbie.jpg', 'Film con bella trama Barbie 2', 'en', ['animation', 'family']),
  new Movie('Titanic 2', 'titanic.jpg', 'Film con bella trama Titanic 2', 'en', ['drama', 'romance']),
];
$movies2 = [
  new Production('Matrix', 'matrix.jpg', 'Film con bella trama Matrix', 'en', ['horror', 'thriller'],new Movie('2020/01/10','2:30:00')),
  new Production('Barbie', 'barbie.jpg', 'Film con bella trama Barbie', 'en', ['animation', 'family'],new Movie('2020/07/10','2:30:00')),
  new Production('Titanic', 'titanic.jpg', 'Film con bella trama Titanic', 'en', ['drama', 'romance'],new Movie('2020/03/10','2:30:00')),
  new Production('Matrix 2', 'matrix.jpg', 'Film con bella trama Matrix 2', 'en', ['action', 'scifi'],new Movie('2020/08/10','2:30:00')),
  new Production('Barbie 2', 'barbie.jpg', 'Film con bella trama Barbie 2', 'en', ['animation', 'family'],new Movie('2020/11/10','2:30:00')),
  new Production('Titanic 2', 'titanic.jpg', 'Film con bella trama Titanic 2', 'en', ['drama', 'romance'],new Movie('2020/01/12','2:30:00')),
];
