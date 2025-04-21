<?php
include('db.php');

// Check if ID is passed for deletion
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete query
    $sql = "DELETE FROM user_info WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully!";
        header("Location: index.php");  // Redirect back to the index page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
