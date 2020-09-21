<?php

include 'Restaurant.php';

$restaurant_one = new Restaurant("China King");   //creates a new object (Restaurant class) with name
$restaurant_two = new Restaurant("Burger King");
$restaurant_two->setName("Burger Shack");

print $restaurant_one->getName() . "<br />";  //let's see those object names
print $restaurant_two->getName() . "<br />";
