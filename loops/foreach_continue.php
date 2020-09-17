<?php

$names = ["Bob", "George", "Gina", "Joe", "Happy", "Nigel"];

foreach ($names as $name) {
    if ($name == "Joe") {
        continue;
    }
    print "Hello " . $name . "!<br />";
}

?>