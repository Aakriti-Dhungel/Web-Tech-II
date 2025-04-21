<?php
include 'db.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

echo "<h2>Users List</h2>";
echo "<a href='create.php'>Add New User</a><br><br>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>
                <a href='edit.php?id=".$row['id']."'>Edit</a> | 
                <a href='delete.php?id=".$row['id']."' onclick='return confirm(\"Are you sure?\")'>Delete</a>
            </td>
          </tr>";
}

echo "</table>";

mysqli_close($conn);
?>
