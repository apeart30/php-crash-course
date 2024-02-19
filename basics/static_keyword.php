<?php
#so usually when a function finishs executing in php
#all of its functions deletes so..using
#the static keyword ensures the variable will remain even after the function execution

function myTest(){
static $x=0;
echo $x;
$x++;
}
myTest();
myTest();
myTest();
?>
