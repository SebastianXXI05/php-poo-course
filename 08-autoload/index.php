<?php
/* 
El autoload me permite iniciar clases sin la necesidad de mandar a llamar
a archivo.
*/

use Models\Course;
use Controllers\CoursesController; 

require_once 'autoload.php';

$course = new Course;
$course->saludar();

$coursesController = new CoursesController;
echo '<br/>';
$coursesController->saludar();
$coursesController->sayHello();
CoursesController::sayHello();