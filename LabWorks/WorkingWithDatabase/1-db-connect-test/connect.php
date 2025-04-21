<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users"; // replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!";


// SQL query
// CREATE DATABASE users;
?>
