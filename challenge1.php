<?php

$cost = 5;
$orders = 3;
$student = false;

$total = $orders * $cost;

// tea discount
if ($orders > 5) {
    $total -= $orders * 1;
}

// student discount
if ($student) {
    $total *= 0.8;
}

echo "Your total bill: " . $total . " DH\n";

?>

