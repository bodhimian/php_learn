<?php

$stringie = "The quick brown fox jumps over the lazy dog.";

print $stringie . "<br />";

print "Length: " . strlen($stringie) . " characters.<br />";


// or using substring

print "first 10 chars: " . substr($stringie, 0, 10);
print "<br />";
print "second 10 chars: " . substr($stringie, 10, 10);
print "<br />";
print "last 10 chars: " . substr($stringie, -10);

//strstr tells me if "fox" is in the target string, returns the end of the string from that point.
$fox = strstr($stringie, "fox");
print $fox;

// strpos tells me where a string is located (index)
print strpos($stringie, "fox"); 


//str_replace has a different syntax. replaces strings with strings. str_ireplace is case insensitive version.

str_ireplace("the", "a", $stringie);
print $stringie;
str_replace("fox", "buffalo", $stringie);
print $stringie;


//changing case of strings (all letters)
strtolower($stringie);
print $stringie;
strtoupper($stringie);
print $stringie;

//ucwords : capitalize first letters of words in a string.
ucwords($stringie);
print $stringie;

//ucfirst : uppercase just first letter of string.
ucfirst($stringie);
print $stringie;

?>