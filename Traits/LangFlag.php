<?php
  trait LangFlag {
    public function getFlagPath($language) {
      switch ($language) {
          case 'en':
              return '/img/flags/en-flag.png';
          case 'it':
              return '/img/flags/it-flag.png';
          default:
              return '/img/flags/default-flag.png';
      }
    }
  }
