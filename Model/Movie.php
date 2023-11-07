<?php
class Movie extends Production {
  //Variabili d'istanza
  public $publishedYear;
  public $runningTime;

  //Costruttore
  public function __construct(
    string $_title,
    string $_image,
    string $_description,
    string $_language,
    array $_genre,
    string $_publishedYear,
    string $_runningTime
    ){
    parent::__construct($_title, $_image, $_description, $_language, $_genre);
    $this->publishedYear = $_publishedYear;
    $this->runningTime = $_runningTime;
  }
}
