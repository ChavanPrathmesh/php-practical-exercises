<?php
// Question 48: Right Triangle Check
// Write a PHP program to check whether three given lengths form a right triangle.
// Output "YES" if it is a right triangle, otherwise "NO".

// ✅ Sample input (you can change the values for testing)
$a = 3;
$b = 4;
$c = 5;

// ✅ Step 1: Put the sides into an array and sort
$sides = [$a, $b, $c];
sort($sides); // ensures the largest number is last (hypotenuse)

// ✅ Step 2: Apply Pythagoras Theorem
if (pow($sides[0], 2) + pow($sides[1], 2) == pow($sides[2], 2)) {
    echo "YES\n";
} else {
    echo "NO\n";
}

/*
Sample Output:
YES

Explanation:
----------------------
🔹 For a triangle to be a right triangle, the square of the longest side (hypotenuse)
    should be equal to the sum of the squares of the other two sides.

🔹 For example:
   a = 3, b = 4, c = 5
   3² + 4² = 9 + 16 = 25 = 5² → YES

🔹 We sort the sides to make sure we always treat the largest side as the hypotenuse.

Flowchart:
----------------------
Input a, b, c
  |
  v
Sort [a, b, c]
  |
  v
Check: side1² + side2² == side3²?
  |
  |-- YES --> Print "YES"
  |
  |-- NO  --> Print "NO"
*/
?>
