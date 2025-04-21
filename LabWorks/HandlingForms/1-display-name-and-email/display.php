<?php
/*
1. Create a simple HTML form to collect a user's name and email. 
 Use PHP to display the submitted data on the next page.    */
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = htmlspecialchars($_POST["name"]);
     $email = htmlspecialchars($_POST["email"]);
 
     echo "<h3>Submitted Information:</h3>";
     echo "Name: " . $name . "<br>";
     echo "Email: " . $email;
 } else {
     echo "Please submit the form.";
 }
 ?>
 