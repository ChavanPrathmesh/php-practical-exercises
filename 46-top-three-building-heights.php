<?php
// Question 46: Top Three Building Heights
// Write a PHP program to find heights of the top three buildings in descending order from eight given buildings.

// ✅ Sample input: heights of 8 buildings
$buildings = [12, 45, 10, 25, 24, 5, 30, 18];

// ✅ Sort the array in descending order
rsort($buildings);

// ✅ Get the top three heights
$topThree = array_slice($buildings, 0, 3);

// ✅ Output the result
echo "Heights of the top three buildings:\n";
foreach ($topThree as $height) {
    echo $height . "\n";
}

/*
Sample Output:
Heights of the top three buildings:
45
30
25

Explanation:
----------------------
🔹 We use `rsort()` to sort the array in descending order.
🔹 Then we use `array_slice()` to take the first 3 elements of the sorted array.
🔹 This method ensures optimal performance and readability.

Alternative (without using inbuilt sorting functions):
----------------------
You can also implement manual sorting (like selection sort) if needed for interviews.

Manual sort logic (descending):
----------------------
for i = 0 to length-1
    for j = i+1 to length
        if array[i] < array[j], then swap
Then pick first 3 items of the array.
*/
?>
