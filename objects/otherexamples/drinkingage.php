<?php

include "includes/person.inc.php";

echo Person::$drinkingAge;  //access static property
Person::setDrinkingAge(18);  //uses static method
echo Person::$drinkingAge;

echo "</ br>";

echo Person::getDA; //


?>
