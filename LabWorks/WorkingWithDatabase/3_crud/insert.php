<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "User added successfully! <br><a href='read.php'>View Users</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
