<?php

class Cars {
  Private $door_count = 4; // only availible to this calss

  function get_values(){ //uses this method to get the private value to bmw below
    echo $this->door_count;
  }

  function set_values(){ //this sets values outside of the class
    echo $this->door_count = 10;
  }
}
//********Accessing information in a private modifier***********************//
$bmw = new Cars();
$bmw->set_values(); // can now acces private values outside the class / private property

 ?>
