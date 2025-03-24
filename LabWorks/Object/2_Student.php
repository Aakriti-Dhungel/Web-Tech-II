<?php

/* 2. Create a class Student with properties $name and $age. 
Instantiate two student objects with different values and display their details.
*/
class Student {
    public $name;
    public $age;
    // Method to display student details
    public function displayDetails() {
        echo "Name: $this->name, Age: $this->age <br>";
    }
}

// Creating first student object
$student1 = new Student();
$student1->name = "John";
$student1->age = 20;

// Creating second student object
$student2 = new Student();
$student2->name = "Alice";
$student2->age = 22;

// Display details of both students
$student1->displayDetails();
$student2->displayDetails();
?>
