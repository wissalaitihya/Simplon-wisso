<?php

 function multiplyNumbers($a, $b){
 if(is_int($a) && is_int($b)){
    $result = $a * $b;
    echo $result;
 } else {
    echo "Error: Invalid Input" ;
 }
 }

 multiplyNumbers(4,3) . "<br";
 multiplyNumbers(4,"apple");
?>