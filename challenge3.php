<?php
$friends = [
 "Doha" => 70,
 "Hiba" => 150,
 "Meryem" => 200,
 "Ikhlass" => 30,
 "Salma" => 90
];
$total = 0;
foreach($friends as $name => $money) {
    $total = $total + $money;
    if($money > 100 ) {
       echo $name . " " . "owes more than 100DH:" ." " . $money . "DH" . "<br>";
}
}


?>