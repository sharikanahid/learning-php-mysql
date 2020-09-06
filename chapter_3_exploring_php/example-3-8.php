<?php
/*
 * Example-3-8: Using a global variable changes the result
 */

//Define a function
function birthday()
{
    //Define age as a global variable
    global $age;
    //Add one to the age value
    $age = $age + 1;
}

//Set age to 30
$age = 30;
//Call the function
birthday();
//display the age
echo $age;
?>
