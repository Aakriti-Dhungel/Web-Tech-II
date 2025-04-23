<?php

// Set upload folder
$folder = "uploads/";

// Get file name
$file = $folder . basename($_FILES["image"]["name"]);

// Move file to folder
if (move_uploaded_file($_FILES["image"]["tmp_name"], $file)) {
    echo "Image uploaded successfully!";
} else {
    echo "Upload failed!";
}

?>
