<?php
/* 
Una interfaz define las estructura que una clase debe tener, es decir los metodos que
tiene que tener la clase. La implementación de estos metodos no son concretas.

Las interfaces solo pueden usar metodos publicos.
*/

interface Db {
  public function connection();
}

interface Models extends Db { // heredando metodos de otra interfaz
  public function insert();
  public function get_all();
  public function update();
  public function remove();
}

interface a extends Db, Models { // herencia multiple
  public function a();
}

class User implements Models {
  public function connection() {
    
  }
  public function insert() {

  }
  public function get_all() {

  }
  public function update() {

  }
  public function remove() {

  }
  // si no defino estos metodos me da error.

  public function can() {

  }
  // se pueden definir otros metodos que no esten en las interfaces.
}
