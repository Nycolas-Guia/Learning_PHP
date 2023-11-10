<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  
  function __destruct() {
    echo "{$this->color} {$this->name}<br>";
  }
}

$apple = new Fruit('Apple', 'Red');
$banana = new Fruit('Banana', 'Yellow');
?>