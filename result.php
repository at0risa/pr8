<?php
$c = isset($_POST['c']) ? (int)$_POST['c'] : 0;
$d = isset($_POST['d']) ? (int)$_POST['d'] : 0;

$sum = $c + $d;
$product = $c * $d;
$diff = $c - $d;
$quotient = $c/$d;

echo "c = $c, d = $d <br>";
echo "Сума: $sum <br>";
echo "Добуток: $product <br>";
echo "Різниця: $diff <br>";
echo "Частка: $quotient <br>";
?>