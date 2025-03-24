<?php
/* 3. Write a PHP script to store student details (name, age, grade) in 
an associative array and display them.*/

$students_details = [
    "name" => "John",
    "age" => "25",
    "course" => "BIT",
];
foreach ($students_details as $key => $value) {

    echo "$key: $value <br>";
}
?>
