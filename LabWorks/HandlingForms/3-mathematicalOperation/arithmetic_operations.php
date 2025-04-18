<?php
/*
3. Create a form that accepts two numbers and a dropdown (Add, Subtract, Multiply, Divide). 
Use PHP to perform the selected operation and display the result.  
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['firstNumber'];
    $num2 = $_POST['secondNumber'];
    $operation = $_POST['operation'];
    $result = "";

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            $op = "+";
            break;
        case "subtract":
            $result = $num1 - $num2;
            $op = "-";
            break;
        case "multiply":
            $result = $num1 * $num2;
            $op = "*";
            break;
        case "divide":
            if ($num2 == 0) {
                $result = "Error: Division by zero is not allowed.";
                $op = "/";
            } else {
                $result = $num1 / $num2;
                $op = "/";
            }
            break;
        default:
            $result = "Invalid operation selected.";
            $op = "?";
    }

    echo "<h3>Result:</h3>";
    if (is_numeric($result)) {
        echo "$num1 $op $num2 = $result";
    } else {
        echo $result;
    }
}
?>