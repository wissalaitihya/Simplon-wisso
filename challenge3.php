<?php
$friends = [
 "Doha" => 70, //name => money 
 "Hiba" => 150,
 "Meryem" => 200,
 "Ikhlass" => 30,
 "Salma" => 90
];
$total = 0; //let the count begin from 0
foreach($friends as $key => $value) { //take each $name=>$money from the array 
    $total =$total + $value; 
    if($value > 100 ) {
       echo $key . " " . "owes more than 100DH:" ."   " . $value . "DH" . "<br>";
    }
}
 echo "the total is:" . " " . $total . "DH" . "<br>";
?>