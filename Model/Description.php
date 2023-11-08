<?php
require './Traits/LangFlag.php';
class Description{
  use LangFlag;
  //Variabili d'istanza
  public $plot;
  public $language;
  public $genre;

  //Costruttore
  public function __construct(string $_plot,string $_language,array $_genre){
    $this->plot = $_plot;
    $this->language = $_language;
    $this->genre = $_genre;
  }
}
