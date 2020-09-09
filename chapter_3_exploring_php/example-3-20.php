<?php
/*
 * Example-3-20: Using a constant in your program
 */
define("HELLO", "Hello world! ");
echo HELLO; //outputs "Hello world!"
$constant_name = "HELLO";
echo constant($constant_name);
define("HELLO", "Hello");
echo HELLO;
?>