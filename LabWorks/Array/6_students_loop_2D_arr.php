<?php
/* 6.Write a PHP script to loop through the following 2D array and print all elements.
$students = [
    ["Alice", 20, "A"],
    ["Bob", 21, "B"],
    ["Charlie", 22, "C"]
];
Hello my name */

$students = [
    ["Alice", 20, "A"],
    ["Bob", 21, "B"],
    ["Charlie", 22, "C"]
];

foreach ($students as $student) {
    // Extract values using index positions
    echo "Name: {$student[0]}, Age: {$student[1]}, Grade: {$student[2]} <br>";
}
?>
