<?php
/*
Create a Table in MySQL Using PHP.
➤ Write a PHP script to create a table users with fields id, name, and email.
*/
$conn = new mysqli("localhost", "root", "", "users");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the 'users' table if it doesn't already exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully in the 'users' database";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
