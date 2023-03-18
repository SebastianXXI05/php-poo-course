<?php
require_once('./class/Animal.php');

$padre = new Animal('tiburon', 'marino');
echo $padre->get_nombre();

echo '<hr/>';

// instancia de la clase Perro que hereda propiedades desde la clase Animal.
$hijo1 = new Perro('sparky', 'mamifero', 'pitbull');
echo $hijo1->get_nombre().'<br/>';
echo $hijo1->tipo.'<br/>';
echo $hijo1->sonido().'<br/>';

$hijo1->set_nombre('Tom');
echo $hijo1->get_nombre().'<br/>';

echo '<hr/>';

// instancia de la clase Gato que hereda propiedades desde la clase Animal.
$hijo2 = new Gato('Jerry', 'mamifero', 'feliz', 'naranjado');
echo $hijo2->get_nombre().'<br/>';
echo $hijo2->saludo();