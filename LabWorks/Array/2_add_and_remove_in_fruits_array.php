<?php
/* 2. Write a PHP script to add "Strawberry" to the $fruits array and remove "Banana". 
Print the final array.*/

// Initial array
$fruits = ["Mango", "Apple", "Banana"];

// Print array before changes
echo "Before adding Strawberry and removing Banana:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Add "Strawberry"
$fruits[] = "Strawberry";

// Remove "Banana" (assuming it's at index 2)
unset($fruits[2]);

// Re-index the array to avoid gaps in indices
$fruits = array_values($fruits);

// Print array after changes
echo "<br>After adding Strawberry and removing Banana:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>
