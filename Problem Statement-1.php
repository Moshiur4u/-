<?php

$strings = ["hello", "world", "php", "programming", "example"];

foreach ($strings as $string) {

$vowelCount = preg_match_all('/[aeiou]/i', $string);

// Reverse the string
$reversedString = strrev($string);

// Print the original string, reversed string, and vowel count
echo "Original String: $string\n";
echo "Reversed String: $reversedString\n";
echo "Vowel Count: $vowelCount\n\n";
}
?>