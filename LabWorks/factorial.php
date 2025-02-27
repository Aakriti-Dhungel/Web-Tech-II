<?php
/* Write a function to calculate the factorial of a number using return statements.*/

//Simple Method

function factorial($n) {
    $fact = 1; 
    for ($i = 1; $i <= $n; $i++) {
        $fact = $fact * $i; 
    }
    return $fact; 
}

// Testing the function
echo "Factorial of 5 is " . factorial(9);  
?>

