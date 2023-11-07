<?php
class Movie {
  //Variabili d'istanza
  public $title;
  public $image;
  public $description;
  public $language;
  public $genre;

  //Costruttore
  public function __construct(
    string $_title,
    string $_image,
    string $_description,
    string $_language,
    array $_genre,
    int $_price
    ){
    $this->title = $_title;
    $this->image = $_image;
    $this->description = new Description($_description, $_language, $_genre);
    $this->price = $_price;
  }
}
