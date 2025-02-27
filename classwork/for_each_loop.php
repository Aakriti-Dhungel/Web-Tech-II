<?php
#foreach($array as $value)
$fruits =["Apple","Mango"];
foreach($fruits as $fruit){
    echo " $fruit <br>";
}
echo"<br>";

#foreach($array as $key => $value)
$students=[
"Ram"=>90,
"Sita"=>100,
"Hari"=>70,
];
foreach($students as $name=>$score){
    
    echo"$name scored $score <br>";
}
?>