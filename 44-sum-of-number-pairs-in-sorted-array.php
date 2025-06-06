<?php
// Question 44: Sum of Number Pairs in Sorted Array
// Write a PHP program to print out the pairs of numbers in a sorted array of positive integers
// whose sum equals a given number.

// Sample sorted array and target sum
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$targetSum = 10;

// Initialize two pointers
$left = 0;
$right = count($array) - 1;

echo "Pairs in the array whose sum equals $targetSum:\n";

// Loop until pointers cross
while ($left < $right) {
    $sum = $array[$left] + $array[$right];
    if ($sum == $targetSum) {
        echo "(" . $array[$left] . ", " . $array[$right] . ")\n";
        $left++;
        $right--;
    } elseif ($sum < $targetSum) {
        $left++;
    } else {
        $right--;
    }
}

/*
Sample Output:
Pairs in the array whose sum equals 10:
(1, 9)
(2, 8)
(3, 7)
(4, 6)

Explanation:
----------------------
🔹 The array is sorted, so we can use the two-pointer technique.
🔹 We start with one pointer at the beginning (left) and one at the end (right) of the array.
🔹 Calculate the sum of values at left and right pointers.
🔹 If sum equals the target, print the pair and move both pointers inward.
🔹 If sum is less than the target, move left pointer rightward to increase sum.
🔹 If sum is greater, move right pointer leftward to decrease sum.
🔹 This approach is efficient with O(n) time complexity and no extra space needed.

Logic:
----------------------
🔸 Two-pointer technique exploits sorted property for efficient pair sum search.
🔸 Avoids nested loops (O(n²)) and instead uses a single linear pass.
🔸 Good for large datasets where performance matters.

Flowchart:
----------------------
Start
  |
  v
Initialize left = 0, right = array_length-1
  |
  v
Is left < right?
  |           \
Yes           No --> End
  |
  v
Calculate sum = array[left] + array[right]
  |
  v
Is sum == targetSum?
  |          \
Yes          No
  |           |
Print pair    Is sum < targetSum?
Increment left|          \
Decrement right|          No --> Decrement right
               Yes
               |
           Increment left
  |
  v
Loop back to check left < right
*/
?>
