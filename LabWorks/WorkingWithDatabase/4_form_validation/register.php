<?php
$conn = new mysqli("localhost", "root", "", "login_system");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hashed password

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    if ($conn->query($sql)) {
        echo "Registration successful. <a href='login.html'>Login here</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
