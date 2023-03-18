<?php
require_once('./class/Myclass.php');

$objeto = new Myclass();

echo $objeto->public.'<br/>';
// error los metodos o propiedades protected y private no son accesibles fuera de las clase.
/* 
echo $objeto->protected.'<br/>';
echo $objeto->private.'<br/>';
*/
echo '<hr/>';
$objeto->printHello();
echo '<hr/>';

$objeto2 = new Myclass2();
$objeto2->printHello();
