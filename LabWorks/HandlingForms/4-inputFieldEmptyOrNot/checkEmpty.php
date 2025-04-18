<?php
/* 
4. Design a form to input username and password. 
Check if the input fields are empty and display an error message if so.
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Retrieving form data

$name = $_POST['name'];

$email = $_POST['email'];

// Validating input

if (empty($name) || empty($email)) {

echo "All fields are required!";

} else {

// Sanitizing input

$name = htmlspecialchars($name);

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

echo "Hello, " . $name . "! Your email is " . $email;

}

}

?>