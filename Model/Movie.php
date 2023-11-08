<?php
class Movie extends Production {
  //Variabili d'istanza
  public $publishedYear;
  public $runningTime;

  //Costruttore
  public function __construct(
    Production $_production,
    string $_publishedYear,
    string $_runningTime
    ){
    parent::__construct($_production->title, $_production->image, $_production->description);
    $this->publishedYear = $_publishedYear;
    $this->runningTime = $_runningTime;
  }
}
