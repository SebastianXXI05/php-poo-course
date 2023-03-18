<?php
/* 
**METODOS DE ACCESO**

**public**: permite que las propiedades y metodos de una clase sean accesibles desde cualquier
lugar. Ya sea desde un objeto instanciado, la propia clase o porque se heredo desde una
clase padre.

**private** y **protected** solo son accesibles dentro de la clase.

Se diferencian en que **private** no se hereda y **protected** si.

||||||||||||||NOTA|||||||||||||
el __construct() es recomendable que siempre sea public.
*/

class Myclass {
  public $public = 'public';
  protected $protected = 'protected';
  private $private = 'private';

  // por defecto si no definimos un metodo de acceso, se tomara como un metodo o propiedad publica.
  function printHello() { 
    echo $this->public.'<br/>';
    echo $this->protected.'<br/>';
    echo $this->private.'<br/>';
    // accediendo a propiedades protected y private con un metodo public
  }
}

class Myclass2 extends Myclass {
  function printHello() { 
    echo $this->public.'<br/>';
    echo $this->protected.'<br/>';
    //echo $this->private.'<br/>';
    // private no se hereda
  }
}