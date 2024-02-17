<?php
//Write a program that prints the numbers from 1 to 100. For multiples of 3, print "Fizz"; for multiples of 5, print "Buzz"; and for numbers that are multiples of both 3 and 5, print
//"FizzBuzz"
//using php

function fizzBuzz($number) {
    if ($number % 3 == 0 && $number % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($number % 3 == 0) {
        echo "Fizz\n";
    } elseif ($number % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $number . "\n";
    }
}

for ($number = 1; $number <= 100; $number++) {
    fizzBuzz($number);
}

?>


