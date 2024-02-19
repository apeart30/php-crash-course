<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
// here's to demonstrating how global variables can be accessed inside a function using global keyword
global $x;
// now the program won't produce any errors since the variable is included in the function

echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
