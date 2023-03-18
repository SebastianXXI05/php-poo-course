<?php

class Persona {
  public $nombre, $apellido, $edad;

  public function __construct($nombre, $apellido, $edad=18) {
    $this->nombre = strtolower($nombre);
    $this->apellido = strtolower($apellido);
    $this->edad = $edad;
  }

  public function set_nombre($nombre) {
    $this->nombre = strtolower($nombre);
  }

  public function get_nombre() {
    return ucwords($this->nombre);
  }
}