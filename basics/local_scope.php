<?php
//local scope using php

function myTest(){
$x=5;
echo "<p> this variable will only be available in this function:$x</p>";
}
myTest();
echo "<p> this will generate an error since the variable declared is in myTest() function $x</p>"

?>
