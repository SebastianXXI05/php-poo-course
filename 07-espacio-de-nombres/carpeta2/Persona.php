<?php

// declarando un sub namespace
namespace Carpeta2\Persona;

/*
require_once('./Humano.php'); no es necesario requerir ya que esta en la 
misma carpeta.
*/

use Carpeta2\Humano;

class Persona extends Humano {
  public function presentarse() {
    $this->saludar();
    echo 'Hola soy un humano, dese el sub namespace Persona<br/>';
  }
}