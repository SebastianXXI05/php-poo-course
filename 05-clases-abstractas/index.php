<?php 
/*
Una clase abstracta es una clase que no puede ser instanciada directamente, 
sino que debe ser heredada por otras clases. Las clases abstractas se utilizan para definir un 
comportamiento común que deben implementar las clases hijas, pero que no puede ser 
completamente definido en la clase abstracta.

En las clases abstractas solo se pueden usar metodos o propiedades public y
protected
 */

abstract class ClaseAbstracta {
  abstract protected function getValor();
  abstract protected function valorPrejifo($prejifo);
  abstract public function printName($name);

  public function imprimir() {
    echo $this->getValor();
  }
}

// Esto no se puede
//$objeto = new ClaseAbstracta;


class ClaseConcreta extends ClaseAbstracta {
  protected function getValor() {
    return 'Clase concreta'; 
  }
  protected function valorPrejifo($prejifo) {
    return $prejifo.' Clase concreta';
  }
  public function printName($name) {
   echo $name; 
  }
}

$clase1 = new ClaseConcreta;

$clase1->imprimir();


