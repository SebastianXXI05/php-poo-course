<?php
namespace Carpeta1; // definiendo namespace

// Clases, traits, clases abstracras, interfaces, funciones y constantes.
/* 
en los namesqpaces no es posible usar variables, solo si estan en funciones
en clases, o funciones
*/

// clase
class Humano {
  public function saludar() {
    echo 'Hola desde las clase humano<br/>';
  }
}

// trait
trait decirHola {
  public function hola() {
    echo 'Hola Mundo<br/>';
  } 
}

// clase abstracta
abstract class Metodos {
  protected $variable;
  abstract function Hello();
}

// interfaz
interface A {
  public function foo();
}

// función
function sayHello() {
  echo 'Hello<br/>';
}

// constante
define('HOST', 'localhost');