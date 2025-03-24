<?php

/* 1. Define a class named Car with a property $brand and a method displayBrand(). 
Create an object of the class and display the brand.
*/
class Car {
    public $brand;

    // Method to display the brand
    public function displayBrand() {
        echo "Car Brand: " . $this->brand;
    }
}

// Creating an object
$myCar = new Car();
$myCar->brand = "Toyota"; // Assign a value

$myCar->displayBrand(); // Call the method
?>