<?php
$row = 1;
while($row <= 5){
    $star_counter =0;
    while($star_counter++ < $row)
        echo "*" ;
    echo "<br>";
    $row++;
}
?>