<?php
/*
2. Build a form using the POST method and retrieve form data using $_POST. 
Display a welcome message with the user’s name.

*/
echo "Hello, " . htmlspecialchars($_POST['name']);

?>