<?php
class Movie extends Production {
  //Variabili d'istanza
  public $published_year;
  public $running_time;

  //Costruttore
  public function __construct(
    string $_published_year,
    string $_running_time
    ){
    parent::__construct($_title, $_image, $_description, $_language, $_genre);
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;
  }
}
