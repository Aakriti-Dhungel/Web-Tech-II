<?php
/* 5. Write a PHP script to create a multidimensional array 
storing employee details (name, position, salary) for three employees. 
Display the name and salary of each employee.*/
$employees =[
    ["name" =>"Tom","position" =>"Senior Software Engineer", "salary"=>4000 ],
    ["name" =>"Jerry","position" =>"Senior Software Engineer","salary"=>4000 ],
    ["name" =>"Tommy","position" =>"Senior Software Engineer","salary"=>4000 ],
];
foreach ($employees as $employee) {

    echo "Name: " . $employee["name"] . ", Salary: $" . $employee["salary"] . "<br>";
    
    }
?>