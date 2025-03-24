<?php

/* 3. Define a class Person with properties $firstName and $lastName. 
Create a method getFullName() that returns the full name of the person.
*/
class Person {
    public $firstName;
    public $lastName;

    // Method to return the full name
    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }
}

// Creating a person object
$person = new Person();
$person->firstName = "Shruti";
$person->lastName = "Khan";

// Display full name
echo "Full Name: " . $person->getFullName();
?>

