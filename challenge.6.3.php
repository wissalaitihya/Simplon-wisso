<?php
 
function isAdult($age){
 if ($age >= 18){
    return true;
 } else {
    return false;
 }
}
$result = isAdult(50);
if($result){
    echo "Access Granted";
}else {
    echo "Access Denied";
}

?>