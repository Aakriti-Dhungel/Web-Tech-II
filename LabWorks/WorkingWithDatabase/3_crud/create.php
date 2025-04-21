<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h2>Add New User</h2>
    <form action="insert.php" method="POST">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit">Add User</button>
    </form>
    <br>
    <a href="read.php">View Users</a>
</body>
</html>
