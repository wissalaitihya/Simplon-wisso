<?php 

function manualReverse($text){
$text="hello";
for($i=strlen($text) -1 ; $i >= 0  ;$i--){
  echo $text[$i];
}
}
manualReverse("wissal");
?>