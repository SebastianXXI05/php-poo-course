<?php 
/* 
Los enums representan tipos de datos que representan un conjunto de valores
constantes y limitados. Los enums permiten definir un conjunto de opciones
que se pueden usar en variables o funciones.

Por ejemplo si se necesita definir un conjunto de colores limitados, y hacer
ciertas operaciones con ellos.
*/

enum Colors {
  case Red;
  case Green;
  Case Blue;
  case Gray;
}

function translateColor (Colors $color) {
  return match ($color) {
    Colors::Red => 'Rojo',
    Colors::Green => 'Verde',
    Colors::Blue => 'Azul',
    Colors::Gray => 'Gris',
    default => 'Valor invalido'
    
  };
}

$color = Colors::Blue;

echo translateColor($color);
echo '<br/>';
echo translateColor(Colors::Green);