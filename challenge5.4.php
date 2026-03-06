<?php
$count=1;
$total=0;

while($count <= 50){
    if ($count % 2==0){
        $total++;
    }
    $count++;
}
echo "total even number: " .$total ;
?>