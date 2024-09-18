<?php
//$_GLOBALS 
$myGlobal = "global"; // declare variable outside of scope

function test()
{
    global $myGlobal; // make global variable accessible inside the function
    $myLocal = "local"; // declare variable inside of scope

    // both variables are printed
    var_dump($myLocal);
    echo "</br>";
    var_dump($myGlobal);
    echo "</br>";
}

test(); // run function

// $myLocal is not accessible here since it is local to the function
// only $myGlobal is printed since $myLocal is not globally scoped
var_dump(isset($myLocal) ? $myLocal : NULL);
echo "</br>";
var_dump($myGlobal);
echo "</br>";
?>