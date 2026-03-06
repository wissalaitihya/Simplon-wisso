<?php
$friends = [
 "Doha" => 70, //name => money 
 "Hiba" => 150,
 "Meryem" => 200,
 "Ikhlass" => 30,
 "Salma" => 90
];
$total = 0; //let the count begin from 0
foreach($friends as $name => $money) { //take each $name=>$money from the array 
    $total =$total + $money; 
    if($money > 100 ) {
       echo $name . " " . "owes more than 100DH:" ."   " . $money . "DH" . "<br>";
    }
}
 echo "the total is:" . " " . $total . "DH" . "<br>";
?>