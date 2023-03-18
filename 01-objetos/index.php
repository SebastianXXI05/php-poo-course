<?php
require_once('./class/Persona.php');

$persona1 = new Persona('SebasTian', 'MoraLes');

/* $persona1->set_nombre('SEbasTiaN');
$persona1->apellido = 'Morales';
$persona1->edad = 17; */

var_dump($persona1);
echo '<hr/>';

$persona2 = new Persona('Juan', 'CarDona', 17);

/* $persona2->set_nombre('juAn');
$persona2->apellido = 'Cardona';
$persona2->edad = 24; */

var_dump($persona2);
echo '<hr/>';

$persona1->set_nombre('Kevin');

echo 'El nombre de la persona 1 es: '.$persona1->get_nombre().'<br/>';
echo 'El nombre de la persona 2 es: '.$persona2->get_nombre().'<br/>';
