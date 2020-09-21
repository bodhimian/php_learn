<?php

include "includes/person.inc.php";

$person1 = new Person();
$person1->setName("George");
echo $person1->name;

$person2 = new Person();
$person2->setName("Timmy");
echo $person2->name;

?>