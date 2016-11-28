<?php
//This is a demonstraion of a class methods
//We call methods funcitons when they are inside of a class
//Class is a blurprint of an object
class Cars {
//How to define a method for a class?
//Methods are functions that is declared in a class
  function greeting(){ //this is a methd because it's a function in a class (object)

  }

  function greeting2(){ //this is a methd because it's a function in a class (object)

    }

}

$my_method = get_class_methods('Cars');

foreach ($my_method as $method) {
  echo $method . "<br />";
}
 ?>
