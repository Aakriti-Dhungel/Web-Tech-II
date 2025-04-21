<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $_POST["username"];

    // Redirect to dashboard
    header("Location: dashboard.php");
    exit();
}
?>
