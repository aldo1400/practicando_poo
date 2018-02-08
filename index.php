<?php namespace test;
class Car
{

  private $owner;
  private $model;

  public function move()
  {
    echo "This car is moving";
  }

  public function get($atributo)
  {
    return $this->$atributo;
  }

  public function set($atributo,$contenido)
  {

    $this->$atributo=$contenido;
    return $this->$atributo;

  }
}
 ?>
