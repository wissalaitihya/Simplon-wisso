<?php 


function calculateArea($height,$width){
    $result = $width/$height;
    return $result;
}
$totalArea = calculateArea(5,10);
echo "The total area is " , $totalArea ," " ,"square units.";


?>