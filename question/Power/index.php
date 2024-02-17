<?php
//Write a program that takes an integer as input and returns true if the input is a power of two.
//Examples:
//8=> returns true
//6=>

function is_Power($n)
{
    if (($n & ($n - 1)) == 0) {
        return "$n is a power of 2";
    } else {
        return "$n is not a power of 2";
    }
}
echo is_Power(8) . "\n";
echo is_Power(6) . "\n";

