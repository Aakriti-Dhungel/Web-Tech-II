<?php
/* Q8: Remove HTML tags from the following string using strip_tags(). */

$str = "<h1>Welcome</h1> to <b>PHP</b>!";

// Display original text with HTML tags
echo "Original Text with HTML: '" . $str . "'<br>";

// Remove HTML tags using strip_tags()
echo "Text after removing HTML tags: '" . strip_tags($str) . "'<br>";

?>
