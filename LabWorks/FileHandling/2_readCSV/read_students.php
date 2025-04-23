<?php

// Open the file
$file = fopen("students.csv", "r");

// Read and display each row
while (($data = fgetcsv($file)) !== FALSE) {
    echo "Student Name: " . $data[0] . "<br>";
}

// Close the file
fclose($file);

?>
