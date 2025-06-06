<?php
// Question 45: Sum of Digits
// Write a PHP program to compute the sum of the digits of a number.

// Sample number
$number = 12345;
$sum = 0;
$temp = $number;

// Loop through each digit and add to sum
while ($temp > 0) {
    $digit = $temp % 10;  // Get last digit
    $sum += $digit;       // Add digit to sum
    $temp = (int)($temp / 10);  // Remove last digit
}

// Output
echo "Sum of digits of $number is: $sum\n";

/*
Sample Output:
Sum of digits of 12345 is: 15

Explanation:
----------------------
🔹 To find the sum of digits, we repeatedly extract the last digit using modulus (%) operator.
🔹 Add this digit to the sum.
🔹 Remove the last digit by dividing the number by 10 (integer division).
🔹 Continue until the number reduces to zero.
🔹 This approach works for any positive integer.

Logic:
----------------------
🔸 Use modulus (%) to get last digit.
🔸 Use integer division to remove last digit.
🔸 Accumulate sum of digits.

Flowchart:
----------------------
Start
  |
  v
Initialize sum = 0, temp = number
  |
  v
Is temp > 0?
  |           \
Yes           No --> Print sum and End
  |
  v
digit = temp % 10
sum = sum + digit
temp = temp / 10 (integer division)
  |
  v
Loop back to check temp > 0
*/
?>
