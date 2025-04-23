<?php
/*
4. Design a form to input username and password. 
Check if the input fields are empty and display an error message if so.
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Both fields are required!";
    } else {
        $username = htmlspecialchars($username);
        echo "Welcome, " . $username . "!";
    }
}
?>