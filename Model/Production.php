<?php
class Production{
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
    Description $_description
    ){
    $this->title = $_title;
    $this->image = $_image;
    $this->description = $_description;
  }
}
