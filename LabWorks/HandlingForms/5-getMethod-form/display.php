
<?php
/* 
5. Use the GET method to collect a user's name and age from a form. 
Then display: "Hello [name], you are [age] years old."
*/

/*

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"]) && isset($_GET["age"])) {
    $name = htmlspecialchars($_GET["name"]);
    $age = htmlspecialchars($_GET["age"]);

    echo "Hello " . $name . ", you are " . $age . " years old.";
}
*/

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    $age = $_GET["age"];
    echo "Hello $name, you are $age years old.";
}
?>