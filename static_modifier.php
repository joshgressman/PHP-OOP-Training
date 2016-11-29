<?php
//Class identifies an object
// Think of a Class as a template for more objects... like a constructor


class Cars {

  static $wheel_count = 4; // Also need to be changed to static
  static $door_count = 4; //


  static function car_detail(){ //is now a static method (function)
    echo Cars::$wheel_count;
    echo Cars::$door_count;
    // echo Cars::$seat_count;
  }
}

$bmw = new Cars(); // This class is now Extanitated (constructed)
echo $bmw->wheel_count; // attached to the instance
//to access a static property
echo Cars::$door_count; // does not need an instance
echo Cars::car_detail();
 ?>
