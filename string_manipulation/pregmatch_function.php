<?php

$example = "The quick brown fox jumps over 15 Dogs!";

if(preg_match('/fox/', $example)) {
  print "This story is about a fox.<br />"; 
}

if(preg_match('/^The/', $example)) {
    print "This string starts with a The.";
}

if(preg_match('/!$', $example)) {
    print "This story ends with a bang!";
}

if(preg_match('/\d/', $example)){
    print "This story contains a digit";
}


//using variables for found matches:

if(preg_match('/\d+/', $example, $matches)) {
    print "we found the number: " . $matches;
}

/* the following is the usage of 
- preg_match_all - 
function. */

if(preg_match_all('[aeiou]', $example, $matches)) {
    print "This string contains " . count($matches) . " vowels.";
    }


?>