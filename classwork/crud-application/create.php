<?php
include('db.php');  // Include database connection

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve user input
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepare the SQL statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO user_info (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);  // "ss" indicates both are strings

    // Execute the query and check if it's successful
    if ($stmt->execute()) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}
?>

<h2>Add New User</h2>
<form method="POST" action="create.php">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
