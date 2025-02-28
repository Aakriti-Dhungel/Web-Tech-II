<?php
/*5. Create two functions, one for addition and one for multiplication. 
Store their names in variables and call them dynamically. */
// Define addition function
function addition($num1, $num2) {
    return $num1 + $num2;
}
// Define multiplication function
function multiplication($num1, $num2) {
    return $num1 * $num2;
}
// Store function names in variables
$addFunction = "addition";
$mulFunction = "multiplication";

// Call functions dynamically using variable function calls
echo "Addition: " . $addFunction(5, 3) . "\n"; 
echo "Multiplication: " . $mulFunction(5, 3) . "\n"; 
?>