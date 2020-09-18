<?php

$soup = new stdClass();   //creates standard class object

//lets give it some properties:
$soup->name = "Butternut";
$soup->amount = 3;
$soup->rating = 10;
$soup->favorite = TRUE;
$soup->dates_eaten = ["2015/10/14", "2016/02/01", "2016/02/02"];

var_dump($soup); //lets take a look at the object

$print $soup->name . "is the soup we are having.<br />";

/*this object is a very simple standard class object. 
in reality, you may want to just create an associative array.
it does not include any full blown OOP features. */
