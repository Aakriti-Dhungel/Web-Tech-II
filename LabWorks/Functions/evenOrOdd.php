<?php
/* 2. Create a function that checks if a number is even or odd and returns a message accordingly. */

function evenOrOdd($number) {
    if ($number % 2 == 0) {
        return "$number is Even";
    } else {
        return "$number is Odd";
    }
}

echo evenOrOdd(4);  
echo "<br>";
echo evenOrOdd(7);  
?>
