<?php
// Question 43: Multiply Corresponding List Elements
// Write a PHP program that multiplies corresponding elements of two given lists (arrays).

// Sample input arrays
$list1 = [2, 4, 6, 8];
$list2 = [1, 3, 5, 7];

// Method 1: Using loop
$resultLoop = [];
for ($i = 0; $i < min(count($list1), count($list2)); $i++) {
    $resultLoop[] = $list1[$i] * $list2[$i];
}

// Method 2: Using array_map with anonymous function
$resultMap = array_map(function($a, $b) {
    return $a * $b;
}, $list1, $list2);

// Output results
echo "List 1: [" . implode(", ", $list1) . "]\n";
echo "List 2: [" . implode(", ", $list2) . "]\n";
echo "Result using loop: [" . implode(", ", $resultLoop) . "]\n";
echo "Result using array_map: [" . implode(", ", $resultMap) . "]\n";

/*
Sample Output:
List 1: [2, 4, 6, 8]
List 2: [1, 3, 5, 7]
Result using loop: [2, 12, 30, 56]
Result using array_map: [2, 12, 30, 56]

Explanation:
----------------------
🔹 Given two arrays of numbers, we want to multiply their elements pairwise.
🔹 We can do this using a simple for loop by iterating over the minimum length of the two arrays.
🔹 For each index, multiply the element from the first array with the corresponding element from the second array.
🔹 Alternatively, PHP’s built-in function array_map() can apply a callback to pairs of elements from two arrays, producing the same result more succinctly.
🔹 Both methods handle arrays of equal length; if lengths differ, only pairs up to the shortest array length are processed.

Logic:
----------------------
🔸 The core logic is element-wise multiplication, often called the Hadamard product in mathematics.
🔸 Ensuring iteration stops at the smallest array length prevents out-of-bound errors.
🔸 array_map automatically stops when the shortest array ends, simplifying the code.
*/
?>
