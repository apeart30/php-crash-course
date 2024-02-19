<?php
// we're going to ouptput a value stored in a variable

$name="john";

echo "hello $name";
#now we're gonna learn more about the varibles with types
#php supports various datatypes
$string="hello";
$number=10;
$floatt=10.23;
$booleann=True;
echo "$string $number $floatt $booleann \n";
#the above is the main four i'll add more as i move on to complex topics
//now to get a varible datatype in php we use var_dump() function in my understanding i guess its builtin function

var_dump($name);
var_dump($number);
var_dump($floatt);
var_dump($booleann);

?>
