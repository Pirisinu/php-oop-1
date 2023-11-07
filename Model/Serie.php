<?php
class Serie extends Production {
  //Variabili d'istanza
  public $airedFromYear;
  public $airedToYear;
  public $numberOfEpisodes;
  public $numberOfSeasons;

  //Costruttore
  public function __construct(
    string $_title,
    string $_image,
    string $_description,
    string $_language,
    array $_genre,
    string $_airedFromYear,
    string $_airedToYear,
    string $_numberOfEpisodes,
    string $_numberOfSeasons
    ){
      parent::__construct($_title, $_image, $_description, $_language, $_genre);
    $this->airedFromYear = $_airedFromYear;
    $this->airedToYear = $_airedToYear;
    $this->numberOfEpisodes = $_numberOfEpisodes;
    $this->numberOfSeasons = $_numberOfSeasons;
  }
}
