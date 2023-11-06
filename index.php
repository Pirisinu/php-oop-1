<?php
class Movie {
  //Variabili d'istanza
  public $title;
  public $image;
  public $desctiption;
  public $language
  public $vote;
  public $price;
  public $discount;

  //Costruttore
  public function __construct(string $_title,string $_image,string $_desctiption,int $_price){
    $this->title = $_title;
    $this->title = $_image;
    $this->title = $_desctiption;
    $this->title = $_price;
  }
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
  
</body>
</html>
