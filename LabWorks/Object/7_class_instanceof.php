<?php

/* 7. Write a PHP program to check if an object is an instance of a given class using the instanceof keyword. */

// Parent class
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

// Child class inheriting from Person
class Employee extends Person {
    public $position;

    public function __construct($name, $position) {
        parent::__construct($name); // Call parent class constructor
        $this->position = $position;
    }
}

$person1 = new Person("John");
$employee1 = new Employee("Alice", "Manager");

// Checking the objects
echo ($person1 instanceof Person) ? "person1 is a Person.<br>" : "person1 is NOT a Person.<br>";
echo ($employee1 instanceof Person) ? "employee1 is a Person.<br>" : "employee1 is NOT a Person.<br>";
echo ($employee1 instanceof Employee) ? "employee1 is an Employee.<br>" : "employee1 is NOT an Employee.<br>";

?>
