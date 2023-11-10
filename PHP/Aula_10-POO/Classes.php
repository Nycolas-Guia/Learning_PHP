<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function set_color($color){
  	$this->color = $color;
  }
  
  function get() {
    return $this->color . " " . $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('Apple');
$banana->set_name('Banana');

$apple->set_color('Red');
$banana->set_color('Yellow');

echo $apple->get();
echo "<br>";
echo $banana->get();
?>