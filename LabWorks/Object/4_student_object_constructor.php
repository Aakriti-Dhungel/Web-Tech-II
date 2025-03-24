<?php

/* 4. Modify the Student class to include a constructor that initializes the name and age when an object is created.
*/
class Student {

    public $name;   
    public $age;
    
    // Constructor
    
    public function __construct($name, $age) {
    
    $this->name = $name;
    
    $this->age = $age;
    
    }
    
    public function showStudent() {
    
    return "My name is  $this->name and I am  $this->age  years old.";
    
    }
    
    }
    
    $student1 = new Student("Harry", 25);
    
    $student1 = new Student("Ram", 25);
    
    echo $student1->showStudent();
?>