<?php
include 'db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>Edit User</h2>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
    <button type="submit">Update User</button>
</form>
<br>
<a href="read.php">Back to Users</a>
