<?php
// Set the cookie for 1 day (86400 seconds = 1 day)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_POST["color"];
    setcookie("fav_color", $color, time() + 86400); // expires in 1 day
    header("Location: color-cookies.php");
    exit();
}
?>
