<?php
// Use cookie value or default color
$color = isset($_COOKIE["fav_color"]) ? $_COOKIE["fav_color"] : "white";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Color Page</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
    <h2>Your favorite color is: <?php echo $color; ?></h2>
    <a href="index.html">Choose another color</a>
</body>
</html>
