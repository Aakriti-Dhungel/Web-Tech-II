<?php
include 'db.php';

$id = $_GET["id"];
$sql = "DELETE FROM users WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "User deleted successfully! <br><a href='read.php'>View Users</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
