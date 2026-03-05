<?php
$age=12;

if($age=12){
    $price = 20;
}else if ($age>=12 and $age<=18){
    $price=40;
}else if ($age>60){
    $price=30;
}else{
    $price =60;
}
echo"tcket price :" . $price . "DH\N";

if ($price == 20){
    echo"Special: Children's Menu included!";
}
?>