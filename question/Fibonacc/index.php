<?php
// Write a program to generate the Fibonacci sequence up to 100.
function generateFibonacci($limit) {
    $fibonacciSequence = array();
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;
    for ($i = 2; $i < $limit; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        if ($fibonacciSequence[$i] > $limit) {
            break;
        }
    }

    return $fibonacciSequence;
}

$fibonacciNumbers = generateFibonacci(100);
echo "Fibonacci sequence up to 100: ";
foreach ($fibonacciNumbers as $number) {
    echo $number . " ";
}
?>
