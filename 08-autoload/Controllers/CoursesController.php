<?php

namespace Controllers;

class CoursesController {
  public function saludar() {
    echo 'Hola desde la clase CoursesController<br/>';
  }

  public static function sayHello() {
    echo 'Hello<br/>';
  }

  public static function index() {
    return [
      [
        'nombre' => 'Curso de php',
        'precio' => 100 
      ],
      [
        'nombre' => 'Curso de html',
        'precio' => 30 
      ],
      [
        'nombre' => 'Curso de css',
        'precio' => 35
      ]
    ];
  } 
}