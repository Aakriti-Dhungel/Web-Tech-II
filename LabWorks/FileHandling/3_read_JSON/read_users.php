<?php

// Read the JSON file
$json = file_get_contents("users.json");

// Decode the JSON data into PHP array
$data = json_decode($json, true);

// Display user information
foreach ($data as $user) {
    echo "Name: " . $user["name"] . "<br>";
    echo "Age: " . $user["age"] . "<br>";
    echo "Email: " . $user["email"] . "<br><br>";
}

?>
