<?php
/* 
Static se usa para declarar metodos y propiedades que son propias de la
clase y no de una instancia en particular.

Los metodos estaticos no pueden usar propiedades o metodos que no sean
estaticos y viceversa.

Las propiedades estaticas pueden recordar su valor.

usamos parent::metodo(), para usar un metodo estatico que fue heredado desde
una clase padre.
*/

class Humano {
  public static $nombre = 'Kal';

  public static function saludar() {
    return 'Hola Mundo. '.self::$nombre.'<br/>';
  }
}

$humano = new Humano;
echo $humano->saludar(); // usando metodo estatico desde una instancia
echo Humano::saludar(); // usando metodo estatico desde la propia clase

echo Humano::$nombre;