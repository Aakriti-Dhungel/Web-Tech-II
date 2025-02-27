<?php
/* Write a function greetUser($name = "Guest") that prints "Hello, [name]!". 
If no name is provided, it should print "Hello, Guest!".*/
function greetUser($name = "Guest")
{
    echo "Hello, $name!";
}
greetUser("Aakriti");
echo "<br>";
greetUser(); // Output: Hello, Guest!
