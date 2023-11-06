<?php
class Movie {
  //Variabili d'istanza
  public $title;
  public $image;
  public $description;
  public $language;
  public $vote;
  public $price;
  public $discount;

  //Costruttore
  public function __construct(string $_title,string $_image,string $description,int $_price){
    $this->title = $_title;
    $this->image = $_image;
    $this->description = $description;
    $this->price = $_price;
  }
}
$movies = [
  'matrix'=> new Movie('Matrix', 'matrix.jpg', 'Matrix description', 10),
  'barbie'=> new Movie('barbie', 'barbie.jpg', 'barbie description', 8),
  'titanic' => new Movie('titanic', 'titanic.jpg', 'titanic description', 20),
  'matrix2'=> new Movie('Matrix', 'matrix.jpg', 'Matrix description', 10),
  'barbie2'=> new Movie('barbie', 'barbie.jpg', 'barbie description', 8),
  'titanic2' => new Movie('titanic', 'titanic.jpg', 'titanic description', 20)
];

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
  <div class="container d-flex flex-wrap gap-3">
    <?php foreach($movies as $movie): ?>
      <div class="card" style="width: 18rem;">
        <img src="img/<?php echo $movie->image ?>" class="card-img-top" alt="No img">
        <div class="card-body">
          <h5 class="card-title"><?php echo $movie->title ?></h5>
          <p class="card-text"><?php echo $movie->description ?></p>
          <p class="card-text"><?php echo $movie->price ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
