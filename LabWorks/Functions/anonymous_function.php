<?php
/* 6. Define an anonymous function that returns the square of a number.*/
$square = function($length) {
    return $length * $length;
};
$length = 5; 

// Print the result
echo "Square of $length is " . $square($length);
?>