<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM user_info WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No user found with ID: $id";
        exit;
    }
} else {
    echo "No ID provided!";
    exit;
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE user_info SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $email, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully!";
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}

$conn->close();
?>

<h2>Edit User</h2>
<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
    Name: <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br><br>
    <input type="submit" name="update" value="Update">
</form>
