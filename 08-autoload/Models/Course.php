<?php

namespace Models;

class Course {
  public function saludar() {
    echo 'Hola desde la clase Course';
  }

  public static function hola() {
    echo 'Hola desde la clase models<br/>';
  }
}