<?php
// 1. How would you handle an error like “division by zero” using exception handling?


$dividend = 20;
$divisor = 0;

try {
    if ($divisor == 0) {
        throw new Exception("Cannot divide by zero.");
    }

    $result = $dividend / $divisor;
    echo "Result: $result";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
