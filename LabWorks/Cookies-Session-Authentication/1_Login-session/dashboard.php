<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    echo "Welcome back, " . $_SESSION["username"] . "!<br>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "Please log in first. <a href='login.html'>Login</a>";
}
?>
