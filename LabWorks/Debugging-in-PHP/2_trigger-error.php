<?php

// 2. Write a PHP script that triggers a custom error message if a number is negative.

$number = -10; // Try changing this to a positive number

if ($number < 0) {
    trigger_error("Number cannot be negative", E_USER_WARNING);
} else {
    echo "The number is: $number";
}

?>
