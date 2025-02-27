<?php 
$marks = 90;
if($marks>90 && $marks<100){
    echo 'You grade is A+';
}
elseif ($marks>80 && $marks<90) {
    echo 'You grade is A';
}
elseif ($marks>70 && $marks<80) {
    echo 'You grade is B+';
}
elseif ($marks>60 && $marks<70) {
    echo 'You grade is B';
}
elseif ($marks>50 && $marks<60) {
    echo 'You grade is C+';
}

elseif ($marks>40 && $marks<50) {
    echo 'You grade is C';
}
else{
    echo 'You are fail';
}
?>