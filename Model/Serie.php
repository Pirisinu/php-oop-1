<?php
class Serie extends Production {
  //Variabili d'istanza
  public $airedFromYear;
  public $airedToYear;
  public $numberOfEpisodes;
  public $numberOfSeasons;

  //Costruttore
  public function __construct(
    string $_airedFromYear,
    string $_airedToYear,
    int $_numberOfEpisodes,
    int $_numberOfSeasons
    ){
    $this->airedFromYear = $_airedFromYear;
    $this->airedToYear = $_airedToYear;
    $this->numberOfEpisodes = $_numberOfEpisodes;
    $this->numberOfSeasons = $_numberOfSeasons;
    parent::__construct($_title, $_image, $_description, $_language, $_genre);
  }
}
