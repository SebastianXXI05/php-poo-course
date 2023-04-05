<?php

/* 
Los namespace me permiten organizar los paquetes logicos de mi proyecto y 
definir espacios de nombres para organizarlos. Tambien me evitalos conflictos 
de los nombres declases, funciones, interfaces, constantes, clases abstractas
y traits.

los namespaces se definencon la palabra clave namespace, que siempre tiene
que ser la primera sentencia.

Un sub namespace es un namespace dentro de otro. 

Namespace:
namespace MiNamespace; #declarando un namespace
use MiNamespace\MiClase #usando un componente de mi namespace

#no se puede usar un namespace sin especificar un paquete

Sub Namespace:
namespace MiNamespace\Subnamespace # definiendo un sub namespace
use MiNamespace\subnamespace\clase # usando un componente de mi sub namespace
*/

require_once('carpeta1/Humano.php');
require_once('carpeta2/Humano.php');
require_once('carpeta2/Persona.php');

use Carpeta1\Humano;
use Carpeta1\decirHola; // trait
use Carpeta1\Metodos; // clase abstracta
use Carpeta1\A; // interfaz
use Carpeta1\sayHello; // función
use Carpeta1\HOST; // constantes

use Carpeta2\Humano as Humano2;
use Carpeta2\Persona\Persona; // usando un sub namespace

$humano1 = new Humano;
$humano1->saludar();

$humano2 = new Humano2;
$humano2->saludar();

echo '<hr/>';

$persona = new Persona();
$persona->presentarse();

echo '<hr/>';

// usando función de un namespace
\Carpeta1\sayHello();
echo HOST; // constante de un namespace
