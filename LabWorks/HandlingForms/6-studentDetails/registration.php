<?php

/*

6. Create a student registration form with the following fields: 
Name, Email, Gender (radio buttons), Course (checkboxes), and Comments (textarea). 
After submission, display all the entered data in a styled HTML table using PHP.
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $courses = isset($_POST['courses']) ? $_POST['courses'] : [];  // Handle multiple courses
    $comments = htmlspecialchars($_POST['comments']);

    // Displaying the entered data in a styled HTML table
    echo "<h2>Registration Details</h2>";
    echo "<table>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Name</td><td>" . $name . "</td></tr>";
    echo "<tr><td>Email</td><td>" . $email . "</td></tr>";
    echo "<tr><td>Gender</td><td>" . $gender . "</td></tr>";

    // Displaying the selected courses
    echo "<tr><td>Courses</td><td>" . (empty($courses) ? "No courses selected" : implode(", ", $courses)) . "</td></tr>";

    // Displaying comments
    echo "<tr><td>Comments</td><td>" . ($comments ? $comments : "No comments provided") . "</td></tr>";

    echo "</table>";
}
?>
