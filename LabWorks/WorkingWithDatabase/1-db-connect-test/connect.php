<?php

/*
Connect to MySQL Database Using MySQLi Procedural Method.
➤ Write PHP code to connect to a MySQL database using the procedural method.
*/
$servername = "localhost";
$username = "root";
$password = "";
$database = "users"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
}

echo "Database Connected successfully!";


// SQL query
// CREATE DATABASE users;

mysqli_close($conn);
?>
