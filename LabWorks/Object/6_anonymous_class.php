<?php

/* 6. Create an anonymous class that has a method message() which prints "Hello from Anonymous Class!".
*/

$object = new class {
    public function message()
    {
        return "Hello from Anonymous Class!";
    }
};
echo $object->message();
