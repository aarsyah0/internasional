<?php
$operator = "+";
$num1 = 10;
$num2 = 5;

if ($operator == "+") {
    $result = $num1 + $num2;
} elseif ($operator == "-") {
    $result = $num1 - $num2;
} elseif ($operator == "*") {
    $result = $num1 * $num2;
} elseif ($operator == "/") {
    $result = $num1 / $num2;
} else {
    echo "Operator tidak valid.";
}

echo "Hasil: " . $result;
