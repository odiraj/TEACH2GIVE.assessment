<?php
//Write a program that takes an integer as input and returns an integer with reversed digit ordering.
function reverseInteger($num) {
    $isNegative = $num < 0;

    $numStr = (string) abs($num);

    $reversedStr = strrev($numStr);

    $reversedNum = (int) $reversedStr;
    if ($isNegative) {
        $reversedNum *= -1;
    }

    return $reversedNum;
}

// Test cases
$input1 = 500;
$input2 = -56;


echo "For input $input1, the program returns: " . reverseInteger($input1) . "\n";
echo "For input $input2, the program returns: " . reverseInteger($input2) ;
?>
