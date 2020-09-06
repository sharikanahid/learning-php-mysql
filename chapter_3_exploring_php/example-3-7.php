<?php
/*
 * Example-3-7: The default handling of variable scope
 */
//The default handling of a variable scope
function birthday()
{
    //Set age to 1
    $age = 1;
}

// set age to 30
$age = 30;
//Call the function
birthday();
// Display the age
echo $age;
?>




