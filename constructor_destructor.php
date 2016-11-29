<?php
//Class identifies an object
// Think of a Class as a template for more objects... like a constructor


class Cars {

  public $wheel_count = 4; //this is now a property

  static $door_count = 4; //this is now a static property static stays in one place

  function __construct(){ //this is a methd because it's a function in a class (object)
    echo $this->wheel_count;
    echo self::$door_count++;

  }
}

function __destruct(){ //this is a methd because it's a function in a class (object)
  echo $this->wheel_count;
  echo self::$door_count++;

}
}

$bmw = new Cars(); //will invoke the function in function __construct {}
$chevy = new Cars();

 ?>
