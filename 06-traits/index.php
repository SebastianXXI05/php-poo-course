<?php
/* 
Los Traits son complementos de una clase que permite ser usado en diferentes
clases, simulando la herencia multiple. 

Tanto como las interfaces o clases abstractas, los Traits no se pueden instantanciar.

Los traits pueden definir propiedades estaticas y metodos abstractos.

Puede haber cierto conflicto con los nombres y los metodos, si es que estos tienen el mismo nombre,
para arreglar esto se puede usar "insteadof" o "as". Ejemplo:

use Logger, Debugger {
    Logger::log insteadof Debugger;
}
Aqui esta usando dos traits que contienen dos metodos que se llaman igual, con insteadof, estamos diciendo
que va a usar el metodo log de el trait Logger y no el de Debugger.

use MiTrait {
  metodo1 as otroMetodo;
}
Esto renombra el metodo1 del trait MiTrait y le asigna otro nombre, en este caso le pone el nombre de
otroMetodo.

Para cambiar un metodo protected de un trait cuando lo usamos en alguna clase podemos hacer lo siguiente

use A{ saludo as public; }

Los traits pueden usar otros traits.

trait A {
  use B, C;
}
*/

class Persona {
  public $nombre, $apellido;
  public function __construct($nombre, $apellido) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
  }

  public function inprimirInfo() {
    echo 'Nombre: '.$this->nombre.'<br/>';
    echo 'Apellido: '.$this->apellido.'<br/>';
  }
}

// Traits
trait Espanol /* Español */ {
  public static $idioma = 'Español';

  public function saludoEspanol($nombre) {
    echo "Hola soy $nombre.<br/>";
  }
} 

trait English {
  public $idioma = 'ingles';
  abstract function obtenerCapital();

  public function saludoEnglish($nombre) {
    echo "My name is $nombre.<br/>";
  }
}

// Subclases
class Colombiano extends Persona {
  // usando un trait
  use Espanol;

  public function __construct($nombre, $apellido) {
    parent::__construct($nombre, $apellido);
  }
}

class Argentino extends Persona {
  use Espanol;

  public function __construct($nombre, $apellido) {
    parent::__construct($nombre, $apellido);
  }
}

class Ingles extends Persona {
  use English;

  public function __construct($nombre, $apellido) {
    parent::__construct($nombre, $apellido);
  }

  public function obtenerCapital() {
    echo 'Londres<br/>';
  }
}

class Estadounidense extends Persona {
  use English;

  public function __construct($nombre, $apellido) {
    parent::__construct($nombre, $apellido);
  }

  public function obtenerCapital() {
    echo 'Washington DC<br/>';
  }
}

$colombiano = new Colombiano('Juan', 'Monsalve');
$colombiano->saludoEspanol($colombiano->nombre);
echo Colombiano::$idioma.'<br/>';

echo '<hr/>';

$gringo = new Estadounidense('Jorge', 'Parker');
$gringo->saludoEnglish($gringo->nombre);
echo $gringo->idioma.'<br/>';
$gringo->obtenerCapital();