<?php
class Serie extends Production {
  //Variabili d'istanza
  public $airedFromYear;
  public $airedToYear;
  public $numberOfEpisodes;
  public $numberOfSeasons;

  //Costruttore
  public function __construct(
    Production $_production,
    string $_airedFromYear,
    string $_airedToYear,
    string $_numberOfEpisodes,
    string $_numberOfSeasons,
    ){
    parent::__construct($_production->title, $_production->image, $_production->description);
    $this->airedFromYear = $_airedFromYear;
    $this->airedToYear = $_airedToYear;
    $this->numberOfEpisodes = $_numberOfEpisodes;
    $this->numberOfSeasons = $_numberOfSeasons;
  }
}
