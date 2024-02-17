<?php
//Write a program that accepts a string as input, capitalizes the first letter of each word in the string, and then returns the result string.

function capital($str) {
    return strtoupper($str);
}

$input1 = "hello world";
$input2 = "i love programming";

echo "Input \"$input1\" returns: " . capital($input1) . "\n";
echo "Input \"$input2\" returns: " . capital($input2) . "\n";
?>

