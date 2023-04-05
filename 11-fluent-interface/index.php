<?php
/* 
La fluent interface se refiere a ejecutar metodos de un objeto, seguidos,
sin necesidad de volver a llamar al objeto.

Se puede entender como una concatenación de metodos.
*/

class Person {
  protected $name, $lastName;

  public function __construct($name, $lastName) {
    $this->name = $name;
    $this->lastName = $lastName;
  }

  public function setName($newName) {
    $this->name = $newName;
    return $this;
  }

  public function setLastName($newLastName) {
    $this->lastName = $newLastName;
    return $this;
  }

  public function getName() {
    echo $this->name.'<br/>';
    return $this;
  }

  public function getLastName() {
    echo $this->lastName.'<br/>';
    return $this;
  }

  public function getAll() {
    echo 'Name: '.$this->name.'<br/>';
    echo 'Last name: '.$this->lastName.'<br/>';
    return $this;
  }
}

$person = new Person('Juan', 'Cardona');

// fluent interface
$person->getAll()
      ->setName('Sebastian')
      ->setLastName('Morales')
      ->getName()
      ->getLastName();