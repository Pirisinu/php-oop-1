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
    try{
      $this->setPlot($_plot);
      $this->setLanguage($_language);
      $this->genre= $_genre;

    }catch(Exception $e){
      echo "Errore: " . $e->getMessage();
    }
  }
  private function setPlot($_plot){
    //Controllo che la trama non sia troppo lunga
    if(strlen($_plot)<50){
      $this->plot = $_plot;
    }else{
      throw new UnexpectedValueException("La trama è troppo lunga o inesistente.");
    }
  }
  private function setLanguage($_language){
    //Controllo validità linguaggio
    $supportedLanguages = ['en', 'it', 'es', 'fr', 'de', 'ja'];
    if (in_array($_language, $supportedLanguages)) {
      $this->language = $_language;
    } else {
        throw new UnexpectedValueException("Lingua non supportata.");
    }
  }
}
