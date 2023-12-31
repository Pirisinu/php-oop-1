<?php

require_once __DIR__ . '/Model/Production.php';
require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/Serie.php';
require_once __DIR__ . '/Model/Description.php';
require_once __DIR__ . '/db/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css' integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==' crossorigin='anonymous'/>
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
  <title>Php Oop-1</title>
</head>
<body>
  <!-- FILM -->
  <div id="film" class="container my-5 py-5 rounded rounded-4">
    <h1>Film:</h1>
    <div class="d-flex flex-wrap justify-content-evenly gap-3">
      <?php foreach($production['movies'] as $movie): ?>
        <div class="card" style="width:400px">
          <img src="img/<?php echo $movie->image ?>" class="card-img-top h-75" alt="No img">
          <div class="card-body">
            <h5 class="card-title">TITLE:<?php echo $movie->title ?></h5>
            <p class="card-text">Descrizione:<?php echo $movie->description->plot ?></p>
            <div class="card-text">
              <span>Lingua:</span>
              <span><?php echo $movie->description->language ?></span>
              <img class="w-25" src="<?php echo $movie->description->getFlagPath($movie->description->language) ?>" alt="Img">
            </div>
            <p class="card-text">Genere:<?php echo implode('-', $movie->description->genre) ?></p>
            <p class="card-text">Anno di pubblicazione:<?php echo $movie->publishedYear?></p>
            <p class="card-text">Durata in minuti:<?php echo $movie->runningTime ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- SERIE -->
  <div id="series" class="container my-5 py-5 rounded rounded-4">
    <h1>Series:</h1>
    <div class="d-flex flex-wrap justify-content-evenly gap-3">
      <?php foreach($production['series'] as $serie): ?>
        <div class="card" style="width:400px">
          <img src="img/<?php echo $serie->image ?>" class="card-img-top h-75" alt="No img">
          <div class="card-body">
            <h5 class="card-title">TITLE:<?php echo $serie->title ?></h5>
            <p class="card-text">Descrizione:<?php echo $serie->description->plot ?></p>
            <div class="card-text">
              <span>Lingua:</span>
              <img class="w-25" src="<?php echo $serie->description->getFlagPath($serie->description->language) ?>" alt="Img">
            </div>
            <p class="card-text">Genere:<?php echo implode('-', $serie->description->genre) ?></p>
            <p class="card-text">Anno primo episodio della serie:<?php echo $serie->airedFromYear ?></p>
            <p class="card-text">Anno ultimo episodio della serie:<?php echo $serie->airedToYear ?></p>
            <p class="card-text">Numero di episodi<?php echo $serie->numberOfEpisodes ?></p>
            <p class="card-text">Numero di stagioni<?php echo $serie->numberOfSeasons ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>
