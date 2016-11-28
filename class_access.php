<?php
//Class identifies an object
// Think of a Class as a template for more objects... like a constructor


class Cars {

  public $wheel_count = 4; //this is now a property
  Private $door_count = 4; // only availible to this calss
  Protected $seat_count = 2; // only availible to this class and sub classes (used with extend will inherit to new class)

  function car_detail(){ //this is a methd because it's a function in a class (object)
    echo $this->wheel_count;
    echo $this->door_count;
    echo $this->seat_count;
  }
}

$bmw = new Cars(); // This class is now Extanitated (constructed)

echo $bmw->wheel_count . "<br />";
echo $bmw->door_count . "<br />";
echo $bmw->seat_count . "<br />";

 ?>
