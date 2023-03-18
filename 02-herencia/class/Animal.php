<?php
class Animal {
  public $nombre, $tipo;

  public function __construct($nombre, $tipo) {
    $this->nombre = $this->nombre = strtolower($nombre);
    $this->tipo = $tipo;
  }

  public function set_nombre($nombre) {
    $this->nombre = strtolower($nombre);
  }

  public function get_nombre() {
    return ucwords($this->nombre);
  }
}

class Perro extends Animal {
  public $raza;

  public function __construct($nombre, $tipo, $raza) {
    parent::__construct($nombre, $tipo);
    $this->raza = $raza;
  }

  // extendiendo metodo
  public function set_nombre($nombre) {
    parent::set_nombre($nombre);
    echo 'Nombre modificado<br/>';
  }
  
  public function sonido() {
    return 'Guaaauuu';
  }
}

class Gato extends Animal {
  public $caracter, $color;

  public function __construct($nombre, $tipo, $caracter, $color) {
    parent::__construct($nombre, $tipo);
    $this->caracter = $caracter;
    $this->color = $color;
  }

  // sobre escribiendo metodo
  public function get_nombre() {
    return '##'.ucwords($this->nombre).'##';
  }

  public function saludo() {
    return 
    'Hola mi nombre es '.$this->nombre.', soy un animal de tipo '.
    $this->tipo.', color '.$this->color.' y de caracter '.$this->caracter.'.';
  }
}