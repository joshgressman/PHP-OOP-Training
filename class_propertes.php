<?php
//Class identifies an object
// Think of a Class as a template for more objects... like a constructor


class Cars {

  var $wheel_count = 4; //this is now a property
  var $door_count = 4;

  function car_detail(){ //this is a methd because it's a function in a class (object)
        return "This car has " . $this->wheel_count . "wheels"; // this is suito varible, reffers to this class
  }
}

$bmw = new Cars(); // This class is now Extanitated (constructed)

//add a property and value to an instance $bmw->wheel_count will acces =10 will change value
echo $bmw->wheel_count = 10 . "<br />";

//same blueprint different instances
$chevy = new Cars();
echo $chevy->wheel_count . "<br />";

echo $bmw->car_detail();

 ?>
