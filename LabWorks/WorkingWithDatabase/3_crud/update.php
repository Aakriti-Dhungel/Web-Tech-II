<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id    = $_POST["id"];
    $name  = $_POST["name"];
    $email = $_POST["email"];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully! <br><a href='read.php'>View Users</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
