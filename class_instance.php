<?php
//Class identifies an object
// Think of a Class as a template for more objects... like a constructor


class Cars {
//How to define a method for a class?
//Methods are functions that is declared in a class

  function greeting(){ //this is a methd because it's a function in a class (object)
        echo"<h2>Hello Josh, how are you?</h2>";
  }
}

$bmw = new Cars(); // This class is now Extanitated (constructed)

$bmw->greeting(); //Activated the greeting method (function);

//same blueprint different instances
$chevy = new Cars();

$dodge = new Cars();

 ?>
