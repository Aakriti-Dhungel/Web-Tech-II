<?php

/* 8. Create a Car class and check the available methods and properties using get_class_methods()
 and get_class_vars().
*/
class Car {
    public $brand;
    public $model;
    private $color;

    public function start() {
        echo "Car started.<br>";
    }

    public function stop() {
        echo "Car stopped.<br>";
    }

    private function fuel() {
        echo "Refueling car.<br>";
    }
}

// Create an object of the Car class
$car = new Car();

// Get all methods of the Car class
$methods = get_class_methods($car);
echo "Methods in Car class: <br>";
print_r($methods);
echo "<br>";

// Get all properties of the Car class
$properties = get_class_vars(get_class($car));
echo "Properties in Car class: <br>";
print_r($properties);
?>