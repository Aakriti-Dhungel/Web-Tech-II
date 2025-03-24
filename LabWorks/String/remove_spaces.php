<?php
/* Q7: Given a string with extra spaces, remove them using trim(), ltrim(), and rtrim(). */

$str = " PHP can generate dynamic page content. ";

echo "Original text: '" . $str . "'<br>"; 

echo "Using trim(): '" . trim($str) . "'<br>";

echo "Using ltrim(): '" . ltrim($str) . "'<br>";

echo "Using rtrim(): '" . rtrim($str) . "'<br>";

?>
