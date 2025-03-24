<?php

/* 5. Create a class Rectangle with properties $length and $width. 
Add a method getArea() to calculate and return the area of the rectangle.
*/

class Rectangle {
    public $length;
    public $width;

    // Method to return the full name
    public function getArea() {
        return $this->length * $this->width;
    }
}

$rectangle = new Rectangle();
$rectangle->length = 10;
$rectangle->width = 20;

// Display full name
echo "Area of Rectangle: " . $rectangle->getArea();
?>