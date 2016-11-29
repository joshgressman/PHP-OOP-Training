<?php

class Cars {
  var $wheels = 4;
  function greeting(){
    return "Hello";
  }
}

$bmw = new Cars();

class Trucks extends Cars { // extend will inherit properties and methods from Cars

}

$silverado = new Trucks();
echo $silverado->wheels; // inherits wheel value from Cars class with extend in trucks
 ?>
