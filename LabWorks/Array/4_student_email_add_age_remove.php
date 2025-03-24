<?php
/* 4. Write a PHP script to add "email" => "alice@example.com" to the $student array and remove "age". 
Print the final array.*/

$students_details = [
    "name" => "John",
    "age" => "25",
    "course" => "BIT",
];

// Before changes: print initial array
echo "Before changes: <br>";
foreach ($students_details as $key => $value) {
    echo "$key: $value <br>";
}

// Add "email" and Remove "age"
$students_details["email"] = "john@example.com";
unset($students_details["age"]);

// After changes: print updated array
echo "<br>After adding email and removing age: <br>";
foreach ($students_details as $key => $value) {
    echo "$key: $value <br>";
}
?>


