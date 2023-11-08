<?php
trait LangFlag {
  public function getFlagPath($language) {
      switch ($language) {
          case 'en':
              return './img/flags/en-flag.png';
          case 'it':
              return './img/flags/it-flag.png';
          case 'es':
              return './img/flags/es-flag.png';
          case 'fr':
              return './img/flags/fr-flag.png';
          case 'de':
              return './img/flags/de-flag.png';
          case 'ja':
              return './img/flags/ja-flag.png';
          default:
              return './img/flags/default-flag.png';
      }
  }
}
