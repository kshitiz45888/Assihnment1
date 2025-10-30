<?php


echo "<h2>Part (a): Arithmetic Operators</h2>";


$num1 = 25;
$num2 = 10;

echo "Number 1 = $num1<br>";
echo "Number 2 = $num2<br><br>";

$sum = $num1 + $num2;
echo "Sum = $sum<br>";


$diff = $num1 - $num2;
echo "Difference = $diff<br>";


$prod = $num1 * $num2;
echo "Product = $prod<br>";


if ($num2 != 0) {
    $div = $num1 / $num2;
    echo "Division = $div<br>";
} else {
    echo "Division by zero is not allowed.<br>";
}

if ($num2 != 0) {
    $mod = $num1 % $num2;
    echo "Modulus = $mod<br>";
} else {
    echo "Modulus by zero is not allowed.<br>";
}


echo "<h2>Part (b): Assignment Operators</h2>";

$val = 20;
echo "Initial value: $val<br>";

$val += 5;
echo "After += 5 : $val<br>";

$val -= 3;
echo "After -= 3 : $val<br>";

$val *= 2;
echo "After *= 2 : $val<br>";

$val /= 4;
echo "After /= 4 : $val<br>";

$val %= 3;
echo "After %= 3 : $val<br>";


echo "<h2>Part (c): Logical Operators</h2>";

$number = 44;
echo "Number = $number<br>";

if ($number >= 1 && $number <= 100 && $number % 2 == 0) {
    echo "$number is between 1 and 100 AND even.<br>";
} else {
    echo "$number does not satisfy both conditions.<br>";
}

if ($number < 1 || $number > 100) {
    echo "$number is outside the range 1–100.<br>";
} else {
    echo "$number is inside the range 1–100.<br>";
}

if (!($number % 2)) {
    echo "$number is even (checked with ! operator).<br>";
} else {
    echo "$number is odd (checked with ! operator).<br>";
}

?>
