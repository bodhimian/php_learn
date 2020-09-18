<?php

$soup = new stdClass();   //creates object

//lets give it some properties:
$soup->name = "Butternut";
$soup->amount = 3;
$soup->rating = 10;
$soup->favorite = TRUE;
$soup->dates_eaten = ["2015/10/14", "2016/02/01", "2016/02/02"];

var_dump($soup); //lets take a look at the object




/*this object is a very simple standard class object. 
it does not include any full blown OOP features. */
