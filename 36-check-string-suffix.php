<?php
// Question 36: Write a PHP program to test if a given string occurs at the end of another given string.

$mainString = "HelloWorld";
$suffix = "World";

// ----------------------
// ✅ 1. Using built-in function: str_ends_with (PHP 8+)
// ----------------------
if (function_exists('str_ends_with')) {
    $result1 = str_ends_with($mainString, $suffix);
    echo "Using str_ends_with(): " . ($result1 ? "True" : "False") . "\n";
} else {
    echo "str_ends_with() not available in this PHP version.\n";
}

// ----------------------
// 🔁 2. Without using built-in str_ends_with
// ----------------------
$len = strlen($suffix);
$end = substr($mainString, -$len);

$result2 = $end === $suffix;

echo "Without using str_ends_with(): " . ($result2 ? "True" : "False") . "\n";

/*
Sample Output:
Using str_ends_with(): True
Without using str_ends_with(): True

Explanation:
- ✅ str_ends_with() is a PHP 8+ function to check if a string ends with another.
- 🔁 If unavailable, substr() is used to extract the end of the string and compare it manually.
*/
?>
