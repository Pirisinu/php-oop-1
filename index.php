<?php

require_once __DIR__ . '/Model/Production.php';
require_once __DIR__ . '/Model/Movie.php';
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
  <div class="container my-5 py-5 bg-primary d-flex flex-wrap justify-content-evenly gap-3 rounded rounded-4">
    <?php foreach($movies as $movie): ?>
      <div class="card" style="width:400px">
        <img src="img/<?php echo $movie->image ?>" class="card-img-top h-75" alt="No img">
        <div class="card-body">
          <h5 class="card-title">TITLE:<?php echo $movie->title ?></h5>
          <p class="card-text">Descrizione:<?php echo $movie->description->plot ?></p>
          <p class="card-text">Lingua:<?php echo $movie->description->language ?></p>
          <p class="card-text">Genere:<?php echo implode('-', $movie->description->genre) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
