<?php
//how to define a class of an oci_fetch_object

class Cars {
//Class definition goest here (properties, variables, methods and functions)
//functions are called methods here (functions = things you do with your object)
//This will be a blueprint of the oci_fetch_object


}
//All classes be declared will go into this variable
$myClasses = get_declared_classes();

foreach ($myClasses as $class) {
   echo $class . "<br />";
}

 ?>
