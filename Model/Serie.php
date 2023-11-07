<?php
class Serie extends Production {
  //Variabili d'istanza
  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  //Costruttore
  public function __construct(
    int $_aired_from_year,
    int $_aired_to_year,
    int $_number_of_episodes,
    int $_number_of_seasons
    ){
    $this->aired_from_year = $_aired_from_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;
    parent::__construct($_title, $_image, $_description, $_language, $_genre);
  }
}
