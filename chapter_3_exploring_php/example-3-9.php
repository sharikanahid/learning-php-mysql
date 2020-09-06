<?php
/*
 * Example-3-9: A static variable remembering the last value
 */

//Define the function
function birthday()
{
    //define age as a static variable
    static $age = 0;
    //Add one to the age value
    $age = $age + 1;
    //print the static age variable
    echo "Birthday number $age <br />";
}

//set age to 30
$age = 30;
//call the function twice
birthday();
birthday();
//display the age
echo " Age: $age<br/>";
?>
