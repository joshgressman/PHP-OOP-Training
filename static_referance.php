<?php
//Class identifies an object
// Think of a Class as a template for more objects... like a constructor


class Cars {

  static $wheel_count = 4; // Also need to be changed to static
  static $door_count = 4; //


  static function car_detail(){ //is now a static method (function)
    return self::$wheel_count;
    return self::$door_count;
    // echo Cars::$seat_count;
  }
}
//extends pulls properties and methods from Cars class
class Trucks extends Cars { //Trucks is now a sub class of Cars

    static function display(){
      echo parent::car_detail(); // calls the functon from the parent
    }
}

Trucks::display();

 ?>
