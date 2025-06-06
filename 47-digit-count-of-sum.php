<?php
// Question 47: Digit Count of Sum
// Write a PHP program to compute the digit number of sum of two given integers.

// ✅ Sample input (you can change x and y for testing)
$x = 500000;
$y = 400000;

// ✅ Calculate the sum
$sum = $x + $y;

// ✅ Compute the number of digits in the sum
$digitCount = strlen((string)$sum);

// ✅ Output
echo "Digit number of sum of two given integers: $digitCount\n";

/*
Sample Output:
Digit number of sum of two given integers: 6

Explanation:
----------------------
🔹 We first compute the sum of two integers.
🔹 Then we convert the sum to a string and use `strlen()` to count the number of characters, i.e., digits.

Example:
500000 + 400000 = 900000 → 6 digits
25 + 34 = 59 → 2 digits
100 + 900 = 1000 → 4 digits

Alternate way (without using strlen):
--------------------------------------
We can also calculate digits using a loop:

$sum = $x + $y;
$count = 0;
$temp = $sum;
do {
    $count++;
    $temp = (int)($temp / 10);
} while ($temp > 0);
echo "Digit number of sum of two given integers: $count\n";

Flowchart:
----------------------
Start
  |
  v
Input x and y
  |
  v
sum = x + y
  |
  v
Convert sum to string → get length → print length
  |
  v
End
*/
?>
