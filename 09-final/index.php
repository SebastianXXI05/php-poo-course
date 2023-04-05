<?php
/* 
Las clases finales, son clases que no pueden ser heredadas. Pero pueden 
extender de otra clase que nosea final. Tampoco una clas final puede ser
abstracta. 

Dentro de una clase normal se pueden definir metodos o propiedades que no
se pueden sobreescribir cuando se heredan.
*/

trait Saludo {
  public function spanish() {
    echo 'Hola<br/>';
  } 
}

final class Hogar {
  use Saludo;

  public $nombre;

  public function __construct($nombre) {
    $this->nombre = $nombre;
  }

  public function saludo() {
    $this->spanish();
    echo 'El nombre de esta casa es '.$this->nombre.'<br/>';
  }
}

// esto da un error
// class ClaseExtendida extends Hogar {} 

$hogar = new Hogar('Hoggarts');
$hogar->saludo();