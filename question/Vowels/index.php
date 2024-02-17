<?php
//Write a program that counts the number of vowels in a sentence.
function countVowels($sentence) {
    $vowels = array('a', 'e', 'i', 'o', 'u');

    $count = 0;
    $sentence = strtolower($sentence);

    for ($i = 0; $i < strlen($sentence); $i++) {
        if (in_array($sentence[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

// Test
$sentence = "Hello World";
echo "Number of vowels in \"$sentence\": " . countVowels($sentence);
?>
