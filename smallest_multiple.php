<?php
/*
Problem 1:
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

*/

function gcd($a, $b) {
    while ($b) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// LCM(a, b) = |a * b| / GCD(a, b)
function lcm($a, $b) {
    if ($a == 0 || $b == 0) {
        return 0;
    }
    return abs($a * $b) / gcd($a, $b);
}

$result = 1;

for ($i = 1; $i <= 20; $i++) {
    $result = lcm($result, $i);
}

echo "The smallest positive number that is evenly divisible by all of the numbers from 1 to 20 is: " . $result;
?>
