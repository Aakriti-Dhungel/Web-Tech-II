<?php
// Include database connection
include('db.php');

// SQL query to fetch all records from the 'user_info' table
$sql = "SELECT * FROM user_info";
$result = $conn->query($sql);  // Execute the query

// HTML output for table header
echo "<h2>Users List</h2>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Actions</th>
</tr>";

// Loop through each row of the result and display it in the table
while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row['id'] . "</td>  <!-- Display ID -->
    <td>" . $row['name'] . "</td>  <!-- Display Name -->
    <td>" . $row['email'] . "</td>  <!-- Display Email -->
    <td>
    <a href='update.php?id=" . $row['id'] . "'>Edit</a> |  <!-- Link to Edit -->
    <a href='delete.php?id=" . $row['id'] . "'>Delete</a>  <!-- Link to Delete -->
    </td>
    </tr>";
}
echo "</table>";  // End the table

// Close the database connection
$conn->close();
?>
